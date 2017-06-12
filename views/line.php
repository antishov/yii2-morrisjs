<?php

use yii\helpers\Json;

/**
 * @var array $data
 * @var array $yKeys
 * @var array $labels
 * @var array $lineColors
 * @var array $pointFillColors
 * @var string $element
 * @var string $xKey
 * @var string $yMin
 * @var string $xLabels
 * @var string $hideHover
 * @var string $yLabelFormat
 * @var string $resize
 * @var string $constructor
 * @var integer $gridTextSize
 */

$dataJson = Json::encode($data);
$yKeysJson = Json::encode($yKeys);
$labelsJson = Json::encode($labels);
$lineColorsJson = Json::encode($lineColors);
$pointFillColorsJson = Json::encode($pointFillColors);

?>

<div id="<?= $element ?>"></div>
<?php $this->registerJs("window.{$element} = Morris.{$constructor}({
    element: '{$element}',
    data: {$dataJson},
    xkey: '{$xKey}',
    ykeys: {$yKeysJson},
    ymin: '{$yMin}',
    labels: {$labelsJson},
    xLabels: '{$xLabels}',
    hideHover: '{$hideHover}',
    yLabelFormat: '{$yLabelFormat}',
    resize: '{$resize}',
    lineColors: {$lineColorsJson},
    pointFillColors: {$pointFillColorsJson},
    gridTextSize: {$gridTextSize}
  });");