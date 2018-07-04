<?php

namespace app\modules\admin\models;

use Yii;
use yii\web\UploadedFile;
/**
 * This is the model class for table "gallery".
 *
 * @property int $id
 * @property string $name
 * @property string $images
 */
class Gallery extends \yii\db\ActiveRecord
{

    public $imageFiles;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gallery';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['imageFiles'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg', 'maxFiles' => 20],
            [['name'], 'required'],
            [['name', 'images'], 'string'],
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
            'images' => 'Images',
        ];
    }

    public function upload()
    {
        if ($this->validate()) {

            foreach ($this->imageFiles as $file) {
                $filesNames[] = $file->baseName . '.' . $file->extension;
                $file->saveAs(Yii::getAlias('@gall_images').'/' . $file->baseName . '.' . $file->extension);
            }
            $this->images = json_encode($filesNames);
            return true;
        } else {
            return false;
        }
    }
    public function beforeSave($insert)
    {
        if(parent::beforeSave($insert)){

            if($this->validate())
                $this->imageFiles = UploadedFile::getInstances($this, 'imageFiles');
                $this->upload();
                return true;
        }
        return false;
    }
}
