<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>
<ul class="nav side-menu">       
    <li><a href="<?=Url::to(['dashboard/profile'])?>"><i class="fa fa-cogs"></i> Профиль </a>
    <li><a href="<?=Url::to(['dashboard/instagram'])?>"><i class="fa fa-instagram"></i> Аккаунты Instagram </a>
    <li><a href="#"><i class="fa fa-users"></i> Подписки </a>
    <br><br><br>
    <li><a href="/dashboard"><i class="fa fa-tachometer"></i> Dasboard </a>       
    <li><a href="#"><i class="fa fa-code"></i> Логи </a>
  </ul> 