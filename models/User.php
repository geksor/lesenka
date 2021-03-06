<?php

namespace app\models;
use Yii;
use yii\helpers\Url;

class User extends \mdm\admin\models\User
{
    public static function findByEmail($email)
    {
        return static::findOne(['email' => $email, 'status' => self::STATUS_ACTIVE]);
    }

    public function generatePasswordResetToken()
    {
        parent::generatePasswordResetToken();
        if ($this->validate()) {
            $code = Url::home(true).'new-password?code='.$this->password_reset_token;
            Yii::$app->mailer->compose()
                ->setFrom(['info@vosvojasi.ru' => 'Восвояси'])
                ->setTo($this->email)
                ->setSubject('Восстановление пароля')
                ->setHtmlBody("<p>Для изменения пароля перейдите по ссылке <a href='$code'>$code</a>")
                ->send();
        }
    }
}
