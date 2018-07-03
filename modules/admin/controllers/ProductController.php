<?php

namespace app\modules\admin\controllers;

use Yii;
use app\modules\admin\models\Product;
use app\modules\admin\models\ProductSearch;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use app\models\Relate;
use app\modules\admin\models\Category;

/**
 * ProductController implements the CRUD actions for Product model.
 */
class ProductController extends AdminController
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['GET','POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Product models.
     * @return mixed
     */
    public function actionIndex($categoryId = null)
    {
        $categories = Category::buildCategoryList();
        if($categoryId != null){
            $searchModel = new ProductSearch();
            $dataProvider = $searchModel->search(Yii::$app->request->queryParams,$categoryId);
        }else {
            $searchModel = new ProductSearch();
            $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        }
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'categories' => $categories
        ]);
    }

    /**
     * Displays a single Product model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Product model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Product();
        $model->pub_status = 1;
        if (Yii::$app->request->isPost) {
            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            if($model->imageFile !== null) {
                $model->image = $model->imageFile->baseName."_".$model->upload($model,Yii::getAlias('@prod_images'),'Product',['width'=>240,'height' => 170]). '.' . $model->imageFile->extension;
            }
        }

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $model->relateWithCategories($model);
            $this->setDate($model);
            return $this->redirect(['index']);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Product model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $cat = new Product();
        if (Yii::$app->request->isPost && $_POST['Product']['categories']) {
            Relate::deleteAll(['product_id' => $model->id]);
            $model->relateWithCategories($model);
        }
        if (Yii::$app->request->isPost) {
            $cat->imageFile = UploadedFile::getInstance($cat, 'imageFile');
            if($cat->imageFile !== null) {
                $model->image = $cat->imageFile->baseName .'_'.$model->upload($cat,Yii::getAlias('@prod_images'),'Product',['width'=>240,'height' => 170]).'.' . $cat->imageFile->extension;
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

    /**
     * Deletes an existing Product model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        if (Yii::$app->request->isGet) {
            $this->deleteChecked($id,'product_id');
        }else{
            $this->findModel($id)->delete();
            Relate::deleteAll(['product_id' => $id]);
        }
        return $this->redirect(['index']);
    }

    /**
     * Finds the Product model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Product the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Product::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
