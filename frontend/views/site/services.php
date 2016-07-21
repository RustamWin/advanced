<?php
/* @var $this yii\web\View */
use yii\bootstrap\Tabs;

$this->title = 'Andia - Services';
$this->registerMetaTag([
    'description' =>'',
    'content' =>'' 
    ]);
$this->registerMetaTag([
    'keywords' =>'',
    'content' =>'' 
    ]);
?>
<!-- Page Title -->
<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="span12">
                <i class="fa fa-tasks page-title-icon"></i>
                <h2>Services /</h2>
                <p>Here are the services we offer</p>
            </div>
        </div>
    </div>
</div>

<!-- Services Full Width Text -->
<div class="services-full-width container">
    <div class="row">
        <div class="services-full-width-text col-md-12">
            <h4>Lorem Ipsum Dolor Sit Amet</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper <span class="violet">suscipit lobortis</span> nisl ut aliquip ex ea commodo consequat. Lorem ipsum <strong>dolor sit amet</strong>, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do <strong>eiusmod tempor</strong> incididunt.</p>
        </div>
    </div>
</div>

<!-- Services -->
<div class="what-we-do container">
    <div class="row">
        <?php foreach ($services as $service) { ?>
            <div class="service col-md-3">
            	
                <div class="icon-awesome">
                    <i class="fa fa-<?=$service->icon?>"></i>
                </div>
                <h4><?=$service->title?></h4>
                <p><?=$service->description?></p>
            
            </div>
        <?php } ?>
    </div>
</div>

<!-- Services Half Width Text -->
<div class="services-half-width container">
    <div class="row">
        <div class="services-half-width-text col-md-6">
            <h4>Lorem Ipsum</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper <span class="violet">suscipit lobortis</span> nisl ut aliquip ex ea commodo consequat. Lorem ipsum <strong>dolor sit amet</strong>, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do <strong>eiusmod tempor</strong> incididunt.</p>
        </div>
        <div class="services-half-width-text col-md-6">
            <h4>Dolor Sit Amet</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper <span class="violet">suscipit lobortis</span> nisl ut aliquip ex ea commodo consequat. Lorem ipsum <strong>dolor sit amet</strong>, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do <strong>eiusmod tempor</strong> incididunt.</p>
        </div>
    </div>
</div>

<!-- Call To Action -->
<div class="call-to-action container">
    <div class="row">
        <div class="call-to-action-text col-md-12">
            <div class="ca-text">
                <p>Lorem ipsum <span class="violet">dolor sit amet</span>, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et ut wisi enim.</p>
            </div>
            <div class="ca-button">
                <a href="<?=Yii::$app->urlManager->createUrl(["site/contact"])?>">Try It Now!</a>
            </div>
        </div>
    </div>
</div>