<?php

class DetailsurtugpmController extends Controller
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
				'actions'=>array('index'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','view','admin','notifikasi','preview'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','view','update','notifikasi','preview'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
        
         //membuat action notifikasi
        public function actionNotifikasi() {
        
        $sql = "select count(IDDETAILSURTUGPM) as newrecord from detailsurtugpm where PREVIEW='N' ";
        $data = Yii::app()->db->createCommand($sql)->queryAll();

        $this->renderPartial('notifikasi', array('data' => $data,));
    }
    public function actionPreview() {
        $user=Yii::app()->user->IDGROUPS;
        
        $sql="select * from detailsurtugpm WHERE IDGROUPS='$user'";
        $data = Yii::app()->db->createCommand($sql)->queryAll();

        $this->renderPartial('preview', array('data' => $data,));
    }    
        
                
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	//public function actionCreate()
	//{
	//	$model=new Detailsurtugpm;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

	//	if(isset($_POST['Detailsurtugpm']))
	//	{
	//		$model->attributes=$_POST['Detailsurtugpm'];
	//		if($model->save())
	//			$this->redirect(array('view','id'=>$model->IDDETAILSURTUGPM));
	//	}

	//	$this->render('create',array(
	//		'model'=>$model,
	//	));
	//}
        //membuat create
        public function actionCreate()
	{
            $IDPM=Yii::app()->request->getParam('IDPM','');
		
                $model=new Detailsurtugpm;
                $model->IDGROUPS=2;
                if($IDPM!=''){
                    $model->IDPM=$IDPM;
                }

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Detailsurtugpm']))
		{
			$model->attributes=$_POST['Detailsurtugpm'];
			if($model->save())
				$this->redirect(array('surtugpm/view','id'=>$model->IDPM));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}
        ///batas
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

		if(isset($_POST['Detailsurtugpm']))
		{
			$model->attributes=$_POST['Detailsurtugpm'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->IDDETAILSURTUGPM));
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
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Detailsurtugpm');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Detailsurtugpm('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Detailsurtugpm']))
			$model->attributes=$_GET['Detailsurtugpm'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Detailsurtugpm::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='detailsurtugpm-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
