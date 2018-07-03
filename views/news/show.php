<?
    use yii\widgets\Breadcrumbs;
    $this->params['breadcrumbs'][] = ['label'=>'Новости', 'url'=>'/news'];
    $this->params['breadcrumbs'][] = $article['name'];
?>
<div class="cramps_wrap">
    <div class="inner">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
    </div>
</div>
<div class="inner">
    <article class="news_article">
        <h1 class="site_header"><?=$article['name']?></h1>
        <p class="article__date"><?=$article['pub_date']?></p>
        <div class="article__text">
            <?=$article['full_text']?>
        </div>
        <a href="/news" class="article__back">Перейти к новостям <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
    </article>
</div>