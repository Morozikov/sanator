<?php

namespace app\modules\ttfadmin\controllers;

use Yii;
use app\models\TopP;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\UploadForm;
use yii\web\UploadedFile;

/**
 * TopController implements the CRUD actions for TopP model.
 */
class TopController extends Controller
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
     * Lists all TopP models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => TopP::find(),
        ]);
        $model = TopP::find();

        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'model'=>$model,
        ]);
    }

    /**
     * Displays a single TopP model.
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
     * Creates a new TopP model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new TopP();
        $image = new UploadForm();
        if ($model->load(Yii::$app->request->post())) {
            $image->file = UploadedFile::getInstance($model, 'image');
//            print_r($model);die;
            if ($image->file && $image->validate()) {
                $image->file->saveAs('../web/images/top/' . $image->file->baseName . '.' . $image->file->extension);
                $model->image = 'images/top/' . $image->file->baseName . '.' . $image->file->extension;
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
     * Updates an existing TopP model.
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
//            print_r($model);die;
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
     * Deletes an existing TopP model.
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
     * Finds the TopP model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TopP the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = TopP::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
