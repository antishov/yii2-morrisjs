yii2-morrisjs
===================

This is the [MorrisJS](http://morrisjs.github.io/morris.js/index.html) widget. It's a very simple API for drawing line and bar charts.

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/). Check the [composer.json](https://github.com/antishov/yii2-morrisjs/blob/master/composer.json) for this extension's requirements and dependencies.

To install, either run

```
$ composer require antishov/yii2-morrisjs
```

or add

```
"antishov/yii2-morrisjs": "@stable"
```

to the `require` section of your `composer.json` file.

## Usage

### Line Chart

#### Example of code
```php
use antishov\Morris;
use yii\web\JsExpression;

echo Morris\Line::widget([
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
```

#### Properties
`resize` - Set to `true` to enable automatic resizing when the containing element resizes. (default: `false`). This has a significant performance impact, so is disabled by default.

`gridTextSize` - Set the point size of the axis labels (default: `12`).

`element` - Identifier that will be assigned to the chart.

`data` - The data to plot. This is an array of objects, containing x and y attributes as described by the xkey and ykeys options. 

`xKey` - A string containing the name of the attribute that contains date (X) values (see available formats at [spec](http://morrisjs.github.io/morris.js/lines.html)).

`yKeys` - A list of strings containing names of attributes that contain Y values (one for each series of data to be plotted).

`labels` - A list of strings containing labels for the data series to be plotted (corresponding to the values in the `ykeys` option).

`xLabels` - Sets the x axis labelling interval. By default the interval will be automatically computed  (see valid interval strings at [spec](http://morrisjs.github.io/morris.js/lines.html)).

`yLabelFormat` -  function that accepts y-values and formats them for display as y-axis labels.
 
`yMin` - Min. bound for Y-values. Alternatively, set this to `'auto'` to compute automatically, or `'auto [num]'` to automatically compute and ensure that the min y-value is at most `[num]`.
  
`lineColors` - lineColors	Array containing colors for the series lines/points.

`pointFillColors` - Colors for the series points. By default uses the same values as `lineColors`.


### Bar Chart

``` php
use antishov\Morris;
use yii\web\JsExpression;

echo Morris\Bar::widget([
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
```
#### Properties
`element` - Identifier that will be assigned to the chart.

`data` - The data to plot. This is an array of objects, containing x and y attributes as described by the xkey and ykeys options. 

`xKey` - A string containing the name of the attribute that contains date (X) values (see available formats at [spec](http://morrisjs.github.io/morris.js/lines.html)).

`yKeys` - A list of strings containing names of attributes that contain Y values (one for each series of data to be plotted).

`labels` - A list of strings containing labels for the data series to be plotted (corresponding to the values in the `ykeys` option).

`barColors` - Array containing colors for the series bars.

## Examples

All examples are stored in the `example` subdirectory and based on Yii2 framework with [Docker](https://www.docker.com/). 
You are free to set up your own host. 

See `Dockerfile` and `docker-compose.yml` to get further information.

## License

**yii2-morrisjs** is released under the MIT License. See the bundled `LICENSE.md` for details.