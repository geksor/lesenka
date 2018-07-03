<?php


namespace app\models;


use yii\db\ActiveRecord;

class GalleryItem extends ActiveRecord
{
    public static function tableName()
    {
        return 'gallery_items';
    }
}