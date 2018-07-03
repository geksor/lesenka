<?
    use yii\widgets\Breadcrumbs;
    use yii\helpers\Html;
    $this->params['breadcrumbs'][] = 'Личный кабинет';
?>
<?echo''
    . Html::beginForm(['/site/logout'], 'post')
    . Html::submitButton(
        'Выход',
        ['class' => 'btn btn-link logout']
    )
    . Html::endForm()
?>
<div class="cramps_wrap">
    <div class="inner">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
    </div>
</div>
<div class="inner">
    <h1 class="personal_header"><?=$page_title?></h1>
    <div class="personal_body">
        <a href="/personal/my-profile" class="personal_btn">
            <img src="images/svg/profile.svg" alt="ПРОФИЛЬ">
            <span>ПРОФИЛЬ</span>
        </a>
        <a href="/personal/my-orders" class="personal_btn">
            <img src="images/svg/my_orders.svg" alt="ИСТОРИЯ ПОКУПОК">
            <span>ИСТОРИЯ ПОКУПОК</span>
        </a>
    </div>
</div>