<?php
require_once "./YoutubeVideoInfo.php";

$info = new YoutubeVideoInfo();
$yt_id = "<youtube_vide_id";
$videoInfo = $info->getInfo(['url' => 'https://www.youtube.com/watch?v=' . $yt_id]);

error_log(print_r($videoInfo, true));
// Array
// (
//     [videoDetails] => Array
//         (
//             [videoId] => M6atBUF5L60
//             [title] => هل ستمنع حلاقة اللحية في كربلاء؟  #shortsvideo
//             [lengthSeconds] => 42
//             [keywords] => Array
//                 (
//                     [0] => شبكة_964
//                     [1] => شبكة964
//                     [2] => شبكة 964
//                     [3] => 964 عربي
//                     [4] => 964عربي
//                     [5] => اخبار
//                     [6] => تقارير
//                     [7] => تقارير منوعة
//                     [8] => منوعات
//                     [9] => اخبار منوعة
//                     [10] => 964
//                     [11] => منصة 964
//                     [12] => +964
//                 )

//             [channelId] => UCLSVIBdXmrw-W9IgRm4z6lg
//             [isOwnerViewing] => 
//             [shortDescription] => لمتابعة صفحاتنا على جميع مواقع التواصل الإجتماعي:

// موقعــنا: https://964media.com/all/

// فيـــسبوك: https://www.facebook.com/964Arabic

// انستـــكرام: https://www.instagram.com/964arabic/

// تيك توك: https://www.tiktok.com/@964.arabic

// واتســـاب: https://whatsapp.com/channel/0029Va7yuHHJ3jv1km5B1h40
//             [isCrawlable] => 1
//             [thumbnail] => Array
//                 (
//                     [thumbnails] => Array
//                         (
//                             [0] => Array
//                                 (
//                                     [url] => https://i.ytimg.com/vi/M6atBUF5L60/hq2.jpg?sqp=-oaymwE8CKgBEF5IWvKriqkDLwgBFQAAAAAYACUAAMhCPQCAokN4AfABAfgBtgiAAoAPigIMCAAQARhyIEgoOjAP&rs=AOn4CLB59roP5FmpylIjWIkz6JNnLqzmhg
//                                     [width] => 168
//                                     [height] => 94
//                                 )

//                             [1] => Array
//                                 (
//                                     [url] => https://i.ytimg.com/vi/M6atBUF5L60/hq2.jpg?sqp=-oaymwE8CMQBEG5IWvKriqkDLwgBFQAAAAAYACUAAMhCPQCAokN4AfABAfgBtgiAAoAPigIMCAAQARhyIEgoOjAP&rs=AOn4CLD_gzjK5IH1LmS6RDp4IV6C3Hythw
//                                     [width] => 196
//                                     [height] => 110
//                                 )

//                             [2] => Array
//                                 (
//                                     [url] => https://i.ytimg.com/vi/M6atBUF5L60/hq2.jpg?sqp=-oaymwE9CPYBEIoBSFryq4qpAy8IARUAAAAAGAAlAADIQj0AgKJDeAHwAQH4AbYIgAKAD4oCDAgAEAEYciBIKDowDw==&rs=AOn4CLD6lVyV2DaRLm2_-hxeVF4s-Z-U3Q
//                                     [width] => 246
//                                     [height] => 138
//                                 )

//                             [3] => Array
//                                 (
//                                     [url] => https://i.ytimg.com/vi/M6atBUF5L60/hq2.jpg?sqp=-oaymwE9CNACELwBSFryq4qpAy8IARUAAAAAGAAlAADIQj0AgKJDeAHwAQH4AbYIgAKAD4oCDAgAEAEYciBIKDowDw==&rs=AOn4CLAoODQN83DVAocRZp-H_CMqH7HmVA
//                                     [width] => 336
//                                     [height] => 188
//                                 )

//                             [4] => Array
//                                 (
//                                     [url] => https://i.ytimg.com/vi/M6atBUF5L60/maxres2.jpg?sqp=-oaymwEoCIAKENAF8quKqQMcGADwAQH4AbYIgAKAD4oCDAgAEAEYciBIKDowDw==&rs=AOn4CLAxaG2j7SwWfX4OoI6GW-6mp7-c5Q
//                                     [width] => 1920
//                                     [height] => 1080
//                                 )

//                         )

//                 )

//             [allowRatings] => 1
//             [viewCount] => 4270
//             [author] => 964 Arabic
//             [isPrivate] => 
//             [isUnpluggedCorpus] => 
//             [isLiveContent] => 
//         )

//     [formats] => Array
//         (
//             [0] => Array
//                 (
//                     [itag] => 18
//                     [url] => https://rr3---sn-ixh7yn7e.googlevideo.com/videoplayback?expire=1712139931&ei=O9oMZveHMc6c0u8P4J-oyAo&ip=65.108.209.142&id=o-ANfPiijv-hkx-waVc0O3eQ146smmTRL7_V17Jg1LUhdc&itag=18&source=youtube&requiressl=yes&xpc=EgVo2aDSNQ%3D%3D&mh=3Y&mm=31%2C29&mn=sn-ixh7yn7e%2Csn-ixh7rn76&ms=au%2Crdu&mv=m&mvi=3&pl=24&initcwndbps=885000&spc=UWF9f-UGudNLgzvTqUJzOrTn49ade2m6QBMknw8k3sqR278&vprv=1&svpuc=1&mime=video%2Fmp4&ns=bmQSg8cEj6slEOpYktVWHtEQ&gir=yes&clen=3140358&ratebypass=yes&dur=42.325&lmt=1704047244312927&mt=1712117583&fvip=2&fexp=51141542&c=WEB&sefc=1&txp=6300224&n=_eJZjGSnrLoE8zO&sparams=expire%2Cei%2Cip%2Cid%2Citag%2Csource%2Crequiressl%2Cxpc%2Cspc%2Cvprv%2Csvpuc%2Cmime%2Cns%2Cgir%2Cclen%2Cratebypass%2Cdur%2Clmt&sig=AJfQdSswRQIhAMOiTv5_UmIdCZtxmkiEPhxB_Ga03YDyKAkTVm_KMAsNAiA8i2RLVcoTxf2Xkd5vdqk4RrKAaMIKf1g0cK_0Kpwssw%3D%3D&lsparams=mh%2Cmm%2Cmn%2Cms%2Cmv%2Cmvi%2Cpl%2Cinitcwndbps&lsig=ALClDIEwRQIhAOikbOgUPF-QnCr7VvvpvuJLFudmf17vi8tVJq8vt-zHAiB8epciOR9735uC4N4e0GbvjPQECLT13QujTyIzSjCkGw%3D%3D
//                     [mimeType] => video/mp4; codecs="avc1.42001E, mp4a.40.2"
//                     [bitrate] => 594202
//                     [width] => 360
//                     [height] => 640
//                     [lastModified] => 1704047244312927
//                     [contentLength] => 3140358
//                     [quality] => medium
//                     [fps] => 25
//                     [qualityLabel] => 360p
//                     [projectionType] => RECTANGULAR
//                     [averageBitrate] => 593570
//                     [audioQuality] => AUDIO_QUALITY_LOW
//                     [approxDurationMs] => 42325
//                     [audioSampleRate] => 48000
//                     [audioChannels] => 2
//                 )

//             [1] => Array
//                 (
//                     [itag] => 22
//                     [url] => https://rr3---sn-ixh7yn7e.googlevideo.com/videoplayback?expire=1712139931&ei=O9oMZveHMc6c0u8P4J-oyAo&ip=65.108.209.142&id=o-ANfPiijv-hkx-waVc0O3eQ146smmTRL7_V17Jg1LUhdc&itag=22&source=youtube&requiressl=yes&xpc=EgVo2aDSNQ%3D%3D&mh=3Y&mm=31%2C29&mn=sn-ixh7yn7e%2Csn-ixh7rn76&ms=au%2Crdu&mv=m&mvi=3&pl=24&initcwndbps=885000&spc=UWF9f-UGudNLgzvTqUJzOrTn49ade2m6QBMknw8k3sqR278&vprv=1&svpuc=1&mime=video%2Fmp4&ns=bmQSg8cEj6slEOpYktVWHtEQ&cnr=14&ratebypass=yes&dur=42.329&lmt=1704047245390666&mt=1712117583&fvip=2&fexp=51141542&c=WEB&sefc=1&txp=6308224&n=_eJZjGSnrLoE8zO&sparams=expire%2Cei%2Cip%2Cid%2Citag%2Csource%2Crequiressl%2Cxpc%2Cspc%2Cvprv%2Csvpuc%2Cmime%2Cns%2Ccnr%2Cratebypass%2Cdur%2Clmt&sig=AJfQdSswRgIhAJC6LsM-8pI6eNUh_OqKLRZt8NH2SJVAtd3dDqDulqMXAiEA_VI8-IwpZuQQAFHFEKvYKMGnW1_I57i2CHUt0dAq6fE%3D&lsparams=mh%2Cmm%2Cmn%2Cms%2Cmv%2Cmvi%2Cpl%2Cinitcwndbps&lsig=ALClDIEwRQIhAOikbOgUPF-QnCr7VvvpvuJLFudmf17vi8tVJq8vt-zHAiB8epciOR9735uC4N4e0GbvjPQECLT13QujTyIzSjCkGw%3D%3D
//                     [mimeType] => video/mp4; codecs="avc1.64001F, mp4a.40.2"
//                     [bitrate] => 1293426
//                     [width] => 720
//                     [height] => 1280
//                     [lastModified] => 1704047245390666
//                     [quality] => hd720
//                     [fps] => 25
//                     [qualityLabel] => 720p
//                     [projectionType] => RECTANGULAR
//                     [audioQuality] => AUDIO_QUALITY_MEDIUM
//                     [approxDurationMs] => 42329
//                     [audioSampleRate] => 44100
//                     [audioChannels] => 2
//                 )

//             [2] => Array
//                 (
//                     [itag] => 137
//                     [url] => https://rr3---sn-ixh7yn7e.googlevideo.com/videoplayback?expire=1712139931&ei=O9oMZveHMc6c0u8P4J-oyAo&ip=65.108.209.142&id=o-ANfPiijv-hkx-waVc0O3eQ146smmTRL7_V17Jg1LUhdc&itag=137&aitags=133%2C134%2C135%2C136%2C137%2C160%2C242%2C243%2C244%2C247%2C248%2C278&source=youtube&requiressl=yes&xpc=EgVo2aDSNQ%3D%3D&mh=3Y&mm=31%2C29&mn=sn-ixh7yn7e%2Csn-ixh7rn76&ms=au%2Crdu&mv=m&mvi=3&pl=24&initcwndbps=885000&spc=UWF9f-UGudNLgzvTqUJzOrTn49ade2m6QBMknw8k3sqR278&vprv=1&svpuc=1&mime=video%2Fmp4&ns=p1ZOU6voa4gCHDi-JgVVvEMQ&gir=yes&clen=11147395&dur=42.280&lmt=1704047239367218&mt=1712117583&fvip=2&keepalive=yes&fexp=51141542&c=WEB&sefc=1&txp=630A224&n=Dl4bt2SxlvXK8tF&sparams=expire%2Cei%2Cip%2Cid%2Caitags%2Csource%2Crequiressl%2Cxpc%2Cspc%2Cvprv%2Csvpuc%2Cmime%2Cns%2Cgir%2Cclen%2Cdur%2Clmt&sig=AJfQdSswRAIgGJ9kIEO-rwvKJgfYP14U_v3oKla0GZdcV_d_odfdnGECIGp_bcXFl_7c8oZBpQdtpvhqymjG8kpm2svi8OSVTNiz&lsparams=mh%2Cmm%2Cmn%2Cms%2Cmv%2Cmvi%2Cpl%2Cinitcwndbps&lsig=ALClDIEwRQIhAOikbOgUPF-QnCr7VvvpvuJLFudmf17vi8tVJq8vt-zHAiB8epciOR9735uC4N4e0GbvjPQECLT13QujTyIzSjCkGw%3D%3D
//                     [mimeType] => video/mp4; codecs="avc1.640028"
//                     [bitrate] => 2917919
//                     [width] => 1080
//                     [height] => 1920
//                     [initRange] => Array
//                         (
//                             [start] => 0
//                             [end] => 741
//                         )

//                     [indexRange] => Array
//                         (
//                             [start] => 742
//                             [end] => 881
//                         )

//                     [lastModified] => 1704047239367218
//                     [contentLength] => 11147395
//                     [quality] => hd1080
//                     [fps] => 25
//                     [qualityLabel] => 1080p
//                     [projectionType] => RECTANGULAR
//                     [averageBitrate] => 2109251
//                     [approxDurationMs] => 42280
//                 )

//             [3] => Array
//                 (
//                     [itag] => 248
//                     [url] => https://rr3---sn-ixh7yn7e.googlevideo.com/videoplayback?expire=1712139931&ei=O9oMZveHMc6c0u8P4J-oyAo&ip=65.108.209.142&id=o-ANfPiijv-hkx-waVc0O3eQ146smmTRL7_V17Jg1LUhdc&itag=248&aitags=133%2C134%2C135%2C136%2C137%2C160%2C242%2C243%2C244%2C247%2C248%2C278&source=youtube&requiressl=yes&xpc=EgVo2aDSNQ%3D%3D&mh=3Y&mm=31%2C29&mn=sn-ixh7yn7e%2Csn-ixh7rn76&ms=au%2Crdu&mv=m&mvi=3&pl=24&initcwndbps=885000&spc=UWF9f-UGudNLgzvTqUJzOrTn49ade2m6QBMknw8k3sqR278&vprv=1&svpuc=1&mime=video%2Fwebm&ns=p1ZOU6voa4gCHDi-JgVVvEMQ&gir=yes&clen=6671549&dur=42.280&lmt=1704047239671249&mt=1712117583&fvip=2&keepalive=yes&fexp=51141542&c=WEB&sefc=1&txp=630A224&n=Dl4bt2SxlvXK8tF&sparams=expire%2Cei%2Cip%2Cid%2Caitags%2Csource%2Crequiressl%2Cxpc%2Cspc%2Cvprv%2Csvpuc%2Cmime%2Cns%2Cgir%2Cclen%2Cdur%2Clmt&sig=AJfQdSswRQIgKl16A6McduqO9KbSrMZimoqMlLh-24NX5aSDS8Wri9oCIQC2fB_I56ARQZUVK9RsRd4G1tIFzETL0yftwzyGRviCSw%3D%3D&lsparams=mh%2Cmm%2Cmn%2Cms%2Cmv%2Cmvi%2Cpl%2Cinitcwndbps&lsig=ALClDIEwRQIhAOikbOgUPF-QnCr7VvvpvuJLFudmf17vi8tVJq8vt-zHAiB8epciOR9735uC4N4e0GbvjPQECLT13QujTyIzSjCkGw%3D%3D
//                     [mimeType] => video/webm; codecs="vp9"
//                     [bitrate] => 1940593
//                     [width] => 1080
//                     [height] => 1920
//                     [initRange] => Array
//                         (
//                             [start] => 0
//                             [end] => 219
//                         )

//                     [indexRange] => Array
//                         (
//                             [start] => 220
//                             [end] => 367
//                         )

//                     [lastModified] => 1704047239671249
//                     [contentLength] => 6671549
//                     [quality] => hd1080
//                     [fps] => 25
//                     [qualityLabel] => 1080p
//                     [projectionType] => RECTANGULAR
//                     [averageBitrate] => 1262355
//                     [colorInfo] => Array
//                         (
//                             [primaries] => COLOR_PRIMARIES_BT709
//                             [transferCharacteristics] => COLOR_TRANSFER_CHARACTERISTICS_BT709
//                             [matrixCoefficients] => COLOR_MATRIX_COEFFICIENTS_BT709
//                         )

//                     [approxDurationMs] => 42280
//                 )

//             [4] => Array
//                 (
//                     [itag] => 136
//                     [url] => https://rr3---sn-ixh7yn7e.googlevideo.com/videoplayback?expire=1712139931&ei=O9oMZveHMc6c0u8P4J-oyAo&ip=65.108.209.142&id=o-ANfPiijv-hkx-waVc0O3eQ146smmTRL7_V17Jg1LUhdc&itag=136&aitags=133%2C134%2C135%2C136%2C137%2C160%2C242%2C243%2C244%2C247%2C248%2C278&source=youtube&requiressl=yes&xpc=EgVo2aDSNQ%3D%3D&mh=3Y&mm=31%2C29&mn=sn-ixh7yn7e%2Csn-ixh7rn76&ms=au%2Crdu&mv=m&mvi=3&pl=24&initcwndbps=885000&spc=UWF9f-UGudNLgzvTqUJzOrTn49ade2m6QBMknw8k3sqR278&vprv=1&svpuc=1&mime=video%2Fmp4&ns=p1ZOU6voa4gCHDi-JgVVvEMQ&gir=yes&clen=6155658&dur=42.280&lmt=1704047239861436&mt=1712117583&fvip=2&keepalive=yes&fexp=51141542&c=WEB&sefc=1&txp=630A224&n=Dl4bt2SxlvXK8tF&sparams=expire%2Cei%2Cip%2Cid%2Caitags%2Csource%2Crequiressl%2Cxpc%2Cspc%2Cvprv%2Csvpuc%2Cmime%2Cns%2Cgir%2Cclen%2Cdur%2Clmt&sig=AJfQdSswRQIhAJcQpOJhlzNM3HxLxQgzh4jvsHAJs9sdtA5s23UFGUTrAiAgDroG9XBoNtQ-yyQexQ-Cvw0TH7oz61nY0K4Jb59Izg%3D%3D&lsparams=mh%2Cmm%2Cmn%2Cms%2Cmv%2Cmvi%2Cpl%2Cinitcwndbps&lsig=ALClDIEwRQIhAOikbOgUPF-QnCr7VvvpvuJLFudmf17vi8tVJq8vt-zHAiB8epciOR9735uC4N4e0GbvjPQECLT13QujTyIzSjCkGw%3D%3D
//                     [mimeType] => video/mp4; codecs="avc1.64001f"
//                     [bitrate] => 1529301
//                     [width] => 720
//                     [height] => 1280
//                     [initRange] => Array
//                         (
//                             [start] => 0
//                             [end] => 739
//                         )

//                     [indexRange] => Array
//                         (
//                             [start] => 740
//                             [end] => 879
//                         )

//                     [lastModified] => 1704047239861436
//                     [contentLength] => 6155658
//                     [quality] => hd720
//                     [fps] => 25
//                     [qualityLabel] => 720p
//                     [projectionType] => RECTANGULAR
//                     [averageBitrate] => 1164741
//                     [approxDurationMs] => 42280
//                 )

//             [5] => Array
//                 (
//                     [itag] => 247
//                     [url] => https://rr3---sn-ixh7yn7e.googlevideo.com/videoplayback?expire=1712139931&ei=O9oMZveHMc6c0u8P4J-oyAo&ip=65.108.209.142&id=o-ANfPiijv-hkx-waVc0O3eQ146smmTRL7_V17Jg1LUhdc&itag=247&aitags=133%2C134%2C135%2C136%2C137%2C160%2C242%2C243%2C244%2C247%2C248%2C278&source=youtube&requiressl=yes&xpc=EgVo2aDSNQ%3D%3D&mh=3Y&mm=31%2C29&mn=sn-ixh7yn7e%2Csn-ixh7rn76&ms=au%2Crdu&mv=m&mvi=3&pl=24&initcwndbps=885000&spc=UWF9f-UGudNLgzvTqUJzOrTn49ade2m6QBMknw8k3sqR278&vprv=1&svpuc=1&mime=video%2Fwebm&ns=p1ZOU6voa4gCHDi-JgVVvEMQ&gir=yes&clen=3960266&dur=42.280&lmt=1704047240030521&mt=1712117583&fvip=2&keepalive=yes&fexp=51141542&c=WEB&sefc=1&txp=630A224&n=Dl4bt2SxlvXK8tF&sparams=expire%2Cei%2Cip%2Cid%2Caitags%2Csource%2Crequiressl%2Cxpc%2Cspc%2Cvprv%2Csvpuc%2Cmime%2Cns%2Cgir%2Cclen%2Cdur%2Clmt&sig=AJfQdSswRQIgc8vLnQF1S4KTlZX5Ijlza-iRdr0mRdGnArEVja7Lg3wCIQCdiXI5SycyzbTgUYF1rS9FVzo-nMwtp48RD3eYg5yiRg%3D%3D&lsparams=mh%2Cmm%2Cmn%2Cms%2Cmv%2Cmvi%2Cpl%2Cinitcwndbps&lsig=ALClDIEwRQIhAOikbOgUPF-QnCr7VvvpvuJLFudmf17vi8tVJq8vt-zHAiB8epciOR9735uC4N4e0GbvjPQECLT13QujTyIzSjCkGw%3D%3D
//                     [mimeType] => video/webm; codecs="vp9"
//                     [bitrate] => 1032758
//                     [width] => 720
//                     [height] => 1280
//                     [initRange] => Array
//                         (
//                             [start] => 0
//                             [end] => 219
//                         )

//                     [indexRange] => Array
//                         (
//                             [start] => 220
//                             [end] => 367
//                         )

//                     [lastModified] => 1704047240030521
//                     [contentLength] => 3960266
//                     [quality] => hd720
//                     [fps] => 25
//                     [qualityLabel] => 720p
//                     [projectionType] => RECTANGULAR
//                     [averageBitrate] => 749340
//                     [colorInfo] => Array
//                         (
//                             [primaries] => COLOR_PRIMARIES_BT709
//                             [transferCharacteristics] => COLOR_TRANSFER_CHARACTERISTICS_BT709
//                             [matrixCoefficients] => COLOR_MATRIX_COEFFICIENTS_BT709
//                         )

//                     [approxDurationMs] => 42280
//                 )

//             [6] => Array
//                 (
//                     [itag] => 135
//                     [url] => https://rr3---sn-ixh7yn7e.googlevideo.com/videoplayback?expire=1712139931&ei=O9oMZveHMc6c0u8P4J-oyAo&ip=65.108.209.142&id=o-ANfPiijv-hkx-waVc0O3eQ146smmTRL7_V17Jg1LUhdc&itag=135&aitags=133%2C134%2C135%2C136%2C137%2C160%2C242%2C243%2C244%2C247%2C248%2C278&source=youtube&requiressl=yes&xpc=EgVo2aDSNQ%3D%3D&mh=3Y&mm=31%2C29&mn=sn-ixh7yn7e%2Csn-ixh7rn76&ms=au%2Crdu&mv=m&mvi=3&pl=24&initcwndbps=885000&spc=UWF9f-UGudNLgzvTqUJzOrTn49ade2m6QBMknw8k3sqR278&vprv=1&svpuc=1&mime=video%2Fmp4&ns=p1ZOU6voa4gCHDi-JgVVvEMQ&gir=yes&clen=3432741&dur=42.280&lmt=1704047239379298&mt=1712117583&fvip=2&keepalive=yes&fexp=51141542&c=WEB&sefc=1&txp=630A224&n=Dl4bt2SxlvXK8tF&sparams=expire%2Cei%2Cip%2Cid%2Caitags%2Csource%2Crequiressl%2Cxpc%2Cspc%2Cvprv%2Csvpuc%2Cmime%2Cns%2Cgir%2Cclen%2Cdur%2Clmt&sig=AJfQdSswRAIgSkCRbTrmof--DRrpVadLL2UIuP0pyVp29ykNc-cKvTgCIAi1faix2qRWFVs442zmDcNh-yVJtOLVMoIyT4CpL6Th&lsparams=mh%2Cmm%2Cmn%2Cms%2Cmv%2Cmvi%2Cpl%2Cinitcwndbps&lsig=ALClDIEwRQIhAOikbOgUPF-QnCr7VvvpvuJLFudmf17vi8tVJq8vt-zHAiB8epciOR9735uC4N4e0GbvjPQECLT13QujTyIzSjCkGw%3D%3D
//                     [mimeType] => video/mp4; codecs="avc1.4d401e"
//                     [bitrate] => 908582
//                     [width] => 480
//                     [height] => 854
//                     [initRange] => Array
//                         (
//                             [start] => 0
//                             [end] => 740
//                         )

//                     [indexRange] => Array
//                         (
//                             [start] => 741
//                             [end] => 880
//                         )

//                     [lastModified] => 1704047239379298
//                     [contentLength] => 3432741
//                     [quality] => large
//                     [fps] => 25
//                     [qualityLabel] => 480p
//                     [projectionType] => RECTANGULAR
//                     [averageBitrate] => 649525
//                     [approxDurationMs] => 42280
//                 )

//             [7] => Array
//                 (
//                     [itag] => 244
//                     [url] => https://rr3---sn-ixh7yn7e.googlevideo.com/videoplayback?expire=1712139931&ei=O9oMZveHMc6c0u8P4J-oyAo&ip=65.108.209.142&id=o-ANfPiijv-hkx-waVc0O3eQ146smmTRL7_V17Jg1LUhdc&itag=244&aitags=133%2C134%2C135%2C136%2C137%2C160%2C242%2C243%2C244%2C247%2C248%2C278&source=youtube&requiressl=yes&xpc=EgVo2aDSNQ%3D%3D&mh=3Y&mm=31%2C29&mn=sn-ixh7yn7e%2Csn-ixh7rn76&ms=au%2Crdu&mv=m&mvi=3&pl=24&initcwndbps=885000&spc=UWF9f-UGudNLgzvTqUJzOrTn49ade2m6QBMknw8k3sqR278&vprv=1&svpuc=1&mime=video%2Fwebm&ns=p1ZOU6voa4gCHDi-JgVVvEMQ&gir=yes&clen=2227769&dur=42.280&lmt=1704047239616920&mt=1712117583&fvip=2&keepalive=yes&fexp=51141542&c=WEB&sefc=1&txp=630A224&n=Dl4bt2SxlvXK8tF&sparams=expire%2Cei%2Cip%2Cid%2Caitags%2Csource%2Crequiressl%2Cxpc%2Cspc%2Cvprv%2Csvpuc%2Cmime%2Cns%2Cgir%2Cclen%2Cdur%2Clmt&sig=AJfQdSswRQIhANskX2rCtSzeHT8mVubUsjXAM8J9v5ZH2SF0K-drlMRAAiB09-a1S_dwdhC64uSonwnk1xifTYLt1VQQMoPb1W8UUQ%3D%3D&lsparams=mh%2Cmm%2Cmn%2Cms%2Cmv%2Cmvi%2Cpl%2Cinitcwndbps&lsig=ALClDIEwRQIhAOikbOgUPF-QnCr7VvvpvuJLFudmf17vi8tVJq8vt-zHAiB8epciOR9735uC4N4e0GbvjPQECLT13QujTyIzSjCkGw%3D%3D
//                     [mimeType] => video/webm; codecs="vp9"
//                     [bitrate] => 562229
//                     [width] => 480
//                     [height] => 854
//                     [initRange] => Array
//                         (
//                             [start] => 0
//                             [end] => 219
//                         )

//                     [indexRange] => Array
//                         (
//                             [start] => 220
//                             [end] => 367
//                         )

//                     [lastModified] => 1704047239616920
//                     [contentLength] => 2227769
//                     [quality] => large
//                     [fps] => 25
//                     [qualityLabel] => 480p
//                     [projectionType] => RECTANGULAR
//                     [averageBitrate] => 421526
//                     [colorInfo] => Array
//                         (
//                             [primaries] => COLOR_PRIMARIES_BT709
//                             [transferCharacteristics] => COLOR_TRANSFER_CHARACTERISTICS_BT709
//                             [matrixCoefficients] => COLOR_MATRIX_COEFFICIENTS_BT709
//                         )

//                     [approxDurationMs] => 42280
//                 )

//             [8] => Array
//                 (
//                     [itag] => 134
//                     [url] => https://rr3---sn-ixh7yn7e.googlevideo.com/videoplayback?expire=1712139931&ei=O9oMZveHMc6c0u8P4J-oyAo&ip=65.108.209.142&id=o-ANfPiijv-hkx-waVc0O3eQ146smmTRL7_V17Jg1LUhdc&itag=134&aitags=133%2C134%2C135%2C136%2C137%2C160%2C242%2C243%2C244%2C247%2C248%2C278&source=youtube&requiressl=yes&xpc=EgVo2aDSNQ%3D%3D&mh=3Y&mm=31%2C29&mn=sn-ixh7yn7e%2Csn-ixh7rn76&ms=au%2Crdu&mv=m&mvi=3&pl=24&initcwndbps=885000&spc=UWF9f-UGudNLgzvTqUJzOrTn49ade2m6QBMknw8k3sqR278&vprv=1&svpuc=1&mime=video%2Fmp4&ns=p1ZOU6voa4gCHDi-JgVVvEMQ&gir=yes&clen=1592632&dur=42.280&lmt=1704047240015629&mt=1712117583&fvip=2&keepalive=yes&fexp=51141542&c=WEB&sefc=1&txp=630A224&n=Dl4bt2SxlvXK8tF&sparams=expire%2Cei%2Cip%2Cid%2Caitags%2Csource%2Crequiressl%2Cxpc%2Cspc%2Cvprv%2Csvpuc%2Cmime%2Cns%2Cgir%2Cclen%2Cdur%2Clmt&sig=AJfQdSswRgIhAK-hdhZGCZuaYtDZvzq-V2ldKSv_WWRoYmAO-VxG32bqAiEAjAs_6VLs7jSOalnjc7VxZAgeViwYJt1_rDWYuFrAPjM%3D&lsparams=mh%2Cmm%2Cmn%2Cms%2Cmv%2Cmvi%2Cpl%2Cinitcwndbps&lsig=ALClDIEwRQIhAOikbOgUPF-QnCr7VvvpvuJLFudmf17vi8tVJq8vt-zHAiB8epciOR9735uC4N4e0GbvjPQECLT13QujTyIzSjCkGw%3D%3D
//                     [mimeType] => video/mp4; codecs="avc1.4d401e"
//                     [bitrate] => 442006
//                     [width] => 360
//                     [height] => 640
//                     [initRange] => Array
//                         (
//                             [start] => 0
//                             [end] => 740
//                         )

//                     [indexRange] => Array
//                         (
//                             [start] => 741
//                             [end] => 880
//                         )

//                     [lastModified] => 1704047240015629
//                     [contentLength] => 1592632
//                     [quality] => medium
//                     [fps] => 25
//                     [qualityLabel] => 360p
//                     [projectionType] => RECTANGULAR
//                     [averageBitrate] => 301349
//                     [highReplication] => 1
//                     [approxDurationMs] => 42280
//                 )

//             [9] => Array
//                 (
//                     [itag] => 243
//                     [url] => https://rr3---sn-ixh7yn7e.googlevideo.com/videoplayback?expire=1712139931&ei=O9oMZveHMc6c0u8P4J-oyAo&ip=65.108.209.142&id=o-ANfPiijv-hkx-waVc0O3eQ146smmTRL7_V17Jg1LUhdc&itag=243&aitags=133%2C134%2C135%2C136%2C137%2C160%2C242%2C243%2C244%2C247%2C248%2C278&source=youtube&requiressl=yes&xpc=EgVo2aDSNQ%3D%3D&mh=3Y&mm=31%2C29&mn=sn-ixh7yn7e%2Csn-ixh7rn76&ms=au%2Crdu&mv=m&mvi=3&pl=24&initcwndbps=885000&spc=UWF9f-UGudNLgzvTqUJzOrTn49ade2m6QBMknw8k3sqR278&vprv=1&svpuc=1&mime=video%2Fwebm&ns=p1ZOU6voa4gCHDi-JgVVvEMQ&gir=yes&clen=1377609&dur=42.280&lmt=1704047248328589&mt=1712117583&fvip=2&keepalive=yes&fexp=51141542&c=WEB&sefc=1&txp=630A224&n=Dl4bt2SxlvXK8tF&sparams=expire%2Cei%2Cip%2Cid%2Caitags%2Csource%2Crequiressl%2Cxpc%2Cspc%2Cvprv%2Csvpuc%2Cmime%2Cns%2Cgir%2Cclen%2Cdur%2Clmt&sig=AJfQdSswRgIhAI_JgSSU5rF2pFGEByQD48CTLw8ERPBX57EkOl5nGMVyAiEAknHwo2AGP1kw9m5LN222NvX5SBPAkd9kHvQ-yaZzaW8%3D&lsparams=mh%2Cmm%2Cmn%2Cms%2Cmv%2Cmvi%2Cpl%2Cinitcwndbps&lsig=ALClDIEwRQIhAOikbOgUPF-QnCr7VvvpvuJLFudmf17vi8tVJq8vt-zHAiB8epciOR9735uC4N4e0GbvjPQECLT13QujTyIzSjCkGw%3D%3D
//                     [mimeType] => video/webm; codecs="vp9"
//                     [bitrate] => 319419
//                     [width] => 360
//                     [height] => 640
//                     [initRange] => Array
//                         (
//                             [start] => 0
//                             [end] => 218
//                         )

//                     [indexRange] => Array
//                         (
//                             [start] => 219
//                             [end] => 366
//                         )

//                     [lastModified] => 1704047248328589
//                     [contentLength] => 1377609
//                     [quality] => medium
//                     [fps] => 25
//                     [qualityLabel] => 360p
//                     [projectionType] => RECTANGULAR
//                     [averageBitrate] => 260663
//                     [colorInfo] => Array
//                         (
//                             [primaries] => COLOR_PRIMARIES_BT709
//                             [transferCharacteristics] => COLOR_TRANSFER_CHARACTERISTICS_BT709
//                             [matrixCoefficients] => COLOR_MATRIX_COEFFICIENTS_BT709
//                         )

//                     [approxDurationMs] => 42280
//                 )

//             [10] => Array
//                 (
//                     [itag] => 133
//                     [url] => https://rr3---sn-ixh7yn7e.googlevideo.com/videoplayback?expire=1712139931&ei=O9oMZveHMc6c0u8P4J-oyAo&ip=65.108.209.142&id=o-ANfPiijv-hkx-waVc0O3eQ146smmTRL7_V17Jg1LUhdc&itag=133&aitags=133%2C134%2C135%2C136%2C137%2C160%2C242%2C243%2C244%2C247%2C248%2C278&source=youtube&requiressl=yes&xpc=EgVo2aDSNQ%3D%3D&mh=3Y&mm=31%2C29&mn=sn-ixh7yn7e%2Csn-ixh7rn76&ms=au%2Crdu&mv=m&mvi=3&pl=24&initcwndbps=885000&spc=UWF9f-UGudNLgzvTqUJzOrTn49ade2m6QBMknw8k3sqR278&vprv=1&svpuc=1&mime=video%2Fmp4&ns=p1ZOU6voa4gCHDi-JgVVvEMQ&gir=yes&clen=891596&dur=42.280&lmt=1704047240039172&mt=1712117583&fvip=2&keepalive=yes&fexp=51141542&c=WEB&sefc=1&txp=630A224&n=Dl4bt2SxlvXK8tF&sparams=expire%2Cei%2Cip%2Cid%2Caitags%2Csource%2Crequiressl%2Cxpc%2Cspc%2Cvprv%2Csvpuc%2Cmime%2Cns%2Cgir%2Cclen%2Cdur%2Clmt&sig=AJfQdSswRQIgCBcyUUMA6wQjgkmgQWwI9X6aveloyxdmsGpD3uBwL6YCIQDcH9qhyuHxjsh055EeNK2_cIQAisRKYUuDgQ4NZKQtrw%3D%3D&lsparams=mh%2Cmm%2Cmn%2Cms%2Cmv%2Cmvi%2Cpl%2Cinitcwndbps&lsig=ALClDIEwRQIhAOikbOgUPF-QnCr7VvvpvuJLFudmf17vi8tVJq8vt-zHAiB8epciOR9735uC4N4e0GbvjPQECLT13QujTyIzSjCkGw%3D%3D
//                     [mimeType] => video/mp4; codecs="avc1.4d4015"
//                     [bitrate] => 255675
//                     [width] => 240
//                     [height] => 426
//                     [initRange] => Array
//                         (
//                             [start] => 0
//                             [end] => 739
//                         )

//                     [indexRange] => Array
//                         (
//                             [start] => 740
//                             [end] => 879
//                         )

//                     [lastModified] => 1704047240039172
//                     [contentLength] => 891596
//                     [quality] => small
//                     [fps] => 25
//                     [qualityLabel] => 240p
//                     [projectionType] => RECTANGULAR
//                     [averageBitrate] => 168703
//                     [approxDurationMs] => 42280
//                 )

//             [11] => Array
//                 (
//                     [itag] => 242
//                     [url] => https://rr3---sn-ixh7yn7e.googlevideo.com/videoplayback?expire=1712139931&ei=O9oMZveHMc6c0u8P4J-oyAo&ip=65.108.209.142&id=o-ANfPiijv-hkx-waVc0O3eQ146smmTRL7_V17Jg1LUhdc&itag=242&aitags=133%2C134%2C135%2C136%2C137%2C160%2C242%2C243%2C244%2C247%2C248%2C278&source=youtube&requiressl=yes&xpc=EgVo2aDSNQ%3D%3D&mh=3Y&mm=31%2C29&mn=sn-ixh7yn7e%2Csn-ixh7rn76&ms=au%2Crdu&mv=m&mvi=3&pl=24&initcwndbps=885000&spc=UWF9f-UGudNLgzvTqUJzOrTn49ade2m6QBMknw8k3sqR278&vprv=1&svpuc=1&mime=video%2Fwebm&ns=p1ZOU6voa4gCHDi-JgVVvEMQ&gir=yes&clen=798473&dur=42.280&lmt=1704047241636022&mt=1712117583&fvip=2&keepalive=yes&fexp=51141542&c=WEB&sefc=1&txp=630A224&n=Dl4bt2SxlvXK8tF&sparams=expire%2Cei%2Cip%2Cid%2Caitags%2Csource%2Crequiressl%2Cxpc%2Cspc%2Cvprv%2Csvpuc%2Cmime%2Cns%2Cgir%2Cclen%2Cdur%2Clmt&sig=AJfQdSswRQIgSF-DKh4ItEYZgfH6kw_fMpvwv1fbD7TCAoheD_Pk-U8CIQCJGfMUxwGjRg111qtionPEsNmYqeRn51Ad_m4pH5C9nA%3D%3D&lsparams=mh%2Cmm%2Cmn%2Cms%2Cmv%2Cmvi%2Cpl%2Cinitcwndbps&lsig=ALClDIEwRQIhAOikbOgUPF-QnCr7VvvpvuJLFudmf17vi8tVJq8vt-zHAiB8epciOR9735uC4N4e0GbvjPQECLT13QujTyIzSjCkGw%3D%3D
//                     [mimeType] => video/webm; codecs="vp9"
//                     [bitrate] => 182645
//                     [width] => 240
//                     [height] => 426
//                     [initRange] => Array
//                         (
//                             [start] => 0
//                             [end] => 217
//                         )

//                     [indexRange] => Array
//                         (
//                             [start] => 218
//                             [end] => 365
//                         )

//                     [lastModified] => 1704047241636022
//                     [contentLength] => 798473
//                     [quality] => small
//                     [fps] => 25
//                     [qualityLabel] => 240p
//                     [projectionType] => RECTANGULAR
//                     [averageBitrate] => 151082
//                     [colorInfo] => Array
//                         (
//                             [primaries] => COLOR_PRIMARIES_BT709
//                             [transferCharacteristics] => COLOR_TRANSFER_CHARACTERISTICS_BT709
//                             [matrixCoefficients] => COLOR_MATRIX_COEFFICIENTS_BT709
//                         )

//                     [approxDurationMs] => 42280
//                 )

//             [12] => Array
//                 (
//                     [itag] => 160
//                     [url] => https://rr3---sn-ixh7yn7e.googlevideo.com/videoplayback?expire=1712139931&ei=O9oMZveHMc6c0u8P4J-oyAo&ip=65.108.209.142&id=o-ANfPiijv-hkx-waVc0O3eQ146smmTRL7_V17Jg1LUhdc&itag=160&aitags=133%2C134%2C135%2C136%2C137%2C160%2C242%2C243%2C244%2C247%2C248%2C278&source=youtube&requiressl=yes&xpc=EgVo2aDSNQ%3D%3D&mh=3Y&mm=31%2C29&mn=sn-ixh7yn7e%2Csn-ixh7rn76&ms=au%2Crdu&mv=m&mvi=3&pl=24&initcwndbps=885000&spc=UWF9f-UGudNLgzvTqUJzOrTn49ade2m6QBMknw8k3sqR278&vprv=1&svpuc=1&mime=video%2Fmp4&ns=p1ZOU6voa4gCHDi-JgVVvEMQ&gir=yes&clen=408539&dur=42.280&lmt=1704047238793074&mt=1712117583&fvip=2&keepalive=yes&fexp=51141542&c=WEB&sefc=1&txp=630A224&n=Dl4bt2SxlvXK8tF&sparams=expire%2Cei%2Cip%2Cid%2Caitags%2Csource%2Crequiressl%2Cxpc%2Cspc%2Cvprv%2Csvpuc%2Cmime%2Cns%2Cgir%2Cclen%2Cdur%2Clmt&sig=AJfQdSswRAIgdmRz_xSm0kM34Pqt001t_FDo59eKw18TxgUmdQeEFY0CICkD5s4rda874uNuavnDI9hbVTnsPiEHeSHBhOZfkhJA&lsparams=mh%2Cmm%2Cmn%2Cms%2Cmv%2Cmvi%2Cpl%2Cinitcwndbps&lsig=ALClDIEwRQIhAOikbOgUPF-QnCr7VvvpvuJLFudmf17vi8tVJq8vt-zHAiB8epciOR9735uC4N4e0GbvjPQECLT13QujTyIzSjCkGw%3D%3D
//                     [mimeType] => video/mp4; codecs="avc1.4d400c"
//                     [bitrate] => 116622
//                     [width] => 144
//                     [height] => 256
//                     [initRange] => Array
//                         (
//                             [start] => 0
//                             [end] => 738
//                         )

//                     [indexRange] => Array
//                         (
//                             [start] => 739
//                             [end] => 878
//                         )

//                     [lastModified] => 1704047238793074
//                     [contentLength] => 408539
//                     [quality] => tiny
//                     [fps] => 25
//                     [qualityLabel] => 144p
//                     [projectionType] => RECTANGULAR
//                     [averageBitrate] => 77301
//                     [approxDurationMs] => 42280
//                 )

//             [13] => Array
//                 (
//                     [itag] => 278
//                     [url] => https://rr3---sn-ixh7yn7e.googlevideo.com/videoplayback?expire=1712139931&ei=O9oMZveHMc6c0u8P4J-oyAo&ip=65.108.209.142&id=o-ANfPiijv-hkx-waVc0O3eQ146smmTRL7_V17Jg1LUhdc&itag=278&aitags=133%2C134%2C135%2C136%2C137%2C160%2C242%2C243%2C244%2C247%2C248%2C278&source=youtube&requiressl=yes&xpc=EgVo2aDSNQ%3D%3D&mh=3Y&mm=31%2C29&mn=sn-ixh7yn7e%2Csn-ixh7rn76&ms=au%2Crdu&mv=m&mvi=3&pl=24&initcwndbps=885000&spc=UWF9f-UGudNLgzvTqUJzOrTn49ade2m6QBMknw8k3sqR278&vprv=1&svpuc=1&mime=video%2Fwebm&ns=p1ZOU6voa4gCHDi-JgVVvEMQ&gir=yes&clen=441348&dur=42.280&lmt=1704047241187771&mt=1712117583&fvip=2&keepalive=yes&fexp=51141542&c=WEB&sefc=1&txp=630A224&n=Dl4bt2SxlvXK8tF&sparams=expire%2Cei%2Cip%2Cid%2Caitags%2Csource%2Crequiressl%2Cxpc%2Cspc%2Cvprv%2Csvpuc%2Cmime%2Cns%2Cgir%2Cclen%2Cdur%2Clmt&sig=AJfQdSswRgIhAOVf0xo2pfvGo51-YAnCNL4BMCfdHjEkdpyD5rwMJsHcAiEAwZxod5tA3UHUMx5m_p2yLpXbx6GWLiN8njxQ8v6-leA%3D&lsparams=mh%2Cmm%2Cmn%2Cms%2Cmv%2Cmvi%2Cpl%2Cinitcwndbps&lsig=ALClDIEwRQIhAOikbOgUPF-QnCr7VvvpvuJLFudmf17vi8tVJq8vt-zHAiB8epciOR9735uC4N4e0GbvjPQECLT13QujTyIzSjCkGw%3D%3D
//                     [mimeType] => video/webm; codecs="vp9"
//                     [bitrate] => 90930
//                     [width] => 144
//                     [height] => 256
//                     [initRange] => Array
//                         (
//                             [start] => 0
//                             [end] => 217
//                         )

//                     [indexRange] => Array
//                         (
//                             [start] => 218
//                             [end] => 364
//                         )

//                     [lastModified] => 1704047241187771
//                     [contentLength] => 441348
//                     [quality] => tiny
//                     [fps] => 25
//                     [qualityLabel] => 144p
//                     [projectionType] => RECTANGULAR
//                     [averageBitrate] => 83509
//                     [colorInfo] => Array
//                         (
//                             [primaries] => COLOR_PRIMARIES_BT709
//                             [transferCharacteristics] => COLOR_TRANSFER_CHARACTERISTICS_BT709
//                             [matrixCoefficients] => COLOR_MATRIX_COEFFICIENTS_BT709
//                         )

//                     [approxDurationMs] => 42280
//                 )

//             [14] => Array
//                 (
//                     [itag] => 140
//                     [url] => https://rr3---sn-ixh7yn7e.googlevideo.com/videoplayback?expire=1712139931&ei=O9oMZveHMc6c0u8P4J-oyAo&ip=65.108.209.142&id=o-ANfPiijv-hkx-waVc0O3eQ146smmTRL7_V17Jg1LUhdc&itag=140&source=youtube&requiressl=yes&xpc=EgVo2aDSNQ%3D%3D&mh=3Y&mm=31%2C29&mn=sn-ixh7yn7e%2Csn-ixh7rn76&ms=au%2Crdu&mv=m&mvi=3&pl=24&initcwndbps=885000&spc=UWF9f-UGudNLgzvTqUJzOrTn49ade2m6QBMknw8k3sqR278&vprv=1&svpuc=1&mime=audio%2Fmp4&ns=p1ZOU6voa4gCHDi-JgVVvEMQ&gir=yes&clen=685897&dur=42.329&lmt=1704047236555169&mt=1712117583&fvip=2&keepalive=yes&fexp=51141542&c=WEB&sefc=1&txp=6308224&n=Dl4bt2SxlvXK8tF&sparams=expire%2Cei%2Cip%2Cid%2Citag%2Csource%2Crequiressl%2Cxpc%2Cspc%2Cvprv%2Csvpuc%2Cmime%2Cns%2Cgir%2Cclen%2Cdur%2Clmt&sig=AJfQdSswRAIgc6Cph7jZ1dkGWReaQMIiZWYnbiO5Sfnw7pDQkT9yUBcCIBWsPKZtvYL_iAqg26fpbWKsMoBwG3KZb6smWq27rhxZ&lsparams=mh%2Cmm%2Cmn%2Cms%2Cmv%2Cmvi%2Cpl%2Cinitcwndbps&lsig=ALClDIEwRQIhAOikbOgUPF-QnCr7VvvpvuJLFudmf17vi8tVJq8vt-zHAiB8epciOR9735uC4N4e0GbvjPQECLT13QujTyIzSjCkGw%3D%3D
//                     [mimeType] => audio/mp4; codecs="mp4a.40.2"
//                     [bitrate] => 130288
//                     [initRange] => Array
//                         (
//                             [start] => 0
//                             [end] => 631
//                         )

//                     [indexRange] => Array
//                         (
//                             [start] => 632
//                             [end] => 723
//                         )

//                     [lastModified] => 1704047236555169
//                     [contentLength] => 685897
//                     [quality] => tiny
//                     [projectionType] => RECTANGULAR
//                     [averageBitrate] => 129631
//                     [highReplication] => 1
//                     [audioQuality] => AUDIO_QUALITY_MEDIUM
//                     [approxDurationMs] => 42329
//                     [audioSampleRate] => 44100
//                     [audioChannels] => 2
//                     [loudnessDb] => -3.1299992
//                 )

//             [15] => Array
//                 (
//                     [itag] => 249
//                     [url] => https://rr3---sn-ixh7yn7e.googlevideo.com/videoplayback?expire=1712139931&ei=O9oMZveHMc6c0u8P4J-oyAo&ip=65.108.209.142&id=o-ANfPiijv-hkx-waVc0O3eQ146smmTRL7_V17Jg1LUhdc&itag=249&source=youtube&requiressl=yes&xpc=EgVo2aDSNQ%3D%3D&mh=3Y&mm=31%2C29&mn=sn-ixh7yn7e%2Csn-ixh7rn76&ms=au%2Crdu&mv=m&mvi=3&pl=24&initcwndbps=885000&spc=UWF9f-UGudNLgzvTqUJzOrTn49ade2m6QBMknw8k3sqR278&vprv=1&svpuc=1&mime=audio%2Fwebm&ns=p1ZOU6voa4gCHDi-JgVVvEMQ&gir=yes&clen=258764&dur=42.301&lmt=1704047247731915&mt=1712117583&fvip=2&keepalive=yes&fexp=51141542&c=WEB&sefc=1&txp=6308224&n=Dl4bt2SxlvXK8tF&sparams=expire%2Cei%2Cip%2Cid%2Citag%2Csource%2Crequiressl%2Cxpc%2Cspc%2Cvprv%2Csvpuc%2Cmime%2Cns%2Cgir%2Cclen%2Cdur%2Clmt&sig=AJfQdSswRQIgB11pgGfpnqbgfbnzI4guU0YgZ9iP4sV_3Fhu8FuA2zICIQDKLfZBdvExrDDhf4CPgYonVbPOF2yuZIW1qXqUzWddpw%3D%3D&lsparams=mh%2Cmm%2Cmn%2Cms%2Cmv%2Cmvi%2Cpl%2Cinitcwndbps&lsig=ALClDIEwRQIhAOikbOgUPF-QnCr7VvvpvuJLFudmf17vi8tVJq8vt-zHAiB8epciOR9735uC4N4e0GbvjPQECLT13QujTyIzSjCkGw%3D%3D
//                     [mimeType] => audio/webm; codecs="opus"
//                     [bitrate] => 49478
//                     [initRange] => Array
//                         (
//                             [start] => 0
//                             [end] => 265
//                         )

//                     [indexRange] => Array
//                         (
//                             [start] => 266
//                             [end] => 347
//                         )

//                     [lastModified] => 1704047247731915
//                     [contentLength] => 258764
//                     [quality] => tiny
//                     [projectionType] => RECTANGULAR
//                     [averageBitrate] => 48937
//                     [audioQuality] => AUDIO_QUALITY_LOW
//                     [approxDurationMs] => 42301
//                     [audioSampleRate] => 48000
//                     [audioChannels] => 2
//                     [loudnessDb] => -3.1299992
//                 )

//             [16] => Array
//                 (
//                     [itag] => 250
//                     [url] => https://rr3---sn-ixh7yn7e.googlevideo.com/videoplayback?expire=1712139931&ei=O9oMZveHMc6c0u8P4J-oyAo&ip=65.108.209.142&id=o-ANfPiijv-hkx-waVc0O3eQ146smmTRL7_V17Jg1LUhdc&itag=250&source=youtube&requiressl=yes&xpc=EgVo2aDSNQ%3D%3D&mh=3Y&mm=31%2C29&mn=sn-ixh7yn7e%2Csn-ixh7rn76&ms=au%2Crdu&mv=m&mvi=3&pl=24&initcwndbps=885000&spc=UWF9f-UGudNLgzvTqUJzOrTn49ade2m6QBMknw8k3sqR278&vprv=1&svpuc=1&mime=audio%2Fwebm&ns=p1ZOU6voa4gCHDi-JgVVvEMQ&gir=yes&clen=332624&dur=42.301&lmt=1704047247839044&mt=1712117583&fvip=2&keepalive=yes&fexp=51141542&c=WEB&sefc=1&txp=6308224&n=Dl4bt2SxlvXK8tF&sparams=expire%2Cei%2Cip%2Cid%2Citag%2Csource%2Crequiressl%2Cxpc%2Cspc%2Cvprv%2Csvpuc%2Cmime%2Cns%2Cgir%2Cclen%2Cdur%2Clmt&sig=AJfQdSswRAIgFBZoTP4uFyxgRHIuRdGmyiGJdqyGBw7a1dmBe1p-dhMCIC-ocwe_zdw7mbjfdXMm0fTE_07jFBA9Ays87JmggEJy&lsparams=mh%2Cmm%2Cmn%2Cms%2Cmv%2Cmvi%2Cpl%2Cinitcwndbps&lsig=ALClDIEwRQIhAOikbOgUPF-QnCr7VvvpvuJLFudmf17vi8tVJq8vt-zHAiB8epciOR9735uC4N4e0GbvjPQECLT13QujTyIzSjCkGw%3D%3D
//                     [mimeType] => audio/webm; codecs="opus"
//                     [bitrate] => 63692
//                     [initRange] => Array
//                         (
//                             [start] => 0
//                             [end] => 265
//                         )

//                     [indexRange] => Array
//                         (
//                             [start] => 266
//                             [end] => 348
//                         )

//                     [lastModified] => 1704047247839044
//                     [contentLength] => 332624
//                     [quality] => tiny
//                     [projectionType] => RECTANGULAR
//                     [averageBitrate] => 62906
//                     [audioQuality] => AUDIO_QUALITY_LOW
//                     [approxDurationMs] => 42301
//                     [audioSampleRate] => 48000
//                     [audioChannels] => 2
//                     [loudnessDb] => -3.1299992
//                 )

//             [17] => Array
//                 (
//                     [itag] => 251
//                     [url] => https://rr3---sn-ixh7yn7e.googlevideo.com/videoplayback?expire=1712139931&ei=O9oMZveHMc6c0u8P4J-oyAo&ip=65.108.209.142&id=o-ANfPiijv-hkx-waVc0O3eQ146smmTRL7_V17Jg1LUhdc&itag=251&source=youtube&requiressl=yes&xpc=EgVo2aDSNQ%3D%3D&mh=3Y&mm=31%2C29&mn=sn-ixh7yn7e%2Csn-ixh7rn76&ms=au%2Crdu&mv=m&mvi=3&pl=24&initcwndbps=885000&spc=UWF9f-UGudNLgzvTqUJzOrTn49ade2m6QBMknw8k3sqR278&vprv=1&svpuc=1&mime=audio%2Fwebm&ns=p1ZOU6voa4gCHDi-JgVVvEMQ&gir=yes&clen=671878&dur=42.301&lmt=1704047247744230&mt=1712117583&fvip=2&keepalive=yes&fexp=51141542&c=WEB&sefc=1&txp=6308224&n=Dl4bt2SxlvXK8tF&sparams=expire%2Cei%2Cip%2Cid%2Citag%2Csource%2Crequiressl%2Cxpc%2Cspc%2Cvprv%2Csvpuc%2Cmime%2Cns%2Cgir%2Cclen%2Cdur%2Clmt&sig=AJfQdSswRgIhAIW7lm-PpLb8I6r0NIg3EO8k2vOzdZ0BSveyKkiQ-wNyAiEAhAQ6Mez9ayi7Sii8kMA74FvXd-2G2v7rjkPcjz3oOJY%3D&lsparams=mh%2Cmm%2Cmn%2Cms%2Cmv%2Cmvi%2Cpl%2Cinitcwndbps&lsig=ALClDIEwRQIhAOikbOgUPF-QnCr7VvvpvuJLFudmf17vi8tVJq8vt-zHAiB8epciOR9735uC4N4e0GbvjPQECLT13QujTyIzSjCkGw%3D%3D
//                     [mimeType] => audio/webm; codecs="opus"
//                     [bitrate] => 128864
//                     [initRange] => Array
//                         (
//                             [start] => 0
//                             [end] => 265
//                         )

//                     [indexRange] => Array
//                         (
//                             [start] => 266
//                             [end] => 348
//                         )

//                     [lastModified] => 1704047247744230
//                     [contentLength] => 671878
//                     [quality] => tiny
//                     [projectionType] => RECTANGULAR
//                     [averageBitrate] => 127066
//                     [audioQuality] => AUDIO_QUALITY_MEDIUM
//                     [approxDurationMs] => 42301
//                     [audioSampleRate] => 48000
//                     [audioChannels] => 2
//                     [loudnessDb] => -3.1299992
//                 )

//         )