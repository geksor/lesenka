<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 15.06.2018
 * Time: 12:28
 */

namespace app\components;


use yii\base\Widget;

class CartWidget extends Widget
{
    public $template;

    public function init(){
        parent::init();
        if($this->template === null){
            $this->template = 'default';
        }
        $this->template .= '.php';
    }

    public function run()
    {
        ob_start();
        include __DIR__ . '/cart_tpl/' . $this->template;
        return ob_get_clean();
    }
}