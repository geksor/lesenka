<?
use yii\widgets\Breadcrumbs;
$this->params['breadcrumbs'][] = 'Корзина';
?>
<div class="cart_wrapper">
    <div class="cramps_wrap">
        <div class="inner">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
        </div>
    </div>
    <div class="inner">
        <h2 class="site_header">Корзина</h2>
        <p class="back_shop_wrap"><a href="<?=$backToShop?>">Вернуться к покупкам</a></p>
        <?if(isset($cart['cart'])){?>
            <table class="cart_table">
                <tr class="t_headers">
                    <th>Наименование товара</th>
                    <th></th>
                    <th>Кол-во</th>
                    <th class="price_none">Цена</th>
                    <th>Сумма</th>
                </tr>
                <?foreach ($cart['cart'] as $id=>$item){?>
                    <?$item['img'] = $item['img'] ? $item['img'] : "noimage.jpg";?>
                    <tr class="tr_cart_row">
                        <td class="td_img td_cart"><img src="/images/products/<?=$item['img']?>"></td>
                        <td class="td_name td_cart"><?=$item['name']?></td>
                        <td class="td_cart">
                            <div class="kit__counter">
                                <button class="counter__btn cart_btn counter__min" data-act="down" data-id="#inp_<?=$id?>" data-prod_id="<?=$id?>">-</button>
                                <span class="counter__item">
                                    <span class="count__prod" id="inp_<?=$id?>"><?=$item['qty']?> </span>
                                    <span class="unit__prod"><?= $item['unit']?></span>
                                </span>
                                <button class="counter__btn cart_btn counter__plus" data-act="up" data-id="#inp_<?=$id?>" data-prod_id="<?=$id?>">+</button>
                            </div>
                        </td>
                        <td class="td_cart td_price price_none"><?=$item['price']?> <i class="fa fa-rub" aria-hidden="true"></i></td>
                        <td class="td_cart td_price"><?=$item['prod_sum']?> <i class="fa fa-rub" aria-hidden="true"></i></td>
                        <td class="td_cart"><a href="/cart/del?id=<?=$id?>" class="del_cart_item" data-del="<?=$id?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a> </td>
                    </tr>
                <?}?>
            </table>
            <p class="cart_res">Итого: <?=$cart['cart.sum']?> <i class="fa fa-rub" aria-hidden="true"></i></p>
            <div class="cart__btn_wrapper">
                <a href="javascript://" class="site_btn red_btn" data-fancybox data-type="ajax" data-src="/cart/step2">Оформить заказ <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
            </div>
        <?}else{?>
            <h2 class="product__name">Корзина пуста</h2>
        <?}?>
    </div>
</div>