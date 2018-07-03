<?php

namespace app\models;

use Yii;

class Order extends AppActiveRecord
{

    public static function tableName()
    {
        return 'orders';
    }

    public function rules()
    {
        return [
            [['user_name', 'user_phone', 'order_message', 'user_street', 'user_house', 'user_part','products','user_floor', 'user_flat', 'order_sum'], 'trim'],
            [['user_floor', 'user_flat','user_house'], 'integer'],
            [['user_name', 'user_phone','user_street','user_house','user_email'], 'required'],
            [['user_email'],'email'],
            [['order_message'],'trim'],
            //[['user_name', 'user_phone', 'order_message', 'user_street', 'user_house', 'user_part', 'order_date', 'products'], 'string'],
        ];
    }

    function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'user_name' => 'Получатель',
            'user_phone' => 'Номер телефона',
            'user_email' => 'E-mail',
            'order_message' => 'Комментарий к заказу',
            'user_street' => 'Улица',
            'user_house' => 'Дом',
            'user_part' => 'Корпус',
            'user_floor' => 'Этаж',
            'user_flat' => 'Квартира',
            'order_date' => 'Order Date',
            'products' => 'Products',
            'order_sum' => 'Order Sum',
        ];
    }

    private function sendMessage($to,$subject,$view)
    {
        Yii::$app->mailer->compose([
            'html' => $view,
        ],
            [
                'products' => Yii::$app->session->get('cart'),
                'sum' => Yii::$app->session->get('cart.sum'),
                'user_info' => [
                    'username' => $this->user_name,
                    'phone' => $this->user_phone,
                    'user_email' => $this->user_email,
                    'order_message' => $this->order_message,
                    'user_street' => $this->user_street,
                    'user_house' => $this->user_house,
                    'user_part' => $this->user_part,
                    'user_floor' => $this->user_floor,
                    'user_flat' => $this->user_flat
                ]
            ])
            ->setFrom(['info@vosvojasi.ru' => 'Восвояси'])
            ->setTo($to)
            ->setSubject($subject)
            ->send();
    }
    
    public function beforeSave($insert)
    {
        if(!Yii::$app->user->isGuest){
            $this->user_id = Yii::$app->user->identity->id;
        }
        $this->sendMessage($this->user_email,'Принят новый заказ, Восвояси','views/order-view');
        $this->sendMessage('help-line@inbox.ru','Принят новый заказ, Восвояси','views/admin-order-view.php');
        $this->sendMessage('vosvojasi26@mail.ru','Принят новый заказ, Восвояси','views/admin-order-view.php');
        $this->products = json_encode(Yii::$app->session->get('cart'));
        $this->order_sum = Yii::$app->session->get('cart.sum');
        $this->order_date = time();
        return parent::beforeSave($insert);
    }
}
