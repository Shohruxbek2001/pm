<?php

namespace app\modules\admin\controllers;

use Yii;
use app\models\CategoryType;
use app\models\Search\CategoryTypeSearch;
use yii\imagine\Image;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * CategoryTypeController implements the CRUD actions for CategoryType model.
 */
class CategoryTypeController extends Controller
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
     * Lists all CategoryType models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CategoryTypeSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single CategoryType model.
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
     * Creates a new CategoryType model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new CategoryType();
        if ($model->load(Yii::$app->request->post()) ){
            $model->image = UploadedFile::getInstance($model, 'image');

            $model->image = UploadedFile::getInstance($model, 'image');
        if ($model->image) {
            $random = $this->getRandomUrlImage();
            $original = 'uploads/category_type/' . $random . '.' . $model->image->extension;
            $model->image->saveAs($original);
            Image::thumbnail($original, 395.5, 249.78)
                ->save(Yii::getAlias($original), ['quality' => 80]);
            $model->image = $random . '.' . $model->image->extension;
        } else {
            $model->image = "no-image.jpg";
        }
        $model->save();
        return $this->redirect(['view', 'id' => $model->category_type_id]);
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
     * Updates an existing CategoryType model.
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
                $original = 'uploads/category_type/' . $random . '.' . $model->image->extension;
                $model->image->saveAs($original);
                Image::thumbnail($original, 395.5,249.78)
                    ->save(Yii::getAlias($original), ['quality' => 80]);
                $model->image =$random . '.' . $model->image->extension;
            } else {
                $model->image = "no-image1.jpg";
            }

            $model->save();
            return $this->redirect(['view', 'id' => $model->category_type_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing CategoryType model.
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
     * Finds the CategoryType model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return CategoryType the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = CategoryType::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
