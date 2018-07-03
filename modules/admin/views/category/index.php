<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use app\modules\admin\models\Category;
/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Управление категориями магазина';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Выбрать все', ['#'], ['class' => 'btn btn-primary checkAll']) ?>
        <?= Html::a('Создать категорию', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Удалить категорию', ['delete'], ['class' => 'btn btn-danger deleteAll']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
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
            'alias:ntext',
            [
                'attribute' => 'parent_id',
                'label'=>'Родитель',
                'format' => 'html',
                'content' => function($model) {
                    if($model->parent_id !== null) {
                        return Category::find()->select('name')->where(['id' => $model->parent_id])->one()->name;
                    }else{
                        return '-';
                    }
                }
            ],
            //'short_description:ntext',
            // 'description:ntext',
            // 'image:ntext',
            // 'alter_image:ntext',
            // 'meta_title:ntext',
            // 'meta_description:ntext',
            // 'meta_keywords:ntext',
            'creation_date:ntext',
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
            // 'css_class:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
