<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 30.01.2018
 * Time: 11:13
 */

namespace app\models;


use yii\db\ActiveRecord;

class ItemUnit extends ActiveRecord
{
    public static function tableName()
    {
        return 'item_units';
    }
}