<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;


$this->title = 'Instapro';
?>
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="col-md-3 col-sm-3 col-xs-12 profile_left">

          <div class="profile_img">

            <!-- end of image cropping -->
            <div id="crop-avatar">
              <!-- Current avatar -->
              <div class="avatar-view" title="" data-original-title="Change the avatar">
                <img src="images/picture.jpg" alt="Avatar">
              </div>

              <!-- Cropping modal -->
              <div class="modal fade" id="avatar-modal" aria-hidden="true" aria-labelledby="avatar-modal-label" role="dialog" tabindex="-1">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <form class="avatar-form" action="crop.php" enctype="multipart/form-data" method="post">
                      <div class="modal-header">
                        <button class="close" data-dismiss="modal" type="button">×</button>
                        <h4 class="modal-title" id="avatar-modal-label">Change Avatar</h4>
                      </div>
                      <div class="modal-body">
                        <div class="avatar-body">

                          <!-- Upload image and data -->
                          <div class="avatar-upload">
                            <input class="avatar-src" name="avatar_src" type="hidden">
                            <input class="avatar-data" name="avatar_data" type="hidden">
                            <label for="avatarInput">Local upload</label>
                            <input class="avatar-input" id="avatarInput" name="avatar_file" type="file">
                          </div>

                          <!-- Crop and preview -->
                          <div class="row">
                            <div class="col-md-9">
                              <div class="avatar-wrapper"></div>
                            </div>
                            <div class="col-md-3">
                              <div class="avatar-preview preview-lg"></div>
                              <div class="avatar-preview preview-md"></div>
                              <div class="avatar-preview preview-sm"></div>
                            </div>
                          </div>

                          <div class="row avatar-btns">
                            <div class="col-md-9">
                              <div class="btn-group">
                                <button class="btn btn-primary" data-method="rotate" data-option="-90" type="button" title="Rotate -90 degrees">Rotate Left</button>
                                <button class="btn btn-primary" data-method="rotate" data-option="-15" type="button">-15deg</button>
                                <button class="btn btn-primary" data-method="rotate" data-option="-30" type="button">-30deg</button>
                                <button class="btn btn-primary" data-method="rotate" data-option="-45" type="button">-45deg</button>
                              </div>
                              <div class="btn-group">
                                <button class="btn btn-primary" data-method="rotate" data-option="90" type="button" title="Rotate 90 degrees">Rotate Right</button>
                                <button class="btn btn-primary" data-method="rotate" data-option="15" type="button">15deg</button>
                                <button class="btn btn-primary" data-method="rotate" data-option="30" type="button">30deg</button>
                                <button class="btn btn-primary" data-method="rotate" data-option="45" type="button">45deg</button>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <button class="btn btn-primary btn-block avatar-save" type="submit">Done</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- <div class="modal-footer">
                                        <button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
                                      </div> -->
                    </form>
                  </div>
                </div>
              </div>
              <!-- /.modal -->

              <!-- Loading state -->
              <div class="loading" aria-label="Loading" role="img" tabindex="-1"></div>
            </div>
            <!-- end of image cropping -->

          </div>
          <h3><?= Yii::$app->user->identity->username ?></h3>

          <br>

        </div>
        <div class="col-md-9 col-sm-9 col-xs-12">
            <div class="row">
              <h2>Edit user profile</h2>
            </div>
            <div class="row">
            <?php $form = ActiveForm::begin(['id' => 'form-signup', 'action' => Url::to(['dashboard/profile'])]); ?>
              <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                <?= Html::activeLabel($model, 'username', ['label' => 'Имя пользователя:']) ?>
                <?= Html::activeTextInput($model, 'username', ['class'=>'form-control has-feedback-left']) ?><span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                <?= Html::error($model, 'username') ?>
              </div>
              <div class="clear"></div>
              <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                <?= Html::activeLabel($model, 'username', ['label' => 'Ваш email:']) ?>
                <?= Html::activeTextInput($model, 'email', ['class'=>'form-control has-feedback-left']) ?><span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                <?= Html::error($model, 'email') ?>
              </div>
              <div class="clear"></div>
              <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                <?= Html::activeLabel($model, 'password', ['label' => 'Пароль:']) ?>
                <?= Html::activePasswordInput($model, 'password', ['class'=>'form-control has-feedback-left']) ?><span class="fa fa-key form-control-feedback left" aria-hidden="true"></span>
                <?= Html::error($model, 'password') ?>
              </div><div class="clear"></div>
              <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                <label for="confirm">Повторите пароль:</label>
                <input type="password" class="form-control has-feedback-left" name="confirm"><span class="fa fa-key form-control-feedback left" aria-hidden="true"></span>
              </div><div class="clear"></div>
              <input type="submit" class="btn btn-success" value="Изменить данные">
           <?php ActiveForm::end(); ?>
           </div>
        </div>
    </div>    
  </div>
</div>