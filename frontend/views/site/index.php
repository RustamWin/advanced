<?php

/* @var $this yii\web\View */
$this->title = 'Andia - Responsive Agency Template';
$this->registerMetaTag([
                           'description' => '',
                           'content' => ''
                       ]);
$this->registerMetaTag([
                           'keywords' => '',
                           'content' => ''
                       ]);
use yii\bootstrap\Modal;
use app\models\Slides;
use yii\bootstrap\Carousel;

?>
<!-- Slider -->
<div class="slider">
    <div class="container">
        <div class="row">
            <div class="col-md-12 offset1">
                <div class="flexslider">

                    <ul class="slides">
                        <?php foreach ($slides as $slide) { ?>

                            <li data-thumb="<?= $slide->img ?>">
                                <img src="<?= $slide->img ?>">
                                <p class="flex-caption"><?= $slide->description ?></p>
                            </li>

                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Site Description -->
<div class="presentation container">
    <h2>We are <span class="violet">Andia</span>, a super cool design agency.</h2>
    <p>We design beautiful websites, logos and prints. Your project is safe with us.</p>
</div>

<!-- Services -->
<div class="what-we-do container">
    <div class="row">
        <?php foreach ($services as $service) { ?>
            <div class="service col-md-3">

                <div class="icon-awesome">
                    <i class="fa fa-<?= $service->icon ?>"></i>
                </div>
                <h4><?= $service->title ?></h4>
                <p><?= $service->text ?></p>
                <a href="<?= Yii::$app->urlManager->createUrl(["site/services"]) ?>">Read more</a>
            </div>
        <?php } ?>
    </div>
</div>

<!-- Latest Work -->
<div class="portfolio container">
    <div class="portfolio-title">
        <h3>Our Latest Work</h3>
    </div>
    <div class="row">
        <?php foreach ($works as $work) { ?>
            <div class="work col-md-3">

                <img src="<?= $work->img ?>" class="img-responsive" alt="">
                <h4><?= $work->title ?></h4>
                <p><?= $work->description ?></p>
                <div class="icon-awesome">

                    <?php Modal::begin([
                        'size' => 'SIZE_LARGE',
                        'header' => '<h3>'.$work->title.'</h3><img src="'.$work->img.'" class="col-md-12" style="margin:30px 0 20px;opacity:1;"></img>',
                        'toggleButton' => [ 'tag' => 'a',
                                            'class' => 'fa fa-link',
                                            'label'=> '',],
                    ]);

                    echo $work->full;

                    Modal::end(); ?>
                </div>
            </div>
        <?php } ?>

    </div>
</div>

<!-- Testimonials -->
<div class="testimonials container">
    <div class="testimonials-title">
        <h3>Testimonials</h3>
    </div>
    <div class="row">
        <div class="testimonial-list col-md-12">
            <div class="tabbable tabs-below">
                <div class="tab-content">
                    <div class="tab-pane active" id="A">
                        <img src="<?= $testimonials1->img ?>" title="" alt="">
                        <p><?= $testimonials1->text ?><br/><span class="violet"><?= $testimonials1->name ?>
                                , <?= $testimonials1->address ?></span></p>
                    </div>
                    <div class="tab-pane" id="B">
                        <img src="<?= $testimonials2->img ?>" title="" alt="">
                        <p><?= $testimonials2->text ?><br/><span class="violet"><?= $testimonials2->name ?>
                                , <?= $testimonials2->address ?></span></p>
                    </div>
                    <div class="tab-pane" id="C">
                        <img src="<?= $testimonials3->img ?>" title="" alt="">
                        <p><?= $testimonials3->text ?><br/><span class="violet"><?= $testimonials3->name ?>
                                , <?= $testimonials3->address ?></span></p>
                    </div>
                    <div class="tab-pane" id="D">
                        <img src="<?= $testimonials4->img ?>" title="" alt="">
                        <p><?= $testimonials4->text ?><br/><span class="violet"><?= $testimonials4->name ?>
                                , <?= $testimonials4->address ?></span></p>
                    </div>

                </div>
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#A" data-toggle="tab"></a></li>
                    <li class=""><a href="#B" data-toggle="tab"></a></li>
                    <li class=""><a href="#C" data-toggle="tab"></a></li>
                    <li class=""><a href="#D" data-toggle="tab"></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>