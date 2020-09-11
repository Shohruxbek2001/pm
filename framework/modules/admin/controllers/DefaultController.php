<?php

namespace app\modules\admin\controllers;

use app\models\LoginForm;
use app\models\Search\ProductSearch;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;

/**
 * Default controller for the `admin` module
 */
class DefaultController extends Controller
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
                    'logout' => ['get'],
                ],
            ],

        ];
    }

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $this->layout='main';
        if (Yii::$app->user->isGuest) {
            return $this->redirect('admin/default/login');
        } else {

//            $searchModel = new ProductSearch();
//            $dataProvider = $searchModel->search(Yii::$app->request->queryParams);


            return $this->render('index', [
//                'searchModel' => $searchModel,
//                'dataProvider' => $dataProvider,
            ]);

////            return $this->render('index');
//            return $this->render('index',[
//
//            ]);
        }
    }

    public function actionLogin()
    {
        $this->layout='main_login';
        if (!Yii::$app->user->isGuest) {
            Yii::$app->user->logout();

            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->render('index');
        } else{

//        $this->layout='main_login';
        return $this->render('login', [
            'model' => $model,

        ]);
        }
    }
    
    public function actionLogout()
    {
//       $this->layout='main';

        Yii::$app->user->logout();

        return $this->goHome();
    }
}
