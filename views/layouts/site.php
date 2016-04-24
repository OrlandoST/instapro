<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\widgets\Footer;
use app\widgets\Services;
use app\widgets\Team;
use app\widgets\Menu;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <?php $this->head() ?>
    	<style>
        .prf-btn{
        width: 20px;
        height:20px;
        border-radius: 50%;
        line-height: 20px;
        color: white;
        float: right;
        text-align: center;
        cursor: pointer;
    }
		.ui-datepicker{ z-index:1151 !important; }
	</style>
</head>

    <!-- start-smoth-scrolling -->
    <script type="text/javascript">

        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->
</head>
<body>
<?php $this->beginBody() ?>      
<!-- banner -->
<?= $content ?>
<!--/header-banner-->
<!-- services -->
<div id="services"class="services">
    <?= Services::widget() ?>
</div>

<!-- //happy clients -->
<!-- professional team -->
<div id="team" class="team">
     <?= Team::widget() ?>
</div>
<div class="footer">
      <?= Footer::widget() ?>
</div>
<!-- //footer -->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>