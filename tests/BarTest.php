<?php

namespace Tests;

use antishov\Morris;

class BarTest extends \Codeception\Test\Unit
{
    /**
     * @var \Tests\UnitTester
     */
    protected $tester;

    // tests
    public function testWidget()
    {
        $chart = Morris\Bar::widget([
            'element' => 'barChart',
            'data' => [
                ['date' => '2017-06-14', 'value' => 2.36],
                ['date' => '2017-06-15', 'value' => 0.79],
                ['date' => '2017-06-16', 'value' => 9.99]
            ],
            'xKey' => 'date',
            'yKeys' => ['value'],
            'labels' => ['Revenue'],
            'barColors' => ['rgb(82, 188, 211)', 'rgb(49, 167, 193)'],
        ]);

        $this->assertNotEmpty($chart);
        $this->assertInternalType('string', $chart);
    }
}