<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use app\components\GalleryWidget;

$this->params['breadcrumbs'][] = 'О нас';
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
<article class="container">
    <h2 class="pageTitle aboutTitle">О нас</h2>
    <div class="row">
        <p class="about__text col-12">
            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
            occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed
            ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
            rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
            explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
            consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui
            dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi
            tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
        </p>
    </div>
    <div class="about__image row">
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="about__imgWrap"></div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="about__imgWrap"></div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="about__imgWrap"></div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="about__imgWrap"></div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="about__imgWrap"></div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="about__imgWrap"></div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="about__imgWrap"></div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="about__imgWrap"></div>
        </div>
    </div>
</article>
