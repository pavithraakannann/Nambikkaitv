<?php include 'header.php' ?>
<link href="https://vjs.zencdn.net/7.18.1/video-js.css" rel="stylesheet" />
<script src="https://vjs.zencdn.net/7.18.1/video.min.js"></script>

<section class="banner-img">
    <div class="container">
        <div class="row justify-content-between text-white">
            <div class="col-md-6">
                <h1 class="fw-bold red-section">
                    Watch Live TV
                </h1>
            </div>

        </div>
    </div>
</section>

<section class=" pt-3 pb-5">
    <div class="container">
        <div class="mx-auto">
            <video id="my-video" class="video-js vjs-default-skin w-100 h-100" controls preload="auto" autoplay muted 
                data-setup='{"techOrder":["html5"], "fluid": true}'>
                <source src="https://mk9qa7n8qwyb-hls-live.wmncdn.net/nambikkaitv/live.stream/playlist.m3u8" type="application/x-mpegURL">
            </video>

        </div>
    </div>
</section>

<section>
    <div class="container-fluid p-0">
        <div class="text-center">
            <h1 class="fw-bold red-section">
                Download our app on
            </h1>
            <div>
                <p class="mt-4 download-app">
                    <a href="https://play.google.com/store/apps/details?id=com.appbazooka.goodnews&amp;hl=en" target="_blank">
                        <img src="assets/img/download.png" loading="lazy" alt="google-play" height="54">
                    </a> &nbsp;
                    <a href="https://apps.apple.com/in/app/goodnews-television/id1263378788" target="_blank">
                        <img src="assets/img/download-1.png" loading="lazy" alt="app-store" height="54">
                    </a>
                </p>
            </div>
            <div class="phone-img">
                <img src="assets/img/phone.png " loading="lazy" alt="">
            </div>
        </div>
    </div>
</section>

<script>
    var player = videojs('my-video');
</script>

<?php include 'footer.php' ?>