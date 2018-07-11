<?php

use yii\widgets\Breadcrumbs;

$this->params['breadcrumbs'][] = 'Расписание занятий';
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
    <h2 class="pageTitle">Расписание занятий</h2>
    <div class="tableWrap-lg flex">
        <div class="table col-12">
            <div class="table__head table__mainRow row">
                <div class="table__mainCol col-2">
                    <div class="row table__row">
                        <div class="table__secondCol left_radius col-12">
                            <div class="row table__colContent"></div>
                        </div>
                    </div>
                </div>
                <div class="table__mainCol col-10">
                    <div class="row table__row">
                        <div class="table__secondCol col-2">
                            <div class="row table__colContent">
                                Понедельник
                            </div>
                        </div>
                        <div class="table__secondCol col-2">
                            <div class="row table__colContent">
                                Вторник
                            </div>
                        </div>
                        <div class="table__secondCol col-2">
                            <div class="row table__colContent">
                                Среда
                            </div>
                        </div>
                        <div class="table__secondCol col-2">
                            <div class="row table__colContent">
                                Четверг
                            </div>
                        </div>
                        <div class="table__secondCol col-2">
                            <div class="row table__colContent">
                                Пятница
                            </div>
                        </div>
                        <div class="table__secondCol right_radius col-2">
                            <div class="row table__colContent">
                                Суббота
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table__mainRow row">
                <div class="table__mainCol col-2">
                    <div class="row table__row">
                        <div class="table__secondCol left_radius col-12">
                            <div class="row table__colContent">
                                Мини-сад
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table__mainCol col-10">
                    <div class="row table__row">
                        <div class="table__secondCol right_radius col-10">
                            <div class="row table__colContent">
                                <p><span class="table__time yellow margin">9:00-13:00</span> Сокольцова Марина Борисовна</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table__mainRow row">
                <div class="table__mainCol col-2">
                    <div class="row table__row">
                        <div class="table__secondCol left_radius col-12">
                            <div class="row table__colContent">
                                Развивайка <br>
                                (1-2года)
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table__mainCol col-10">
                    <div class="row table__row">
                        <div class="table__secondCol col-2">
                            <div class="row table__colContent">
                                <p><span class="table__time yellow">11:00-11:45</span> Дарья Сергеевна Скворцова</p>
                            </div>
                        </div>
                        <div class="table__secondCol right_radius col-2">
                            <div class="row table__colContent">
                                <p><span class="table__time yellow">11:00-11:45</span> Дарья Сергеевна Скворцова</p>
                            </div>
                        </div>
                        <div class="col-2"></div>
                        <div class="table__secondCol left_radius col-2">
                            <div class="row table__colContent">
                                <p><span class="table__time yellow">11:00-11:45</span> Дарья Сергеевна Скворцова</p>
                            </div>
                        </div>
                        <div class="table__secondCol right_radius col-2">
                            <div class="row table__colContent">
                                <p><span class="table__time yellow">11:00-11:45</span> Дарья Сергеевна Скворцова</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table__mainRow row">
                <div class="table__mainCol col-2">
                    <div class="row table__row">
                        <div class="table__secondCol left_radius col-12">
                            <div class="row table__colContent">
                                Развивайка <br>
                                (2-3года)
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table__mainCol col-10">
                    <div class="row table__row">
                        <div class="table__secondCol col-2">
                            <div class="row table__colContent">
                                <p><span class="table__time yellow">11:00-11:45</span> Дарья Сергеевна Скворцова</p>
                            </div>
                            <div class="row table__colContent">
                                <p><span class="table__time violet">17:00-17:45</span> Дарья Сергеевна Скворцова</p>
                            </div>
                        </div>
                        <div class="table__secondCol right_radius col-2">
                            <div class="row table__colContent">
                                <p><span class="table__time yellow">11:00-11:45</span> Дарья Сергеевна Скворцова</p>
                            </div>
                        </div>
                        <div class="col-2"></div>
                        <div class="table__secondCol left_radius col-2">
                            <div class="row table__colContent">
                                <p><span class="table__time yellow">11:00-11:45</span> Дарья Сергеевна Скворцова</p>
                            </div>
                            <div class="row table__colContent">
                                <p><span class="table__time violet">17:00-17:45</span> Дарья Сергеевна Скворцова</p>
                            </div>
                        </div>
                        <div class="table__secondCol right_radius col-2">
                            <div class="row table__colContent">
                                <p><span class="table__time yellow">11:00-11:45</span> Дарья Сергеевна Скворцова</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table__mainRow row">
                <div class="table__mainCol col-2">
                    <div class="row table__row">
                        <div class="table__secondCol left_radius col-12">
                            <div class="row table__colContent">
                                Познавайка <br>
                                (3-5лет)
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table__mainCol col-10">
                    <div class="row table__row">
                        <div class="table__secondCol col-2">
                            <div class="row table__colContent">
                                <p><span class="table__time violet">18:00-18:45</span> Дарья Сергеевна Скворцова</p>
                            </div>
                            <div class="row table__colContent">
                                <p><span class="table__time violet">18:00-18:45</span> Дарья Сергеевна Скворцова</p>
                            </div>
                        </div>
                        <div class="table__secondCol right_radius col-2">
                            <div class="row table__colContent">
                                <p><span class="table__time violet">18:00-18:45</span> Дарья Сергеевна Скворцова</p>
                            </div>
                            <div class="row table__colContent">
                                <p><span class="table__time violet">18:00-18:45</span> Дарья Сергеевна Скворцова</p>
                            </div>
                        </div>
                        <div class="col-2"></div>
                        <div class="table__secondCol left_radius col-2">
                            <div class="row table__colContent">
                                <p><span class="table__time violet">18:00-18:45</span> Дарья Сергеевна Скворцова</p>
                            </div>
                            <div class="row table__colContent">
                                <p><span class="table__time violet">18:00-18:45</span> Дарья Сергеевна Скворцова</p>
                            </div>
                        </div>
                        <div class="table__secondCol right_radius col-2">
                            <div class="row table__colContent">
                                <p><span class="table__time violet">18:00-18:45</span> Дарья Сергеевна Скворцова</p>
                            </div>
                            <div class="row table__colContent">
                                <p><span class="table__time violet">18:00-18:45</span> Дарья Сергеевна Скворцова</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table__mainRow row">
                <div class="table__mainCol col-2">
                    <div class="row table__row">
                        <div class="table__secondCol all_radius col-12">
                            <div class="row table__colContent">
                                Знайка <br>
                                (5-7лет)
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table__mainCol col-10">
                    <div class="row table__row">
                        <div class="col-2"></div>
                        <div class="table__secondCol all_radius col-2">
                            <div class="row table__colContent">
                                <p><span class="table__time violet">17:00-17:45</span> Дарья Сергеевна Скворцова</p>
                            </div>
                        </div>
                        <div class="col-2"></div>
                        <div class="table__secondCol all_radius col-2">
                            <div class="row table__colContent">
                                <p><span class="table__time violet">17:00-17:45</span> Дарья Сергеевна Скворцова</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table__mainRow row">
                <div class="table__mainCol col-2">
                    <div class="row table__row">
                        <div class="table__secondCol left_radius col-12">
                            <div class="row table__colContent">
                                Учусь на «5»
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table__mainCol col-10">
                    <div class="row table__row">
                        <div class="table__secondCol col-2">
                            <div class="row table__colContent">
                                <p><span class="table__time violet">19:00-19:45</span> Дарья Сергеевна Скворцова</p>
                            </div>
                        </div>
                        <div class="table__secondCol right_radius col-2">
                            <div class="row table__colContent">
                                <p><span class="table__time violet">18:00-18:45</span> Дарья Сергеевна Скворцова</p>
                            </div>
                            <div class="row table__colContent">
                                <p><span class="table__time violet">18:00-18:45</span> Дарья Сергеевна Скворцова</p>
                            </div>
                            <div class="row table__colContent">
                                <p><span class="table__time violet">18:00-18:45</span> Дарья Сергеевна Скворцова</p>
                            </div>
                        </div>
                        <div class="col-2"></div>
                        <div class="table__secondCol left_radius col-2">
                            <div class="row table__colContent">
                                <p><span class="table__time violet">18:00-18:45</span> Дарья Сергеевна Скворцова</p>
                            </div>
                            <div class="row table__colContent">
                                <p><span class="table__time violet">18:00-18:45</span> Дарья Сергеевна Скворцова</p>
                            </div>
                        </div>
                        <div class="table__secondCol col-2">
                            <div class="row table__colContent">
                                <p><span class="table__time violet">18:00-18:45</span> Дарья Сергеевна Скворцова</p>
                            </div>
                            <div class="row table__colContent">
                                <p><span class="table__time violet">18:00-18:45</span> Дарья Сергеевна Скворцова</p>
                            </div>
                        </div>
                        <div class="table__secondCol right_radius col-2">
                            <div class="row table__colContent">
                                <p><span class="table__time yellow">10:00-12:00</span> Дарья Сергеевна Скворцова</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table__mainRow row">
                <div class="table__mainCol col-2">
                    <div class="row table__row">
                        <div class="table__secondCol left_radius col-12">
                            <div class="row table__colContent">
                                Английский язык <br>
                                (малышам)
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table__mainCol col-10">
                    <div class="row table__row">
                        <div class="table__secondCol right_radius col-2">
                            <div class="row table__colContent">
                                <p><span class="table__time violet">17:00-17:45</span> Ирина Евгеньевна Медведева</p>
                            </div>
                        </div>
                        <div class="col-2"></div>
                        <div class="table__secondCol all_radius col-2">
                            <div class="row table__colContent">
                                <p><span class="table__time violet">17:00-17:45</span> Ирина Евгеньевна Медведева</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table__mainRow row">
                <div class="table__mainCol col-2">
                    <div class="row table__row">
                        <div class="table__secondCol left_radius col-12">
                            <div class="row table__colContent">
                                Английский язык <br>
                                (школьники)
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table__mainCol col-10">
                    <div class="row table__row">
                        <div class="table__secondCol right_radius col-2">
                            <div class="row table__colContent">
                                <p><span class="table__time violet">18:00-18:45</span> Дарья Александровна Стаценко</p>
                            </div>
                        </div>
                        <div class="col-2"></div>
                        <div class="col-2"></div>
                        <div class="table__secondCol left_radius col-2">
                            <div class="row table__colContent">
                                <p><span class="table__time violet">18:00-18:45</span> Дарья Александровна Стаценко</p>
                            </div>
                        </div>
                        <div class="table__secondCol right_radius col-2">
                            <div class="row table__colContent">
                                <p><span class="table__time violet">17:00-17:45</span> Дарья Александровна Стаценко</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table__mainRow row">
                <div class="table__mainCol col-2">
                    <div class="row table__row">
                        <div class="table__secondCol left_radius col-12">
                            <div class="row table__colContent">
                                Продленка (6-14лет)
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table__mainCol col-10">
                    <div class="row table__row">
                        <div class="table__secondCol right_radius col-12">
                            <div class="row table__colContent">
                                <p><span class="table__time yellowViolet margin">11:00-16:00</span> Иванова Марфа Захаровна</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table__mainRow row">
                <div class="table__mainCol col-2">
                    <div class="row table__row">
                        <div class="table__secondCol left_radius col-12">
                            <div class="row table__colContent">
                                Шахматы
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table__mainCol col-10">
                    <div class="row table__row">
                        <div class="table__secondCol right_radius col-2">
                            <div class="row table__colContent">
                                <p><span class="table__time violet">18:00-18:45</span> тренер: <br> Евгений</p>
                            </div>
                        </div>
                        <div class="col-2"></div>
                        <div class="table__secondCol all_radius col-2">
                            <div class="row table__colContent">
                                <p><span class="table__time violet">18:00-18:45</span> тренер: <br> Евгений</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table__mainRow row">
                <div class="table__mainCol col-2">
                    <div class="row table__row">
                        <div class="table__secondCol left_radius col-12">
                            <div class="row table__colContent">
                                Робототехника
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table__mainCol col-10">
                    <div class="row table__row">
                        <div class="table__secondCol col-2">
                            <div class="row table__colContent">
                                <p><span class="table__time violet">18:00-18:45</span> Юлия Александровна Кочергина</p>
                            </div>
                            <div class="row table__colContent">
                                <p><span class="table__time violet">18:00-18:45</span> Юлия Александровна Кочергина</p>
                            </div>
                        </div>
                        <div class="table__secondCol col-2">
                            <div class="row table__colContent">
                                <p><span class="table__time violet">18:00-18:45</span> Юлия Александровна Кочергина</p>
                            </div>
                        </div>
                        <div class="table__secondCol col-2">
                            <div class="row table__colContent">
                                <p><span class="table__time violet">18:00-18:45</span> Юлия Александровна Кочергина</p>
                            </div>
                            <div class="row table__colContent">
                                <p><span class="table__time violet">18:00-18:45</span> Юлия Александровна Кочергина</p>
                            </div>
                        </div>
                        <div class="table__secondCol right_radius col-2">
                            <div class="row table__colContent">
                                <p><span class="table__time violet">18:00-18:45</span> Юлия Александровна Кочергина</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table__mainRow row">
                <div class="table__mainCol col-2">
                    <div class="row table__row">
                        <div class="table__secondCol all_radius col-12">
                            <div class="row table__colContent">
                                Художественная <br>
                                мастерская <br>
                                «Палитра»
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table__mainCol col-10">
                    <div class="row table__row">
                        <div class="col-2"></div>
                        <div class="col-2"></div>
                        <div class="table__secondCol all_radius col-2">
                            <div class="row table__colContent">
                                <p><span class="table__time violet">18:00-18:45</span> Любовь Сергеевна Гайдукова</p>
                            </div>
                            <div class="row table__colContent">
                                <p><span class="table__time violet">18:00-18:45</span> Любовь Сергеевна Гайдукова</p>
                            </div>
                        </div>
                        <div class="col-2"></div>
                        <div class="table__secondCol left_radius col-2">
                            <div class="row table__colContent">
                                <p><span class="table__time violet">18:00-18:45</span> Любовь Сергеевна Гайдукова</p>
                            </div>
                            <div class="row table__colContent">
                                <p><span class="table__time violet">18:00-18:45</span> Любовь Сергеевна Гайдукова</p>
                            </div>
                        </div>
                        <div class="table__secondCol right_radius col-2">
                            <div class="row table__colContent">
                                <p><span class="table__time yellow">18:00-18:45</span> Любовь Сергеевна Гайдукова</p>
                            </div>
                            <div class="row table__colContent">
                                <p><span class="table__time yellow">18:00-18:45</span> Любовь Сергеевна Гайдукова</p>
                            </div>
                            <div class="row table__colContent">
                                <p><span class="table__time yellow">18:00-18:45</span> Любовь Сергеевна Гайдукова</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table__mainRow row">
                <div class="table__mainCol col-2">
                    <div class="row table__row">
                        <div class="table__secondCol all_radius col-12">
                            <div class="row table__colContent">
                                Театральная студия <br>
                                «Образ»
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table__mainCol col-10">
                    <div class="row table__row">
                        <div class="col-2"></div>
                        <div class="col-2"></div>
                        <div class="table__secondCol all_radius col-2">
                            <div class="row table__colContent">
                                <p><span class="table__time violet">18:00-18:45</span> Дарья Сергеевна Скворцова</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table__mainRow row">
                <div class="table__mainCol col-2">
                    <div class="row table__row">
                        <div class="table__secondCol all_radius col-12">
                            <div class="row table__colContent">
                                Танцы
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table__mainCol col-10">
                    <div class="row table__row">
                        <div class="col-2"></div>
                        <div class="table__secondCol all_radius col-2">
                            <div class="row table__colContent">
                                <p><span class="table__time violet">17:00-17:45</span> Ирина</p>
                            </div>
                            <div class="row table__colContent">
                                <p><span class="table__time violet">17:00-17:45</span> Ирина</p>
                            </div>
                        </div>
                        <div class="col-2"></div>
                        <div class="table__secondCol all_radius col-2">
                            <div class="row table__colContent">
                                <p><span class="table__time violet">17:00-17:45</span> Ирина</p>
                            </div>
                            <div class="row table__colContent">
                                <p><span class="table__time violet">17:00-17:45</span> Ирина</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table__mainRow row">
                <div class="table__mainCol col-2">
                    <div class="row table__row">
                        <div class="table__secondCol all_radius col-12">
                            <div class="row table__colContent">
                                "Прыг-скок"
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table__mainCol col-10">
                    <div class="row table__row">
                        <div class="col-2"></div>
                        <div class="table__secondCol all_radius col-2">
                            <div class="row table__colContent">
                                <p><span class="table__time only violet">17:00-17:45</span></p>
                            </div>
                        </div>
                        <div class="col-2"></div>
                        <div class="table__secondCol all_radius col-2">
                            <div class="row table__colContent">
                                <p><span class="table__time only violet">17:00-17:45</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table__mainRow row">
                <div class="table__mainCol col-2">
                    <div class="row table__row">
                        <div class="table__secondCol all_radius col-12">
                            <div class="row table__colContent">
                                ВПР <br>
                                (Русский, <br>
                                Окружающий мир)
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table__mainCol col-10">
                    <div class="row table__row">
                        <div class="col-2"></div>
                        <div class="col-2"></div>
                        <div class="table__secondCol all_radius col-2">
                            <div class="row table__colContent">
                                <p><span class="table__time violet">19:00-20:30</span> Анна Владимировна Козина</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table__mainRow row">
                <div class="table__mainCol col-2">
                    <div class="row table__row">
                        <div class="table__secondCol left_radius col-12">
                            <div class="row table__colContent">
                                ВПР <br>
                                (Математика)
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table__mainCol col-10">
                    <div class="row table__row">
                        <div class="table__secondCol right_radius col-2">
                            <div class="row table__colContent">
                                <p><span class="table__time violet">19:00-20:00</span> Галина Сергеевна Милащенко</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table__mainRow row">
                <div class="table__mainCol col-2">
                    <div class="row table__row">
                        <div class="table__secondCol left_radius col-12">
                            <div class="row table__colContent">
                                Логопед
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table__mainCol col-10">
                    <div class="row table__row">
                        <div class="table__secondCol right_radius col-12">
                            <div class="row table__colContent">
                                <p>Занятия проводятся по предварительной записи</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table__mainRow row">
                <div class="table__mainCol col-2">
                    <div class="row table__row">
                        <div class="table__secondCol left_radius col-12">
                            <div class="row table__colContent">
                                Психолог детский
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table__mainCol col-10">
                    <div class="row table__row">
                        <div class="table__secondCol right_radius col-12">
                            <div class="row table__colContent">
                                <p>Занятия проводятся по предварительной записи</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tableWrap">
        <div class="row">
            <div class="col-12">
                <label for="course_select">
                    Направление
                </label>
                <div class="course__selectWrap">
                    <select class="select" name="course" id="course_select">
                        <option value="#course_1">Мини-сад</option>
                        <option value="#course_2">Развивайка (1-2года)</option>
                        <option value="#course_3">Развивайка (2-3года)</option>
                        <option value="#course_4">Познавайка (3-5лет)</option>
                        <option value="#course_5">Знайка (5-7лет)</option>
                        <option value="#course_6">Учусь на «5»</option>
                        <option value="#course_7">Английский язык (малышам)</option>
                        <option value="#course_8">Английский язык (школьники)</option>
                        <option value="#course_9">Продленка (6-14лет)</option>
                        <option value="#course_10">Шахматы</option>
                        <option value="#course_11">Робототехника</option>
                        <option value="#course_12">Художественная мастерская «Палитра»</option>
                        <option value="#course_13">Театральная студия «Образ»</option>
                        <option value="#course_14">Танцы</option>
                        <option value="#course_15">"Прыг-скок"</option>
                        <option value="#course_16">ВПР (Русский, Окружающий мир)</option>
                        <option value="#course_17">ВПР (Математика)</option>
                        <option value="#course_18">Логопед</option>
                        <option value="#course_19">Психолог детский</option>
                    </select>
                </div>
            </div>
            <div class="col-12">
                <div class="courseTiming active" id="course_1">
                    <ul>
                        <li>
                            <span class="weekTitle">Понедельник</span>
                            <ul>
                                <li><span class="tableMobile__time">9:00-13:00</span> Сокольцова Марина Борисовна</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Вторник</span>
                            <ul>
                                <li><span class="tableMobile__time">9:00-13:00</span> Сокольцова Марина Борисовна</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Среда</span>
                            <ul>
                                <li><span class="tableMobile__time">9:00-13:00</span> Сокольцова Марина Борисовна</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Четверг</span>
                            <ul>
                                <li><span class="tableMobile__time">9:00-13:00</span> Сокольцова Марина Борисовна</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Пятница</span>
                            <ul>
                                <li><span class="tableMobile__time">9:00-13:00</span> Сокольцова Марина Борисовна</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Суббота</span>
                            <ul>
                                <li><span class="tableMobile__time">-</span></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="courseTiming" id="course_2" >
                    <ul>
                        <li>
                            <span class="weekTitle">Понедельник</span>
                            <ul>
                                <li><span class="tableMobile__time">11:00-11:45</span> Дарья Сергеевна Скворцова</li>
                                <li><span class="tableMobile__time">17:00-17:45</span> Дарья Сергеевна Скворцова</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Вторник</span>
                            <ul>
                                <li><span class="tableMobile__time">11:00-11:45</span> Дарья Сергеевна Скворцова</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Среда</span>
                            <ul>
                                <li><span class="tableMobile__time">-</span></li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Четверг</span>
                            <ul>
                                <li><span class="tableMobile__time">11:00-11:45</span> Дарья Сергеевна Скворцова</li>
                                <li><span class="tableMobile__time">17:00-17:45</span> Дарья Сергеевна Скворцова</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Пятница</span>
                            <ul>
                                <li><span class="tableMobile__time">11:00-11:45</span> Дарья Сергеевна Скворцова</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Суббота</span>
                            <ul>
                                <li><span class="tableMobile__time">-</span></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="courseTiming" id="course_3" >
                    <ul>
                        <li>
                            <span class="weekTitle">Понедельник</span>
                            <ul>
                                <li><span class="tableMobile__time">19:00-19:45</span> Дарья Сергеевна Скворцова</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Вторник</span>
                            <ul>
                                <li><span class="tableMobile__time">18:00-18:45</span> Дарья Сергеевна Скворцова</li>
                                <li><span class="tableMobile__time">18:00-18:45</span> Дарья Сергеевна Скворцова</li>
                                <li><span class="tableMobile__time">18:00-18:45</span> Дарья Сергеевна Скворцова</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Среда</span>
                            <ul>
                                <li><span class="tableMobile__time">-</span></li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Четверг</span>
                            <ul>
                                <li><span class="tableMobile__time">18:00-18:45</span> Дарья Сергеевна Скворцова</li>
                                <li><span class="tableMobile__time">18:00-18:45</span> Дарья Сергеевна Скворцова</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Пятница</span>
                            <ul>
                                <li><span class="tableMobile__time">18:00-18:45</span> Дарья Сергеевна Скворцова</li>
                                <li><span class="tableMobile__time">18:00-18:45</span> Дарья Сергеевна Скворцова</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Суббота</span>
                            <ul>
                                <li><span class="tableMobile__time">11:00-11:45</span> Дарья Сергеевна Скворцова</li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="courseTiming" id="course_4" >
                    <ul>
                        <li>
                            <span class="weekTitle">Понедельник</span>
                            <ul>
                                <li><span class="tableMobile__time">9:00-13:00</span> Сокольцова Марина Борисовна</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Вторник</span>
                            <ul>
                                <li><span class="tableMobile__time">9:00-13:00</span> Сокольцова Марина Борисовна</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Среда</span>
                            <ul>
                                <li><span class="tableMobile__time">9:00-13:00</span> Сокольцова Марина Борисовна</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Четверг</span>
                            <ul>
                                <li><span class="tableMobile__time">9:00-13:00</span> Сокольцова Марина Борисовна</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Пятница</span>
                            <ul>
                                <li><span class="tableMobile__time">9:00-13:00</span> Сокольцова Марина Борисовна</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Суббота</span>
                            <ul>
                                <li><span class="tableMobile__time">-</span></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="courseTiming" id="course_5" >
                    <ul>
                        <li>
                            <span class="weekTitle">Понедельник</span>
                            <ul>
                                <li><span class="tableMobile__time">11:00-11:45</span> Дарья Сергеевна Скворцова</li>
                                <li><span class="tableMobile__time">17:00-17:45</span> Дарья Сергеевна Скворцова</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Вторник</span>
                            <ul>
                                <li><span class="tableMobile__time">11:00-11:45</span> Дарья Сергеевна Скворцова</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Среда</span>
                            <ul>
                                <li><span class="tableMobile__time">-</span></li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Четверг</span>
                            <ul>
                                <li><span class="tableMobile__time">11:00-11:45</span> Дарья Сергеевна Скворцова</li>
                                <li><span class="tableMobile__time">17:00-17:45</span> Дарья Сергеевна Скворцова</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Пятница</span>
                            <ul>
                                <li><span class="tableMobile__time">11:00-11:45</span> Дарья Сергеевна Скворцова</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Суббота</span>
                            <ul>
                                <li><span class="tableMobile__time">-</span></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="courseTiming" id="course_6" >
                    <ul>
                        <li>
                            <span class="weekTitle">Понедельник</span>
                            <ul>
                                <li><span class="tableMobile__time">19:00-19:45</span> Дарья Сергеевна Скворцова</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Вторник</span>
                            <ul>
                                <li><span class="tableMobile__time">18:00-18:45</span> Дарья Сергеевна Скворцова</li>
                                <li><span class="tableMobile__time">18:00-18:45</span> Дарья Сергеевна Скворцова</li>
                                <li><span class="tableMobile__time">18:00-18:45</span> Дарья Сергеевна Скворцова</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Среда</span>
                            <ul>
                                <li><span class="tableMobile__time">-</span></li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Четверг</span>
                            <ul>
                                <li><span class="tableMobile__time">18:00-18:45</span> Дарья Сергеевна Скворцова</li>
                                <li><span class="tableMobile__time">18:00-18:45</span> Дарья Сергеевна Скворцова</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Пятница</span>
                            <ul>
                                <li><span class="tableMobile__time">18:00-18:45</span> Дарья Сергеевна Скворцова</li>
                                <li><span class="tableMobile__time">18:00-18:45</span> Дарья Сергеевна Скворцова</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Суббота</span>
                            <ul>
                                <li><span class="tableMobile__time">11:00-11:45</span> Дарья Сергеевна Скворцова</li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="courseTiming" id="course_7" >
                    <ul>
                        <li>
                            <span class="weekTitle">Понедельник</span>
                            <ul>
                                <li><span class="tableMobile__time">9:00-13:00</span> Сокольцова Марина Борисовна</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Вторник</span>
                            <ul>
                                <li><span class="tableMobile__time">9:00-13:00</span> Сокольцова Марина Борисовна</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Среда</span>
                            <ul>
                                <li><span class="tableMobile__time">9:00-13:00</span> Сокольцова Марина Борисовна</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Четверг</span>
                            <ul>
                                <li><span class="tableMobile__time">9:00-13:00</span> Сокольцова Марина Борисовна</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Пятница</span>
                            <ul>
                                <li><span class="tableMobile__time">9:00-13:00</span> Сокольцова Марина Борисовна</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Суббота</span>
                            <ul>
                                <li><span class="tableMobile__time">-</span></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="courseTiming" id="course_8" >
                    <ul>
                        <li>
                            <span class="weekTitle">Понедельник</span>
                            <ul>
                                <li><span class="tableMobile__time">11:00-11:45</span> Дарья Сергеевна Скворцова</li>
                                <li><span class="tableMobile__time">17:00-17:45</span> Дарья Сергеевна Скворцова</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Вторник</span>
                            <ul>
                                <li><span class="tableMobile__time">11:00-11:45</span> Дарья Сергеевна Скворцова</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Среда</span>
                            <ul>
                                <li><span class="tableMobile__time">-</span></li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Четверг</span>
                            <ul>
                                <li><span class="tableMobile__time">11:00-11:45</span> Дарья Сергеевна Скворцова</li>
                                <li><span class="tableMobile__time">17:00-17:45</span> Дарья Сергеевна Скворцова</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Пятница</span>
                            <ul>
                                <li><span class="tableMobile__time">11:00-11:45</span> Дарья Сергеевна Скворцова</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Суббота</span>
                            <ul>
                                <li><span class="tableMobile__time">-</span></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="courseTiming" id="course_9" >
                    <ul>
                        <li>
                            <span class="weekTitle">Понедельник</span>
                            <ul>
                                <li><span class="tableMobile__time">19:00-19:45</span> Дарья Сергеевна Скворцова</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Вторник</span>
                            <ul>
                                <li><span class="tableMobile__time">18:00-18:45</span> Дарья Сергеевна Скворцова</li>
                                <li><span class="tableMobile__time">18:00-18:45</span> Дарья Сергеевна Скворцова</li>
                                <li><span class="tableMobile__time">18:00-18:45</span> Дарья Сергеевна Скворцова</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Среда</span>
                            <ul>
                                <li><span class="tableMobile__time">-</span></li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Четверг</span>
                            <ul>
                                <li><span class="tableMobile__time">18:00-18:45</span> Дарья Сергеевна Скворцова</li>
                                <li><span class="tableMobile__time">18:00-18:45</span> Дарья Сергеевна Скворцова</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Пятница</span>
                            <ul>
                                <li><span class="tableMobile__time">18:00-18:45</span> Дарья Сергеевна Скворцова</li>
                                <li><span class="tableMobile__time">18:00-18:45</span> Дарья Сергеевна Скворцова</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Суббота</span>
                            <ul>
                                <li><span class="tableMobile__time">11:00-11:45</span> Дарья Сергеевна Скворцова</li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="courseTiming" id="course_10">
                    <ul>
                        <li>
                            <span class="weekTitle">Понедельник</span>
                            <ul>
                                <li><span class="tableMobile__time">9:00-13:00</span> Сокольцова Марина Борисовна</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Вторник</span>
                            <ul>
                                <li><span class="tableMobile__time">9:00-13:00</span> Сокольцова Марина Борисовна</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Среда</span>
                            <ul>
                                <li><span class="tableMobile__time">9:00-13:00</span> Сокольцова Марина Борисовна</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Четверг</span>
                            <ul>
                                <li><span class="tableMobile__time">9:00-13:00</span> Сокольцова Марина Борисовна</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Пятница</span>
                            <ul>
                                <li><span class="tableMobile__time">9:00-13:00</span> Сокольцова Марина Борисовна</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Суббота</span>
                            <ul>
                                <li><span class="tableMobile__time">-</span></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="courseTiming" id="course_11">
                    <ul>
                        <li>
                            <span class="weekTitle">Понедельник</span>
                            <ul>
                                <li><span class="tableMobile__time">11:00-11:45</span> Дарья Сергеевна Скворцова</li>
                                <li><span class="tableMobile__time">17:00-17:45</span> Дарья Сергеевна Скворцова</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Вторник</span>
                            <ul>
                                <li><span class="tableMobile__time">11:00-11:45</span> Дарья Сергеевна Скворцова</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Среда</span>
                            <ul>
                                <li><span class="tableMobile__time">-</span></li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Четверг</span>
                            <ul>
                                <li><span class="tableMobile__time">11:00-11:45</span> Дарья Сергеевна Скворцова</li>
                                <li><span class="tableMobile__time">17:00-17:45</span> Дарья Сергеевна Скворцова</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Пятница</span>
                            <ul>
                                <li><span class="tableMobile__time">11:00-11:45</span> Дарья Сергеевна Скворцова</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Суббота</span>
                            <ul>
                                <li><span class="tableMobile__time">-</span></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="courseTiming" id="course_12">
                    <ul>
                        <li>
                            <span class="weekTitle">Понедельник</span>
                            <ul>
                                <li><span class="tableMobile__time">19:00-19:45</span> Дарья Сергеевна Скворцова</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Вторник</span>
                            <ul>
                                <li><span class="tableMobile__time">18:00-18:45</span> Дарья Сергеевна Скворцова</li>
                                <li><span class="tableMobile__time">18:00-18:45</span> Дарья Сергеевна Скворцова</li>
                                <li><span class="tableMobile__time">18:00-18:45</span> Дарья Сергеевна Скворцова</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Среда</span>
                            <ul>
                                <li><span class="tableMobile__time">-</span></li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Четверг</span>
                            <ul>
                                <li><span class="tableMobile__time">18:00-18:45</span> Дарья Сергеевна Скворцова</li>
                                <li><span class="tableMobile__time">18:00-18:45</span> Дарья Сергеевна Скворцова</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Пятница</span>
                            <ul>
                                <li><span class="tableMobile__time">18:00-18:45</span> Дарья Сергеевна Скворцова</li>
                                <li><span class="tableMobile__time">18:00-18:45</span> Дарья Сергеевна Скворцова</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Суббота</span>
                            <ul>
                                <li><span class="tableMobile__time">11:00-11:45</span> Дарья Сергеевна Скворцова</li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="courseTiming" id="course_13">
                    <ul>
                        <li>
                            <span class="weekTitle">Понедельник</span>
                            <ul>
                                <li><span class="tableMobile__time">9:00-13:00</span> Сокольцова Марина Борисовна</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Вторник</span>
                            <ul>
                                <li><span class="tableMobile__time">9:00-13:00</span> Сокольцова Марина Борисовна</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Среда</span>
                            <ul>
                                <li><span class="tableMobile__time">9:00-13:00</span> Сокольцова Марина Борисовна</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Четверг</span>
                            <ul>
                                <li><span class="tableMobile__time">9:00-13:00</span> Сокольцова Марина Борисовна</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Пятница</span>
                            <ul>
                                <li><span class="tableMobile__time">9:00-13:00</span> Сокольцова Марина Борисовна</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Суббота</span>
                            <ul>
                                <li><span class="tableMobile__time">-</span></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="courseTiming" id="course_14">
                    <ul>
                        <li>
                            <span class="weekTitle">Понедельник</span>
                            <ul>
                                <li><span class="tableMobile__time">11:00-11:45</span> Дарья Сергеевна Скворцова</li>
                                <li><span class="tableMobile__time">17:00-17:45</span> Дарья Сергеевна Скворцова</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Вторник</span>
                            <ul>
                                <li><span class="tableMobile__time">11:00-11:45</span> Дарья Сергеевна Скворцова</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Среда</span>
                            <ul>
                                <li><span class="tableMobile__time">-</span></li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Четверг</span>
                            <ul>
                                <li><span class="tableMobile__time">11:00-11:45</span> Дарья Сергеевна Скворцова</li>
                                <li><span class="tableMobile__time">17:00-17:45</span> Дарья Сергеевна Скворцова</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Пятница</span>
                            <ul>
                                <li><span class="tableMobile__time">11:00-11:45</span> Дарья Сергеевна Скворцова</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Суббота</span>
                            <ul>
                                <li><span class="tableMobile__time">-</span></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="courseTiming" id="course_15">
                    <ul>
                        <li>
                            <span class="weekTitle">Понедельник</span>
                            <ul>
                                <li><span class="tableMobile__time">19:00-19:45</span> Дарья Сергеевна Скворцова</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Вторник</span>
                            <ul>
                                <li><span class="tableMobile__time">18:00-18:45</span> Дарья Сергеевна Скворцова</li>
                                <li><span class="tableMobile__time">18:00-18:45</span> Дарья Сергеевна Скворцова</li>
                                <li><span class="tableMobile__time">18:00-18:45</span> Дарья Сергеевна Скворцова</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Среда</span>
                            <ul>
                                <li><span class="tableMobile__time">-</span></li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Четверг</span>
                            <ul>
                                <li><span class="tableMobile__time">18:00-18:45</span> Дарья Сергеевна Скворцова</li>
                                <li><span class="tableMobile__time">18:00-18:45</span> Дарья Сергеевна Скворцова</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Пятница</span>
                            <ul>
                                <li><span class="tableMobile__time">18:00-18:45</span> Дарья Сергеевна Скворцова</li>
                                <li><span class="tableMobile__time">18:00-18:45</span> Дарья Сергеевна Скворцова</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Суббота</span>
                            <ul>
                                <li><span class="tableMobile__time">11:00-11:45</span> Дарья Сергеевна Скворцова</li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="courseTiming" id="course_16">
                    <ul>
                        <li>
                            <span class="weekTitle">Понедельник</span>
                            <ul>
                                <li><span class="tableMobile__time">19:00-19:45</span> Дарья Сергеевна Скворцова</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Вторник</span>
                            <ul>
                                <li><span class="tableMobile__time">18:00-18:45</span> Дарья Сергеевна Скворцова</li>
                                <li><span class="tableMobile__time">18:00-18:45</span> Дарья Сергеевна Скворцова</li>
                                <li><span class="tableMobile__time">18:00-18:45</span> Дарья Сергеевна Скворцова</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Среда</span>
                            <ul>
                                <li><span class="tableMobile__time">-</span></li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Четверг</span>
                            <ul>
                                <li><span class="tableMobile__time">18:00-18:45</span> Дарья Сергеевна Скворцова</li>
                                <li><span class="tableMobile__time">18:00-18:45</span> Дарья Сергеевна Скворцова</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Пятница</span>
                            <ul>
                                <li><span class="tableMobile__time">18:00-18:45</span> Дарья Сергеевна Скворцова</li>
                                <li><span class="tableMobile__time">18:00-18:45</span> Дарья Сергеевна Скворцова</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Суббота</span>
                            <ul>
                                <li><span class="tableMobile__time">11:00-11:45</span> Дарья Сергеевна Скворцова</li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="courseTiming" id="course_17">
                    <ul>
                        <li>
                            <span class="weekTitle">Понедельник</span>
                            <ul>
                                <li><span class="tableMobile__time">9:00-13:00</span> Сокольцова Марина Борисовна</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Вторник</span>
                            <ul>
                                <li><span class="tableMobile__time">9:00-13:00</span> Сокольцова Марина Борисовна</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Среда</span>
                            <ul>
                                <li><span class="tableMobile__time">9:00-13:00</span> Сокольцова Марина Борисовна</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Четверг</span>
                            <ul>
                                <li><span class="tableMobile__time">9:00-13:00</span> Сокольцова Марина Борисовна</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Пятница</span>
                            <ul>
                                <li><span class="tableMobile__time">9:00-13:00</span> Сокольцова Марина Борисовна</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Суббота</span>
                            <ul>
                                <li><span class="tableMobile__time">-</span></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="courseTiming" id="course_18">
                    <ul>
                        <li>
                            <span class="weekTitle">Понедельник</span>
                            <ul>
                                <li><span class="tableMobile__time">11:00-11:45</span> Дарья Сергеевна Скворцова</li>
                                <li><span class="tableMobile__time">17:00-17:45</span> Дарья Сергеевна Скворцова</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Вторник</span>
                            <ul>
                                <li><span class="tableMobile__time">11:00-11:45</span> Дарья Сергеевна Скворцова</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Среда</span>
                            <ul>
                                <li><span class="tableMobile__time">-</span></li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Четверг</span>
                            <ul>
                                <li><span class="tableMobile__time">11:00-11:45</span> Дарья Сергеевна Скворцова</li>
                                <li><span class="tableMobile__time">17:00-17:45</span> Дарья Сергеевна Скворцова</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Пятница</span>
                            <ul>
                                <li><span class="tableMobile__time">11:00-11:45</span> Дарья Сергеевна Скворцова</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Суббота</span>
                            <ul>
                                <li><span class="tableMobile__time">-</span></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="courseTiming" id="course_19">
                    <ul>
                        <li>
                            <span class="weekTitle">Понедельник</span>
                            <ul>
                                <li><span class="tableMobile__time">19:00-19:45</span> Дарья Сергеевна Скворцова</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Вторник</span>
                            <ul>
                                <li><span class="tableMobile__time">18:00-18:45</span> Дарья Сергеевна Скворцова</li>
                                <li><span class="tableMobile__time">18:00-18:45</span> Дарья Сергеевна Скворцова</li>
                                <li><span class="tableMobile__time">18:00-18:45</span> Дарья Сергеевна Скворцова</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Среда</span>
                            <ul>
                                <li><span class="tableMobile__time">-</span></li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Четверг</span>
                            <ul>
                                <li><span class="tableMobile__time">18:00-18:45</span> Дарья Сергеевна Скворцова</li>
                                <li><span class="tableMobile__time">18:00-18:45</span> Дарья Сергеевна Скворцова</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Пятница</span>
                            <ul>
                                <li><span class="tableMobile__time">18:00-18:45</span> Дарья Сергеевна Скворцова</li>
                                <li><span class="tableMobile__time">18:00-18:45</span> Дарья Сергеевна Скворцова</li>
                            </ul>
                        </li>
                        <li>
                            <span class="weekTitle">Суббота</span>
                            <ul>
                                <li><span class="tableMobile__time">11:00-11:45</span> Дарья Сергеевна Скворцова</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>