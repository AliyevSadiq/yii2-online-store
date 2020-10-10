<?php

namespace app\assets;

use yii\web\AssetBundle;

class AdminAsset extends AssetBundle
{

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'web/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css',
        'web/adminlte/bower_components/font-awesome/css/font-awesome.min.css',
        'web/adminlte/bower_components/Ionicons/css/ionicons.min.css',
        'web/adminlte/dist/css/AdminLTE.min.css',
        'web/adminlte/dist/css/skins/skin-blue.min.css',
        '//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic',
    ];
    public $js = [
     //   'web/adminlte/bower_components/jquery/dist/jquery.min.js',
        'web/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js',
        'web/adminlte/dist/js/adminlte.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];

}