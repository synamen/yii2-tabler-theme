<?php 
namespace synamen\yii2tabler\assets;


use yii\web\AssetBundle;

class FontAsset extends AssetBundle
{
    public $sourcePath = '@synamen/yii2-tabler-theme/dist/';
    
    public $css = [
        'fonts/feather/feather-webfont.eot',
        'fonts/feather/feather-webfont.svg',
        'fonts/feather/feather-webfont.ttf',
        'fonts/feather/feather-webfont.woff',
    ];
    public $cssOptions = [
        'type' => 'text/font',
    ];
}