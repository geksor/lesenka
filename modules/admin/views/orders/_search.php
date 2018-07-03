<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\OrdersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="orders-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'user_name') ?>

    <?= $form->field($model, 'user_phone') ?>

    <?= $form->field($model, 'user_email') ?>

    <?php // echo $form->field($model, 'order_message') ?>

    <?php // echo $form->field($model, 'user_street') ?>

    <?php // echo $form->field($model, 'user_house') ?>

    <?php // echo $form->field($model, 'user_part') ?>

    <?php // echo $form->field($model, 'user_floor') ?>

    <?php // echo $form->field($model, 'user_flat') ?>

    <?php // echo $form->field($model, 'order_date') ?>

    <?php // echo $form->field($model, 'products') ?>

    <?php // echo $form->field($model, 'order_sum') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
