<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use bupy7\cropbox\CropboxWidget;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Teachers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="teachers-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'family')->textInput() ?>

    <?= $form->field($model, 'name')->textInput() ?>

    <?= $form->field($model, 'father')->textInput() ?>

    <?if($model->avatar):?>
        <img src="/<?=Yii::getAlias('@teach_images')?>/<?=$model->avatar?>">
    <?endif;?>

    <?= $form->field($model, 'imageFile')->fileInput()->widget(CropboxWidget::className(), [
        'croppedDataAttribute' => 'crop_info',
        'pluginOptions' => [
            'variants' => [
                [
                    'width' => 173,
                    'height' => 173,
                    'minWidth' => 173,
                    'minHeight' => 173,
                    'maxWidth' => 173,
                    'maxHeight' => 173,
                ],
            ],
        ],
    ])?>

    <?= $form->field($model, 'rang')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
