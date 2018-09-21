<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use backend\assets\PluginAsset;
use backend\assets\FontAsset;
use backend\assets\HeadAsset;

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
PluginAsset::register($this);
FontAsset::register($this);
HeadAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext"
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>

     <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/c3/0.6.7/c3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/4.13.0/d3.min.js"></script> -->
    <?php $this->head() ?>
   

    <?php 
        // $this->registerJsFile('plugins/charts-c3/js/c3.min.js');
        // $this->registerJsFile('plugins/charts-c3/js/d3.v4.min.js');
    ?>

</head>
<body>
<?php $this->beginBody() ?>

<div class="page">
    <div class="page-main">
        <?= $this->render('header.php');?>
        <?= $this->render('menu.php');?>
        <?= $content ?>
        <?= $this->render('footer.php');?>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
