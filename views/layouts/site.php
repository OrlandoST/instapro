<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

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
<head>

	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">

	<title>Личный кабинет</title>
	<!-- Bootstrap core CSS -->
    <link href="<?=$this->sitePath?>css/custom.css" rel="stylesheet">
	<link href="<?=$this->sitePath?>fonts/css/font-awesome.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    <link href="<?=$this->sitePath?>css/animate.min.css" rel="stylesheet">
	<!-- Custom styling plus plugins -->
 	<link href="<?=$this->sitePath?>bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
	<script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>
	<link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">
	<!--<script src="js/jquery.min.js"></script>-->
	<script src="<?=$this->sitePath?>bower_components/moment/min/moment.min.js"></script>
	<script type="text/javascript" src="<?=$this->sitePath?>bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
	<script src="<?=$this->sitePath?>bower_components/moment/locale/ru.js"></script>

</head>

<body class="nav-md">
<?php $this->beginBody() ?>    
<div class="container body">
    <div class="main_container">

        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
			<div class="navbar nav_title" style="border: 0;">
              <div class="clearfix"></div>

                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                    <div class="menu_section">
                      <ul class="nav side-menu">
                        
                              <!-- profile instagram content -->         
                <div class="x_content">  
                    <div class="profile_img">
                      <!-- end of image cropping -->
                      <div id="crop-avatar">
                        <!-- Current avatar -->
                        <div class="avatar-view" title="Change the avatar">
                          <img src="<?=$this->sitePath?>images/img.jpg" alt="Avatar">
                        </div>
                        <!-- Loading state -->
                        <div class="loading" aria-label="Loading" role="img" tabindex="-1"></div>
                      </div>
                      <!-- end of image cropping -->
                    </div>
                    <h3>StrogunA</h3>
                    <ul class="list-unstyled user_data">
                      <li><i class="fa fa-map-marker user-profile-icon"></i> Акаунтов: 2
                      </li>
                      <li>
                      <li class="m-top-xs">
                        <i class="fa fa-external-link user-profile-icon"></i> Задач: 21
                      </li>
                    </ul>
                    <br />
                 </div>
               </div>
     <!-- profile instagram content -->
                        
                      </ul>  
                   <ul class="nav side-menu">       
                     <li><a href="/autoposting"><i class="fa fa-camera"></i> Фотоплёнка </a>
                  <li><a href="#"><i class="fa fa-users"></i> Подписчики </a>
                  <li><a href="#"><i class="fa fa-users"></i> Подписки </a>
                  <br><br><br>
                  <li><a href="/dashboard"><i class="fa fa-tachometer"></i> Dasboard </a>       
                  <li><a href="#"><i class="fa fa-code"></i> Логи </a>
                   </ul>  
                    </div> 
                </div>
                <!-- /sidebar menu -->
                <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
            <a href="#" data-toggle="tooltip" data-placement="top" title="Акаунты">
              <span class="fa fa-users" aria-hidden="true"></span>
            </a>
            <a href="/profile/settings" data-toggle="tooltip" data-placement="top" title="Настройки">
              <span class="fa fa-cogs" aria-hidden="true"></span>
            </a>
            <a href="#" data-toggle="tooltip" data-placement="top" title="Lock">
              <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a href="/profile/logout" data-toggle="tooltip" data-placement="top" title="Выход">
              <span class="fa fa-sign-in" aria-hidden="true"></span>
            </a>
          </div>
             <!-- /menu footer buttons -->
            </div>
        </div>
                    
<!-- top navigation -->
                      
      <div class="top_nav">

        <div class="nav_menu">
          <nav class="" role="navigation">
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
              <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  <img src="<?=$this->sitePath?>images/img.jpg" alt="">Имя пользователя
                  <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                  <li><a href="#">
                  <i class="fa fa-bookmark pull-right"></i> Помощь</a>
                  </li>
                  <li><a href="/profile/settings">
                  <i class="fa fa-cogs pull-right"></i> Настройки профиля</a>
                  </li>
                  <li><a href="/profile/logout">
                  <i class="fa fa-sign-out pull-right"></i> Выход</a>
                  </li>
                </ul>
              </li>
             <li role="presentation" class="dropdown">
                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-lightbulb-o"></i>
                  <span class="badge bg-green">2</span>
                </a>
                <ul id="menu1" class="dropdown-menu list-unstyled msg_list animated fadeInDown" role="menu">
                  <li>
                    <a>
                      <span class="image"><img src="images/img.jpg" alt="Profile Image" /> </span>
                      <span>
                      <span>Новый дизайн</span>
                      <span class="time">40 минут назад</span>
                      </span>
                      <span class="message"> Рады представить вам новый обнавлённый дизайн.</span>
                    </a>
                  </li>
                  <li>
                    <a>
                      <span class="image"><img src="images/img.jpg" alt="Profile Image" /> </span>
                      <span>
                      <span>Добавление функции</span>
                      <span class="time">2 часа назад</span>
                      </span>
                      <span class="message"> Рады представить вам новую функцию автопостинг.</span>
                    </a>
                  </li>
             </ul>
                
          </nav>
        </div>
      </div>
      <!-- /top navigation -->
        <?=$this->content()?>
    </div>

</div>
                              
    <!-- bootstrap progress js -->
  <script src="<?=$this->sitePath?>js/progressbar/bootstrap-progressbar.min.js"></script>
  <script src="<?=$this->sitePath?>js/nicescroll/jquery.nicescroll.min.js"></script>
  <!-- icheck -->
  <script src="<?=$this->sitePath?>js/icheck/icheck.min.js"></script>


  <!-- pace -->
  <script src="<?=$this->sitePath?>js/pace/pace.min.js"></script>

  <script type="text/javascript" src="<?=$this->sitePath?>js/moment/moment.min.js"></script>
  <script type="text/javascript" src="<?=$this->sitePath?>js/datepicker/daterangepicker.js"></script>
<script src="<?=$this->sitePath?>js/bootstrap.min.js"></script>
<script src="<?=$this->sitePath?>js/custom.js"></script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>