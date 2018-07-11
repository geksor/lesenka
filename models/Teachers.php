<?php

namespace app\models;


use yii\db\ActiveRecord;

class Teachers extends ActiveRecord
{
    public static function tableName()
    {
        return 'teachers';
    }
}