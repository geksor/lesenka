<?php

namespace app\models;

class CallBackForm extends ContactForm
{
    public $subject = 'Заявка на обратный звонок с сайта ';
    public $phone;

    public function rules()
    {
        return [
            [['name', 'phone'], 'required'],
            [['agree'], 'required', 'requiredValue' => 1],
        ];
    }

    protected function setBody()
    {
        $this->body = 'Имя: '.$this->name."\n";
        $this->body .= 'Телефон: '.$this->phone."\n";
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'phone' => 'Телефон'
        ];
    }
}