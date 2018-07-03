<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 15.03.2018
 * Time: 16:14
 */

namespace app\modules\admin\components;

use yii\base\Widget;
use app\modules\admin\models\Orders;

class OrderCountWidget extends Widget
{
    public function run()
    {
        return Orders::find()->where(['viewed' => false])->count();
    }
}