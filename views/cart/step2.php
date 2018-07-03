<?
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<div class="order_form">
<h1 class="site_header"><?=$page_title?></h1>
    <?php $form = ActiveForm::begin(); ?>
    <div class="order__top_line">
        <div>
            <?=$form->field($model,'user_name',[
                'inputOptions' => [
                    'class' => 'site_input',
                ]
            ])->textInput(['placeholder' => 'ФИО', 'value' => $model->getUserInfo('username')])?>
        </div>
        <div>
            <?=$form->field($model,'user_phone',[
                'inputOptions' => [
                    'class' => 'site_input phone_mask',
                ]
            ])->textInput(['value' => $model->getUserInfo('userphone')])?>
        </div>
        <div>
            <?=$form->field($model,'user_email',[
                'inputOptions' => [
                    'class' => 'site_input',
                ]
            ])->textInput(['placeholder' => 'Адрес почты','value' => $model->getUserInfo('email')])?>
        </div>
    </div>
    <div>
        <?=$form->field($model,'order_message',[
            'inputOptions' => [
                'class' => 'site_input',
            ]
        ])->textarea(['rows' => 2, 'placeholder' => 'Например Вы можете уточнить время доставки'])?>
    </div>
    <p class="order__header">Адрес доставки:</p>
    <div class="order__top_line">
        <div>
            <?=$form->field($model,'user_street',[
                'inputOptions' => [
                    'class' => 'site_input',
                ]
            ])->textInput(['placeholder' => 'Например: Пушкина','value' => $model->getUserInfo('userstreet')])?>
        </div>
        <div>
            <?=$form->field($model,'user_house',[
                'inputOptions' => [
                    'class' => 'site_input',
                ]
            ])->textInput(['placeholder' => 'Номер дома','value' => $model->getUserInfo('userhouse')])?>
        </div>
        <div>
            <?=$form->field($model,'user_part',[
                'inputOptions' => [
                    'class' => 'site_input',
                ]
            ])->textInput(['placeholder' => 'Корпус дома','value' => $model->getUserInfo('userpart')])?>
        </div>
        <div>
            <?=$form->field($model,'user_floor',[
                'inputOptions' => [
                    'class' => 'site_input',
                ]
            ])->textInput(['placeholder' => 'Номер этажа','value' => $model->getUserInfo('userfloor')])?>
        </div>
        <div>
            <?=$form->field($model,'user_flat',[
                'inputOptions' => [
                    'class' => 'site_input',
                ]
            ])->textInput(['placeholder' => 'Номер квартиры','value' => $model->getUserInfo('userflat')])?>
        </div>
        <div class="form-group submit_wrap">
            <?= Html::submitButton('Заказать',['class' => 'profile_submit']) ?>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>
<script>
    $(".phone_mask").mask("+7 (999) 999-9999");
</script>