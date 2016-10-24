<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/base.css',
        'css/fonts.css',
        'css/main.css',
        'css/media-queries.css',
        'css/simple-line-icons/simple-line-icons.css',
        'css/simple-line-icons/style.css',
        'css/font-awesome/font-awesome.css',
        'css/font-awesome/font-awesome.min.css',
        'css/materialize.css',
        'css/materialize.min.css'
    ];
    public $js = [
        'js/backstretch.js',
        'js/jquery.fittext.js',
        'js/jquery.flexslider.js',
        'js/jquery-1.10.2.min.js',
        'js/jquery-migrate-1.2.1.min.js',
        'js/main.js',
        'js/modernizr.js',
        'js/waypoints.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
