<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 20.02.2018
 * Time: 15:27
 */

namespace app\models;


use yii\db\ActiveRecord;
use Yii;

class Review extends ActiveRecord
{
    public static function tableName()
    {
        return 'reviews';
    }

    public function rules()
    {
        return [
            [['name','text'],'required'],
            [['name','text'],'trim'],
            [['mark'],'safe'],
            [['name','text'],'filter', 'filter' => function($value){return trim(strip_tags($value));}],
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Ваше имя',
            'text' => 'Текст отзыва',
            'mark' => 'Оценка',
        ];
    }
}