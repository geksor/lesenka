<?
use yii\helpers\Html;
use app\assets\AppAsset;
use yii\bootstrap\Nav;
use app\components\OnlineOrderFormWidget;
use app\components\SubscriptionFormWidget;
use app\components\CallBackFormWidget;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="57x57" href="/web/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/web/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/web/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/web/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/web/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/web/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/web/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/web/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/web/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/web/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/web/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/web/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/web/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<?if(Yii::$app->user->identity && Yii::$app->user->can('admin')):?>
    <a href="/admin">Админ панель</a>
<?endif;?>
<div id="menu" class="menu slideout-menu slideout-menu-left">
    <div class="left_menu">
        <?=Nav::widget([
            'items' => [
                ['label' => 'Занятия', 'url' => ['/aducate/index']],
                ['label' => 'Расписание', 'url' => ['/site/table']],
                ['label' => 'Новости', 'url' => ['/news/index']],
                ['label' => 'О нас', 'url' => ['/site/about']],
                ['label' => 'Контакты', 'url' => ['/site/contact']],
            ]
        ])?>
    </div>
</div>
<div class="wrapper panel slideout-panel slideout-panel-left page" id="panel">
    <header class="header">
        <div class="header__topLine">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-8 col-xl-6">
                        <div class="header__contact row">
                            <div class="col-auto first_col">
                                <p class="header__topLineText"><span>Наш адрес:</span> г. Ставрополь, ул. Тухачевского
                                    25</p>
                            </div>
                            <div class="col-auto">
                                <a href="mailto:lesenka@mail.ru" class="header__topLineText"><span>E-mail адрес:</span> lesenka@mail.ru</a>
                            </div>
                        </div>
                    </div>
                    <div class="header__rezhimrabotiWrap col-4 col-xl-5">
                        <div class="header__rezhimraboti">
                            <div class="col-auto">
                                <p class="header__topLineText"><span>Режим работы:</span> пн-пт с 09 до 20, сб с 09
                                    до19, вс с 10 до 18</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__mainLine">
            <div class="container">
                <div class="row align-items-center">
                    <button class="col-auto col-sm-2 col-md-1 btn_slideout js-slideout-toggle bars">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32px"
                             height="28px" viewBox="0 0 32 28">
                            <rect x="0" y="0" width="32" height="4"></rect>
                            <rect x="0" y="12" width="32" height="4"></rect>
                            <rect x="0" y="24" width="32" height="4"></rect>
                        </svg>
                    </button>
                    <div class="header__logoWrap col-9 col-sm-5 col-md-6 col-lg-3 col-xl-4">
                        <div class="row relative justify-content-center justify-content-xl-start">
                            <div class="logo col-4 col-md-4 col-lg-5 col-xl-4">
                                <img src="/images/logo_lesenka.png" alt="logo">
                            </div>
                            <div class="col-12 col-md-8 col-lg-12 col-xl-8 align-self-center flex justify-content-center justify-content-md-start justify-content-lg-center justify-content-xl-start">
                                <h1 class="logoText">
                                    Детский центр роста и развития <br>
                                    <span>«Лесенка знаний»</span>
                                </h1>
                            </div>
                            <a href="/" class="absolute_100prc"></a>
                        </div>
                    </div>
                    <div class="header__menuWrap col-6 col-xl-5">
                        <?=Nav::widget([
                            'options' => ['class' => 'row'],
                            'items' => [
                                ['label' => 'Занятия', 'url' => ['/aducate/index']],
                                ['label' => 'Расписание', 'url' => ['/site/table']],
                                ['label' => 'Новости', 'url' => ['/news/index']],
                                ['label' => 'О нас', 'url' => ['/site/about']],
                                ['label' => 'Контакты', 'url' => ['/site/contact']],
                            ]
                        ])?>
                    </div>
                    <div class="header__phone col-12 col-sm-5 col-lg-3 flex align-items-center justify-content-between justify-content-sm-end">
                        <div class="ico">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                 preserveAspectRatio="xMidYMid" width="18.87" height="20" viewBox="0 0 18.87 20">
                                <path d="M16.757,13.928 C15.533,12.894 14.293,12.268 13.086,13.301 L12.365,13.925 C11.838,14.377 10.857,16.492 7.065,12.180 C3.273,7.873 5.529,7.202 6.057,6.753 L6.782,6.128 C7.983,5.094 7.530,3.791 6.664,2.452 L6.141,1.639 C5.271,0.302 4.323,-0.577 3.119,0.457 L2.468,1.019 C1.936,1.402 0.448,2.648 0.087,5.015 C-0.347,7.855 1.023,11.108 4.162,14.676 C7.297,18.248 10.366,20.041 13.274,20.009 C15.692,19.984 17.150,18.702 17.606,18.236 L18.259,17.673 C19.460,16.641 18.714,15.590 17.491,14.555 L16.757,13.928 Z"
                                      class="cls-1"/>
                            </svg>

                        </div>
                        <div class="content">
                            <p><a href="tel:+79624425888">+7 (9624) <span>425-888</span></a></p>
                            <p><a href="tel:+78652210106">+7 (8652) <span>210-106</span></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main class="main">
        <?=$content?>
    </main>
    <footer class="footer">
        <div class="container">
            <div class="row align-items-center justify-content-center justify-content-md-start">
                <div class="footer__logoWrap col-9 col-sm-5 col-md-6 col-lg-4">
                    <div class="row relative justify-content-center justify-content-md-start">
                        <div class="logo col-5 col-md-4">
                            <img src="/images/logo_lesenka.png" alt="logo">
                        </div>
                        <div class="col-12 col-md-8 align-self-center flex justify-content-center justify-content-md-start">
                            <h1 class="logoText footer__logoText">
                                Детский центр роста и развития <br>
                                <span>«Лесенка знаний»</span>
                            </h1>
                        </div>
                        <a href="/" class="absolute_100prc"></a>
                    </div>
                </div>
                <div class="footer__menuWrap col-3 col-xl-4">
                    <?=Nav::widget([
                        'options' => ['class' => ''],
                        'items' => [
                            ['label' => 'Занятия', 'url' => ['/aducate/index']],
                            ['label' => 'Расписание', 'url' => ['/site/table']],
                            ['label' => 'Новости', 'url' => ['/news/index']],
                            ['label' => 'О нас', 'url' => ['/site/about']],
                            ['label' => 'Контакты', 'url' => ['/site/contact']],
                        ]
                    ])?>
                </div>
                <div class="footer__phone col-12 col-sm-10 col-md-6 col-lg-5 col-xl-4 flex align-items-center justify-content-between">
                    <div class="row justify-content-center socIco">
                        <div class="col-auto flex justify-content-between">
                            <a href="#" class="socIco_item instagram flex justify-content-center align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="-30 0 510 511">
                                    <path xmlns="http://www.w3.org/2000/svg"
                                          d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/>
                                </svg>
                            </a>
                            <a href="#" class="socIco_item vk flex justify-content-center align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                    <path d="M545 117.7c3.7-12.5 0-21.7-17.8-21.7h-58.9c-15 0-21.9 7.9-25.6 16.7 0 0-30 73.1-72.4 120.5-13.7 13.7-20 18.1-27.5 18.1-3.7 0-9.4-4.4-9.4-16.9V117.7c0-15-4.2-21.7-16.6-21.7h-92.6c-9.4 0-15 7-15 13.5 0 14.2 21.2 17.5 23.4 57.5v86.8c0 19-3.4 22.5-10.9 22.5-20 0-68.6-73.4-97.4-157.4-5.8-16.3-11.5-22.9-26.6-22.9H38.8c-16.8 0-20.2 7.9-20.2 16.7 0 15.6 20 93.1 93.1 195.5C160.4 378.1 229 416 291.4 416c37.5 0 42.1-8.4 42.1-22.9 0-66.8-3.4-73.1 15.4-73.1 8.7 0 23.7 4.4 58.7 38.1 40 40 46.6 57.9 69 57.9h58.9c16.8 0 25.3-8.4 20.4-25-11.2-34.9-86.9-106.7-90.3-111.5-8.7-11.2-6.2-16.2 0-26.2.1-.1 72-101.3 79.4-135.6z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="footer__phone flex align-items-center">
                        <div class="ico">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                 preserveAspectRatio="xMidYMid" width="18.87" height="20" viewBox="0 0 18.87 20">
                                <path d="M16.757,13.928 C15.533,12.894 14.293,12.268 13.086,13.301 L12.365,13.925 C11.838,14.377 10.857,16.492 7.065,12.180 C3.273,7.873 5.529,7.202 6.057,6.753 L6.782,6.128 C7.983,5.094 7.530,3.791 6.664,2.452 L6.141,1.639 C5.271,0.302 4.323,-0.577 3.119,0.457 L2.468,1.019 C1.936,1.402 0.448,2.648 0.087,5.015 C-0.347,7.855 1.023,11.108 4.162,14.676 C7.297,18.248 10.366,20.041 13.274,20.009 C15.692,19.984 17.150,18.702 17.606,18.236 L18.259,17.673 C19.460,16.641 18.714,15.590 17.491,14.555 L16.757,13.928 Z"
                                      class="cls-1"/>
                            </svg>

                        </div>
                        <div class="content">
                            <p><a href="tel:+79624425888">+7 (9624) <span>425-888</span></a></p>
                            <p><a href="tel:+78652210106">+7 (8652) <span>210-106</span></a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row copyrightLine justify-content-center justify-content-md-between">
                <div class="col-12 col-md-auto copyright">
                    2018 (с) «Лесенка знаний» Все права защищены
                </div>
                <div class="col-auto weLink">
                    <a href="http://web-elitit.ru/" target="_blank">design by ELIT-IT</a>
                </div>
            </div>
        </div>
    </footer>
</div>
    <div class="call_back_form_wrapper">
        <?=CallBackFormWidget::widget()?>
    </div>
    <div class="order_form_wrapper">
        <?=OnlineOrderFormWidget::widget()?>
    </div>
    <div class="subscription_form_wrapper">
        <?=SubscriptionFormWidget::widget()?>
    </div>
    <div id="mess_block" class="none" style="display: none">
        <div class="row align-items-center">
            <div class="col-12">
                <h2 id="mess" class="mess">&nbsp;</h2>
            </div>
            <div class="col-12">
                <button id="ok" class="messBlock__button">OK</button>
            </div>
        </div>
    </div>
    <button id="buttonUp" class="buttonUp active">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
            <path d="M240.971 130.524l194.343 194.343c9.373 9.373 9.373 24.569 0 33.941l-22.667 22.667c-9.357 9.357-24.522 9.375-33.901.04L224 227.495 69.255 381.516c-9.379 9.335-24.544 9.317-33.901-.04l-22.667-22.667c-9.373-9.373-9.373-24.569 0-33.941L207.03 130.525c9.372-9.373 24.568-9.373 33.941-.001z"></path>
        </svg>
    </button>
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>