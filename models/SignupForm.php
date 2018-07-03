<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 22.02.2018
 * Time: 15:31
 */

namespace app\models;


use mdm\admin\models\form\Signup;
use Yii;
use yii\helpers\Url;

class SignupForm extends Signup
{
    public $confirm_password;

    public function rules()
    {
        return [
            [['username','email','confirm_password','password'],'required','message' => 'Заполните поле'],
            [['email'],'email'],
            [['usercolor'],'safe'],
            [['confirm_password'],'confirmPassword'],
            ['email', 'unique', 'targetClass' => 'mdm\admin\models\User', 'message' => 'Такой E-mail уже зарегистрирован'],
            ['password', 'match', 'pattern' => '/^[a-z,A-Z,0-9]\w*$/i','message' => 'Пароль должен содержать только латинские символы, либо цифры'],
            ['password','string', 'min'=>6],
        ];
    }


    public function confirmPassword($value){
        if($this->confirm_password !== $this->password){
            $this->addError($value, 'Пароли не совпадают');
        }
    }

    public function signup()
    {
        if ($this->validate()) {
            $user = new User();
            $user->username = $this->username;
            $user->email = $this->email;
            $user->usercolor = setUserColor();
            $user->status = 0;
            $user->setPassword($this->password);
            $user->generateAuthKey();
            $code = Url::home(true).'confirm?code='.$user->auth_key;
            Yii::$app->mailer->compose()
                ->setFrom(['info@vosvojasi.ru' => 'Восвояси'])
                ->setTo($user->email)
                ->setSubject('Подтверждение регистрации')
                ->setHtmlBody("<p>Для подтверждения регистрации перейдите по ссылке <a href='$code'>$code</a>")
                ->send();
            if ($user->save()) {
                return $user;
            }
        }

        return null;
    }

    public function removeOldUsers(){
        $today = time();
        $old_time = $today - 86400;

        $oldSub = User::find()
            ->where(['status' => '0'])
            ->andWhere(['<','created_at', $old_time])
            ->all();

        foreach($oldSub as $sub){
            $sub->delete();
        }
    }
}