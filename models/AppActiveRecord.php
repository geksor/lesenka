<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 29.03.2018
 * Time: 10:21
 */

namespace app\models;
use yii\db\ActiveRecord;
use Yii;

class AppActiveRecord extends ActiveRecord
{
    public function getUserInfo($property)
    {
        if (!Yii::$app->user->isGuest){
            $user = [];
            $user[$property] = Yii::$app->user->identity->$property;
            return $user[$property];
        }else{
            return '';
        }
    }
}