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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
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
<div id="home" class="banner">
    <div class="container">
        <div class="header-info">
            <div class="header-info-left">
                <div class="logo">
                    <a href="#"><img src="" class="img-responsive" alt=""/></a>
                </div>
            </div>
            <div class="header-info-right">
                <div class="header cbp-spmenu-push">
                    <!--script-nav -->
                    <script>
                        $("span.menu").click(function(){
                            $("ul.navigatoin").slideToggle("300" , function(){
                            });
                        });
                    </script>
                    <script type="text/javascript">
                        jQuery(document).ready(function($) {
                            $(".scroll").click(function(event){
                                event.preventDefault();
                                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                            });
                        });
                    </script>
                    <div class="clearfix"> </div>
                    <!-- /script-nav -->
                    <!-- Classie - class helper functions by @desandro https://github.com/desandro/classie -->
                    <script src="js/classie.js"></script>
                    <script>
                        /*var	menuRight = document.getElementById( 'cbp-spmenu-s2' ),
                         showRightPush = document.getElementById( 'showRightPush' ),
                         body = document.body;

                         showRightPush.onclick = function() {
                         classie.toggle( this, 'active' );
                         classie.toggle( body, 'cbp-spmenu-push-toleft' );
                         classie.toggle( menuRight, 'cbp-spmenu-open' );
                         disableOther( 'showRightPush' );
                         };*/
                    </script>
                </div>

<style>
    .error{
        color: red;
    }
</style>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="banner-info">
            <h1>Сервис продвижения Instagram</h1>
            <div class="button"><a href="#myModal2" data-toggle="modal">Регистрация</a></div>
            <div class="button"><a href="#myModal" data-toggle="modal">ВХОД</a></div>
            <div class="arrow-icon text-center"><a class="scroll" href="#services"><img src="images/arrow.png" alt="" /></a></div>

            <!-- HTML-код модального окна Регистрация-->
            <div id="myModal2" class="modal fade">
                <?= Register::widget() ?>
            </div>
            <!-- HTML-код модального окна ВХОД -->
            <div id="myModal" class="modal fade">
                <?= Login::widget() ?>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $('#userLog').submit(function(){
            $("#login-error").hide();
            var form = $(this);
            var data = form.serialize();
            $.post("/login", data, function(data){
                console.log(data);
                if(Number(data) === 1){
                    window.location.href = '/dashboard';
                }else{
                    $("#login-error").show();
                }
            });
            return false;
        });

        $('#userReg').submit(function(){
            var form = $(this);
            var data = form.serialize();
            $.post("/register", data, function(data){
                console.log(data);
                if(Number(data) === 1){
                    window.location.href = '/';
                }else{
                    var obj = JSON.parse(data);
                    $(".error").css('display', 'none');
                    for(var i in obj) {
                        $("#" + i).text(obj[i]);
                        $("#" + i).css('display', 'block');
                    }
                }
            });
            return false;
        });
    });
</script>

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