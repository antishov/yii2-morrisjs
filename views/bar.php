<?php

use yii\helpers\Json;

/**
 * @var array $data
 * @var array $yKeys
 * @var array $labels
 * @var array $barColors
 * @var string $element
 * @var string $xKey
 * @var string $hideHover
 * @var string $resize
 * @var string $constructor
 * @var integer $gridTextSize
 */

$dataJson = Json::encode($data);
$yKeysJson = Json::encode($yKeys);
$labelsJson = Json::encode($labels);
$barColorsJson = Json::encode($barColors);

?>

<div id="<?= $element ?>"></div>
<?php $this->registerJs("window.{$element} = Morris.{$constructor}({
    element: '{$element}',
    data: {$dataJson},
    xkey: '{$xKey}',
    ykeys: {$yKeysJson},
    labels: {$labelsJson},
    hideHover: '{$hideHover}',
    resize: {$resize},
    barColors: {$barColorsJson},
    gridTextSize: {$gridTextSize}
  });");