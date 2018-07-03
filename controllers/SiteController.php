<?php

namespace app\controllers;

use app\models\LoginUserForm;
use Yii;
use yii\filters\AccessControl;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\News;
use app\models\Review;
use yii\data\Pagination;
use app\models\SignupForm;
use yii\web\HttpException;
use app\models\User;
use app\models\UserResetPasswordForm;
use app\models\UserNewPasswordForm;
use yii\widgets\ActiveForm;

class SiteController extends AppController
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $this->setMetaTags('Главная','доставка суши, роллов на дом и в офис.');
        return $this->render('index');
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $this->setMetaTags('Контакты','доставка суши, роллов на дом и в офис.');
//        $model = new ContactForm();
//        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
//            Yii::$app->session->setFlash('contactFormSubmitted');
//
//            return $this->refresh();
//        }
        return $this->render('contact', [
            //'model' => $model,
        ]);
    }


    public function actionAbout()
    {
        $this->setMetaTags('О нас','О нас');
        return $this->render('about');
    }

    public function actionReviews()
    {
        $reviews = Review::find()
            ->select('name,text,create_date,mark')
            ->where(['access_status' => true]);
            $pages = new Pagination(['totalCount' => $reviews->count(), 'pageSize' => 9, 'forcePageParam' => false, 'pageSizeParam' => false]);
            $reviews = $reviews
                ->offset($pages->offset)
                ->limit($pages->limit)
                ->orderBy(['create_date'=>SORT_DESC])
                ->asArray()
                ->all();
        $this->setMetaTags('Гостевая книга','доставка суши, роллов на дом и в офис.');

        $model = new Review();
        if(!Yii::$app->user->isGuest){
            $model->user_id = Yii::$app->user->identity->id;
        }
        $model->create_date = time();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('message', 'Спасибо за отзыв, после модерации он будет опубликован');
            return $this->redirect(['reviews']);
        } else {
            return $this->render('reviews',['reviews' => $reviews,'pages' => $pages,'model' => $model]);
        }
    }
    public function actionAjaxLogin() {
        $model = new LoginUserForm();

        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }else{
            if($model->hasErrors()){
                Yii::$app->response->format = Response::FORMAT_JSON;
                return ActiveForm::validate($model);
            }
        }
        if (Yii::$app->user->isGuest && Yii::$app->request->isAjax) {
            return $this->renderAjax('loginUserForm', [
                'model' => $model,
            ]);
        }
        else {
            throw new HttpException(404 ,'Page not found');
        }
    }

    public function actionSignup()
    {
        $page_title = $this->setPageTitle('Регистрация');
        $this->setMetaTags('Регистрация','Регистрация');
        $model = new SignupForm();
        $model->removeOldUsers();
        if ($model->load(Yii::$app->getRequest()->post())) {
            $email = $_POST['SignupForm']['email'];
            if ($user = $model->signup()) {
                $userRole = Yii::$app->authManager->getRole('user');
                Yii::$app->authManager->assign($userRole, $user->getId());
                Yii::$app->session->setFlash('message',"На почтовый адрес $email отправлена ссылка для подтверждения регистрации");
                return $this->goHome();
            }
        }
        return $this->render('signup', [
            'model' => $model,
            'page_title' => $page_title
        ]);
    }

    public function actionConfirm(){
        $this->setMetaTags('Подтверждение регистрации','Подтверждение регистрации');
        $code = Yii::$app->request->get('code');
        $user = User::findOne(['auth_key' => $code]);
        if(isset($code) && $user != null) {
            $user->status = 10;
            $user->save();
            return $this->render('confirm',['user' => $user]);
        }else{
            throw new HttpException(404 ,'Страница не найдена');
        }
    }

    public function actionResetPassword(){
        $model = new UserResetPasswordForm();
        $page_title = 'Восстановление пароля';
        if($model->load(Yii::$app->getRequest()->post()) && $model->validate()){
            $email = $_POST['UserResetPasswordForm']['email'];
            $user = UserResetPasswordForm::findByEmail($email);
            if($user != null){
                $user->generatePasswordResetToken();
                $user->save();
                Yii::$app->session->setFlash('message',"На почтовый адрес $email выслано сообщение с дальнейшими инструкциями");
                return $this->goHome();
            }
        }
        return $this->render('reset-password',['model' => $model,'page_title' => $page_title]);
    }

    public function actionNewPassword(){
        $code = Yii::$app->request->get('code');
        $user = User::findOne(['password_reset_token' => $code]);
        $page_title = 'Новый пароль';
        if(isset($code) && $user != null) {
            $model = new UserNewPasswordForm();
            if($model->load(Yii::$app->getRequest()->post()) && $model->validate()){
                $model->setNewPassword($user);
                $user->save();
                Yii::$app->session->setFlash('message',"Пароль успешно изменен");
                return $this->goHome();
            }
            return $this->render('new-password',['model' => $model,'page_title' => $page_title]);
        }else{
            throw new HttpException(404 ,'Страница не найдена');
        }
    }
}
