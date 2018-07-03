<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 15.02.2018
 * Time: 9:40
 */

namespace app\modules\admin\controllers;


use app\controllers\AppController;
use app\models\Relate;

class AdminController extends AppController
{
    public function deleteChecked($id,$deleteRel){
        foreach (json_decode($id) as $item){
            $this->findModel($item)->delete();
            Relate::deleteAll([$deleteRel => $item]);
        }
    }
    public function setDate($model){
        $model->creation_date = date('d-m-Y H:i:s');
        $model->save();
    }
}