<!--/ab -->
<section class="about py-lg-5 py-md-5 py-3">
    <div class="container">
        <div class="inner-sec-w3ls py-lg-5 py-3">
            <h3 class="tittle text-center mb-lg-5 pb-3"> Our Services</h3>
            <div class="feature-grids row mb-lg-5 my-3"><?php
            foreach ($serv as $service) {
                ?>

                    <div class="col-md-4 p-0">
                        <div class="bottom-gd p-lg-5 p-4" style="height: 300px">
                            <span class="<?= $service['icon'] ?>" aria-hidden="true"></span>
                            <h3 class="my-3"><?= $service['title'] ?></h3>
                            <p><?= $service['description'] ?></p>
                        </div>
                    </div>

                <?php
            }
            ?>
        </div>

        </div>
    </div>
</section>
<!-- //ab -->

<!-- testimonials -->
<section class="testimonials py-5" style="background: url(../images/banner1.jpg)no-repeat center;" id="testi">
    <div class="container py-xl-5 py-lg-3">
        <h3 class="title-w3 text-center text-wh mb-5 let font-weight-bold">What Our People Say</h3>
        <div class="row pt-xl-4">
            <?php
            foreach ($people as $one) {
                ?>
                <div class="col-md-4 test-grid px-lg-5">
                    <div class="test-info text-center">
                        <p class="text-li">"<?= $one['what_say']?>"</p>
                        <div class="test-img text-center mt-4">
                            <img src="<?= \yii\helpers\Url::to('@web/images/'.$one['image']) ?>" class="rounded-circle" style="width: 30%" alt="user-image">
                        </div>
                        <h3 class="mt-md-4 mt-3"><?= $one['name']?></h3>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</section>
<!-- //testimonials -->
