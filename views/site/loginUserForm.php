<?
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<div class="login_form" id="signup_form">
    <?php
    $form = ActiveForm::begin(['id'=>'login_form']); ?>

    <?=$form->field($model,'email',[
        'enableAjaxValidation' => true,
        'inputOptions' => [
            'class' => 'site_input'
        ]
    ])->textInput(['placeholder' => 'e-mail'])->label(false)?>

    <?=$form->field($model,'password',[
        'enableAjaxValidation' => true,
        'inputOptions' => [
            'class' => 'site_input'
        ]
    ])->passwordInput(['placeholder' => 'Пароль'])->label(false)?>
    <div class="remember">
        <?= $form->field($model, 'rememberMe')->checkbox() ?>
    </div>
    <p class="form_link"><a href="/signup" class="news_more">Регистрация <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></p>
    <p class="form_link"><a href="/reset-password" class="news_more">Забыли пароль?</a></p>
    <div class="form-group">
        <?= Html::submitButton('Вход в личный кабинет',['class' => 'site_btn red_btn']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>