<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string $name
 * @property string $preview
 * @property string $full_text
 * @property string $meta_description
 * @property string $meta_title
 * @property string $meta_keywords
 * @property string $pub_date
 * @property int $pub_status
 */
class News extends AdminActiveRecord
{
    public $imageFile;
    public $crop_info;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'preview', 'full_text', 'meta_description', 'meta_title', 'meta_keywords', 'pub_date'], 'required'],
            [['name', 'preview', 'full_text', 'meta_description', 'meta_title', 'meta_keywords', 'pub_date','image'], 'string'],
            [['pub_status'], 'integer'],
            ['imageFile', 'image', 'extensions' => ['png', 'jpg'], 'maxSize' => 1024 * 1024 * 1],
            [['crop_info'], 'safe'],
            [['alias'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'alias' => 'Alias',
            'preview' => 'Preview',
            'full_text' => 'Full Text',
            'meta_description' => 'Meta Description',
            'meta_title' => 'Meta Title',
            'meta_keywords' => 'Meta Keywords',
            'pub_date' => 'Pub Date',
            'pub_status' => 'Pub Status',
        ];
    }
}
