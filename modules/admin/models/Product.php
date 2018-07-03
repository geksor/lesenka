<?php

namespace app\modules\admin\models;

use Yii;
use app\models\Relate;
use app\models\WeightUnit;
use app\models\ItemUnit;

/**
 * This is the model class for table "products".
 *
 * @property integer $id
 * @property string $name
 * @property string $alias
 * @property integer $price
 * @property integer $old_price
 * @property string $short_description
 * @property string $description
 * @property string $image
 * @property string $creation_date
 * @property integer $weight
 * @property integer $weight_unit_id
 * @property integer $item_unit_id
 * @property string $meta_title
 * @property string $meta_description
 * @property string $meta_keywords
 * @property integer $pub_status
 */
class Product extends AdminActiveRecord
{
    /**
     * @inheritdoc
     */
    public $imageFile;
    public $categories;
    public $crop_info;


    public static function tableName()
    {
        return 'products';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name','meta_title', 'meta_description','categories','weight','price'], 'required'],
            [['alias'],'unique'],
            [['alias'],'trim'],
            ['imageFile', 'image', 'extensions' => ['png', 'jpg'], 'maxSize' => 1024 * 1024 * 1],
            [['name', 'alias', 'short_description', 'description', 'image', 'creation_date', 'meta_title', 'meta_description', 'meta_keywords'], 'string'],
            [['price', 'old_price', 'weight', 'weight_unit_id', 'item_unit_id', 'pub_status'], 'integer'],
            [['pub_status'], 'default', 'value' => 1 ],
            ['crop_info', 'safe'],
        ];
    }


    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'categories' => 'Выбор категорий',
            'alias' => 'Псевдоним(url)',
            'price' => 'Цена',
            'old_price' => 'Старая цена',
            'short_description' => 'Краткое описание',
            'description' => 'Полное описание',
            'image' => 'Изображение',
            'imageFile' => 'Загрузить изображение',
            'creation_date' => 'Дата создания',
            'weight' => 'Вес',
            'weight_unit_id' => 'Мера веса',
            'item_unit_id' => 'Единица измерения',
            'meta_title' => 'Meta Title',
            'meta_description' => 'Meta Description',
            'meta_keywords' => 'Meta Keywords',
            'pub_status' => 'Опубликовать',
        ];
    }
    public function relateWithCategories($model)
    {
        foreach ($_POST['Product']['categories'] as $item) {
            $relate = new Relate();
            if($item != '') {
                $relate->product_id = $model->id;
                $relate->category_id = $item;
                $relate->save();
            }
        }
    }

    public function getWeightList()
    {
        return WeightUnit::find()->select('weight_name,id')->indexBy('id')->column();
    }

    public function getUnitList()
    {
        return ItemUnit::find()->select('item_name,id')->indexBy('id')->column();
    }

    public function getCategoriesList($model)
    {
        return Relate::find()->select('category_id')->where(['product_id' => $model->id])->asArray()->column();
    }

    public function getCategories()
    {
        return $this->hasMany(Relate::className(), ['product_id' => 'id']);
    }

}
