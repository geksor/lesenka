<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 10.05.2018
 * Time: 11:55
 */

namespace app\components;
use yii\base\Widget;
use app\modules\admin\models\Slides;

class SliderWidget extends Widget
{
    public $template;

    public function init()
    {
        parent::init();
        if($this->template === null){
            $this->template = 'default';
        }
        $this->template .= '.php';
    }

    public function run()
    {
        $slider = Slides::find()
            ->select('id,title,text,image')
            ->where(['publish' => true])
            ->asArray()
            ->orderBy(['number' => SORT_ASC])
            ->indexBy('id')
            ->all();

        ob_start();
        include __DIR__ . '/slider_tpl/' . $this->template;
        return ob_get_clean();
    }
}