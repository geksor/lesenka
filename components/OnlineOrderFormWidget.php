<?php

namespace app\components;

use app\models\OnlineOrder;
use yii\base\Widget;
use Yii;

class OnlineOrderFormWidget extends Widget
{
    public function run()
    {
        $model = new OnlineOrder();
        if($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])){
            $model = new OnlineOrder();
        }
        return $this->render('onlineOrderForm', [
            'model' => $model,
        ]);
    }
}