<?php
/* @var $this yii\web\View */
$this->title = 'Andia - Portfolio';
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
                <i class="fa fa-camera page-title-icon"></i>
                <h2>Portfolio /</h2>
                <p>Here is the work we've done so far</p>
            </div>
        </div>
    </div>
</div>


<!-- Portfolio -->
<div class="portfolio-list portfolio-page container">
    <div class="row">
        <div class="portfolio-navigator col-md-12">
            
                <h4 class="filter-portfolio nav nav-tabs">
                <a class="all" id="active-imgs" href="#A" data-toggle="tab">All</a> /
                <a class="web" id="" href="#W" data-toggle="tab">Web Design</a> /
                <a class="logo" id="" href="#L" data-toggle="tab">Logo Design</a> /
                <a class="print" id="print" href="#P" data-toggle="tab">Print Design</a>
                </h4>
                </div>
            </div>    
    <div class="row">
        <ul class="portfolio-img col-md-12">
            <div class="tabbable tabs-below">
                <div class="tab-content">
                    <div class="tab-pane active" id="A">	
                        <?php $number = 0; foreach ($all as $work) { $number++;?>
                        <li data-id="p-<?=$number?>" data-type="all" class="col-md-3">
                            <div class="work">
                                <a href="<?=$work->img?>" rel="prettyPhoto">
                                    <img src="<?=$work->img?>" class="img-responsive" alt="">
                                </a>
                                <h4><?=$work->title?></h4>
                                <p><?=$work->description?></p>
                            </div>
                        </li>
                        <?php } ?>
                    </div>
                    <div class="tab-pane" id="W">   
                        <?php $number = 0; foreach ($web as $work) { $number++;?>
                        <li data-id="p-<?=$number?>" data-type="web-design" class="col-md-3">
                            <div class="work">
                                <a href="<?=$work->img?>" rel="prettyPhoto">
                                    <img src="<?=$work->img?>" class="img-responsive" alt="">
                                </a>
                                <h4><?=$work->title?></h4>
                                <p><?=$work->description?></p>
                            </div>
                        </li>
                        <?php } ?>
                    </div>
                    <div class="tab-pane" id="L">   
                        <?php $number = 0; foreach ($logo as $work) { $number++;?>
                        <li data-id="p-<?=$number?>" data-type="logo-design" class="col-md-3">
                            <div class="work">
                                <a href="<?=$work->img?>" rel="prettyPhoto">
                                    <img src="<?=$work->img?>" class="img-responsive" alt="">
                                </a>
                                <h4><?=$work->title?></h4>
                                <p><?=$work->description?></p>
                            </div>
                        </li>
                        <?php } ?>
                    </div>
                    <div class="tab-pane" id="P">	
                        <?php $number = 0; foreach ($print as $work) { $number++;?>
                        <li data-id="p-<?=$number?>" data-type="print-design" class="col-md-3">
                            <div class="work">
                                <a href="<?=$work->img?>" rel="prettyPhoto">
                                    <img src="<?=$work->img?>" class="img-responsive" alt="">
                                </a>
                                <h4><?=$work->title?></h4>
                                <p><?=$work->description?></p>
                            </div>
                        </li>
                        <?php } ?>
                    </div>
                </div>
            </div>    
        </ul>
    </div>
</div>
