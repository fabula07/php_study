<?php # dd($content['gallery']) ?>
<section id="gallery" class="section-gap">
    <div class="container">
        <div class="row title-row">
            <div class="col-12">
                <h1> <?= $content['gallery']['title'] ?? '' ?> </h1>
                <p> <?= $content['gallery']['description'] ?? '' ?> </p>
            </div>
        </div>
        <div class="row row-cols-2">
            <div class="col-12 col-md-4">
                <div class="row">
                    <div class="col-12">
                        <img src="assets/img/g1.jpg" class="img-fluid w-100 mb-3" alt="">
                    </div>
                    <div class="col-12">
                        <img src="assets/img/g2.jpg" class="img-fluid w-100 mb-3" alt="">
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-8">
                <div class="col-12">
                    <img src="assets/img/g3.jpg" class="img-fluid w-100 mb-3" alt="">
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <img src="assets/img/g4.jpg" class="img-fluid w-100 mb-3" alt="">
                        </div>
                        <div class="col-12 col-md-6">
                            <img src="assets/img/g5.jpg" class="img-fluid w-100 mb-3" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
