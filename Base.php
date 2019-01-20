<?php

namespace antishov\Morris;

use yii\base\Widget;

class Base extends Widget
{
    public $element;
    public $data;
    public $xKey;
    public $yKeys;
    public $labels;
    public $hideHover;
    public $resize = false;
    public $gridTextSize = 12;

    protected $type;

    protected function drawView()
    {
        $viewTitle = $this->getViewTitle();
        $viewOptions = $this->getViewOptions();

        return $this->renderFile(__DIR__ . "/views/{$viewTitle}.php", $viewOptions);
    }

    public function run()
    {
        parent::run();

        $this->registerAssets();
        return $this->drawView();
    }

    protected function getViewTitle()
    {
        return strtolower($this->type);
    }

    protected function registerAssets()
    {
        MorrisAsset::register($this->view);
        RaphaelAsset::register($this->view);
    }

    protected function getViewOptions()
    {
        return [
            'constructor' => $this->type,
            'element' => $this->element,
            'data' => $this->data,
            'xKey' => $this->xKey,
            'yKeys' => $this->yKeys,
            'labels' => $this->labels,
            'hideHover' => $this->hideHover,
            'resize' => (int) $this->resize,
            'gridTextSize' => $this->gridTextSize,
        ];
    }
}
