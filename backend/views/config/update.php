<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Config */

$this->title = 'Update Config: ' . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Configs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'address' => $model->address, 'phone' => $model->phone, 'email' => $model->email, 'title' => $model->title]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="config-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
