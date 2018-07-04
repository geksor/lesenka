<?php
    use app\components\AducateWidget;
use yii\widgets\Breadcrumbs;
$this->params['breadcrumbs'][] = 'Занятия';
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
<div class="programLine">
    <div class="container">
        <h2 class="pageTitle">Программы детского развития и не только</h2>
        <?=AducateWidget::widget()?>
    </div>
</div>