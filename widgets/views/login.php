<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<div class="modal-dialog fgt">
    <?php $form = ActiveForm::begin(['id' => 'form-signup', 'action' => Url::to(['site/login'])]); ?>
    <div class="modal-content rrr">
        <!-- Заголовок модального окна -->
        <div class="modal-header yyy">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            <h4 class="modal-title">ВХОД</h4>
        </div>
        <!-- Основное содержимое модального окна -->
        <div class="modal-body kjjh">
            <div class="form-group">
                <?= Html::activeLabel($model, 'username', ['label' => 'Имя пользователя или E-mail:']) ?>
                <?= Html::activeTextInput($model, 'username', ['class'=>'form-control']) ?>
            </div>

            <div class="form-group">
                <?= Html::activeLabel($model, 'password', ['label' => 'Пароль:']) ?>
                <?= Html::activePasswordInput($model, 'password', ['class'=>'form-control']) ?>
            </div>
            <p style="display: none;" clas="error" id="login-error">Неверный логин или пароль</p>
        </div>
        <!-- Футер модального окна -->
        <div class="modal-footer modfoot">
            <button type="submit" class="btn btn-primary">Войти</button>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>