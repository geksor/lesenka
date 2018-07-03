<?php

namespace app\models;

use yii\db\ActiveRecord;
use app\models\Product;
use app\models\Category;

class Relate extends ActiveRecord
{
    public static function tableName()
    {
        return 'relate_prod_and_cat';
    }
}