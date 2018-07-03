<?
    use app\components\ProductWidget;
    use yii\widgets\Breadcrumbs;
    use yii\widgets\Pjax;
    $this->params['breadcrumbs'][] = 'Поиск';
?>
<div class="cramps_wrap">
    <div class="inner">
        <?= Breadcrumbs::widget(['links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],]) ?>
    </div>
</div>
<div class="inner">
    <h1 class="site_header">Вы искали 	&laquo;<?=$lastQuery?>&raquo;</h1>
    <?Pjax::begin(['timeout' => '10000','scrollTo' => 0]);?>
    <div class="search_res">
        <?=ProductWidget::widget(['search' => $lastQuery])?>
    </div>
    <?Pjax::end()?>
</div>
