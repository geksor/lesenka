<?php

namespace app\modules\admin\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "categories".
 *
 * @property integer $id
 * @property string $name
 * @property string $alias
 * @property integer $parent_id
 * @property string $short_description
 * @property string $description
 * @property string $image
 * @property string $alter_image
 * @property string $meta_title
 * @property string $meta_description
 * @property string $meta_keywords
 * @property string $creation_date
 * @property integer $pub_status
 * @property string $css_class
 */
class Category extends AdminActiveRecord
{
    public $imageFile;
    public $crop_info;

    public static function tableName()
    {
        return 'categories';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name','meta_title', 'meta_description'], 'required'],
            [['alias'], 'unique'],
            [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg'],
            [['name', 'alias','image', 'short_description', 'description', 'alter_image', 'meta_title', 'meta_description', 'meta_keywords', 'creation_date', 'css_class'], 'string'],
            [['parent_id'], 'integer'],
            [['pub_status'], 'integer'],
        ];
    }
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'alias' => 'Псевдоним(url)',
            'parent_id' => 'Родитель',
            'short_description' => 'Краткое описание',
            'description' => 'Полное описание',
            'imageFile'=>'Загрузить Изображение',
            'image' => 'Фото',
            'alter_image' => 'Доп фото',
            'meta_title' => 'Meta Title',
            'meta_description' => 'Meta Description',
            'meta_keywords' => 'Meta Keywords',
            'creation_date' => 'Дата создания',
            'pub_status' => 'Опубликовать',
            'css_class' => 'Css класс',
        ];
    }
    //Построение списка категорий
    public static function buildCategoryList(){
        return self::find()->select('name,id')->indexBy('id')->column();
    }

}
