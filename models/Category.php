<?php

namespace app\models;


use yii\db\ActiveRecord;
use app\models\Relate;

class Category extends ActiveRecord
{
    public static function tableName()
    {
        return 'categories';
    }
    public function getProducts(){
        return $this->hasMany(Relate::className(), ['category_id' => 'id']);
    }
}