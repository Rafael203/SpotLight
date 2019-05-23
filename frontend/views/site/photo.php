<!-- portfolio -->
<section class="portfolio" id="gallery">
    <div class="container">
        <h2 class="title text-center  my-lg-5 my-3">Photo Categories</h2>
        <?php
        foreach ($cat_ph as $cat) {
            if ($cat['id'] != count($cat_ph)) {
                ?>
                <a href="<?= \yii\helpers\Url::to(['/photos/photo_cat/'.$cat['id']])?>" style="color: black">
                    <?= $cat['title'] ?>,
                </a>
                <?php
            } else {
                ?>

                <a href="<?= \yii\helpers\Url::to(['/photos/photo_cat/'.$cat['id']])?>" style="color: black"><?= $cat['title'] ?></a>
                <?php
            }
        }
        ?>
    </div>
    <div class="container py-lg-5">
        <h3 class="tittle text-center my-lg-5 my-3">Our Photos</h3>

        <div class="row news-grids mt-md-5 mt-4 text-center">
            <?php
            foreach ($projs as $proj) {
            if($proj['isVideo'] == 0) {
                ?>
                <div class="col-md-4 gal-img">
                    <a href="#gal<?= $proj['id'] ?>"><img
                                src="<?= \yii\helpers\Url::to('@web/images/' . $proj['src']) ?>" alt="Presell"
                                class="img-fluid"></a>
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
        <div class="popup">
            <img src="<?= \yii\helpers\Url::to('@web/files/images/'.$proj['src'])?>" alt="Popup Image" style="width: 100%" class="img-fluid"/>
            <p class="mt-4"><?= $proj['description']?></p>
            <a class="close" href="#gallery">&times;</a>
        </div>
    </div>
    <!-- //popup -->
    <?php
}
