<?php



namespace app\components;
use yii\base\Widget;
use app\models\Gallery;

class GalleryWidget extends Widget
{
    public $gallId;

    public function run()
    {
        $gallery = Gallery::findOne($this->gallId);
        if($gallery) {
            $gallery->images = json_decode($gallery->images, true);
            include 'gallery_tpl/default.php';
        }
    }
}