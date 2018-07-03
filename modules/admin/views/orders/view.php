<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Orders */

$this->title = 'Заказ '.$model->id;
$this->params['breadcrumbs'][] = ['label' => 'Список заказов', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="orders-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены, что хотите удалить заказ?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'user_id',
            'user_name:ntext',
            'user_phone:ntext',
            'user_email:ntext',
            'order_message:ntext',
            'user_street:ntext',
            'user_house:ntext',
            'user_part:ntext',
            'user_floor',
            'user_flat',
            'order_date:ntext',
            //'products:ntext',
            //'order_sum',
        ],
    ]) ?>
</div>
<h2>Товары</h2>
<table class="table table-striped table-bordered">
    <tr>
        <th style="font-size: 18px;">Изображение</th>
        <th style="font-size: 18px;">Название</th>
        <th style="font-size: 18px;">Количество</th>
        <th style="font-size: 18px;">На сумму</th>
    </tr>
    <?foreach ($model->products as $product):?>
        <tr>
            <td>
                <?=Html::img("/images/products/$product->img", ['alt' => $product->name,'width'=>'150px'])?>
            </td>
            <td><?=$product->name?></td>
            <td><?=$product->qty?> <?=$product->unit?></td>
            <td><?=$product->prod_sum?></td>
        </tr>
    <?endforeach;?>
</table>
<h3 style="text-align: right;">Итого: <?=$model->order_sum?></h3>
