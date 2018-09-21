<?php

namespace synamen\Yii2TablerTheme\assets;


use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{

    public $depends = [
        'synamen\yii2-tabler-theme\ThemeAsset',
    ];
}
