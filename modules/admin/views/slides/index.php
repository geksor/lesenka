<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\SlidesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Слайдер';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="slides-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать слайд', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title:ntext',
            'text:ntext',
            [
                'attribute' => 'image',
                'label' => 'Изображение',
                'format' => 'html',
                'value' => function ($model, $key, $index, $column) {
                    return Html::img('/images/slides/'.$model->image,
                        ['width' => '100px', 'style' => 'max-width:100%']);
                }
            ],
            [
                'attribute' => 'publish',
                'format' => 'html',
                'label' => 'Состояние',
                'value' => function($model){
                    if($model->publish == true){
                        return "<p class='text-success'>Опубликован</p>";
                    }else{
                        return "<p class='text-danger'>Не опубликован</p>";
                    }
                }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
