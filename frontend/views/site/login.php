<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="span12">
                <i class="fa fa-sign-in page-title-icon"></i>
                <h2><?= Html::encode($this->title)?> /</h2>
                <p>Here is how you can login</p>
            </div>
        </div>
    </div>
</div>

<div class="contact-us container">
    <div class="row">
        <p>Please fill out the following fields to login:</p>
        <div class="contact-form col-md-5 col-lg-5">
        <?php $form = ActiveForm::begin([
        'id' => 'login-form',

    ]); ?>

        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

        <?= $form->field($model, 'password')->passwordInput() ?>

        <?= $form->field($model, 'rememberMe')->checkbox([
            'template' => "{label}<div style='float: left'>{input}</div> \n<div class=\"col-lg-3\">{error}</div>",
        ]) ?>

        <div class="form-group">
                <?= Html::submitButton('Login', ['name' => 'login-button']) ?>
        </div>

    <?php ActiveForm::end(); ?>
    </div>
    </div>
</div>
