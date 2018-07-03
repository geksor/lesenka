<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;
use Yii;
use app\models\LoginForm;
use app\modules\admin\models\Reviews;
/**
 * Default controller for the `admin` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionOptions(){
        return $this->render('options');
    }
}