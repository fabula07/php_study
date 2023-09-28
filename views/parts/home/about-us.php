<?php #dd($content['about_us']) ?>
<section id="about-us" class="section-gap">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 video-block d-flex align-items-center justify-content-center">
                <img src="assets/img/video-bg.jpg" class="video-bg">
                <a href="#" class="play d-flex align-items-center justify-content-center">
                    <img src="assets/img/play-icon.png">
                </a>
            </div>
            <div class="col-sm-12 col-md-6 description-block d-flex flex-column align-items-start justify-content-center">
                <h6><?= $content['about_us']['text']['subtitle'] ?? '' ?></h6>
                <h1><?= $content['about_us']['text']['title'] ?? '' ?></h1>
                <p class="quote"><b><?= $content['about_us']['text']['quote'] ?? ''?></b></p>
                <p><?= $content['about_us']['text']['description'] ?? '' ?></p>
                <img src="assets/img/signature.png">
            </div>
        </div>
    </div>
</section>
