<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 28.03.2018
 * Time: 14:25
 */

namespace app\controllers;

use Yii;
use app\models\Order;
use app\models\Profile;


class PersonalController extends AppController
{
    public function actionIndex()
    {
        $page_title = $this->setPageTitle('Личный кабинет');
        $this->setMetaTags('Личный кабинет','Личный кабинет');
        return $this->render('index',['page_title' => $page_title]);
    }

    public function actionMyProfile()
    {
        $model =  Profile::findOne(Yii::$app->user->identity->id);

        $page_title = $this->setPageTitle('Профиль');
        $this->setMetaTags('Профиль','Профиль');
        $save_message = Yii::$app->session->getFlash('save_profile');
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $model->updated_at = time();
            $model->save();
                return $this->redirect('/personal/my-profile');
        }

        return $this->render('my-profile', [
            'model' => $model,
            'page_title' => $page_title,
            'save_message' => $save_message
        ]);
    }

    public function actionMyOrders()
    {
        $page_title = $this->setPageTitle('История покупок');
        $this->setMetaTags('История покупок','История покупок');
        $my_orders = Order::find()
            ->select('id,order_date,products,order_sum')
            ->where(['user_id' => Yii::$app->user->identity->id])
            ->orderBy(['order_date'=> SORT_DESC])
            ->asArray()
            ->all();
        foreach ($my_orders as $key => $order){
            $my_orders[$key]['order_date'] = date('d.m.Y',$order['order_date']);
            $products = json_decode($order['products'],true);
            foreach ($products as $id => $product){
                $my_orders[$key]['arr_prod'][$id] = $product;
            }
            unset($my_orders[$key]['products']);
        }
        return $this->render('my-orders',['my_orders' => $my_orders,'page_title' => $page_title]);
    }
}