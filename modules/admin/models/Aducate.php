<?php

namespace app\modules\admin\models;

use Yii;
use app\modules\admin\models\Gallery;

/**
 * This is the model class for table "aducate".
 *
 * @property int $id
 * @property string $title
 * @property string $alias
 * @property string $image
 * @property string $short_description
 * @property string $description
 * @property string $task_list
 * @property int $gallery_id
 * @property int $publish
 */
class Aducate extends AdminActiveRecord
{
    public $imageFile;
    public $crop_info;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'aducate';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['short_description', 'description', 'task_list'], 'string'],
            [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg'],
            [['gallery_id', 'publish'], 'integer'],
            [['name', 'alias', 'image'], 'string', 'max' => 255],
            [['alias'],'unique'],
            [['name', 'meta_title', 'meta_description'],'required']
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
            'alias' => 'Alias',
            'image' => 'Изображение',
            'short_description' => 'Краткое описание',
            'description' => 'Описание',
            'task_list' => 'Задачи группы',
            'gallery_id' => 'Галлерея',
            'publish' => 'Опубликовано',
            'meta_title' => 'meta_title',
            'meta_description' => 'meta_description'
        ];
    }
    public function getGallList(){
        return Gallery::find()->select('name,id')->indexBy('id')->column();
    }
}
