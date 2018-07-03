<?php

namespace app\models;

use Yii;

class Profile extends AppActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username','email'], 'required'],
            [['email'],'email'],
            [['userphone', 'userstreet', 'userpart'], 'string'],
            [['userhouse', 'userfloor', 'userflat'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'username' => 'Имя пользователя',
            'userphone' => 'Номер телефона',
            'userstreet' => 'Улица',
            'userhouse' => 'Дом',
            'userpart' => 'Корпус',
            'userfloor' => 'Этаж',
            'userflat' => 'Квартира',
            'email' => 'E-mail',
        ];
    }

    public function afterSave($insert, $changedAttributes)
    {
        parent::afterSave($insert, $changedAttributes);
        Yii::$app->session->setFlash('save_profile','Профиль изменён');
    }
}
