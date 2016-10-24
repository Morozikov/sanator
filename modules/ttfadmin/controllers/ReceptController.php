<?php

namespace app\modules\ttfadmin\controllers;

use Yii;
use app\models\Recept;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ReceptController implements the CRUD actions for Recept model.
 */
class ReceptController extends Controller
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
     * Lists all Recept models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Recept::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Recept model.
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
     * Creates a new Recept model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Recept();
        $image = new UploadForm();

        if ($model->load(Yii::$app->request->post())) {
            $image->file = UploadedFile::getInstance($model, 'image');
//            print_r($model);die;
            if ($image->file && $image->validate()) {
                $image->file->saveAs('../web/images/recept/' . $image->file->baseName . '.' . $image->file->extension);
                $model->image = 'images/recept/' . $image->file->baseName . '.' . $image->file->extension;
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
     * Updates an existing Recept model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $image = new UploadForm();
        $old_image = $model->image;

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
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Recept model.
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
     * Finds the Recept model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Recept the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Recept::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
