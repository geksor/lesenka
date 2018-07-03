<?
    use yii\widgets\Breadcrumbs;
    use yii\widgets\LinkPager;
    $this->params['breadcrumbs'][] = 'Новости';
?>
<div class="breadcrumbLine">
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            'options' => [
                'class' => 'breadcrumb flex align-items-center',
            ],
            'itemTemplate' => '<li>{link}<span class="divider"> >&nbsp</span></li>',
        ]) ?>
    </div>
</div>
<div class="container">
    <h2 class="pageTitle">Новости</h2>
    <?if($news):?>
        <?foreach ($news as $item){?>
            <article class="newsWrap row">
            <div class="news__img col-12 col-md-4">
                <div class="row">
                    <div class="col-12">
                        <div class="news__imgWrap" <?if($item['image']){?>style="background: url('/<?=Yii::getAlias('@news_images')?>/<?=$item['image']?>') no-repeat top center/cover"<?}?>></div>
                    </div>
                </div>
            </div>
            <div class="news__content col-12 col-md-8">
                <h3 class="news__title"><?=$item['name']?></h3>
                <p class="news__text">
                    <?=$item['full_text']?>
                </p>
                <p class="news__publishDate"><?=$item['pub_date']?></p>
            </div>
        </article>
        <?}?>
    <?endif;?>
    <div class="products_pagination">
        <?=LinkPager::widget([
            'pagination' => $pages,
            'options' => [
                'class' => 'pagination_site',
            ],
            'hideOnSinglePage' => true,
            'prevPageCssClass' => 'change_page',
            'nextPageCssClass' => 'change_page',
            'prevPageLabel' => "<i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>",
            'nextPageLabel' => "<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>",
            'maxButtonCount' => 5,
        ]);?>
    </div>
</div>