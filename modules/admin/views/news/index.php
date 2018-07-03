<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\NewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'News';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Выбрать все', ['#'], ['class' => 'btn btn-primary checkAll']) ?>
        <?= Html::a('Создать новость', ['create'], ['class' => 'btn btn-success','data-pjax' => 0]) ?>
        <?= Html::a('Удалить новость', ['delete'], ['class' => 'btn btn-danger deleteAll']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'select',
                'label'=>'Выбрать',
                'format' => 'html',
                'content' => function($model) {
                    return Html::checkbox('product', false,['value'=>$model->id,'class'=>'productCheck']);
                }
            ],
            'id',
            'name:ntext',
            'preview:ntext',
            //'full_text:ntext',
            //'meta_description:ntext',
            //'meta_title:ntext',
            //'meta_keywords:ntext',
            'pub_date:ntext',
            [
                'attribute' => 'pub_status',
                'format' => 'html',
                'label' => 'Состояние',
                'value' => function($model){
                    if($model->pub_status == true){
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
