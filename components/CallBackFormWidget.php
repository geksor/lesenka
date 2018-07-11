<?php

namespace app\components;

use app\models\CallBackForm;
use yii\base\Widget;
use Yii;

class CallBackFormWidget extends Widget
{
    public function run()
    {
        $model = new CallBackForm();
        if($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])){
            $model = new CallBackForm();
        }
        return $this->render('callBackForm', [
            'model' => $model,
        ]);
    }
}