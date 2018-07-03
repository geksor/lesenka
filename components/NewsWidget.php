<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 15.06.2018
 * Time: 14:06
 */

namespace app\components;


use yii\base\Widget;
use app\models\News;

class NewsWidget extends Widget
{
    public $template;
    public $limit;

    public function init(){
        parent::init();
        if($this->template === null){
            $this->template = 'default';
        }
        $this->template .= '.php';
    }

    public function run()
    {
        $news = News::find()
            ->select('id,name,preview,image,pub_date')
            ->where(['pub_status' => true]);
        if(isset($this->limit)){
            $news = $news->limit($this->limit);
        }
        $news = $news->orderBy(['id'=>SORT_DESC])
        ->asArray()
        ->all();
        ob_start();
        include __DIR__ . '/news_tpl/' . $this->template;
        return ob_get_clean();
    }
}