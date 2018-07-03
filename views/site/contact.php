<?
use yii\widgets\Breadcrumbs;
$this->params['breadcrumbs'][] = 'Контакты';
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

<div class="container">
    <h2 class="pageTitle contactPage__title">Контакты</h2>
    <div class="contactPage__mainRow row">
        <div class="formWrap col-12 col-lg-7 col-xl-8">
            <form id="contactPage_form" class="form form_contactPage flex flex-column align-items-center">
                <h3 class="form__title">Ждём Ваших пожеланий, замечаний и претензий!</h3>
                <div class="form__inner row">
                    <div class="col-12 col-sm-6">
                        <input name="NAME" type="text" placeholder="Ваше имя" class="clear input" required>
                    </div>
                    <div class="col-12 col-sm-6">
                        <input name="E-MAIL" type="email" placeholder="E-mail" class="clear input" required>
                    </div>
                    <div class="col-12">
                                <textarea name="SEND" placeholder="Текст сообщения..."
                                          class="clear textArea col-12"></textarea>
                    </div>
                    <input name="contactPage" type="hidden" value="true">
                    <div id="contactPage" class="agre_wrap col-12">
                        <label class="agre_lable flex">
                                    <span class="check_wrap">
                                        <input checked="checked" type="checkbox" value="Y" class="form_check"
                                               data-id="#contactPage" style="display: none">
                                        <em class="check_mask flex justify-content-center align-items-center">
                                            <svg class="checkedImg" xmlns="http://www.w3.org/2000/svg"
                                                 viewBox="0 0 512 512">
                                                <path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"/>
                                            </svg>
                                        </em>
                                    </span>
                            <a class="check_text">
                                Нажимая кнопку «Отправить», я даю свое согласие на обработку моих
                                персональных данных, в соответствии с Федеральным законом от 27.07.2006
                                года №152-ФЗ «О персональных данных», на условиях и для
                                целей, определенных в Согласии на обработку персональных данных
                            </a>
                        </label>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn_form" data-id="#contactPage" data-close="true">
                            Отправить
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="contactWrap col-12 col-lg-5 col-xl-4">
            <div class="contactBlock">
                <div class="phone contactLine">
                    <p class="contactLineTitle">Телефон:</p>
                    <p class="contactLineContent flex align-items-center">
                        <svg class="yellowIco" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                             preserveAspectRatio="xMidYMid" width="15" height="15" viewBox="0 0 18.87 20">
                            <path fill="#ffbe29" d="M16.757,13.928 C15.533,12.894 14.293,12.268 13.086,13.301 L12.365,13.925 C11.838,14.377 10.857,16.492 7.065,12.180 C3.273,7.873 5.529,7.202 6.057,6.753 L6.782,6.128 C7.983,5.094 7.530,3.791 6.664,2.452 L6.141,1.639 C5.271,0.302 4.323,-0.577 3.119,0.457 L2.468,1.019 C1.936,1.402 0.448,2.648 0.087,5.015 C-0.347,7.855 1.023,11.108 4.162,14.676 C7.297,18.248 10.366,20.041 13.274,20.009 C15.692,19.984 17.150,18.702 17.606,18.236 L18.259,17.673 C19.460,16.641 18.714,15.590 17.491,14.555 L16.757,13.928 Z"
                                  class="cls-1"/>
                        </svg>
                        <a href="tel:+79624425888">+7 (9624) <span>425-888</span></a>
                    </p>
                    <p class="contactLineContent flex align-items-center">
                        <svg class="yellowIco" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                             preserveAspectRatio="xMidYMid" width="15" height="15" viewBox="0 0 18.87 20">
                            <path fill="#ffbe29" d="M16.757,13.928 C15.533,12.894 14.293,12.268 13.086,13.301 L12.365,13.925 C11.838,14.377 10.857,16.492 7.065,12.180 C3.273,7.873 5.529,7.202 6.057,6.753 L6.782,6.128 C7.983,5.094 7.530,3.791 6.664,2.452 L6.141,1.639 C5.271,0.302 4.323,-0.577 3.119,0.457 L2.468,1.019 C1.936,1.402 0.448,2.648 0.087,5.015 C-0.347,7.855 1.023,11.108 4.162,14.676 C7.297,18.248 10.366,20.041 13.274,20.009 C15.692,19.984 17.150,18.702 17.606,18.236 L18.259,17.673 C19.460,16.641 18.714,15.590 17.491,14.555 L16.757,13.928 Z"
                                  class="cls-1"/>
                        </svg>
                        <a href="tel:+78652210106">+7 (8652) <span>210-106</span></a>
                    </p>
                </div>
                <div class="eMail contactLine">
                    <p class="contactLineTitle">E-mail:</p>
                    <p class="contactLineContent flex align-items-center">
                        <svg class="blueIco" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16px" height="16px">
                            <path fill-rule="evenodd"  fill="rgb(107, 201, 242)"
                                  d="M10.621,4.001 L11.849,4.001 L11.007,8.754 C10.914,9.303 10.911,9.701 10.998,9.947 C11.087,10.192 11.282,10.315 11.586,10.315 C11.890,10.315 12.188,10.245 12.480,10.104 C12.773,9.964 13.035,9.748 13.270,9.455 C13.504,9.163 13.693,8.795 13.840,8.351 C13.986,7.907 14.059,7.381 14.059,6.773 C14.059,5.896 13.912,5.147 13.621,4.528 C13.328,3.909 12.927,3.396 12.419,2.993 C11.911,2.590 11.311,2.294 10.621,2.108 C9.932,1.920 9.189,1.826 8.394,1.826 C7.482,1.826 6.635,1.990 5.851,2.317 C5.068,2.645 4.387,3.096 3.808,3.668 C3.230,4.241 2.776,4.922 2.449,5.711 C2.122,6.500 1.959,7.356 1.959,8.280 C1.959,9.192 2.096,10.011 2.370,10.736 C2.645,11.461 3.046,12.077 3.572,12.586 C4.098,13.094 4.749,13.486 5.527,13.760 C6.304,14.035 7.196,14.172 8.202,14.172 C8.540,14.172 8.926,14.132 9.359,14.050 C9.791,13.968 10.183,13.845 10.534,13.682 L11.077,15.365 C10.597,15.599 10.110,15.763 9.613,15.856 C9.115,15.950 8.546,15.997 7.903,15.997 C6.769,15.997 5.720,15.833 4.755,15.506 C3.790,15.178 2.955,14.693 2.248,14.050 C1.540,13.407 0.988,12.609 0.590,11.656 C0.193,10.704 -0.006,9.601 -0.006,8.351 C-0.006,7.076 0.222,5.925 0.678,4.895 C1.134,3.867 1.748,2.990 2.520,2.265 C3.292,1.541 4.186,0.982 5.203,0.590 C6.220,0.199 7.295,0.003 8.429,0.003 C9.505,0.003 10.505,0.158 11.428,0.467 C12.351,0.778 13.152,1.221 13.830,1.800 C14.508,2.379 15.041,3.087 15.427,3.923 C15.812,4.758 16.006,5.708 16.006,6.772 C16.006,7.521 15.875,8.222 15.611,8.877 C15.348,9.532 14.986,10.099 14.524,10.578 C14.062,11.057 13.524,11.437 12.911,11.718 C12.297,11.998 11.639,12.139 10.937,12.139 C10.645,12.139 10.374,12.107 10.122,12.042 C9.871,11.977 9.660,11.870 9.491,11.718 C9.321,11.565 9.196,11.367 9.114,11.121 C9.032,10.876 9.008,10.572 9.044,10.209 L8.974,10.209 C8.798,10.455 8.609,10.695 8.404,10.928 C8.200,11.162 7.974,11.370 7.729,11.551 C7.483,11.732 7.214,11.876 6.922,11.980 C6.629,12.085 6.308,12.139 5.957,12.139 C5.677,12.139 5.408,12.077 5.151,11.955 C4.893,11.832 4.671,11.659 4.484,11.437 C4.297,11.215 4.148,10.947 4.037,10.630 C3.926,10.315 3.871,9.964 3.871,9.578 C3.871,8.854 3.987,8.149 4.221,7.465 C4.455,6.781 4.774,6.176 5.177,5.650 C5.580,5.124 6.048,4.700 6.580,4.378 C7.112,4.057 7.676,3.896 8.272,3.896 C8.681,3.896 9.026,3.957 9.306,4.080 C9.587,4.203 9.844,4.364 10.078,4.563 L10.621,4.001 ZM9.516,6.124 C9.364,5.995 9.207,5.896 9.043,5.826 C8.880,5.756 8.675,5.720 8.429,5.720 C8.079,5.720 7.754,5.820 7.456,6.019 C7.158,6.217 6.901,6.474 6.685,6.790 C6.468,7.106 6.302,7.460 6.185,7.851 C6.068,8.243 6.009,8.626 6.009,8.999 C6.009,9.386 6.088,9.702 6.246,9.947 C6.404,10.192 6.675,10.315 7.061,10.315 C7.225,10.315 7.401,10.265 7.587,10.166 C7.775,10.066 7.956,9.935 8.131,9.771 C8.307,9.608 8.476,9.421 8.640,9.211 C8.804,9.000 8.949,8.778 9.079,8.544 L9.516,6.124 Z"/>
                        </svg>
                        <a href="mailto:lesenka@mail.ru">lesenka@mail.ru</a>
                    </p>
                </div>
                <div class="addres contactLine">
                    <p class="contactLineTitle">Адрес:</p>
                    <p class="contactLineContent flex align-items-center">
                        <svg style="min-width: 15px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="21px">
                            <path fill-rule="evenodd"  fill="rgb(107, 201, 242)"
                                  d="M7.500,-0.000 L7.500,-0.000 C3.351,-0.000 -0.000,3.391 -0.000,7.590 C-0.000,9.054 0.462,10.451 1.105,11.600 L5.993,20.161 C6.299,20.720 6.917,21.000 7.500,21.000 C8.083,21.000 8.670,20.720 9.007,20.161 L13.895,11.606 C14.543,10.456 15.000,9.084 15.000,7.595 C15.000,3.396 11.649,-0.000 7.500,-0.000 ZM7.500,9.832 C5.993,9.832 4.762,8.586 4.762,7.061 C4.762,5.536 5.993,4.290 7.500,4.290 C9.007,4.290 10.238,5.536 10.238,7.061 C10.238,8.591 9.007,9.832 7.500,9.832 Z"/>
                        </svg>
                        г. Ставрополь, ул.Тухачевского, д.25
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="mapLine" data-slideout-ignore>
    <script type="text/javascript" charset="utf-8" async
            src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A1e76baf06ec89ed56ca91b0f72c51edbe0b983fc791d5fd203a0e171c4d1f312&amp;lang=ru_RU&amp;scroll=false"></script>
</div>