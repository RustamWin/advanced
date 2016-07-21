<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Site Config';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="config-index">

    <h1>Site config</h1>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'address',
            'phone',
            'email:email',
            'title',
            'skype_address',
            'flickr_address',
            'twitter_address',

            ['class' => 'yii\grid\ActionColumn', 'template' => '{update}'],

        ],
    ]); ?>

</div>
