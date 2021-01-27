<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        "bootstrap4/css/bootstrap.css",
//        "bootstrap4/css/bootstrap.css.map",
//        "bootstrap4/css/bootstrap.min.css",
//        "bootstrap4/css/bootstrap.min.css.map",
        "bootstrap4/css/bootstrap-grid.css",
//        "bootstrap4/css/bootstrap-grid.css.map",
//        "bootstrap4/css/bootstrap-grid.min.css",
//        "bootstrap4/css/bootstrap-grid.min.css.map",
        "bootstrap4/css/bootstrap-reboot.css",
//        "bootstrap4/css/bootstrap-reboot.css.map",
//        "bootstrap4/css/bootstrap-reboot.min.css",
//        "bootstrap4/css/bootstrap-reboot.min.css.map",
        "admin/fontawesome/css/all.css",
        "admin/css/main.css",
    ];
    public $js = [
        "bootstrap4/js/bootstrap.bundle.js",
//        "bootstrap4/js/bootstrap.bundle.js.map",
//        "bootstrap4/js/bootstrap.bundle.min.js",
//        "bootstrap4/js/bootstrap.bundle.min.js.map",
        "bootstrap4/js/bootstrap.js",
//        "bootstrap4/js/bootstrap.js.map",
//        "bootstrap4/js/bootstrap.min.js",
//        "bootstrap4/js/bootstrap.min.js.map",
        "https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js",
        "admin/js/main.js",
        "admin/fontawesome/css/all.js",

    ];
    public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
