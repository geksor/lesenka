<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use bupy7\cropbox\CropboxWidget;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Aducate */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="aducate-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alias')->textInput(['maxlength' => true]) ?>

    <?if($model->image):?>
        <img src="/images/aducate/<?=$model->image?>">
    <?endif;?>
    <?= $form->field($model, 'imageFile')->fileInput()->widget(CropboxWidget::className(), [
        'croppedDataAttribute' => 'crop_info',
        'pluginOptions' => [
            'variants' => [
                [
                    'width' => 270,
                    'height' => 150,
                    'minWidth' => 270,
                    'minHeight' => 150,
                    'maxWidth' => 270,
                    'maxHeight' => 150,
                ],
            ],
        ],
    ])?>

    <?= $form->field($model, 'short_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'task_list')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'gallery_id')->dropdownList($model->getGallList(),['prompt'=>'-- Выбрать --']) ?>

    <?= $form->field($model, 'meta_title')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'meta_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'publish')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
