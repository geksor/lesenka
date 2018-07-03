<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 22.02.2018
 * Time: 10:26
 */

namespace app\modules\admin\models;
use Yii;
use yii\helpers\FileHelper;
use yii\imagine\Image;
use yii\helpers\Json;
use Imagine\Image\Box;
use Imagine\Image\Point;

use yii\db\ActiveRecord;

class AdminActiveRecord extends ActiveRecord
{
    public function clearCache(){
        $cashe = Yii::$app->cache;
        $cashe -> flush();
    }
    //Загрузка изображения
    public function upload($model,$alias,$className,$params)
    {
        // open image
        $image = Image::getImagine()->open($model->imageFile->tempName);

        // rendering information about crop of ONE option
        $cropInfo = Json::decode($_POST[$className]['crop_info'])[0];
        if($_POST[$className]['crop_info']) {
            $cropInfo['dWidth'] = (int)$cropInfo['dWidth']; //new width image
            $cropInfo['dHeight'] = (int)$cropInfo['dHeight']; //new height image
            $cropInfo['x'] = $cropInfo['x']; //begin position of frame crop by X
            $cropInfo['y'] = $cropInfo['y']; //begin position of frame crop by Y
            // Properties bolow we don't use in this example
//        $cropInfo['ratio'] = $cropInfo['ratio'] == 0 ? 1.0 : (float)$cropInfo['ratio']; //ratio image.
            //$cropInfo['width'] = (int)$cropInfo['width']; //width of cropped image
            //$cropInfo['height'] = (int)$cropInfo['height']; //height of cropped image
            //$cropInfo['sWidth'] = (int)$cropInfo['sWidth']; //width of source image
            //$cropInfo['sHeight'] = (int)$cropInfo['sHeight']; //height of source image
            //delete old images
//            $oldImages = FileHelper::findFiles(Yii::getAlias('@prod_images'), [
//                'only' => [
//                    $model->imageFile->baseName . '.*',
//                ],
//            ]);
//            for ($i = 0; $i != count($oldImages); $i++) {
//                @unlink($oldImages[$i]);
//            }

            //saving thumbnail
            $newSizeThumb = new Box($cropInfo['dWidth'], $cropInfo['dHeight']);
            $cropSizeThumb = new Box($params['width'], $params['height']); //frame size of crop
            $cropPointThumb = new Point($cropInfo['x'], $cropInfo['y']);
            $random = time();
            $pathThumbImage = $alias
                . '/'
                . $model->imageFile->baseName
                .'_'.$random
                . '.'
                . $model->imageFile->getExtension();
            $image->resize($newSizeThumb)
                ->crop($cropPointThumb, $cropSizeThumb)
                ->save($pathThumbImage, ['quality' => 80]);

            if(exif_imagetype($pathThumbImage) == IMAGETYPE_JPEG){
                $interlace = imagecreatefromjpeg($pathThumbImage);
                imageinterlace($interlace,10);
                imagesetinterpolation($interlace, IMG_BICUBIC);
                imagejpeg($interlace,$pathThumbImage);
            }elseif(exif_imagetype($pathThumbImage) == IMAGETYPE_PNG){
                $interlace = imagecreatefrompng($pathThumbImage);
                imageinterlace($interlace,10);
                imagesetinterpolation($interlace, IMG_BICUBIC);
                imagepng($interlace,$pathThumbImage);
            }
            //saving original
            $model->imageFile->saveAs(
                $alias
                . '/'
                .'original/'
                . $model->imageFile->baseName
                .'_'.$random
                . '.'
                . $model->imageFile->getExtension()
            );
        }
        return $random;
    }
    public function beforeSave($insert)
    {
        if(parent::beforeSave($insert)){

            if($this->alias == ''){
                $this->alias = translit($this->name);
            }else{
                $this->alias = translit($this->alias);
            }
            if($this->validate())
                return true;
        }
        return false;
    }

    public function afterSave($insert, $changedAttributes)
    {
        $this->clearCache();
        if ($insert) {
            Yii::$app->session->setFlash('success', 'Запись добавлена');
        } else {
            Yii::$app->session->setFlash('success', 'Запись обновлена');
        }
        parent::afterSave($insert, $changedAttributes);
    }

    public function afterDelete()
    {
        parent::afterDelete();
        $this->clearCache();
    }
}