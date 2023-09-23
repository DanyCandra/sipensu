<?php

class SurpermkController extends Controller
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
				'actions'=>array('index','view','createbymahasiswa','deletebyowner','updatebymahasiswa','permintaansurat','isisurat'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','createbymahasiswa','update','deletebyowner','updatebymahasiswa','admin','view','updatenosurpermk','updatenosurpermkoperator','permintaansurat','isisurat','AjaxTtd'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','create','createbymahasiswa','deletebyowner','update','updatebymahasiswa','admin','view','updatenosurpermk','AjaxTtd'),
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
                        
                        $acc = $_POST['ACCSURPERMK'];
                        $idmk = $_POST['IDMK'];
                       
 
                        $model = Surpermk::model()->findByPk($idmk);
                        $model->ACCSURPERMK = $acc;
                        if($model->update()){
                        $data['ACCSURPERMK']=$model->ACCSURPERMK;
                        }
                        else{
                        $model = Surpermk::model()->findByPk($idmk);
                        $data['ACCSURPERMK']=$model->ACCSURPERMK;
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
		$model=new Surpermk;
                $model->IDJENISSURAT=4;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
                
                //membuat default tahun akademik dan semester berdasarkan konfigurasi tabel currentsemester
                $qry = "SELECT DISTINCT IDTASEMESTER from currentsemester WHERE STATUSTASEMESTER ='A'";
                $listtasmtr=Yii::app()->db->createCommand($qry)->queryScalar();
                $model->IDTASEMESTER=$listtasmtr;
                //batas
                
                if(isset($_POST['Surpermk']))
		{
			$model->attributes=$_POST['Surpermk'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->IDMK));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}
        
        public function actionCreatebymahasiswa()
	{
		$model=new Surpermk;
                $model->IDJENISSURAT=4;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
                
                 //membuat default tahun akademik dan semester berdasarkan konfigurasi tabel currentsemester
                $qry = "SELECT DISTINCT IDTASEMESTER from currentsemester WHERE STATUSTASEMESTER ='A'";
                $listtasmtr=Yii::app()->db->createCommand($qry)->queryScalar();
                $model->IDTASEMESTER=$listtasmtr;
                //batas
                
		if(isset($_POST['Surpermk']))
		{
			$model->attributes=$_POST['Surpermk'];
			if($model->save())
				$this->redirect(array('isisurat','id'=>$model->IDMK));
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

		if(isset($_POST['Surpermk']))
		{
			$model->attributes=$_POST['Surpermk'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->IDMK));
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

		if(isset($_POST['Surpermk']))
		{
			$model->attributes=$_POST['Surpermk'];
			if($model->save())
				$this->redirect(array('isisurat','id'=>$model->IDMK));
		}

		$this->render('updatebymhs',array(
			'model'=>$model,
		));
	}

        public function actionUpdatenosurpermk($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Surpermk']))
		{
			$model->attributes=$_POST['Surpermk'];
			if($model->save())
				$this->redirect(array('admin','id'=>$model->IDMK));
		}

		$this->render('updatenosurpermk',array(
			'model'=>$model,
		));
	}
        public function actionUpdatenosurpermkoperator($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Surpermk']))
		{
			$model->attributes=$_POST['Surpermk'];
			if($model->save())
				$this->redirect(array('detailsurpermk/admin','id'=>$model->IDMK));
		}

		$this->render('updatenosurpermk',array(
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

		$this->redirect(array('surpermk/admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Surpermk');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}
        
        public function actionPermintaansurat()
	{
		$model=new Surpermk('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Surpermk']))
			$model->attributes=$_GET['Surpermk'];

		$this->render('permintaansurat',array(
			'model'=>$model,
		));
	}
        
	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Surpermk('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Surpermk']))
			$model->attributes=$_GET['Surpermk'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
        
       

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Surpermk the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Surpermk::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Surpermk $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='surpermk-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
