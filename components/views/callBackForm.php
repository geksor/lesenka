<?
use yii\widgets\Pjax;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<?Pjax::begin();?>
<?$form = ActiveForm::begin([
    'id' => 'callBack_form',
    'options' => ['class' => 'form popUp_form form_callBack flex justify-content-center align-items-center','style' => 'display:none','data' => ['pjax' => true]]
])?>
<div class="formBody col-11 col-md-6 col-lg-5 col-xl-4">
    <div class="row">
        <div class="closeWrap col-12">
            <div class="row justify-content-end">
                <div class="close">
                    <svg class="closeSvg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50" version="1.1">
                        <g id="surface1">
                            <path d="M 7.71875 6.28125 L 6.28125 7.71875 L 23.5625 25 L 6.28125 42.28125 L 7.71875 43.71875 L 25 26.4375 L 42.28125 43.71875 L 43.71875 42.28125 L 26.4375 25 L 43.71875 7.71875 L 42.28125 6.28125 L 25 23.5625 Z "/>
                        </g>
                    </svg>
                </div>
            </div>
        </div>
        <div class="col-12">
            <?= $form->field($model,'name')->textInput(['class' => 'clear input site_input','placeholder' => 'Ваше имя*'])->label(false)?>
        </div>

        <div class="col-12">
            <?= $form->field($model,'phone')->textInput(['class' => 'clear input site_input','placeholder' => 'Номер телефона*'])->label(false)?>
        </div>
        <div id="callBack" class="agre_wrap col-12">
            <label class="agre_lable flex">
                                    <span class="check_wrap">
                                        <?= $form->field($model,'agree',[
                                            'template' => '{input}',
                                            'options' => [
                                                'tag' => false,
                                            ],
                                        ])->checkbox(['label' => false,'checked ' => true,'class' => 'form_check', 'data' => ['id' => '#callBack'],'style' => 'display:none'],false)?>
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
            <?= Html::submitButton('Отправить', ['class' => 'btn_form','data' => ['id' => '#callBack']]) ?>
        </div>
    </div>
</div>
<?ActiveForm::end()?>
<?Pjax::end();?>