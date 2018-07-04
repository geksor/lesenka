<div class="container">
    <div class="row justify-content-between">
        <div class="col-7">
            <div class="newsLine__title">Новости центра</div>
        </div>
        <div class="col-5">
            <div class="newsNavWrap">
            </div>
        </div>
    </div>
    <div class="news__karuselWrap row" data-slideout-ignore>
        <?if($news):?>
        <?foreach ($news as $item):?>
        <div class="news__blockWrap">
            <article class="news__block">
                <h2 class="newsTitle">
                    <?=$item['name']?>
                </h2>
                <p class="newsText">
                    <?=$item['preview']?>
                </p>
                <div class="dateLinkWrap flex justify-content-between">
                    <div class="publishDate"><?=$item['pub_date']?></div>
                    <a href="/news/#<?=$item['alias']?>">Подробнее →</a>
                </div>
            </article>
        </div>
            <?endforeach;?>
        <?endif;?>
    </div>
</div>