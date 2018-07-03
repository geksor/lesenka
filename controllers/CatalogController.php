<?php

namespace app\controllers;
use app\models\Category;
use app\models\Relate;
use Yii;
use yii\web\HttpException;

class CatalogController extends AppController
{

    public function actionIndex($alias = null)
    {
        if($alias != null) {
            $mainCategory = Category::find()
                ->select('name,id,meta_description,meta_title,parent_id,alias')
                ->where(['alias' => $alias])
                ->asArray()
                ->one();
            Yii::$app->session->open();
            $_SESSION['back_cat'] = $mainCategory['alias'];
            if (isset($mainCategory['parent_id'])) {
                $id = $mainCategory['parent_id'];
                $backCategory = Category::find()
                    ->select('name,alias')
                    ->where(['id' => $id])
                    ->asArray()
                    ->one();
            } else {
                $id = $mainCategory['id'];
                $backCategory = false;
            }
            if (!$mainCategory) {
                throw new HttpException(404, 'Такой категории не существует');
            }
            $this->setMetaTags($mainCategory['meta_title'], $mainCategory['meta_description']);
            return $this->render('index', ['mainCategory' => $mainCategory, 'parent_id' => $id, 'backCategory' => $backCategory]);
        }else{
            $this->setMetaTags('Наше меню', 'Наше меню');
            return $this->render('menu');
        }
    }
}