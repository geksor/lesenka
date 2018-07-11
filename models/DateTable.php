<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "date_table".
 *
 * @property int $id
 * @property int $aducate_id Занятие
 * @property int $teacher_id Преподаватель
 * @property string $time Время проведения 
 * @property int $day День проведения
 *
 * @property Aducate $aducate
 * @property Teachers $teacher
 */
class DateTable extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'date_table';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['aducate_id', 'teacher_id', 'day'], 'integer'],
            [['time'], 'string', 'max' => 255],
            [['aducate_id'], 'exist', 'skipOnError' => true, 'targetClass' => Aducate::className(), 'targetAttribute' => ['aducate_id' => 'id']],
            [['teacher_id'], 'exist', 'skipOnError' => true, 'targetClass' => Teachers::className(), 'targetAttribute' => ['teacher_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'aducate_id' => 'Занятие',
            'teacher_id' => 'Преподаватель',
            'time' => 'Время проведения
',
            'day' => 'День проведения',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAducate()
    {
        return $this->hasOne(Aducate::className(), ['id' => 'aducate_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeacher()
    {
        return $this->hasOne(Teachers::className(), ['id' => 'teacher_id']);
    }
}
