<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use bupy7\cropbox\CropboxWidget;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\News */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textarea(['rows' => 2]) ?>

    <?= $form->field($model, 'preview')->textarea(['rows' => 6]) ?>

    <?if($model->image):?>
        <img src="/<?=Yii::getAlias('@news_images')?>/<?=$model->image?>">
    <?endif;?>

    <?= $form->field($model, 'imageFile')->fileInput()->widget(CropboxWidget::className(), [
        'croppedDataAttribute' => 'crop_info',
        'pluginOptions' => [
            'variants' => [
                [
                    'width' => 370,
                    'height' => 370,
                    'minWidth' => 370,
                    'minHeight' => 370,
                    'maxWidth' => 370,
                    'maxHeight' => 370,
                ],
            ],
        ],
    ])?>

    <?= $form->field($model, 'full_text')->textarea(['rows' => 20]) ?>

    <?= $form->field($model, 'meta_description')->textarea(['rows' => 3]) ?>

    <?= $form->field($model, 'meta_title')->textarea(['rows' => 3]) ?>

    <?= $form->field($model, 'meta_keywords')->textarea(['rows' => 3]) ?>

    <?= $form->field($model, 'pub_date')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'pub_status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
