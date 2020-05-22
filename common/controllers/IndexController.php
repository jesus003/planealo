<?php
namespace common\controllers;

use Yii;
use Yii2;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use yii\web\NotFoundHttpException;
use yii\helpers\ArrayHelper;

class IndexController extends Controller{

    public function behaviors(){
        return [
          'verbs' => [
            'class' => VerbFilter::className(),
            'actions' => [
              'delete' => ['POST']
            ],
          ],
          'access' => [
            'class' => AccessControl::className(),
            'rules' => [
              [
                'allow' => true,
                'roles' => ['@']    // Usuarios autentificados
              ]
            ]
          ]
        ];
      }
    /**
     * {@inheritdoc}
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
    public function actionIndex(){
       
        return $this->render('indexx', [
          'array' => 'a'
        ]);
    }

  

}

?>
