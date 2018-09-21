<?php

namespace synamen\yii2tabler\assets;


use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class HeadAsset extends AssetBundle
{
    public $sourcePath = '@synamen/yii2-tabler-theme/dist/';

    public $css = [

    ];
    public $js = [
        'plugins/charts-c3/js/c3.min.js',
        'plugins/charts-c3/js/d3.v3.min.js',      
        
    ];
    public $jsOptions = ['position' => \yii\web\View::POS_HEAD];
}
