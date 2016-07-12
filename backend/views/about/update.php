<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\About */

$this->title = 'Update About: ' . ' ' . $model->intro_text;
$this->params['breadcrumbs'][] = ['label' => 'Abouts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->intro_text, 'url' => ['view', 'id' => $model->intro_text]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="about-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
