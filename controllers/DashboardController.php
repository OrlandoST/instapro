<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\SignupForm;
use app\models\InstagramAccountForm;

class DashboardController extends Controller
{
    
    public $layout = "dashboard";
    
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['index', 'profile', 'instagram', 'update', 'delete'],
                        'allow' => true,
                        'roles' => ['user'],
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
        return $this->render('dashboard', [
            'user' => Yii::$app->user,
        ]);
    }
    
    public function actionProfile()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            $model->validate();
        }
        return $this->render('profile', [
            'user' => Yii::$app->user,
            'model' => $model,
        ]);
    }
    
    public function actionInstagram()
    {
        $model = new InstagramAccountForm();
        if ($model->load(Yii::$app->request->post())) {
            $model->validate();
        }
        return $this->render('instagram', [
            'user' => Yii::$app->user,
            'model' => $model,
        ]);
    }      

    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
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

}
