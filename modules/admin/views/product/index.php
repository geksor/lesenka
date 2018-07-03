<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Управление товарами';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">
    <?php Pjax::begin(); ?>
    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <div>
        <?= Html::a('Выбрать все', ['#'], ['class' => 'btn btn-primary checkAll']) ?>
        <?= Html::a('Создать товар', ['create'], ['class' => 'btn btn-success','data-pjax' => 0]) ?>
        <?= Html::a('Удалить товар', ['delete'], ['class' => 'btn btn-danger deleteAll']) ?>
        <div class="form-group field-product-weight_unit_id has-success">
            <span>Категория :</span>
            <a href="index?categoryId=all">Все</a>
            <?foreach ($categories as $id => $category):?>
                <a href="/admin/product/index?categoryId=<?=$id?>">,<?=$category?></a>
            <?endforeach;?>
        </div>
    </div>
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
                [
                    'attribute' => 'image',
                    'label' => 'Изображение',
                    'format' => 'html',
                    'value' => function ($model, $key, $index, $column) {
                        return Html::img('/images/products/'.$model->image,
                            ['width' => '100px', 'style' => 'max-width:100%']);
                    }
                ],
                'name:ntext',
                'alias:ntext',
                'price',
                //'old_price',
                // 'short_description:ntext',
                // 'description:ntext',
                'creation_date:ntext',
                // 'weight',
                // 'weight_unit_id',
                // 'item_unit_id',
                // 'meta_title:ntext',
                // 'meta_description:ntext',
                // 'meta_keywords:ntext',
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

