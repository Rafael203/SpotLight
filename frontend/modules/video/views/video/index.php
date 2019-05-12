<!-- portfolio -->
<section class="portfolio" id="gallery">
    <div class="container py-lg-5">
        <h3 class="tittle text-center my-lg-5 my-3">Our Projects</h3>

        <div class="row news-grids mt-md-5 mt-4 text-center">
            <?php
            foreach ($projs as $proj) {

                    ?>

                    <div class="col-md-4 gal-img">
                        <a href="<?= \yii\helpers\Url::to('@web/video/'.$proj['id']) ?>">
                            <img src="<?= \yii\helpers\Url::to('@web/images/'.$proj['prew_img']) ?>" alt="Presell"
                                 class="img-fluid">
                        </a>
                    </div>
                    <?php
                    echo 'fddfa';
                    die;
            }
            ?>
        </div>
    </div>
</section>
<!--//portfolio-->
