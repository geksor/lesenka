<?php


namespace app\controllers;
use app\models\News;
use yii\data\Pagination;
use yii\web\HttpException;
use Yii;


class NewsController extends AppController
{
    public function actionIndex(){
        $this->setMetaTags('Новости','Новости');
        $news = News::find()
            ->select('id,name,full_text,image,pub_date')
            ->where(['pub_status' => true]);
            $pages = new Pagination(['totalCount' => $news->count(), 'pageSize' => 5, 'forcePageParam' => false, 'pageSizeParam' => false]);
            $data = $news
            ->offset($pages->offset)
            ->limit($pages->limit)
            ->orderBy(['id'=>SORT_DESC])
            ->asArray()
            ->all();
        return $this->render('allnews',['news' => $data,'pages' => $pages]);
    }
    public function actionShow(){
        $id = Yii::$app->request->get('id');
        $article = News::find()
            ->select('name,pub_date,full_text,meta_title,meta_description')
            ->where(['id'=>$id])
            ->asArray()
            ->one();
        if(!$article){
            throw new HttpException(404 ,'Такой записи не существует');
        }
        $this->setMetaTags($article['meta_title'],$article['meta_description']);
        return $this->render('show',['article'=>$article]);
    }
}