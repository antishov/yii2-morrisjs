<?php

namespace antishov\Morris;

use yii\web\AssetBundle;

class MorrisAsset extends AssetBundle
{
    public $sourcePath = '@bower/morrisjs';
    public $depends = [
        'yii\web\YiiAsset'
    ];

    public function init()
    {
        $this->js = YII_DEBUG ? ['morris.js'] : ['morris.min.js'];
    } 

}
