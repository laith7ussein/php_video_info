<?php
class YoutubeVideoInfo
{
    private $client;

    public function __construct()
    {
        $this->client = new GuzzleHttp\Client();
    }

    private function getRemoteFile($url)
    {
        try {
            $response = $this->client->request('GET', $url);
            return (string) $response->getBody();
        } catch (Exception $e) {
            return null;
        }
    }

    private function resolvePlayerResponse($watchHtml)
    {
        if (empty($watchHtml)) {
            return '';
        }

        preg_match('/ytInitialPlayerResponse = (.*)\}\}\};/', $watchHtml, $matches);
        return isset($matches[1]) ? $matches[1] . '}}}' : '';
    }

    private function resolveM3U8Link($watchHtml)
    {
        if (empty($watchHtml)) {
            return null;
        }

        preg_match('/hlsManifestUrl":"(.*\/file\/index\.m3u8)/', $watchHtml, $matches);
        return isset($matches[1]) ? $matches[1] : null;
    }

    private function buildDecoder($watchHtml)
    {
        if (empty($watchHtml)) {
            return null;
        }

        $jsFileUrlMatches = [];
        preg_match('/\/s\/player\/[A-Za-z0-9]+\/[A-Za-z0-9_.]+\/[A-Za-z0-9_]+\/base\.js/', $watchHtml, $jsFileUrlMatches);

        if (empty($jsFileUrlMatches)) {
            return null;
        }

        $jsFileContent = $this->getRemoteFile('https://www.youtube.com' . $jsFileUrlMatches[0]);

        $decodeFunctionMatches = [];
        preg_match('/function.*\.split\(\"\"\).*\.join\(\"\"\)}/', $jsFileContent, $decodeFunctionMatches);

        if (empty($decodeFunctionMatches)) {
            return null;
        }

        $decodeFunction = $decodeFunctionMatches[0];

        $varNameMatches = [];
        preg_match('/\.split\(\"\"\);([a-zA-Z0-9]+)\./', $decodeFunction, $varNameMatches);

        if (empty($varNameMatches)) {
            return null;
        }

        $varStartIndex = strpos($jsFileContent, 'var ' . $varNameMatches[1] . '={');
        if ($varStartIndex < 0) {
            return null;
        }
        $varEndIndex = strpos($jsFileContent, '}};', $varStartIndex);
        if ($varEndIndex < 0) {
            return null;
        }

        $varDeclares = substr($jsFileContent, $varStartIndex, $varEndIndex + 3);

        if (empty($varDeclares)) {
            return null;
        }

        return function ($signatureCipher) use ($varDeclares, $decodeFunction) {
            // $params = new URLSearchParams($signatureCipher);
            $params = [];
            parse_str($signatureCipher, $params);
            $signature = $params['s'] ?: null;
            $signatureParam = $params['sp'] ?: 'signature';
            $url = $params['url'] ?: null;

            $signature = eval('return (' . $decodeFunction . ')("' . $signature . '");');
            // $signatureParam = $params->get('sp') ?: 'signature';
            $signatureParam = $params['sp'] ?: 'signature';
            // $url = $params->get('url');
            $url = $params['url'];
            $decodedSignature = eval('return (' . $decodeFunction . ')("' . $signature . '");');

            return $url . '&' . $signatureParam . '=' . urlencode($decodedSignature);
        };
    }

    public function getInfo($params)
    {
        $url = $params['url'];
        $videoId = $this->getVideoId($url);

        if (!$videoId) return false;

        $ytApi = 'https://www.youtube.com/watch';
        try {
            $response = $this->getRemoteFile($ytApi . '?v=' . $videoId);

            if (!$response) {
                throw new Exception('Cannot get youtube video response');
            }

            $ytInitialPlayerResponse = $this->resolvePlayerResponse($response);
            $parsedResponse = json_decode($ytInitialPlayerResponse, true);
            $streamingData = isset($parsedResponse['streamingData']) ? $parsedResponse['streamingData'] : [];

            $formats = array_merge($streamingData['formats'] ?: [], $streamingData['adaptiveFormats'] ?: []);

            $isEncryptedVideo = false;
            foreach ($formats as $format) {
                if (isset($format['signatureCipher'])) {
                    $isEncryptedVideo = true;
                    break;
                }
            }

            if ($isEncryptedVideo) {
                $decoder = $this->buildDecoder($response);

                if ($decoder) {
                    $formats = array_map(function ($it) use ($decoder) {
                        if (isset($it['url']) || !isset($it['signatureCipher'])) {
                            return $it;
                        }

                        $it['url'] = $decoder($it['signatureCipher']);
                        unset($it['signatureCipher']);
                        return $it;
                    }, $formats);
                }
            }

            $result = [
                'videoDetails' => $parsedResponse['videoDetails'] ?: [],
                'formats' => array_filter($formats, function ($format) {
                    return isset($format['url']);
                })
            ];

            if ($result['videoDetails']['isLiveContent']) {
                try {
                    $m3u8Link = $this->resolveM3U8Link($response);
                    if ($m3u8Link) {
                        $m3u8FileContent = $this->getRemoteFile($m3u8Link);

                        // m3u8Parser.read(m3u8FileContent);

                        $result['liveData'] = [
                            'manifestUrl' => $m3u8Link,
                            'data' => $m3u8FileContent
                        ];

                        // m3u8Parser.reset();
                    }
                } catch (Exception $e) {
                    if ($params['throwOnError']) {
                        throw new Exception($e->getMessage());
                    }
                }
            }

            return $result;
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
            return false;
        }
    }

    private function getVideoId($url)
    {
        $videoId = null;

        if (preg_match('/youtube\.com\/watch\?v=([a-zA-Z0-9_-]+)/', $url, $matches)) {
            $videoId = $matches[1];
        } elseif (preg_match('/youtu\.be\/([a-zA-Z0-9_-]+)/', $url, $matches)) {
            $videoId = $matches[1];
        } elseif (preg_match('/youtube\.com\/shorts\/([a-zA-Z0-9_-]+)/', $url, $matches)) {
            $videoId = $matches[1];
        }

        return $videoId;
    }
}
