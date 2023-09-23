<?php

class FileuploadfotoController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','admin','view','deletebyowner','delete','unduh','Getuploadfoto'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','view'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
        //membuat fungsi action button unduhan dari file foto
         public function actionUnduh($id){
             $model= Fileuploadfoto::model()->findByPk($id);
             $myfile = Yii::app()->file->set(Yii::getPathOfAlias('application.fileuploadfoto').'/'.$model->FILEFOTO, true);
             $myfile->download($model->FILEFOTO, false);
        }
	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}
        
        //membuat perintah untuk menampilkan nama file foto dalam bentuk foto
        public function actionGetuploadfoto($id)
        {
            $model= Fileuploadfoto::model()->findByPk($id);
            //$filename= $id.".jpg";
            $filename=$model->nIM->NIM.".jpg";
                     
            $path=Yii::getPathOfAlias('application.FILEFOTO') . '/';
            $file=$path.$filename;
            
           

            if (file_exists($file))
            {
                
                $img=getimagesize($file);

                //header('Content-Type: image/jpeg');
                header('Content-Type: '.$img['mime']);
                readfile($file);
            } else {
                       
			$file=$path.'nofoto.jpg';
			$img=getimagesize($file);

                //header('Content-Type: image/jpeg');
                header('Content-Type: '.$img['mime']);
                readfile($file);
	   }
        }
	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Fileuploadfoto;
                    $model->NIM=Yii::app()->request->getParam('id',0);
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Fileuploadfoto']))
		{
		//	$model->attributes=$_POST['Fileuploadfoto'];
		//	if($model->save())
		//		$this->redirect(array('view','id'=>$model->IDFILEFOTO));
		//}
                    $model->attributes=$_POST['Fileuploadfoto'];
                        $model->FILEFOTO=CUploadedFile::getInstance($model,'FILEFOTO');
                        if($model->validate()){
                            if($model->save()){
                                //membuat path untuk penyimpanan foto
                               $model->FILEFOTO->saveAs(Yii::getPathOfAlias('application.fileuploadfoto').'/'.$model->nIM->NIM.".jpg");
                               $this->redirect(array('view','id'=>$model->IDFILEFOTO));
                            }
                        }
		}
               

		$this->render('create',array(
			'model'=>$model,
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

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Fileuploadfoto']))
		//{
		//	$model->attributes=$_POST['Fileuploadfoto'];
		//	if($model->save())
		//		$this->redirect(array('view','id'=>$model->IDFILEFOTO));
		//}
                    {
			$model->attributes=$_POST['Fileuploadfoto'];
                          $model->FILEFOTO=CUploadedFile::getInstance($model,'FILEFOTO');
                          if ($model->validate()) {
                            if ($model->save()) {
                                $model->FILEFOTO->saveAs(Yii::getPathOfAlias('application.FILEFOTO') . '/'. $model->FILEFOTO);
                                $this->redirect(array('view', 'id' => $model->IDFILEFOTO));
                            }
                        }
		}
		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Fileuploadfoto');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Fileuploadfoto('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Fileuploadfoto']))
			$model->attributes=$_GET['Fileuploadfoto'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Fileuploadfoto the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Fileuploadfoto::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Fileuploadfoto $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='fileuploadfoto-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
