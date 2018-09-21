<?php
namespace synamen\yii2tabler\assets;


use yii\web\AssetBundle;

class ThemeAsset extends AssetBundle
{
    public $sourcePath = '@synamen/yii2tabler/dist/';

    public $css = [
        'css/dashboard.css',
        'css/tabler.css',
    ];
    public $js = [
        'plugins/tooltip.min.js',        
        'plugins/popper.min.js',        
        'js/vendors/bootstrap.bundle.min.js',
        //'js/require.min.js',
        'js/site.js',
        'js/core.js',
        'js/dashboard.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'yii\web\YiiAsset',
        'synamen\yii2tabler\assets\HeadAsset',
        'synamen\yii2tabler\assets\FontAsset',
        'synamen\yii2tabler\assets\PluginAsset'
    ];
}
