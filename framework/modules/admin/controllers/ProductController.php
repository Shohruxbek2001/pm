<?php

namespace app\modules\admin\controllers;

use app\models\ProgramsList;
use Yii;
use app\models\Product;
use app\models\Search\ProductSearch;
use yii\imagine\Image;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ProductController implements the CRUD actions for Product model.
 */
class ProductController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Product models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProductSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Product model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
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

        if ($model->load(Yii::$app->request->post()) ){

            $model->image1 = UploadedFile::getInstance($model, 'image1');
            $model->image2 = UploadedFile::getInstance($model, 'image2');
            $model->image3 = UploadedFile::getInstance($model, 'image3');
            $model->image4 = UploadedFile::getInstance($model, 'image4');
            if ($model->image1) {
                $random=$this->getRandomUrlImage();
                $original = 'uploads/product/' . $random . '.' . $model->image1->extension;
                $model->image1->saveAs($original);
                Image::thumbnail($original, 240,192)
                    ->save(Yii::getAlias($original), ['quality' => 80]);
                $model->image1 =$random . '.' . $model->image1->extension;
            } else {
                $model->image1 = "no-image1.jpg";
            }
            if ($model->image2) {
                $random=$this->getRandomUrlImage();
                $original = 'uploads/product/' . $random . '.' . $model->image2->extension;
                $model->image2->saveAs($original);
                Image::thumbnail($original, 395.5,249.78)
                    ->save(Yii::getAlias($original), ['quality' => 80]);
                $model->image2 =$random . '.' . $model->image2->extension;
            } else {
                $model->image2 = "no-image2.jpg";
            }
            if ($model->image3) {
                $random=$this->getRandomUrlImage();
                $original = 'uploads/product/' . $random . '.' . $model->image3->extension;
                $model->image3->saveAs($original);
                Image::thumbnail($original, 395.5,249.78)
                    ->save(Yii::getAlias($original), ['quality' => 80]);
                $model->image3 =$random . '.' . $model->image3->extension;
            } else {
                $model->image3 = "no-image3.jpg";
            }
            if ($model->image4) {
                $random=$this->getRandomUrlImage();
                $original = 'uploads/product/' . $random . '.' . $model->image4->extension;
                $model->image4->saveAs($original);
                Image::thumbnail($original, 395.5,249.78)
                    ->save(Yii::getAlias($original), ['quality' => 80]);
                $model->image4 =$random . '.' . $model->image4->extension;
            } else {
                $model->image4 = "no-image4.jpg";
            }

            $model->save();
            return $this->redirect(['view', 'id' => $model->product_id]);
        }
        return $this->render('create', [
            'model' => $model,
        ]);
    }


    function getRandomUrlImage(){
        $s = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $s1 = strlen($s) - 1;
        return
            substr($s, rand(0, $s1), 1) .
            substr($s, rand(0, $s1), 1) .
            substr($s, rand(0, $s1), 1) .
            substr($s, rand(0, $s1), 1) .
            substr($s, rand(0, $s1), 1) .
            substr($s, rand(0, $s1), 1) .
            substr($s, rand(0, $s1), 1) .
            substr($s, rand(0, $s1), 1) .
            substr($s, rand(0, $s1), 1) .
            substr($s, rand(0, $s1), 1) .
            substr($s, rand(0, $s1), 1) .
            substr($s, rand(0, $s1), 1) .
            substr($s, rand(0, $s1), 1) .
            substr($s, rand(0, $s1), 1) .
            substr($s, rand(0, $s1), 1) .
            substr($s, rand(0, $s1), 1) .
            substr($s, rand(0, $s1), 1) .
            substr($s, rand(0, $s1), 1) .
            substr($s, rand(0, $s1), 1) .
            substr($s, rand(0, $s1), 1) .
            substr($s, rand(0, $s1), 1) .
            substr($s, rand(0, $s1), 1) .
            substr($s, rand(0, $s1), 1) .
            substr($s, rand(0, $s1), 1) .
            substr($s, rand(0, $s1), 1) .
            substr($s, rand(0, $s1), 1) .
            substr($s, rand(0, $s1), 1);
    }
    function getRandomAlias(){
        $s = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
        $s1 = strlen($s) - 1;
        return
            substr($s, rand(0, $s1), 1) .
            substr($s, rand(0, $s1), 1) .
            substr($s, rand(0, $s1), 1) .
            substr($s, rand(0, $s1), 1) .
            substr($s, rand(0, $s1), 1) .
            substr($s, rand(0, $s1), 1) .
            substr($s, rand(0, $s1), 1) .
            substr($s, rand(0, $s1), 1) .
            substr($s, rand(0, $s1), 1) .
            substr($s, rand(0, $s1), 1) ;
    }

    /**
     * Updates an existing Product model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) ) {

            $model->alias=$this->getRandomAlias();
            $model->image1 = UploadedFile::getInstance($model, 'image1');
            $model->image2 = UploadedFile::getInstance($model, 'image2');
            $model->image3 = UploadedFile::getInstance($model, 'image3');
            $model->image4 = UploadedFile::getInstance($model, 'image4');
            if ($model->image1) {
                $random=$this->getRandomUrlImage();
                $original = 'uploads/product/' . $random . '.' . $model->image1->extension;
                $model->image1->saveAs($original);
                Image::thumbnail($original, 395.5,249.78)
                    ->save(Yii::getAlias($original), ['quality' => 80]);
                $model->image1 =$random . '.' . $model->image1->extension;
            } else {
                $model->image1 = "no-image1.jpg";
            }
            if ($model->image2) {
                $random=$this->getRandomUrlImage();
                $original = 'uploads/product/' . $random . '.' . $model->image2->extension;
                $model->image2->saveAs($original);
                Image::thumbnail($original, 395.5,249.78)
                    ->save(Yii::getAlias($original), ['quality' => 80]);
                $model->image2 =$random . '.' . $model->image2->extension;
            } else {
                $model->image2 = "no-image2.jpg";
            }
            if ($model->image3) {
                $random=$this->getRandomUrlImage();
                $original = 'uploads/product/' . $random . '.' . $model->image3->extension;
                $model->image3->saveAs($original);
                Image::thumbnail($original, 395.5,249.78)
                    ->save(Yii::getAlias($original), ['quality' => 80]);
                $model->image3 =$random . '.' . $model->image3->extension;
            } else {
                $model->image3 = "no-image3.jpg";
            }
            if ($model->image4) {
                $random=$this->getRandomUrlImage();
                $original = 'uploads/product/' . $random . '.' . $model->image4->extension;
                $model->image4->saveAs($original);
                Image::thumbnail($original, 395.5,249.78)
                    ->save(Yii::getAlias($original), ['quality' => 80]);
                $model->image4 =$random . '.' . $model->image4->extension;
            } else {
                $model->image4 = "no-image4.jpg";
            }


            $model->save();
            return $this->redirect(['view', 'id' => $model->product_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Product model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

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
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
