<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\Breadcrumbs;
$this->params['breadcrumbs'][] = ['label'=>'Личный кабинет','url' => "/personal"];
$this->params['breadcrumbs'][] = 'Профиль'
/* @var $this yii\web\View */
/* @var $model app\models\Profile */
/* @var $form ActiveForm */
?>
<?if ($save_message != null):?>
    <p class="profile_save"><?=$save_message?></p>
<?endif;?>
<div class="cramps_wrap">
    <div class="inner">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
    </div>
</div>
<div class="inner">
    <h1 class="personal_header"><?=$page_title?></h1>
    <div class="personal_form">
        <?php $form = ActiveForm::begin(['id'=>'personal_form']); ?>
            <div class="order__top_line">
                <div>
                    <?= $form->field($model, 'username')->textInput(['value' => $model->getUserInfo('username'),'class'=>'site_input']) ?>
                </div>
                <div>
                    <?= $form->field($model, 'email')->textInput(['value' => $model->getUserInfo('email'),'class'=>'site_input']) ?>
                </div>
                <div>
                    <?= $form->field($model, 'userphone')->textInput(['value' => $model->getUserInfo('userphone'),'class'=>'site_input phone_mask']) ?>
                </div>
            </div>
            <p class="order__header">Адрес пользователя:</p>
            <div class="order__top_line">
                <div>
                    <?= $form->field($model, 'userstreet')->textInput(['value' => $model->getUserInfo('userstreet'),'class'=>'site_input']) ?>
                </div>
                <div>
                    <?= $form->field($model, 'userpart')->textInput(['value' => $model->getUserInfo('userpart'),'class'=>'site_input']) ?>
                </div>
                <div>
                    <?= $form->field($model, 'userhouse')->textInput(['value' => $model->getUserInfo('userhouse'),'class'=>'site_input']) ?>
                </div>
                <div>
                    <?= $form->field($model, 'userfloor')->textInput(['value' => $model->getUserInfo('userfloor'),'class'=>'site_input']) ?>
                </div>
                <div>
                    <?= $form->field($model, 'userflat')->textInput(['value' => $model->getUserInfo('userflat'),'class'=>'site_input']) ?>
                </div>

                <div class="form-group submit_wrap">
                    <?= Html::submitButton('Сохранить', ['class' => 'profile_submit']) ?>
                </div>
            </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>
