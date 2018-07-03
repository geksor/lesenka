<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\ItemUnit;
use app\models\WeightUnit;
use app\modules\admin\models\Category;
use app\models\Relate;
use bupy7\cropbox\CropboxWidget;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textarea(['rows' => 2]) ?>

    <?= $form->field($model, 'alias')->textInput() ?>

    <?$model->categories = Relate::find()->select('category_id')->where(['product_id' => $model->id])->asArray()->column()?>

    <?= $form->field($model, 'categories')->listBox(
        Category::buildCategoryList(),
        [
            'multiple'=>'true',
        ]
    ); ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'old_price')->textInput() ?>

    <?= $form->field($model, 'short_description')->textarea(['rows' => 3]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?if($model->image):?>
        <img src="/images/products/<?=$model->image?>">
    <?endif;?>
    <?= $form->field($model, 'imageFile')->fileInput()->widget(CropboxWidget::className(), [
        'croppedDataAttribute' => 'crop_info',
        'pluginOptions' => [
            'variants' => [
                [
                    'width' => 240,
                    'height' => 170,
                    'minWidth' => 240,
                    'minHeight' => 170,
                    'maxWidth' => 240,
                    'maxHeight' => 170,
                ],
            ],
        ],
    ])?>

    <?= $form->field($model, 'weight')->textInput() ?>

    <?= $form->field($model, 'weight_unit_id')->dropdownList(
        $model->getWeightList(),
        ['prompt'=>'-- Выбрать --']
    ); ?>

    <?= $form->field($model, 'item_unit_id')->dropdownList(
        $model->getUnitList(),
        ['prompt'=>'-- Выбрать --']
    ); ?>

    <?= $form->field($model, 'meta_title')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'meta_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'meta_keywords')->textarea(['rows' => 3]) ?>

    <?= $form->field($model, 'pub_status')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
