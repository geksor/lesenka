<?php

namespace app\components;


use yii\base\Widget;
use app\models\Aducate;

class AducateWidget extends Widget
{
    public $template;
    public $data;

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
        $this->data = Aducate::find()
            ->select('name,alias,image')
            ->where(['publish' => true])
            ->asArray()
            ->all();
        ob_start();
        include __DIR__ . '/aducate_tpl/' . $this->template;
        return ob_get_clean();
    }
}