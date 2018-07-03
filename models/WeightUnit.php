<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 30.01.2018
 * Time: 11:12
 */

namespace app\models;


use yii\db\ActiveRecord;
use app\models\Product;

class WeightUnit extends ActiveRecord
{
    public static function tableName()
    {
        return 'weight_units';
    }
}