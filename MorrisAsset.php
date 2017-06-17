<?php

namespace antishov\Morris;

use yii\web\AssetBundle;

class MorrisAsset extends AssetBundle
{
    public $sourcePath = __DIR__ . '/assets';

    public $js = [
        'js/morrisjs.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
