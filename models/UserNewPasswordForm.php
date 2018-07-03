<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 02.03.2018
 * Time: 12:50
 */

namespace app\models;
use Yii;


class UserNewPasswordForm extends SignupForm
{

    public function rules()
    {
        return [
            [['confirm_password','password'],'required'],
            [['confirm_password'],'confirmPassword'],
            ['password', 'match', 'pattern' => '/^[a-z,A-Z,0-9]\w*$/i','message' => 'Пароль должен содержать только латинские символы, либо цифры'],
            ['password','string', 'min'=>6],
        ];
    }

    public function setNewPassword($user)
    {
        $user->password_hash = Yii::$app->getSecurity()->generatePasswordHash($this->password);
        $user->password_reset_token = null;
    }
}