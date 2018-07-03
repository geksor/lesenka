<?
use app\components\CategoryWidget;
use yii\widgets\Breadcrumbs;
$this->params['breadcrumbs'][] = 'Меню';
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
<div class="container">
    <h2 class="site_header">
        Наше меню
    </h2>
    <div class="cm_body">
        <div class="row">
            <?=CategoryWidget::widget(['template'=>'block'])?>
        </div>
    </div>
    <div class="cm_info">
        <p class="atm_info">
            Приглашаем Вас отдохнуть в расслабляющей обстановке дикого запада и отведать новые блюда нашего повара. Мы неоднократно являлись участниками и победителями различных краевых конкурсов, регулярно изучаем отзыва посетителей и чутко реагируем на предложения и замечания.
        </p>
        <p class="atm_info">
            У нас постоянно проводятся юбилейные вечера, свадебные мероприятия детские праздники. В уютной Vip комнате можно провести романтический вечер и пообщаться с друзьями в узком кругу. Салун славится не только кавказской, но и европейской кухней. Сочетание отличной кухне, комфорта, живой музыке и хорошего обслуживания привлекает к нам гостей из других регионов ближнего и дальнего зарубежья, создать казино.
        </p>
    </div>
</div>
