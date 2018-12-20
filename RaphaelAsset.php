<?php

namespace antishov\Morris;

use yii\web\AssetBundle;

/**
 * RaphaelAsset.php
 *.
 */
class RaphaelAsset extends AssetBundle {
    public $sourcePath = '@bower/raphael';
    public $depends = [
        'yii\web\YiiAsset'
    ];

    public function init()
    {
        $this->js = YII_DEBUG ? ['raphael.js'] : ['raphael.min.js'];
    }

}