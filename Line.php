<?php

namespace antishov\Morris;

use yii\helpers\ArrayHelper;

class Line extends Base
{
    public $yMin;
    public $xLabels;
    public $yLabelFormat;
    public $lineColors;
    public $pointFillColors;

    protected $type = 'Line';

    protected function getViewOptions()
    {
        $viewOptions = parent::getViewOptions();

        $viewOptions = ArrayHelper::merge($viewOptions, [
            'yMin' => $this->yMin,
            'xLabels' => $this->xLabels,
            'yLabelFormat' => $this->yLabelFormat,
            'lineColors' => $this->lineColors,
            'pointFillColors' => $this->pointFillColors,
        ]);

        return $viewOptions;
    }
}
