<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 02.03.2018
 * Time: 11:35
 */

namespace app\models;
use app\models\User;


class UserResetPasswordForm extends User
{
    public function rules()
    {
        return [
            [['email'],'required'],
            [['email'],'trim'],
            [['email'],function($value){
                $user = self::findByEmail($this->email);
                if($user == null){
                    $this->addError($value, 'Такой e-mail не зарегистрирован');
                }
            }],
        ];
    }
}