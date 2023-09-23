<?php

class SurketnobeswaController extends Controller
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
				'actions'=>array('create','createbymahasiswa','deletebyowner','updatebymahasiswa','update','admin','view',
                    'updatenosurketnobeswa','updatenosurketnobeswaoperator','permintaansurat','isisurat','AjaxTtd','notifikasi','preview'
                ,'AjaxDekanat','dekanat','subkor'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','view','create','deletebyowner','update','createbymahasiswa','updatenosurketnobeswa',
                    'updatebymahasiswa','AjaxTtd', 'Ajaxsubkor', 'Ajaxdekanat','notifikasi','preview'),
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
        
        $sql = "select count(IDSURKETNOBESWA) as newrecord from surketnobeswa where PREVIEW='N' ";
        $data = Yii::app()->db->createCommand($sql)->queryAll();

        $this->renderPartial('notifikasi', array('data' => $data,));
    }
    public function actionPreview() {
        $user=Yii::app()->user->IDGROUPS;
        
        $sql="select * from surketnobeswa WHERE IDGROUPS='$user'";
        $data = Yii::app()->db->createCommand($sql)->queryAll();

        $this->renderPartial('preview', array('data' => $data,));
    }   
         public function actionAjaxTtd(){
                        
                        $acc = $_POST['ACCSURKETNOBESWA'];
                        $idnobeswa = $_POST['IDSURKETNOBESWA'];
                       
 
                        $model = Surketnobeswa::model()->findByPk($idnobeswa);
                        $model->ACCSURKETNOBESWA = $acc;
                        if($model->update()){
                        $data['ACCSURKETNOBESWA']=$model->ACCSURKETNOBESWA;
                        }
                        else{
                        $model = Surketnobeswa::model()->findByPk($idnobeswa);
                        $data['ACCSURKETNOBESWA']=$model->ACCSURKETNOBESWA;
                        }
                        echo json_encode($data);
                        Yii::app()->end();
                        }

    public function actionAjaxSubkor() {

        $acc = $_POST['ACCSUBKOR'];
        $idnobeswa = $_POST['IDSURKETNOBESWA'];


        $model = Surketnobeswa::model()->findByPk($idnobeswa);
        $model->ACCSUBKOR = $acc;
        $model->TANGGALACCSUBKOR = date('Y-m-d H:i:s');
        if ($model->update()) {
            $data['ACCSUBKOR'] = $model->ACCSUBKOR;
        } else {
            $model = Surketnobeswa::model()->findByPk($idnobeswa);
            $data['ACCSUBKOR'] = $model->ACCSUBKOR;
        }
        echo json_encode($data);
        Yii::app()->end();
    }

    public function actionAjaxDekanat() {

        $acc = $_POST['ACCDEKANAT'];
        $idnobeswa = $_POST['IDSURKETNOBESWA'];


        $model = Surketnobeswa::model()->findByPk($idnobeswa);
        $model->ACCDEKANAT = $acc;
        $model->TANGGALACCDEKANAT = date('Y-m-d H:i:s');
        if ($model->update()) {
            $data['ACCDEKANAT'] = $model->ACCDEKANAT;
        } else {
            $model = Surketnobeswa::model()->findByPk($idnobeswa);
            $data['ACCDEKANAT'] = $model->ACCDEKANAT;
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
		$this->render('isisurat',array(
			'model'=>$this->loadModel($id),
		));
	}
       
	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Surketnobeswa;
                $model->IDJENISSURAT=7;
                

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
                
                //membuat default tahun akademik dan semester berdasarkan konfigurasi tabel currentsemester
                $qry = "SELECT DISTINCT IDTASEMESTER from currentsemester WHERE STATUSTASEMESTER ='A'";
                $listtasmtr=Yii::app()->db->createCommand($qry)->queryScalar();
                $model->IDTASEMESTER=$listtasmtr;
                //batas

		if(isset($_POST['Surketnobeswa']))
		{
			$model->attributes=$_POST['Surketnobeswa'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->IDSURKETNOBESWA));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}
        
        public function actionCreatebymahasiswa()
	{
		$model=new Surketnobeswa;
                $model->IDJENISSURAT=7;
                $model->NIM=Yii::app()->user->getNama();

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
                
                  //membuat default tahun akademik dan semester berdasarkan konfigurasi tabel currentsemester
                $qry = "SELECT DISTINCT IDTASEMESTER from currentsemester WHERE STATUSTASEMESTER ='A'";
                $listtasmtr=Yii::app()->db->createCommand($qry)->queryScalar();
                $model->IDTASEMESTER=$listtasmtr;
                //batas

		if(isset($_POST['Surketnobeswa']))
		{
			$model->attributes=$_POST['Surketnobeswa'];
			if($model->save())
				$this->redirect(array('isisurat','id'=>$model->IDSURKETNOBESWA));
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

		if(isset($_POST['Surketnobeswa']))
		{
			$model->attributes=$_POST['Surketnobeswa'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->IDSURKETNOBESWA));
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

		if(isset($_POST['Surketnobeswa']))
		{
			$model->attributes=$_POST['Surketnobeswa'];
			if($model->save())
				$this->redirect(array('isisurat','id'=>$model->IDSURKETNOBESWA));
		}

		$this->render('updatebymhs',array(
			'model'=>$model,
		));
	}
        
         
        
        public function actionUpdatenosurketnobeswa($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Surketnobeswa']))
		{
			$model->attributes=$_POST['Surketnobeswa'];
			if($model->save())
				$this->redirect(array('admin','id'=>$model->IDSURKETNOBESWA));
		}

		$this->render('updatenosurketnobeswa',array(
			'model'=>$model,
		));
	}
        public function actionUpdatenosurketnobeswaoperator($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Surketnobeswa']))
		{
			$model->attributes=$_POST['Surketnobeswa'];
			if($model->save())
				$this->redirect(array('detailsurketnobeswa/admin','id'=>$model->IDSURKETNOBESWA));
		}

		$this->render('updatenosurketnobeswa',array(
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

		$this->redirect(array('surketnobeswa/admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Surketnobeswa');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}
        
         public function actionPermintaansurat()
	{
		$model=new Surketnobeswa('search');
                $user =Yii::app()->user->getNama();
		$model->unsetAttributes();  // clear any default values
                
                $model->dbCriteria->condition='t.NIM=:NIM';
                $model->dbCriteria->params=array(':NIM'=>$user);
		if(isset($_GET['Surketnobeswa']))
			$model->attributes=$_GET['Surketnobeswa'];

		$this->render('permintaansurat',array(
			'model'=>$model,
		));
	}
	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Surketnobeswa('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Surketnobeswa']))
			$model->attributes=$_GET['Surketnobeswa'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

    public function actionSubkor()
    {
        $model=new Surketnobeswa('search');
        $model->unsetAttributes();  // clear any default values
        if(isset($_GET['Surketnobeswa']))
            $model->attributes=$_GET['Surketnobeswa'];

        $this->render('subkor',array(
            'model'=>$model,
        ));
    }

    public function actionDekanat()
    {
        $model=new Surketnobeswa('search');
        $model->unsetAttributes();  // clear any default values
        if(isset($_GET['Surketnobeswa']))
            $model->attributes=$_GET['Surketnobeswa'];

        $this->render('dekanat',array(
            'model'=>$model,
        ));
    }
        
       
	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Surketnobeswa the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Surketnobeswa::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Surketnobeswa $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='surketnobeswa-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
