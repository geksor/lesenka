<?
    use yii\widgets\Breadcrumbs;
    use yii\widgets\LinkPager;
    use kartik\rating\StarRating;
    $this->params['breadcrumbs'][] = 'Гостевая книга';
?>
    <div class="cramps_wrap">
        <div class="inner">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
        </div>
    </div>
    <div class="inner">
        <h1 class="site_header">Гостевая книга</h1>
        <?if($reviews):?>
        <div class="fl_3col flex_sb all_news">
            <?foreach ($reviews as $item){?>
                <article class="news item_3col reviews">
                    <span><?=date('d.m.Y',$item['create_date'])?></span>
                    <h3><?=$item['name']?>
                        <?=StarRating::widget([
                            'name' => 'mark',
                            'pluginOptions' => ['displayOnly' => true,'size' => 's'],
                            'value' => $item['mark']
                        ]);?>
                    </h3>
                    <p><?=$item['text']?></p>
                </article>
            <?}?>
        </div>
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
        <?if (!Yii::$app->user->isGuest) {?>
        <h2 class="site_header">Оставить отзыв</h2>
        <div class="rew_form_wrapper">
            <?= $this->render('_revForm',['model' => $model])?>
        </div>
        <?}else{?>
            <p class="autorisz_info">Чтобы написать отзыв, необходимо <a data-fancybox data-type="ajax" data-src="/site/ajax-login" href="javascript://" class="news_more">авторизоваться</a> на сайте</p>
        <?}?>
    </div>