<?
use yii\widgets\Breadcrumbs;
$this->params['breadcrumbs'][] = ['label'=>'Личный кабинет','url' => "/personal"];
$this->params['breadcrumbs'][] = 'История покупок'
?>
<div class="cramps_wrap">
    <div class="inner">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
    </div>
</div>
<div class="inner">
    <h1 class="personal_header"><?=$page_title?></h1>
    <div class="my_orders_block">
        <?foreach ($my_orders as $order){?>
            <div class="order_row">
                <div class="order_number">
                    #<?=$order['id']?>
                </div>
                <div class="order_date">
                    <?=$order['order_date']?>
                </div>
                <div class="count_products">
                    <span class="order_prod_count"><?=count($order['arr_prod'])." ".declension_word(count($order['arr_prod']) , array('товар', 'товара', 'товаров'));?> <i class="fa fa-caret-down"></i></span>
                    <ul>
                        <?foreach ($order['arr_prod'] as $product){?>
                            <li>
                                <span><?=$product['name']?></span>
                                <span><?=$product['qty']?> <?=$product['unit']?>/<?=$product['price']?> руб</span>
                                <span><?=$product['prod_sum']?> руб</span>
                            </li>
                        <?}?>
                    </ul>
                </div>
                <div class="order_sum">
                    <?=$order['order_sum']?> руб
                </div>
            </div>
        <?}?>
    </div>
</div>