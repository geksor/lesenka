<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 22.02.2018
 * Time: 11:22
 */

namespace app\models;

use yii\widgets\ActiveForm;
use mdm\admin\models\form\Login;
use yii\web\Response;
use Yii;

class LoginUserForm extends Login
{
    private $_user = false;
    public $email;

    public function rules()
    {
        return [
            // username and password are both required
            [['email', 'password'], 'required'],
            // rememberMe must be a boolean value
            ['rememberMe', 'boolean'],
            // password is validated by validatePassword()
            ['password', 'validatePassword'],
        ];
    }
    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();
            if (!$user || !$user->validatePassword($this->password)) {
                $this->addError($attribute, 'Неверный e-mail или пароль');
            }
        }
    }
    public function attributeLabels()
    {
        return [
          'rememberMe' => 'Запомнить меня',
            'email' => 'E-mail Адрес',
            'password' => 'Пароль'
        ];
    }
    public function getUser()
    {
        if ($this->_user === false) {
            $this->_user = User::findByEmail($this->email);
        }

        return $this->_user;
    }
}