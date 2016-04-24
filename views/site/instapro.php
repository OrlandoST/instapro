<?php
use app\widgets\Services;
use app\widgets\Login;
use app\widgets\Register;
/* @var $this yii\web\View */
?>
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
                <?= Register::widget(['model' => $register_model]) ?>
            </div>
            <!-- HTML-код модального окна ВХОД -->
            <div id="myModal" class="modal fade">
                <?= Login::widget(['model' => $login_model]) ?>
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
