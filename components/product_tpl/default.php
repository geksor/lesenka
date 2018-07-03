<?
use yii\widgets\LinkPager;
use yii\helpers\Html;
if(isset($products['products']) && count($products['products'])) {?>
    <div class="row">
        <?
        foreach ($products['products'] as $product) {
            ?>
            <?$product['image'] = $product['image'] ? $product['image'] : "noimage.jpg"?>
            <div class="col-lg-4 col-4 prod_wrap">
                <div class="product">
                    <div class="img_product">
                        <?=Html::img(["@prod_images/{$product['image']}"],['alt'=>$product['name']])?>
                    </div>
                    <div class="product_desc_block">
                        <h2 class="product_name">
                            <?= $product['name'] ?>
                        </h2>
                        <p class="product_description">
                            <span>Состав:</span> <?= $product['short_description'] ?>
                        </p>
                        <div class="price_weight_wrap">
                            <p class="product_weight">
                                <span><?=$product['weight']['title']?></span>: <?= $product['weight_value'] ?> <?= $product['weight']['weight_code'] ?>
                            </p>
                            <span class="product_price">
                                <?= $product['price'] ?> РУБ
                            </span>
                        </div>
                    </div>
                    <div class="product_kits_block">
                        <div class="counter_product">
                            <button class="counter__btn" data-act="down" data-id="#inp_<?=$product['id']?>">
                                -
                            </button>
                            <span class="count_value" id="inp_<?=$product['id']?>">1</span>
                            <button class="counter__btn" data-act="up" data-id="#inp_<?=$product['id']?>">
                                +
                            </button>
                        </div>
                        <a href="/cart/add?id=<?=$product['id']?>" data-count_id="#inp_<?=$product['id']?>" data-id="<?=$product['id']?>" class="prod_buy_link kit__inCart">
                            <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="23px" height="31px">
                                <path fill-rule="evenodd"
                                      d="M19.037,4.250 L17.152,4.250 C17.152,2.180 14.621,0.501 11.497,0.501 C8.373,0.501 5.842,2.180 5.842,4.250 L3.957,4.250 C1.875,4.250 0.186,5.929 0.186,8.000 L0.186,26.748 C0.186,28.818 1.875,30.497 3.957,30.497 L19.037,30.497 C21.120,30.497 22.808,28.818 22.808,26.748 L22.808,8.000 C22.808,5.929 21.120,4.250 19.037,4.250 ZM11.497,2.376 C13.580,2.376 15.267,2.956 15.267,4.250 L7.727,4.250 C7.727,2.956 9.415,2.376 11.497,2.376 ZM20.923,26.748 C20.923,27.783 20.079,28.623 19.037,28.623 L3.957,28.623 C2.915,28.623 2.071,27.783 2.071,26.748 L2.071,24.873 L20.923,24.873 L20.923,26.748 ZM20.923,22.999 L2.071,22.999 L2.071,8.000 C2.071,6.965 2.915,6.125 3.957,6.125 L5.842,6.125 L5.842,11.750 L7.727,11.750 L7.727,6.125 L15.267,6.125 L15.267,11.750 L17.152,11.750 L17.152,6.125 L19.037,6.125 C20.079,6.125 20.923,6.965 20.923,8.000 L20.923,22.999 Z"/>
                            </svg>
                            <span>Купить</span>
                        </a>
                    </div>
                </div>
            </div>

            <?
        } ?>
    </div>
    <div class="pagination">
        <?=LinkPager::widget([
            'pagination' => $products['pages'],
            'options' => [
                'class' => 'pagination_site',
            ],
            'maxButtonCount' => 8,
        ]);?>
    </div>
    <?
}else{
    ?>
    <h2 class="product__name">Нет товаров</h2>
<?}?>