<?
use yii\widgets\Breadcrumbs;
use app\components\GalleryWidget;
$this->params['breadcrumbs'][] = ['label'=>'Занятия','url'=>'/aducate'];
$this->params['breadcrumbs'][] = $aducate->name;
?>
<div class="course__titleWrap">
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
        <h2 class="pageTitle course__title"><?=$aducate->name?></h2>
        <div class="course__description">
            <?=$aducate->short_description?>
        </div>
    </div>
</div>
<div class="course__contentWrap">
    <div class="bgndBlock"></div>
    <div class="container">
        <div class="course__imgBlock">
            <div class="row">
                <?=GalleryWidget::widget(['gallId' => $aducate->gallery_id])?>
            </div>
        </div>
        <div class="course__infoBlock">
            <?=$aducate->description?>
            <div class="course__tasks">
                <h3>Задачи группы:</h3>
                <?=$aducate->task_list?>
            </div>
        </div>
    </div>
</div>

