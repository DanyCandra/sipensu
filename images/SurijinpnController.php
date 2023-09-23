<?php

class SurijinpnController extends Controller
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
				'actions'=>array('index','view','permintaansurat','isisurat','createbymahasiswa','deletebyowner','updatebymahasiswa'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','view','admin','permintaansurat','isisurat','updatenosurijinpn','deletebyowner','updatenosurijinpnoperator','createbymahasiswa','updatebymahasiswa','AjaxTtd'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','deletebyowner','AjaxTtd'),
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
        
        public function actionAjaxTtd(){
                        
                        $acc = $_POST['ACCSURIJINPN'];
                        $idijinpn = $_POST['IDIJINPN'];
                      
 
                        $model = Surijinpn::model()->findByPk($idijinpn);
                        $model->ACCSURIJINPN = $acc;
                        if($model->update()){
                        $data['ACCSURIJINPN']=$model->ACCSURIJINPN;
                        }
                        else{
                        $model = Surijinpn::model()->findByPk($idijinpn);
                        $data['ACCSURIJINPN']=$model->ACCSURIJINPN;
                        }
                        echo json_encode($data);
                        Yii::app()->end();
                        }
                        
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}
        
        public function actionIsisurat($id)
	{
		$this->render('Isisurat',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Surijinpn;
                $model->IDJENISSURAT=6;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
                
                 //membuat default tahun akademik dan semester berdasarkan konfigurasi tabel currentsemester
                $qry = "SELECT DISTINCT IDTASEMESTER from currentsemester WHERE STATUSTASEMESTER ='A'";
                $listtasmtr=Yii::app()->db->createCommand($qry)->queryScalar();
                $model->IDTASEMESTER=$listtasmtr;
                //batas

		if(isset($_POST['Surijinpn']))
		{
			$model->attributes=$_POST['Surijinpn'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->IDIJINPN));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}
        
        public function actionCreatebymahasiswa()
	{
		$model=new Surijinpn;
                $model->IDJENISSURAT=6;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
                
                //membuat default tahun akademik dan semester berdasarkan konfigurasi tabel currentsemester
                $qry = "SELECT DISTINCT IDTASEMESTER from currentsemester WHERE STATUSTASEMESTER ='A'";
                $listtasmtr=Yii::app()->db->createCommand($qry)->queryScalar();
                $model->IDTASEMESTER=$listtasmtr;
                //batas

		if(isset($_POST['Surijinpn']))
		{
			$model->attributes=$_POST['Surijinpn'];
			if($model->save())
				$this->redirect(array('isisurat','id'=>$model->IDIJINPN));
		}

		$this->render('createbymhs',array(
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

		if(isset($_POST['Surijinpn']))
		{
			$model->attributes=$_POST['Surijinpn'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->IDIJINPN));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}
        
        public function actionUpdatebymahasiswa($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Surijinpn']))
		{
			$model->attributes=$_POST['Surijinpn'];
			if($model->save())
				$this->redirect(array('isisurat','id'=>$model->IDIJINPN));
		}

		$this->render('updatebymhs',array(
			'model'=>$model,
		));
	}
        
         public function actionUpdatenosurijinpn($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Surijinpn']))
		{
			$model->attributes=$_POST['Surijinpn'];
			if($model->save())
				$this->redirect(array('admin','id'=>$model->IDIJINPN));
		}

		$this->render('updatenosurijinpn',array(
			'model'=>$model,
		));
	}
        public function actionUpdatenosurijinpnoperator($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Surijinpn']))
		{
			$model->attributes=$_POST['Surijinpn'];
			if($model->save())
				$this->redirect(array('detailsurijinpn/admin','id'=>$model->IDIJINPN));
		}

		$this->render('updatenosurijinpn',array(
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
        
         public function actionDeletebyowner($id)
	{
		$this->loadModel($id)->delete();

		$this->redirect(array('surijinpn/admin'));
	}
	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Surijinpn');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}
        
        public function actionPermintaansurat()
	{
		$model=new Surijinpn('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Surijinpn']))
			$model->attributes=$_GET['Surijinpn'];

		$this->render('permintaansurat',array(
			'model'=>$model,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Surijinpn('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Surijinpn']))
			$model->attributes=$_GET['Surijinpn'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
        
       

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Surijinpn the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Surijinpn::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Surijinpn $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='surijinpn-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
