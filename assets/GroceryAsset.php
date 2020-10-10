<?php


namespace app\assets;


use yii\web\AssetBundle;

class GroceryAsset extends AssetBundle
{

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
            'css/bootstrap.css',
            'css/style.css',
             'css/font-awesome.css',
              'css/flexslider.css',
              '//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,
              500,500italic,700,700italic',
              '//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,
              600,600italic,700,700italic,800,800italic',



    ];
    public $js = [
        "js/jquery-1.11.1.min.js",
        "js/bootstrap.min.js",
        "js/move-top.js",
        "js/easing.js",
        "js/jquery.flexslider.js",
        "js/minicart.js",
        "js/okzoom.js",
        "js/main.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',

    ];


}