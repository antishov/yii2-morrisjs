<?php
/* @var $this \yii\web\View */
/* @var $content string */

use antishov\Morris\example\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);

?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>
    <div class="wrap">
        <div class="container" style="padding-top: 15px;"><?= $content ?></div>
    </div>
    <footer class="footer navbar-fixed-bottom">
        <div class="container">
            <p class="pull-left">
                <a href="mailto:antishov.viktor@gmail.com">antishov.viktor@gmail.com</a>
            </p>
            <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>