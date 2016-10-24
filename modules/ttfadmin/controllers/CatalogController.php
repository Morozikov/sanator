<?php

namespace app\modules\ttfadmin\controllers;

use Yii;
use app\models\Catalog;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\UploadForm;
use yii\web\UploadedFile;

/**
 * CatalogController implements the CRUD actions for Catalog model.
 */
class CatalogController extends Controller
{
    /**
     * @inheritdoc
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
     * Lists all Catalog models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Catalog::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Catalog model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Catalog model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Catalog();
        $image = new UploadForm();
        if ($model->load(Yii::$app->request->post())) {
            $image->file = UploadedFile::getInstance($model, 'image');
//            print_r($model);die;
            if ($image->file && $image->validate()) {
                $image->file->saveAs('../web/images/catalog/' . $image->file->baseName . '.' . $image->file->extension);
                $model->image = 'images/catalog/' . $image->file->baseName . '.' . $image->file->extension;
            }
            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Catalog model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $old_image = $model->image;
        $image = new UploadForm();
        if ($model->load(Yii::$app->request->post())) {
            $image->file = UploadedFile::getInstance($model, 'image');
//            print_r($image->file);die;
            if ($image->file!='') {
                $image->file->saveAs('../web/images/catalog/' . $image->file->baseName . '.' . $image->file->extension);
                $model->image = 'images/catalog/' . $image->file->baseName . '.' . $image->file->extension;
            }
            else{
                $model->image = $old_image;
            }
            $model->save();

                return $this->redirect(['view', 'id' => $model->id]);


        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Catalog model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Catalog model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Catalog the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Catalog::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
