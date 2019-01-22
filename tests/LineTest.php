<?php

namespace Tests;

use antishov\Morris;
use yii\web\JsExpression;

class LineTest extends \Codeception\Test\Unit
{
    /**
     * @var \Tests\UnitTester
     */
    protected $tester;

    // tests
    public function testWidget()
    {
        $chart = Morris\Line::widget([
            'resize' => true,
            'gridTextSize' => 11,
            'element' => 'lineChart',
            'data' => [
                ['date' => '2017-06-14', 'value' => 2],
                ['date' => '2017-06-15', 'value' => 4],
                ['date' => '2017-06-16', 'value' => 1]
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
        ]);

        $this->assertNotEmpty($chart);
        $this->assertInternalType('string', $chart);
    }
}