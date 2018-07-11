<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\DateTable */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="date-table-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'aducate_id')->dropDownList($model->getAducateList()) ?>

    <?= $form->field($model, 'teacher_id')->dropDownList($model->getTeachersList()) ?>

    <?= $form->field($model, 'time')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'day')->dropDownList([ 1 => 'Понедельник', 2 => 'Вторник', 3 => 'Среда', 4 => 'Четверг', 5 => 'Пятница', 6 => 'Суббота']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
