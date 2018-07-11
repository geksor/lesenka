<?php

namespace app\components;


use yii\base\Widget;
use app\models\Teachers;

class TeachersWidget extends Widget
{
    public $template;
    protected $colors = ['red','green','yellow','blue','yellow'];

    protected function setBackground($t){
        $i = 0;
        foreach ($t as $key => $teacher){
            $t[$key]['color'] = $this->colors[$i];
            if($i == 4){
                $i = -1;
            }
            $i ++;
        }
        return $t;
    }

    public function init(){
        parent::init();
        if($this->template === null){
            $this->template = 'default';
        }
        $this->template .= '.php';
    }

    public function run()
    {
        $teachers = Teachers::find()
            ->select('name,family,father,avatar,rang')
            ->asArray()
            ->all();
        $teachers = $this->setBackground($teachers);
        ob_start();
        include __DIR__ . '/teachers_tpl/' . $this->template;
        return ob_get_clean();
    }
}