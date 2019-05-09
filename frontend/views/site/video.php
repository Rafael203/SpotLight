<!-- portfolio -->
<section class="portfolio" id="gallery">
    <div class="container py-lg-5">
        <h3 class="tittle text-center my-lg-5 my-3">Our Projects</h3>

        <div class="row news-grids mt-md-5 mt-4 text-center">
            <?php
            foreach ($projs as $proj) {
                if($proj['isVideo'] == 1) {
                    ?>
                    <div class="col-md-4 gal-img">
                        <a href="#gal<?= $proj['id'] ?>">
                            <img src="<?= \yii\helpers\Url::to('@web/files/images/'.$proj['img_src']) ?>" alt="Presell"
                                 class="img-fluid">
                        </a>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</section>
<?php
foreach ($projs as $proj) {
    ?>
    <!-- popup-->
    <div id="gal<?= $proj['id']?>" class="pop-overlay">
        <div class="popup embed-responsive">
            <iframe src="<?= $proj['src']?>">

            </iframe>
            <p class="mt-4"><?= $proj['description']?></p>
            <a class="close" href="#gallery">&times;</a>
        </div>
    </div>
    <!-- //popup -->
    <?php
}
?>
<!--//portfolio-->