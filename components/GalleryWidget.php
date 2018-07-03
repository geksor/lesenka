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
        include 'gallery_tpl/default.php';
    }
}