<?php


namespace backend\assets;


class UserAsset
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        "bootstrap4/css/bootstrap.css",
        "bootstrap4/css/bootstrap.css.map",
        "bootstrap4/css/bootstrap.min.css",
        "bootstrap4/css/bootstrap.min.css.map",
        "bootstrap4/css/bootstrap-grid.css",
        "bootstrap4/css/bootstrap-grid.css.map",
        "bootstrap4/css/bootstrap-grid.min.css",
        "bootstrap4/css/bootstrap-grid.min.css.map",
        "bootstrap4/css/bootstrap-reboot.css",
        "bootstrap4/css/bootstrap-reboot.css.map",
        "bootstrap4/css/bootstrap-reboot.min.css",
        "bootstrap4/css/bootstrap-reboot.min.css.map",
        "admin/css/main.css"
    ];
    public $js = [
        "bootstrap4/js/bootstrap.bundle.js",
        "bootstrap4/js/bootstrap.bundle.js.map",
        "bootstrap4/js/bootstrap.bundle.min.js",
        "bootstrap4/js/bootstrap.bundle.min.js.map",
        "bootstrap4/js/bootstrap.js",
        "bootstrap4/js/bootstrap.js.map",
        "bootstrap4/js/bootstrap.min.js",
        "bootstrap4/js/bootstrap.min.js.map",
        "admin/js/main.js",

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

    public static function register(\yii\web\View $param)
    {
    }
}