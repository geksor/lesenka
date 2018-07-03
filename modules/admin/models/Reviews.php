<?php

namespace app\modules\admin\models;

use Yii;
use app\modules\admin\models\AdminActiveRecord;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "reviews".
 *
 * @property int $id
 * @property string $name
 * @property string $text
 * @property string $create_date
 * @property int $access_status
 * @property double $mark
 */
class Reviews extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'reviews';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'text','access_status'], 'required'],
            [['name', 'text', 'create_date'], 'string'],
            [['access_status'], 'integer'],
            [['mark'], 'number'],
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
            'text' => 'Text',
            'create_date' => 'Create Date',
            'access_status' => 'Access Status',
            'mark' => 'Mark',
        ];
    }
}
