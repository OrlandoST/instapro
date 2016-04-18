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
    public $baseUrl = 'web/';
    public $css = [
        'css/custom.css',
        'css/font-awesome.min.css',
        'css/animate.min.css',
        'css/bootstrap-datetimepicker.css',
        'dist/dropzone.css',
        'css/style.css',
    ];
    public $js = [
        'dist/dropzone.js',
        'min/moment.min.js',
        'progressbar/bootstrap-progressbar.min.js',
        'nicescroll/jquery.nicescroll.min.js',
        'icheck/icheck.min.js',
        'pace/pace.min.js',
        'moment/moment.min.js',
        'datepicker/daterangepicker.js',
        'js/bootstrap.min.js',
        'js/custom.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
