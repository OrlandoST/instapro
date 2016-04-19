<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Pavel. Orlov
 * @since 2.0
 */
class DashboardAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@assets';
    public $css = [
        'css/font-awesome.min.css',
        'css/animate.min.css',
        'css/bootstrap-datetimepicker.css',
        'dist/dropzone.css',
        'css/custom.css',
    ];
    public $js = [
        'js/dropzone.js',
        'js/moment.min.js',
        'js/bootstrap-progressbar.min.js',
        'js/jquery.nicescroll.min.js',
        'js/icheck.min.js',
        'js/pace.min.js',
        'js/moment/moment.min.js',
        'js/daterangepicker.js',
        'js/custom.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
