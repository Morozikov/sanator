<?php

class AdminController extends DashboardController
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/sb';



	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Video;
        $category = new VideoCategory;

        $category_id = null;
        if (isset($_GET['category_id'])) { $category_id = $_GET['category_id'];}
        $model->category_id = $category_id;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Video']))
		{
			$model->attributes=$_POST['Video'];
             $model->video=CUploadedFile::getInstance($model,'video');
             $model->path='/files/video/'.$model->video->getName();
			if($model->save()){
                $path=Yii::getPathOfAlias('webroot').'/files/video/'.$model->video->getName();
                $model->video->saveAs($path);
                $this->setMessage("Видео создано");
				//$this->redirect($this->createUrl('/photogallery/admin/index',array('id'=>$model->id)));
                $model = new Video;
                $model->category_id = $category_id;
            }
		}

        if(isset($_POST['VideoCategory']))
        {
            $category->attributes=$_POST['VideoCategory'];
            if($category->save()){
                $this->setMessage("Альбом создан.");
                $this->redirect($this->createActionUrl('create', array('category_id' => $category->id)));

            }
        }

		$this->render('create',array(
			'model'=>$model,
            'category' => $category,
            'category_id' => $category_id
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
        $category = new VideoCategory;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

        if(isset($_POST['Video']))
        {
            $model->attributes=$_POST['Video'];
            if($model->save()){
                $this->setMessage("Видео создано");
                $this->redirect($this->createUrl('/video/admin/index',array('id'=>$model->id)));
            }
        }

        if(isset($_POST['VideoCategory']))
        {
            $category->attributes=$_POST['VideoCategory'];
            if($category->save()){
                $this->setMessage("Альбом создан.");
                $category = new VideoCategory();
            }
        }

        $this->render('update',array(
            'model'=>$model,
            'category' => $category
        ));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$model = $this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : $this->createActionUrl('index'));
	}

	/**
	 * Manages all models.
	 */
	public function actionIndex()
	{
		$model= VideoCategory::model();

		$this->render('index',array(
			'model'=>$model,
		));
	}

    public function actionUpdateCategory($id){
        $category = $this->loadCategory($id);

        if(isset($_POST['VideoCategory']))
        {
            $category->attributes=$_POST['VideoCategory'];
            if($category->save()){
                $this->setMessage("Альбом отредактирован.");

            }
        }

        $this->render('updateCategory', compact('category'));

	}

    /**
     * Delete category
     * @param $id category id
     */
    public function actionDeleteCategory($id){
        $model = $this->loadCategory($id);
        foreach($model->photos as $photo){
            try{
                $photo->delete();
            } catch(Exception $e){
                Yii::log($e->getMessage(), CLogger::LEVEL_ERROR);
            }
        }

        $model->delete();
    }

    /**
     * Load photo
     * @param $id
     * @return mixed
     * @throws CHttpException
     */
    public function loadModel($id)
    {
        $model=Video::model()->multilang()->findByPk($id);
        if($model===null)
            $this->throwNotFoundException();
        return $model;
    }

    /**
     * Load category
     * @param $id
     * @return CActiveRecord
     * @throws CHttpException
     */
    public function loadCategory($id)
    {
        $model=VideoCategory::model()->multilang()->findByPk($id);
        if($model===null)
            $this->throwNotFoundException();
        return $model;
    }

    public function actionAssignThumb(){
        $category = $this->loadCategory($_GET['category_id']);
        $category->thumb_id = $_GET['thumb_id'];
        $category->save();
    }
}
