<!-- testimonials -->
<section class="testimonials py-5" id="testi">
    <div class="container py-xl-5 py-lg-3">
        <h3 class="title-w3 text-center text-wh mb-5 let font-weight-bold">What Our People Say</h3>
        <div class="row pt-xl-4">
            <?php
            foreach ($team as $one) {
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
<!-- team -->
<div class="container" id="team">
    <br>
    <h3 class="tittle text-center">Our team</h3><br>
    <div class="row">
        <?php
        foreach ($team as $one) {
            ?>
            <div class="col-md-4">
                <img src="<?= \yii\helpers\Url::to('@web/images/' . $one['image']) ?>" style="width: 60%; margin-left: 20%; margin-right: 20%" class="rounded-circle" alt="">
                <h4 class="text-center"><?= $one['name'] ?> <?= $one['surname'] ?></h4>
                <p class="text-center"><strong style="color: black">About me:</strong><?= $one['about'] ?></p>
                <div class="team-social py-4 text-center">
                    <ul class="social-icons text-center">
                        <li>
                            <a href="<?= $one['facebook_link'] ?>">
                                <i class="fa fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="mx-3">
                            <a href="<?= $one['insta_link'] ?>">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="<?= $one['vk_link'] ?>">
                                <i class="fa fa-vk"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>