<?php

namespace app\models;

use yii\db\ActiveRecord;
use app\models\GalleryItem;

class Gallery extends ActiveRecord
{
    public static function tableName()
    {
        return 'gallery';
    }
    public function getItems(){
        return $this->hasMany(GalleryItem::className(),['parent_id' => 'id']);
    }
}