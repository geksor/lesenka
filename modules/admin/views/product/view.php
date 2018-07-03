<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Product */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Управление товарами', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name:ntext',
            'alias:ntext',
            'categories:ntext',
            'price',
            'old_price',
            'short_description:ntext',
            'description:ntext',
            'image:ntext',
            'creation_date:ntext',
            'weight',
            'weight_unit_id',
            'item_unit_id',
            'meta_title:ntext',
            'meta_description:ntext',
            'meta_keywords:ntext',
            'pub_status',
        ],
    ]) ?>

</div>
