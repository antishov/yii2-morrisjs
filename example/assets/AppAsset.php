<?php

namespace antishov\Morris\example\assets;

use antishov\Morris\MorrisAsset;
use yii\bootstrap\BootstrapAsset;
use yii\web\AssetBundle;
use yii\web\YiiAsset;

class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [

    ];
    public $js = [
    ];
    public $depends = [
        YiiAsset::class,
        BootstrapAsset::class,
        MorrisAsset::class,
    ];
}