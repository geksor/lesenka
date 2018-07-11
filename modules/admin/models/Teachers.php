<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "teachers".
 *
 * @property int $id
 * @property string $family Фамилия
 * @property string $name Имя
 * @property string $father Отчество
 * @property string $avatar Портрет
 * @property string $rang Специализация
 * @property string $alias
 */
class Teachers extends \app\modules\admin\models\AdminActiveRecord
{
    public $imageFile;
    public $crop_info;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'teachers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['family', 'name', 'father', 'avatar', 'rang', 'alias'], 'string'],
            [['alias'],'unique'],
            [['family', 'name'], 'required'],
            [['crop_info'], 'safe'],
            ['imageFile', 'image', 'extensions' => ['png', 'jpg'], 'maxSize' => 1024 * 1024 * 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'family' => 'Фамилия',
            'name' => 'Имя',
            'father' => 'Отчество',
            'avatar' => 'Портрет',
            'rang' => 'Специализация',
            'alias' => 'Alias',
        ];
    }
}
