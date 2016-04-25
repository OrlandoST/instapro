<?php
use app\widgets\Profile;
use app\widgets\Sidebarmenu;
use app\widgets\Topnav;
use app\widgets\Sidebar;
use app\widgets\Sidebarfooter;

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\DashboardAsset;

DashboardAsset::register($this);
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
    <?php $this->head() ?>
    <script type="text/javascript" src="/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
	  <script src="/bower_components/moment/locale/ru.js"></script>
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




<body class="nav-md">
<?php $this->beginBody() ?>    
<div class="container body">
    <div class="main_container">

        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
		        <div class="navbar nav_title" style="border: 0;">
                    <a href="/" class="site_title"><i class="fa fa-paw"></i> <span>Instapro</span></a>
                </div>
                <!-- profile instagram content -->    
                <?= Profile::widget(['user' => Yii::$app->user->identity]) ?>
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>УПРАВЛЕНИЕ АККАУНТОМ</h3>
                        <?= Sidebar::widget() ?> 
                    </div> 
                    <div class="sidebar-footer hidden-small">
                        <?= Sidebarfooter::widget() ?>
                    </div>
                </div>
                                <!-- /menu footer buttons -->

             <!-- /menu footer buttons -->
            </div>
            
                <!-- /sidebar menu -->
        </div>

<!-- top navigation -->
                      
      <div class="top_nav">
          <?= Topnav::widget(['user' => Yii::$app->user->identity]) ?>
        </div>
      <!-- /top navigation -->
      <div class="right_col" role="main">
        <div class="">
        <?= $content ?>
        </div>
        <footer>
          <div class="clearfix"></div>
        </footer>
    </div>        
    </div>

</div>
                              
    <!-- bootstrap progress js -->
  <!-- icheck -->


  <!-- pace -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>