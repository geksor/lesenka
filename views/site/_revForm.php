<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use kartik\rating\StarRating;
$name = Yii::$app->user->identity->username;
?>
<?php $form = ActiveForm::begin(); ?>

    <?=$form->field($model,'name',[
            'inputOptions' => [
                    'class' => 'site_input',
                    'value' => $name
            ]
    ])->textInput(['placeholder' => 'Ваше имя'])->label(false)?>

    <?=$form->field($model,'text',[
        'inputOptions' => [
            'class' => 'site_input'
        ]
    ])->textarea(['rows' => 10, 'placeholder' => 'Текст отзыва'])->label(false)?>

    <?=$form->field($model, 'mark')->widget(StarRating::classname(),['pluginOptions' => ['size' => 'sm']])->label(false);?>
    <div class="form-group">
        <?= Html::submitButton('Отправить отзыв',['class' => 'site_btn red_btn']) ?>
    </div>
<?php ActiveForm::end(); ?>