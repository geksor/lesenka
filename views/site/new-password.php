<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\widgets\Breadcrumbs;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \mdm\admin\models\form\Signup */

$this->params['breadcrumbs'][] = $page_title;
?>
<div class="cramps_wrap">
    <div class="inner">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
    </div>
</div>
<div class="inner">
    <h1 class="site_header"><?= Html::encode($page_title) ?></h1>
    <div class="signup_form">
        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'password',[
            'inputOptions' => [
                'class' => 'site_input',
                'placeholder' => 'Новый пароль'
            ]])->passwordInput()->label(false) ?>
        <?= $form->field($model, 'confirm_password',[
            'inputOptions' => [
                'class' => 'site_input',
                'placeholder' => 'Подтвердите пароль'
            ]])->passwordInput()->label(false) ?>
        <div class="form-group">
            <?= Html::submitButton('Изменить пароль <i class="fa fa-long-arrow-right" aria-hidden="true"></i>',['class' => 'site_btn red_btn']) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>