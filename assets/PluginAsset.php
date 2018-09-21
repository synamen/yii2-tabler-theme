<?php

namespace synamen\Yii2TablerTheme\assets;


use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class PluginAsset extends AssetBundle
{
    public $sourcePath = '@synamen/yii2-tabler-theme/dist/';

    public $css = [
        'plugins/charts-c3/plugin.css',
        'plugins/fullcalendar/plugin.css',
        'plugins/prismjs/plugin.css',
        'plugins/maps-google/plugin.css',

        'plugins/iconfonts/fonts/materialdesignicons/materialdesignicons-webfont.eot',
        'plugins/iconfonts/fonts/materialdesignicons/materialdesignicons-webfont.svg',
        'plugins/iconfonts/fonts/materialdesignicons/materialdesignicons-webfont.ttf',
        'plugins/iconfonts/fonts/materialdesignicons/materialdesignicons-webfont.woff',
        'plugins/iconfonts/fonts/materialdesignicons/materialdesignicons-webfont.woff2',
        'plugins/iconfonts/fonts/simple-line-icons/Simple-Line-Icons.eot',
        'plugins/iconfonts/fonts/simple-line-icons/Simple-Line-Icons.svg',
        'plugins/iconfonts/fonts/simple-line-icons/Simple-Line-Icons.ttf',
        'plugins/iconfonts/fonts/simple-line-icons/Simple-Line-Icons.woff',
        'plugins/iconfonts/fonts/simple-line-icons/Simple-Line-Icons.woff2',
        'plugins/iconfonts/fonts/themify/themify.eot',
        'plugins/iconfonts/fonts/themify/themify.svg',
        'plugins/iconfonts/fonts/themify/themify.ttf',
        'plugins/iconfonts/fonts/themify/themify.woff',
        'plugins/iconfonts/fonts/weathericons/weathericons-regular-webfont.eot',
        'plugins/iconfonts/fonts/weathericons/weathericons-regular-webfont.svg',
        'plugins/iconfonts/fonts/weathericons/weathericons-regular-webfont.ttf',
        'plugins/iconfonts/fonts/weathericons/weathericons-regular-webfont.woff',
        'plugins/iconfonts/fonts/weathericons/weathericons-regular-webfont.woff2',

    ];
    public $js = [
        'js/vendors/chart.bundle.min.js',
        'js/vendors/circle-progress.min.js',
        'js/vendors/jquery-3.2.1.slim.min.js',
        'js/vendors/jquery-jvectormap-2.0.3.min.js',
        'js/vendors/jquery-jvectormap-de-merc.js',
        'js/vendors/jquery-jvectormap-world-mill.js',
        'js/vendors/jquery.sparkline.min.js',
        'js/vendors/jquery.tablesorter.min.js',
        'js/vendors/selectize.min.js',
        
        // 'plugins/charts-c3/js/c3.min.js',
        // 'plugins/charts-c3/js/d3.v4.min.js',
        'plugins/fullcalendar/js/moment.min.js',
        'plugins/fullcalendar/js/fullcalendar.min.js',
        'plugins/input-mask/js/jquery.mask.min.js',
        'plugins/input-mask/plugin.js',
        'plugins/maps-google/plugin.js',
        'plugins/prismjs/js/prism.pack.js',
        
    ];
    public $depends = [
        'backend\assets\AppAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
