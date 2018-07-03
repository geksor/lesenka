<?php

namespace app\controllers;
use Yii;
use app\models\Cart;
use app\models\Product;
use app\models\Order;
use yii\web\HttpException;

class CartController extends AppController
{
    protected function getUrl()
    {
        return $backUrl = (isset($_SESSION['back_cat'])) ? "/catalog/{$_SESSION['back_cat']}" : '/catalog';
    }

    public function actionIndex()
    {
        $this->setMetaTags('Корзина','Корзина');
        return $this->render('index',['cart'=>$_SESSION,'backToShop'=>$this->getUrl()]);
    }

    public function actionAdd()
    {
        $id = Yii::$app->request->get('id');
        $qty = Yii::$app->request->get('qty');
        $product = Product::find()
            ->with('unit')
            ->select('id,name,image,price,item_unit_id')
            ->where(['id'=>$id])
            ->asArray()
            ->one();
        if(empty($product)){
            return Yii::$app->response->redirect(['/cart']);
        }
        $session =Yii::$app->session;
        $session->open();
        $cart = new Cart();
        if(Yii::$app->request->isAjax){
            return json_encode($cart->addToCart($product,$qty));
        }
        $cart->addToCart($product,$qty);
        return Yii::$app->response->redirect(['/cart']);
    }

    public function actionDel()
    {
        $id = Yii::$app->request->get('id');
        $this->layout = false;
        if(Yii::$app->request->isAjax){
            unset($_SESSION['cart'][$id]);
            Cart::getSumCount();
            if($_SESSION['cart.qty'] <= 0){
                unset($_SESSION['cart']);
                unset($_SESSION['cart.qty']);
                unset($_SESSION['cart.sum']);
            }
            $count = (isset($_SESSION['cart.qty'])) ? $_SESSION['cart.qty'] : 0;
            return json_encode(['view' => $this->render('index',['cart' => $_SESSION,'backToShop'=>$this->getUrl()]),'counter' => $count]);
        }
        unset($_SESSION['cart'][$id]);
        return Yii::$app->response->redirect(['/cart']);
    }

    public function actionChange()
    {
        $id = Yii::$app->request->get('id');
        $qty = Yii::$app->request->get('qty');
        $this->layout = false;
        $session =Yii::$app->session;
        $session->open();
        $_SESSION['cart'][$id]['qty'] = $qty;
        Cart::getSumCount();
        if(Yii::$app->request->isAjax){
            return json_encode(['view' => $this->render('index',['cart' => $_SESSION,'backToShop'=>$this->getUrl()]),'counter' => $_SESSION['cart.qty']]);
        }
        return Yii::$app->response->redirect(['/cart']);
    }

    public function actionStep2()
    {
        $this->layout = false;
        $page_title = $this->setPageTitle('Оформление доставки');
        $model = new Order;
        if($model->load(Yii::$app->request->post()) && $model->validate()){
            $model->save();
            Yii::$app->session->remove('cart');
            Yii::$app->session->remove('cart.sum');
            Yii::$app->session->remove('cart.qty');
            Yii::$app->session->setFlash('message','Заказ оформлен');
            $this->goHome();
        }
        if($model->hasErrors()){
            return false;
        }
        if (!Yii::$app->request->isPost && !Yii::$app->request->isAjax) {
            throw new HttpException('404', 'Страница не найдена');
        }
        return $this->renderAjax('step2',['page_title' => $page_title,'model' => $model]);
    }
}