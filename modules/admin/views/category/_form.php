<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\modules\admin\models\Category;
use bupy7\cropbox\CropboxWidget;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Category */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="category-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textarea(['rows' => 2]) ?>

    <?= $form->field($model, 'alias')->textInput() ?>

    <?= $form->field($model, 'parent_id')->dropdownList(
            $model->buildCategoryList(),
            ['prompt'=>'-- Без родителя --']
    ); ?>

    <?= $form->field($model, 'short_description')->textarea(['rows' => 3]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?if($model->image):?>
        <img src="/images/categories/<?=$model->image?>">
    <?endif;?>
    <?= $form->field($model, 'imageFile')->fileInput()->widget(CropboxWidget::className(), [
        'croppedDataAttribute' => 'crop_info',
        'pluginOptions' => [
            'variants' => [
                [
                    'width' => 270,
                    'height' => 170,
                    'minWidth' => 270,
                    'minHeight' => 170,
                    'maxWidth' => 270,
                    'maxHeight' => 170,
                ],
            ],
        ],
    ])?>

    <?= $form->field($model, 'meta_title')->textInput() ?>

    <?= $form->field($model, 'meta_description')->textInput() ?>

    <?= $form->field($model, 'meta_keywords')->textInput() ?>

    <?= $form->field($model, 'pub_status')->checkbox() ?>

    <?= $form->field($model, 'css_class')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать категорию' : 'Изменить категорию', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
