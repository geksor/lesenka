<?
    use app\components\CategoryWidget;
    use app\components\ProductWidget;
    use yii\widgets\Breadcrumbs;
    use yii\widgets\Pjax;
    $this->params['breadcrumbs'][] = ['label'=>'Меню','url'=>'/catalog'];
    if($backCategory){
        $this->params['breadcrumbs'][] = ['label'=>$backCategory['name'],'url' => "/catalog/{$backCategory['alias']}"];
    }else{
        $backCategory['alias'] = $mainCategory['alias'];
    }
    $this->params['breadcrumbs'][] = $mainCategory['name'];
?>
<div class="bread_crumbs_line">
    <div class="container">
        <div class="crumb_wrapper">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
        </div>
    </div>
</div>
<div class="products_line">
    <div class="container">
        <h1 class="site_header">
            <?=$mainCategory['name']?>
        </h1>
        <div class="products_wrapper">
            <div class="row">
                <div class="col-lg-3 col-3 catalog_menu_block">
                    <ul>
                        <?=CategoryWidget::widget(['template'=>'left_menu', 'parent_id' => $parent_id,'active_id' => $mainCategory['id'],'parent' => $backCategory])?>
                    </ul>
                </div>
                <div class="col-lg-9 col-9 products_block">
                    <?Pjax::begin(['timeout' => '10000','scrollTo' => 0]);?>
                        <?=ProductWidget::widget(['categoryId' => $mainCategory['id']])?>
                    <?Pjax::end();?>
                </div>
            </div>
        </div>
    </div>
</div>