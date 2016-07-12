<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Config */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Configs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="config-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'address' => $model->address, 'phone' => $model->phone, 'email' => $model->email, 'title' => $model->title], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'address' => $model->address, 'phone' => $model->phone, 'email' => $model->email, 'title' => $model->title], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'address',
            'phone',
            'email:email',
            'title',
            'skype_address',
            'flickr_address',
            'twitter_address',
        ],
    ]) ?>

</div>
