<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
//        'css/site.css',
//        'https://export.qodethemes.com/',
//        'https://fonts.googleapis.com/',
//        'https://s.w.org/',
//        'https://etchy.qodeinteractive.com/feed/',
//        'https://etchy.qodeinteractive.com/comments/feed/',
//        'https://etchy.qodeinteractive.com/etchy-shop/feed/',
        'shop/css/main.css',
        'shop/wp-content/cache/minify/d9c00.css',
//        'https://fonts.googleapis.com/icon?family=Material+Icons&#038;ver=5.4.2',
        'shop/wp-content/cache/minify/5be63.css',
        'https://export.qodethemes.com/_toolbar/assets/css/rbt-modules.css?ver=5.4.2',
        'shop/wp-content/cache/minify/edd85.css',
        'shop/wp-content/cache/minify/0c288.css',
//        'https://fonts.googleapis.com/css?family=Arimo%3A300%2C400%2C500%2C600%2C700&#038;subset=latin-ext&#038;ver=1.0.0',
        'shop/wp-content/cache/minify/32b13.css',
        'shop/css/main1.css',

        'shop/',
    ];
    public $js = [
        'shop/js/main.js',
        'shop/wp-content/cache/minify/a4d4c.js',
        'shop/wp-content/cache/minify/0fef6.js',
        'https://export.qodethemes.com/_toolbar/assets/js/rbt-modules.js?ver=5.4.2',
        'shop/wp-content/cache/minify/6d18f.js',
        'shop/wp-content/cache/minify/dc06c.js',
        'shop/wp-content/cache/minify/63a69.js',
        'shop/wp-content/cache/minify/cc2c8.js',
        'shop/wp-content/cache/minify/7e9ae.js',
        'shop/wp-content/cache/minify/45375.js',
        'shop/wp-content/cache/minify/3c19f.js',
        'shop/wp-content/cache/minify/97206.js',
        'shop/wp-content/cache/minify/2bda3.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
