<?php
namespace synamen\yii2tabler\assets;


use yii\web\AssetBundle;

class ThemeAsset extends AssetBundle
{
    public $sourcePath = '@synamen/yii2-tabler-theme/dist/';

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
        'synamen\yii2-tabler-theme\HeadAsset',
        'synamen\yii2-tabler-theme\FontAsset',
        'synamen\yii2-tabler-theme\PluginAsset'
    ];
}
