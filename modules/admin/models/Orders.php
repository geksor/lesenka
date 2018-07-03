<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "orders".
 *
 * @property int $id
 * @property int $user_id
 * @property string $user_name
 * @property string $user_phone
 * @property string $user_email
 * @property string $order_message
 * @property string $user_street
 * @property string $user_house
 * @property string $user_part
 * @property int $user_floor
 * @property int $user_flat
 * @property string $order_date
 * @property string $products
 * @property int $order_sum
 */
class Orders extends AdminActiveRecord
{

    public static function tableName()
    {
        return 'orders';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'user_floor', 'user_flat', 'order_sum'], 'integer'],
            [['user_name', 'user_phone', 'user_email', 'order_message', 'user_street', 'user_house', 'user_part', 'order_date', 'products'], 'string'],
            [['viewed'],'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID Заказа',
            'user_id' => 'ID Пользователя',
            'user_name' => 'Имя заказчика',
            'user_phone' => 'Телефон заказчика',
            'user_email' => 'Email заказчика',
            'order_message' => 'Комментарий к заказу',
            'user_street' => 'Улица',
            'user_house' => 'Дом',
            'user_part' => 'Корпус',
            'user_floor' => 'Этаж',
            'user_flat' => 'Квартира',
            'order_date' => 'Дата заказа',
            'products' => 'Товары',
            'order_sum' => 'Общая Сумма',
        ];
    }
}
