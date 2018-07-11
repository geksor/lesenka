<?php

namespace app\components;

use app\models\SubscriptionForm;
use yii\base\Widget;
use Yii;

class SubscriptionFormWidget extends Widget
{
    public function run()
    {
        $model = new SubscriptionForm();
        if($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])){
            $model = new SubscriptionForm();
        }
        return $this->render('subscriptionForm', [
            'model' => $model,
        ]);
    }
}