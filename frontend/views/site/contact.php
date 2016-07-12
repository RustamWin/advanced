<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Andia - Contact';
?>
<div class="page-title">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <i class="fa fa-envelope page-title-icon"></i>
                        <h2>Contact Us /</h2>
                        <p>Here is how you can contact us</p>
                    </div>
                </div>
            </div>
        </div>
<div class="site-contact">
    

    <?php if (Yii::$app->session->setFlash('success')): ?>

        <div class="alert alert-success">
            Thank you for contacting us. We will respond to you as soon as possible.
        </div>

        <p>
            Note that if you turn on the Yii debugger, you should be able
            to view the mail message on the mail panel of the debugger.
            <?php if (Yii::$app->mailer->useFileTransport): ?>
                Because the application is in development mode, the email is not sent but saved as
                a file under <code><?= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?></code>.
                Please configure the <code>useFileTransport</code> property of the <code>mail</code>
                application component to be false to enable email sending.
            <?php endif; ?>
        </p>

    <?php else: ?>

        <div class="contact-us container">
            <div class="row">
                <p class="col-md-7">
                    If you have business inquiries or other questions, please fill out the following form to contact us.
                    Thank you.
                </p>
                <div class="contact-form col-md-7 col-lg-7">

                    <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                        <?= $form->field($model, 'name')->textInput(['autofocus' => true, 'placeholder' => "Enter your email..."]) ?>

                        <?= $form->field($model, 'email')->textInput(['placeholder' => "Enter your email..."]) ?>

                        <?= $form->field($model, 'subject')->textInput(['placeholder' => "Your subject..."]) ?>

                        <?= $form->field($model, 'body')->textArea(['rows' => '6', 'placeholder' => "Your message..."]) ?>

                        <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                            'template' => '<div class="row"><div class="contact-form col-md-3">{image}</div><div class="contact-form col-md-3" >{input}</div></div>',
                        ]) ?>

                        <div class="form-group">
                            <?= Html::submitButton('Send', ['name' => 'contact-button']) ?>
                        </div>

                    <?php ActiveForm::end(); ?>

                </div>
                <div class="contact-address col-md-5">
                    <h4>We Are Here</h4>
                    <div class="map"></div>
                    <h4>Address</h4>
                    <p>Via Principe Amedeo 9 <br> 10100, Torino, TO, Italy</p>
                    <p>Phone: 0039 333 12 68 347</p>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>
