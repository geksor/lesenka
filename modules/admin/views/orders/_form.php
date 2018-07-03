<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Orders */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="orders-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_name')->textInput() ?>

    <?= $form->field($model, 'user_phone')->textInput() ?>

    <?= $form->field($model, 'user_email')->textInput() ?>

    <?= $form->field($model, 'order_message')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'user_street')->textInput() ?>

    <?= $form->field($model, 'user_house')->textInput() ?>

    <?= $form->field($model, 'user_part')->textInput() ?>

    <?= $form->field($model, 'user_floor')->textInput() ?>

    <?= $form->field($model, 'user_flat')->textInput() ?>

    <?= $form->field($model, 'order_sum')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
