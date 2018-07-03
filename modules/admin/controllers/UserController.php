<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 02.03.2018
 * Time: 9:36
 */

namespace app\modules\admin\controllers;
use mdm\admin\controllers\UserController as RbacUserController;
use Yii;
use mdm\admin\models\form\Login;


class UserController extends RbacUserController
{
    public function actionLogin()
    {
        if (!Yii::$app->getUser()->isGuest) {
            return $this->goHome();
        }

        $model = new Login();
        if ($model->load(Yii::$app->getRequest()->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }
}