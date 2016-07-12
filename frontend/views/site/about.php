<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Andia - About';
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
                <i class="fa fa-user page-title-icon"></i>
                <h2>About Us /</h2>
                <p>Below you can find more information about our company</p>
            </div>
        </div>
    </div>
</div>

<!-- About Us Text -->
<div class="about-us container">
    <div class="row">
        <div class="about-us-text col-md-12">
            <h4>About Andia</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper <span class="violet">suscipit lobortis</span> nisl ut aliquip ex ea commodo consequat. Lorem ipsum <strong>dolor sit amet</strong>, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do <strong>eiusmod tempor</strong> incididunt.</p>
            <h4>Our Mission</h4>
            <p>Lorem ipsum dolor sit amet, <span class="violet">consectetur adipisicing</span> elit, sed do eiusmod tempor incididunt ut labore et. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, <strong>consectetur adipisicing</strong> elit, sed do eiusmod <span class="violet">tempor incididunt</span> ut labore et. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
            <h4>Why Choose Us</h4>
            <p>Lorem ipsum dolor sit amet, <strong>consectetur adipisicing elit</strong>, sed do eiusmod tempor incididunt ut labore et. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Ut wisi enim ad minim veniam, quis <span class="violet">nostrud exerci</span> tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
        </div>
    </div>
</div>

<!-- Meet Our Team -->
<div class="team container">
    <div class="team-title">
        <h3>Meet Our Team</h3>
    </div>
    <div class="row">
        <?php foreach ($team as $t) { ?>
        <div class="team-text col-md-3">
            	
            <img src="<?=$t->img?>" class="img-responsive" alt="<?=$t->name?>">
            <h4><?=$t->name?></h4>
            <p><?=$t->testimonial?></p>
            <div class="social-links">
                <a class="facebook" href="http://facebook.com/<?= strtolower(str_replace(" ", ".", $t->name))?>"></a>
                <a class="twitter" href="http://twitter.com/<?= strtolower(str_replace(" ", "_", $t->name))?>"></a>
                <a class="linkedin" href="http://linkedin.com/<?= strtolower(str_replace(" ", ".", $t->name))?>"></a>
                <a class="email" href="http://<?=$t->email?>"></a>
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
                        <img src="<?=$testimonials1->img?>" title="" alt="">
                        <p><?=$testimonials1->text?><br /><span class="violet"><?=$testimonials1->name?>, <?=$testimonials1->address?></span></p>
                    </div>
                    <div class="tab-pane" id="B">
                        <img src="<?=$testimonials2->img?>" title="" alt="">
                        <p><?=$testimonials2->text?><br /><span class="violet"><?=$testimonials2->name?>, <?=$testimonials2->address?></span></p>
                    </div>
                    <div class="tab-pane" id="C">
                        <img src="<?=$testimonials3->img?>" title="" alt="">
                        <p><?=$testimonials3->text?><br /><span class="violet"><?=$testimonials3->name?>, <?=$testimonials3->address?></span></p>
                    </div>
                    <div class="tab-pane" id="D">
                        <img src="<?=$testimonials4->img?>" title="" alt="">
                        <p><?=$testimonials4->text?><br /><span class="violet"><?=$testimonials4->name?>, <?=$testimonials4->address?></span></p>
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