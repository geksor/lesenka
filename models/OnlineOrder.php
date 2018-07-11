<?php

namespace app\models;

class onlineOrder extends ContactForm
{
    public $childName;
    public $parentName;
    public $aducation;
    public $phone;
    public $childAge;

    public $subject = 'Запись онлайн с сайта ';

    public function rules()
    {
        return [
            [['parentName','aducation','phone','childAge'],'required'],
            [['childName'],'string'],
            [['agree'], 'required', 'requiredValue' => 1],
            ['email', 'email'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'childName' => 'Имя ребенка',
            'parentName' => 'Имя представителя',
            'email' => 'E-mail',
            'phone' => 'Телефон',
            'childAge' => 'Возраст ребенка',
            'aducation' => 'Занятие'
        ];
    }

    protected function setBody()
    {
        $this->body = 'Имя представителя :'.$this->parentName."\n";
        $this->body .= 'Телефон :'.$this->phone."\n";
        $this->body .= 'E-mail :'.$this->email."\n";
        $this->body .= 'Занятие :'.$this->getAducateList()[$this->aducation]."\n";
        $this->body .= 'Имя ребенка :'.$this->childName."\n";
        $this->body .= 'Возраст ребенка :'.$this->getAgeList()[$this->childAge]."\n";
    }

    public function getAducateList()
    {
        return Aducate::find()->select('name,id')->indexBy('id')->column();
    }

    public function getAgeList()
    {
        return [
            "1 год",
            "2 года",
            "3 года",
            "4 года",
            "5 лет",
            "6 лет",
            "7 лет",
            "8 лет",
            "9 лет",
            "10 лет",
            "11 лет",
            "12 лет",
            "13 лет",
            "14 лет",
            "15 лет"
        ];
    }
}