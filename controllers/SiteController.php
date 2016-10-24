<?php

namespace app\controllers;

use app\models\Catalog;
use app\models\Hit;
use app\models\Recept;
use app\models\TopP;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use yii\data\Pagination;



class SiteController extends Controller
{
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

    public function actionIndex()
    {
        $hit = Hit::find()->all();
        $catalog = Catalog::find()->all();
        $model = Recept::find()->where(['id'=>1])->one();
        return $this->render('index',
            ['model'=> $model,
            'hit'=>$hit,
            'catalog'=>$catalog]);
    }
    
    public function actionCart(){
        return $this->render('cart');
    }
    
    public function actionRecept($id){
        $model = Recept::find()->where(['id'=>$id])->one();
        return $this->render('recept',
            ['model'=>$model]);
    }

    public function actionCatalog($id){
        $query = TopP::find()->where(['id_catalog'=>$id]);
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count()]);
        $models = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        $catalog = Catalog::findOne(['id'=>$id]);
        $h1 = $catalog->name;
        return $this->render('catalog', [
            'models' => $models,
            'pages' => $pages,
            'h1'=>$h1,
        ]);
    }

    public function actionAddcart($id)
    {
        //Любая модель
        $model = TopP::findOne($id);
        //Кладем ее в корзину (в количестве 1, без опций)
        $cartElement = yii::$app->cart->put($model, 1, []);
        return $this->actionIndex();
    }
    

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    public function actionAbout()
    {
        $query = Recept::find();
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count()]);
        $models = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        return $this->render('about', [
            'models' => $models,
            'pages' => $pages,
        ]);
    }
}
