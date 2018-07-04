<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 03.07.2018
 * Time: 13:58
 */

namespace app\controllers;
use app\models\Aducate;
use yii\web\HttpException;


class AducateController extends AppController
{
    public function actionIndex($alias = null){

        if(!isset($alias)){
            $this->setMetaTags('Занятия','Занятия');
            return $this->render('aducate');
        }
        $aducate = Aducate::findOne(['alias' => $alias]);

        $this->setMetaTags($aducate->meta_title,$aducate->meta_description);

        return $this->render('index',['aducate' => $aducate]);
    }
}