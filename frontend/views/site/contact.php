<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;


?>
<!-- banner -->
<section class="ab-info-main py-md-5 py-4">
    <div class="container py-md-5 py-4">
        <h3 class="tittle text-center mb-lg-5 mb-3"> Contact Us</h3>
        <div class="row contact-main-info mt-5">
            <div class="col-md-7 contact-right">
                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'subject') ?>

                <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

                <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                ]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>

                <?php ActiveForm::end(); ?>
            </div>
            <div class="col-md-5 contact-left">
                <div class="address">
                    <h5>Address:</h5>
                    <p><span class="fa fa-home"></span>
                        <br> United States.</p>
                </div>
                <div class="address address-mdl">
                    <h5>Phones:</h5>
                    <p><span class="fa fa-phone"></span> +1(23) 4567 7890</p>
                    <p><span class="fa fa-mobile"></span>+1(23) 4567 7891</p>
                </div>
                <div class="address">
                    <h5>Email:</h5>
                    <p><span class="fa fa-envelope"></span> <a href="mailto:mail@example.com">mail@example.com</a></p>
                    <p><span class="fa fa-globe"></span> <a href="mailto:website@example.com">website@example.com</a></p>
                </div>
            </div>
        </div>


    </div>
</section>
<section class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d423286.27404345275!2d-118.69191921441556!3d34.02016130939095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2sLos+Angeles%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1522474296007" allowfullscreen></iframe>
</section>

