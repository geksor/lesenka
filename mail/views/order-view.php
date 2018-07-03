<?
    use yii\helpers\Url;
?>

<h1 class="mail__header"><?=$user_info['username']?>, спасибо за заказ!</h1>
<?foreach ($products as $product){?>
    <div class="mail__row" style="display: flex;">
        <div class="mail__image" style="width: 25%; display: inline-block;vertical-align: top;font-size: 18px;">
            <img src="<?=Url::home(true)?>/images/products/<?=$product['img']?>" alt="<?=$product['name']?>" style="max-width: 100%;">
        </div>
        <div class="mail__title" style="width: 25%; display: inline-block;vertical-align: top; padding: 40px;font-size: 18px;">
            <p><?=$product['name']?></p>
        </div>
        <div class="mail__qty" style="width: 25%; display: inline-block;vertical-align: top; padding: 40px;font-size: 18px;">
            <p><?=$product['qty']?> <?=$product['unit']?></p>
        </div>
        <div class="mail__sum" style="width: 25%; display: inline-block;vertical-align: top; padding: 40px; font-weight: bold; font-size: 18px; text-align: right;">
            <p>На сумму: <?=$product['prod_sum']?></p>
        </div>
    </div>
<?}?>
<div class="mail__total" style="text-align: right;">
    <h2><span>Игого: </span><?=$sum?></h2>
</div>
