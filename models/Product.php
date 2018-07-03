<?php

namespace app\models;


use yii\db\ActiveRecord;
use app\models\WeightUnit;
use app\models\ItemUnit;
use app\models\Relate;

class Product extends ActiveRecord
{
    public static function tableName()
    {
        return 'products';
    }

    public function getWeight(){
        return $this->hasOne(WeightUnit::className(), ['id' => 'weight_unit_id']);
    }
    public function getUnit(){
        return $this->hasOne(ItemUnit::className(), ['id' => 'item_unit_id']);
    }
    public function getCategories(){
        return $this->hasMany(Relate::className(), ['product_id' => 'id']);
    }
}