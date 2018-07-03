<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 15.06.2018
 * Time: 15:00
 */

namespace app\components;


use yii\base\Widget;
use app\models\Review;

class ReviewsWidget extends Widget
{
    public $limit;
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
        $lastReviews = Review::find()
            ->select('id,name,create_date,text,mark')
            ->where(['access_status' => true]);
            if(isset($this->limit)){
                $lastReviews = $lastReviews->limit($this->limit);
            }
            $lastReviews = $lastReviews->orderBy(['create_date'=>SORT_DESC])
            ->asArray()
            ->all();
        ob_start();
        include __DIR__ . '/rev_tpl/' . $this->template;
        return ob_get_clean();
    }
}