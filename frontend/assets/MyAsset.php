<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class MyAsset extends AssetBundle
{
    public $sourcePath = '@app/assets/src';
    public $baseUrl = '@web';
    public $css = [
        'css/flexslider.css',
        'css/bootstrap.min.css',
        'css/font-awesome.min.css',
        'prettyPhoto/css/prettyPhoto.css',
        'css/style.css'
    ];
    public $js = [
        'js/jquery.min.js',
        'js/bootstrap.min.js',
        'js/jflickrfeed.js',
        'js/jquery.flexslider.js',
        'js/jquery.quicksand.js',
        'js/jquery.tweet.js',
        //'js/jquery.ui.map.min.js',
        'prettyPhoto/js/jquery.prettyPhoto.js',
    ];
    public $depends = [
    ];
}
