<?php

namespace app\modules\admin\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "slides".
 *
 * @property int $id
 * @property string $title
 * @property string $text
 * @property string $image
 * @property int $publish
 */
class Slides extends \yii\db\ActiveRecord
{
    public $imageFile;

    protected function saveImage()
    {

    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'slides';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'text', 'image'], 'string'],
            [['image'], 'safe'],
            [['publish'], 'integer'],
            [['number'], 'integer'],
            [['imageFile'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'text' => 'Описание',
            'image' => 'Изображение',
            'imageFile' => 'Загрузить изображение',
            'publish' => 'Публикация',
            'number' => 'Сортировка',
        ];
    }

    public function beforeSave($insert)
    {
        if(parent::beforeSave($insert)) {
            $image = UploadedFile::getInstance($this, 'imageFile');
            if($image != null) {
                $imageName = $image->getBaseName() . '.' . $image->getExtension();
                $imagePath = Yii::getAlias('@slider_images') . '/' . $imageName;
                $image->saveAs($imagePath);
                $this->image = $imageName;
                if(exif_imagetype($imagePath) == IMAGETYPE_JPEG){
                    $interlace = imagecreatefromjpeg($imagePath);
                    imageinterlace($interlace,10);
                    imagesetinterpolation($interlace, IMG_BICUBIC);
                    imagejpeg($interlace,$imagePath);
                }elseif(exif_imagetype($imagePath) == IMAGETYPE_PNG){
                    $interlace = imagecreatefrompng($imagePath);
                    imageinterlace($interlace,10);
                    imagesetinterpolation($interlace, IMG_BICUBIC);
                    imagepng($interlace,$imagePath);
                }
            }
            if($this->validate())
                return true;
        }
        return false;
    }
}
