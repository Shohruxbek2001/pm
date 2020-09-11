<?php

namespace app\modules\admin\controllers;

use Yii;
use app\models\Basic;
use app\models\Search\BasicSearch;
use yii\imagine\Image;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * BasicController implements the CRUD actions for Basic model.
 */
class BasicController extends Controller
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
     * Lists all Basic models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BasicSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Basic model.
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
     * Creates a new Basic model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Basic();
        if ($model->load(Yii::$app->request->post()) ){
            $model->image = UploadedFile::getInstance($model, 'image');

            $model->image = UploadedFile::getInstance($model, 'image');
            if ($model->image) {
                $random = $this->getRandomUrlImage();
                $original = 'uploads/basic/' . $random . '.' . $model->image->extension;
                $model->image->saveAs($original);
                Image::thumbnail($original, 1349, 500)
                    ->save(Yii::getAlias($original), ['quality' => 80]);
                $model->image = $random . '.' . $model->image->extension;
            } else {
                $model->image = "no-image.jpg";
            }
            $model->save();
            return $this->redirect(['view', 'id' => $model->basic_id]);
        }
        return $this -> render('create', [
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
     * Updates an existing Basic model.
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
            $model->image = UploadedFile::getInstance($model, 'image');
            if ($model->image) {
                $random=$this->getRandomUrlImage();
                $original = 'uploads/basic/' . $random . '.' . $model->image->extension;
                $model->image->saveAs($original);
                Image::thumbnail($original, 395.5,249.78)
                    ->save(Yii::getAlias($original), ['quality' => 80]);
                $model->image =$random . '.' . $model->image->extension;
            } else {
                $model->image = "no-image1.jpg";
            }

            $model->save();
            return $this->redirect(['view', 'id' => $model->basic_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }
    /**
     * Deletes an existing Basic model.
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
     * Finds the Basic model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Basic the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Basic::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
