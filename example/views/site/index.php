<?php

use antishov\Morris;
use yii\web\JsExpression;
use yii\web\View;

/**
 * @var $this View
 */

$this->title = 'Yii2-Morrisjs';

?>
<div>
    <div class="row">
        <div class="col-xs-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Line chart
                    <a href="https://github.com/antishov/yii2-morrisjs/blob/master/README.md#line-chart" class="pull-right">Usage api</a>
                </div>
                <div class="panel-body">
                    <?= Morris\Line::widget([
                        'resize' => true,
                        'gridTextSize' => 11,
                        'element' => 'lineChart',
                        'data' => [
                            ['date' => '2017-06-14', 'value' => 2],
                            ['date' => '2017-06-15', 'value' => 4],
                            ['date' => '2017-06-16', 'value' => 10],
                            ['date' => '2017-06-10', 'value' => 1],
                            ['date' => '2017-06-19', 'value' => 3],
                        ],
                        'xKey' => 'date',
                        'yKeys' => ['value'],
                        'labels' => ['Impressions'],
                        'xLabels' => 'day',
                        'yLabelFormat' => new JsExpression(
                            'function (y) {if (y === parseInt(y, 10)) {return y;}else {return "";}}'
                        ),
                        'yMin' => 'auto 40',
                        'lineColors' => ['rgb(123, 204, 221)'],
                        'pointFillColors' => ['rgb(82, 188, 211)'],
                    ]); ?>
                </div>
            </div>
        </div>
        <div class="col-xs-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Bar chart
                    <a href="https://github.com/antishov/yii2-morrisjs/blob/master/README.md#bar-chart" class="pull-right">Usage api</a>
                </div>
                <div class="panel-body">
                    <?= Morris\Bar::widget([
                        'element' => 'barChart',
                        'data' => [
                            ['date' => '2017-06-14', 'value' => 2],
                            ['date' => '2017-06-15', 'value' => 4],
                            ['date' => '2017-06-16', 'value' => 10],
                            ['date' => '2017-06-10', 'value' => 1],
                            ['date' => '2017-06-19', 'value' => 3],
                        ],
                        'xKey' => 'date',
                        'yKeys' => ['value'],
                        'labels' => ['Revenue'],
                        'barColors' => ['rgb(82, 188, 211)', 'rgb(49, 167, 193)'],
                    ]); ?>
                </div>
            </div>
        </div>
    </div>
</div>
