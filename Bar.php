<?php

namespace antishov\Morris;

use yii\helpers\ArrayHelper;

class Bar extends Base
{
    public $barColors;

    protected $type = 'Bar';

    protected function getViewOptions()
    {
        $viewOptions = parent::getViewOptions();

        $viewOptions = ArrayHelper::merge($viewOptions, [
            'barColors' => $this->barColors,
        ]);

        return $viewOptions;
    }
}
