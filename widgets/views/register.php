<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<div class="modal-dialog fgt fgt1">
<div class="modal-content rrr rrr1">
    <!-- Заголовок модального окна -->
    <div class="modal-header yyy yyy1">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
        <h4 class="modal-title">Регистрация</h4>
        <div class="qaz">
            Мы никогда не сохраняем ваш пароль от Instagram!
        </div>
    </div>
    <!-- Основное содержимое модального окна -->
    <div class="modal-body kjjh kjjh1">
    <?php $form = ActiveForm::begin(['id' => 'form-signup', 'action' => Url::to(['site/signup'])]); ?>
        <div class="form-group">
            <?= Html::activeLabel($model, 'username', ['label' => 'Имя пользователя:']) ?>
            <?= Html::activeTextInput($model, 'username', ['class'=>'form-control']) ?>
            <?= Html::error($model, 'username') ?>
        </div>
        <div class="form-group">
            <?= Html::activeLabel($model, 'username', ['label' => 'Ваш email:']) ?>
            <?= Html::activeTextInput($model, 'email', ['class'=>'form-control']) ?>
            <?= Html::error($model, 'email') ?>
        </div>
        <div class="form-group">
            <?= Html::activeLabel($model, 'password', ['label' => 'Пароль:']) ?>
            <?= Html::activePasswordInput($model, 'password', ['class'=>'form-control']) ?>
            <?= Html::error($model, 'password') ?>
        </div>
        <div class="form-group">
            <label for="confirm">Повторите пароль:</label>
            <input type="password" class="form-control" name="confirm">
            <p class="error" id="confirm"></p>
        </div>
        <!--
        <div class="form-group">
            <label for="username">Логин Instagram:</label>
            <input type="text" class="form-control" name="Ilogin">
        </div>

        <div class="form-group">
            <label for="confirm">пароль Instagram:</label>
            <input type="password" class="form-control" name="Ipassword">
        </div>
        -->
        <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
        <input type="submit" class="btn btn-success" value="Зарегистрироваться">
           <?php ActiveForm::end(); ?>
    </div>
    <!-- Футер модального окна -->
    <div class="modal-footer modfoot modfoot1">
        <!--
        <div class="tex">Регестрацыя через Instagram:</div>
        <div class="ico"><a href="#"><img src="images/77.png" alt=""></a></div>
         -->
    </div>
    </div>
</div>