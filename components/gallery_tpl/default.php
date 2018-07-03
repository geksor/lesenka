<?php
if($gallery->items){
    foreach ($gallery->items as $item):?>
        <a data-fancybox="gallery" data-caption="<?=$item['description']?>" href="/images/photogall/<?=$item['big_img']?>">
            <img src="/images/photogall/min/<?=$item['prew_img']?>" alt="<?=$item['name']?>">
        </a>
    <?endforeach;?>
<?}?>
