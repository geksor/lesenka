<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 03.07.2018
 * Time: 13:59
 */

namespace app\models;


use yii\db\ActiveRecord;

class Aducate extends ActiveRecord
{
    public static function tableName()
    {
        return 'aducate';
    }
}