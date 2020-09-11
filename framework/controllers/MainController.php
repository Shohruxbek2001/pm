<?php

namespace app\controllers;

use Yii;
use yii\data\Pagination;
use yii\filters\AccessControl;
use yii\filters\PageCache;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class MainController extends Controller
{
    /**
     * {@inheritdoc}
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

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionAboutDevelopers()
    {
        return $this->render('about-developers');
    }

    public  function actionCategory()
    {
        $query = \app\models\Product::find()->where(['status' => 1]);
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(),'pageSize'=>9]);
        $models = $query->offset($pages->offset)
            ->limit(9)
            ->all();

        return $this->render('category', [
            'models' => $models,
            'pages' => $pages,]);

    }



    public function actionList()
    {
        return $this->render('list');
    }
    public function actionCatalog($alias)
    {       $catalog = \app\models\Catalog::find()->where(['alias' => $alias])->one();
        $catalog_list = \app\models\Catalog::find()->all();
        $category_type = \app\models\CategoryType::find()->where(['category_type_id' => $catalog['category_type_id']])->one();
        $query = \app\models\Product::find()->where(['status' => 1,]);
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(),'pageSize'=>9]);
        $models = $query->offset($pages->offset)
            ->limit(9)
            ->all();
        return $this->render('catalog',[
            'catalog'=>$catalog,
            'category_type' => $category_type,
            'catalog_list'=>$catalog_list,
            'models' => $models,
            'pages' => $pages,
        ]);
    }
    public function actionItem($alias)
    {
        $item = \app\models\Product::find()->where(['alias' => $alias])->one();
        $item_list = \app\models\Product::find()->all();
        $catalog = \app\models\Catalog::find()->where(['catalog_id' => $item['catalog_id']])->one();
        $categroy = \app\models\Category::find()->where(['category_id' => $item['category_id']])->one();
        $category_type = \app\models\CategoryType::find()->where(['category_type_id' => $catalog['category_type_id']])->one();
        $state = \app\models\State::find()->where(['state_id' => $item['state_id']])->one();
        $brand = \app\models\Brand::find()->where(['brand_id' => $item['brand_id']])->one();
        $goods = \app\models\Goods::find()->where(['goods_id' => $item['goods_id']])->one();
        return $this->render('item',
            [
                'item' => $item,
                'item_list' => $item_list,
                'catalog' => $catalog,
                'category' => $categroy,
                'category_type' => $category_type,
                'state' => $state,
                'brand' => $brand,
                'goods' => $goods,
            ]
        );
    }
    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
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
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */

}
