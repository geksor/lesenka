<?php
namespace app\modules\admin\components;
use yii\base\Widget;
use app\modules\admin\models\Reviews;

class RevCountWidget extends Widget
{
    public function run()
    {
        return $count = Reviews::find()->where(['access_status' => 0])->count();
    }
}