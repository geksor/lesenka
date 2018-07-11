<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name;
    public $email;
    public $text;
    public $agree;
    public $subject = "Пожелания, замечания, претензии с сайта ";
    public $body;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [

            [['name', 'email', 'text'], 'required'],
            [['agree'], 'required', 'requiredValue' => 1],
            // email has to be a valid email address
            ['email', 'email'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'email' => 'E-mail',
            'text' => 'Сообщение',
        ];
    }

    protected function setBody(){
        $this->body = 'Имя отправителя: '.$this->name."\n";
        $this->body .= 'E-mail отправителя: '.$this->email."\n";
        $this->body .= 'Текст сообщения: '.$this->text."\n";
    }

    public function contact($email)
    {
        if ($this->validate()) {

            $this->setBody();

            $this->subject .= Yii::$app->name;
            Yii::$app->mailer->compose()
                ->setTo($email)
                ->setFrom([Yii::$app->params['smtp'] => Yii::$app->name])
                ->setSubject($this->subject)
                ->setTextBody($this->body)
                ->send();

            return true;
        }
        return false;
    }
}
