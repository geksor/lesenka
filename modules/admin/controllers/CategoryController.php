<?php

namespace app\modules\admin\controllers;

use Yii;
use app\modules\admin\models\Category;
use app\modules\admin\models\CategorySearch;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use app\models\Relate;


class CategoryController extends AdminController
{

    public $layout = 'main';
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST','GET'],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        $searchModel = new CategorySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    public function actionCreate()
    {
        $model = new Category();
        $model->pub_status = 1;

        if (Yii::$app->request->isPost) {
            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            if($model->imageFile !== null) {
                $model->image = $model->imageFile->baseName."_".$model->upload($model,Yii::getAlias('@cat_images'),'Category',['width'=>270,'height' => 170]). '.' . $model->imageFile->extension;
            }
        }
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $this->setDate($model);
            return $this->redirect(['index']);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $cat = new Category();

        if (Yii::$app->request->isPost) {
            $cat->imageFile = UploadedFile::getInstance($cat, 'imageFile');
            if($cat->imageFile !== null) {
                $model->image = $cat->imageFile->baseName .'_'.$model->upload($cat,Yii::getAlias('@cat_images'),'Category',['width'=>270,'height' => 170]).'.' . $cat->imageFile->extension;
            }
        }


        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    public function actionDelete($id)
    {
        if (Yii::$app->request->isGet) {
            $this->deleteChecked($id,'category_id');
        }else{
            $this->findModel($id)->delete();
            Relate::deleteAll(['category_id' => $id]);
        }
        return $this->redirect(['index']);
    }

    protected function findModel($id)
    {
        if (($model = Category::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
