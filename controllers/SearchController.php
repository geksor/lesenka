<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 05.02.2018
 * Time: 13:03
 */

namespace app\controllers;
use Yii;

class SearchController extends AppController
{
    public $enableCsrfValidation = false;

    public function actionResult(){
        $this->setMetaTags('Результаты поиска','Результаты поиска');
        $request = Yii::$app->request;
        if(!$request->isPost){
            $query = Yii::$app->session->get('product_search');
        }else{
            $query = trim(strip_tags($request->post('product_search')));
            Yii::$app->session->set('product_search',$query);
        }
        return $this->render('result',['lastQuery' => $query]);
    }
}