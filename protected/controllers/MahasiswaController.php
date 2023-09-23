<?php

class MahasiswaController extends Controller
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
				'actions'=>array('index','view','updatebiodatamhs'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','updatemhs','admin','view','viewmhs','fileuploadfoto'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','create','update','updatemhs','view','viewmhs','fileuploadfoto','service'),
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
	public function actionService()
	{
		$url='http://10.6.9.225/sia/index.php/api/posts/11';
		$params='11';
		$response = Yii::app()->curl->get($url);
		$output = json_decode($response);

		foreach($output as $value) {

		$data=Mahasiswa::model()->findByPk($value->nim);

		if($data!=Null){
			echo "data sudah ada";
		}
		else{

		$model= new Mahasiswa();
		$model2= new Pengguna();
		
		
		$model->NIM=$value->nim;
		$model->NAMA=$value->namamhs;
		$model->TEMPATLAHIR=$value->tempatlahir;
		$model->TGLLAHIR=$value->tgllhrmhs;
		$model->NOHP=$value->nohp;
		$model->EMAIL=$value->email;
		$model->ALAMATASAL=$value->alamatasalmhs;
		$model->NAMAAYAH=$value->namaayah;
		$model->NAMAIBU=$value->namaibu;
		$model->PENGHASILANAYAH=$value->penghasilanayah;
		$model->PENGHASILANIBU=$value->penghasilanibu;
		$model->JMLTANGGUNGAN=$value->jmlanggotakeluarga;
		$model->NAMAKABUPATEN=$value->namakabupaten;
		$model->NAMAPROPINSI=$value->namapropinsi;
		$model->TAHUNANGKATAN=$value->tahunangkatan;
		$model->IDAGAMA=$value->kodeagama;
		$model->IDPRODI=$value->kodenim;
		//$model->IDGOLDAR=
		$model->IDJENDER=$value->kodejeniskelamin;
		
		$model2->IDGROUPS='9';
		$model2->USERNAME=$value->NIM;
		$model2->PASS=$value->NIM;
		$model->save();
		$model2->save();

		echo $params. ".". $model->nim. "from". $model->namamhs. " mlebu jesss ahhh.";
		}
		}
		//echo $response;



		echo "Rampung";
	} 
	 
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}
        
        public function actionViewmhs($id)
	{
		$this->render('viewmhs',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Mahasiswa;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Mahasiswa']))
		{
			$model->attributes=$_POST['Mahasiswa'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->NIM));
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
		//$model=$this->loadModel($id);
                $model=  Mahasiswa::model()->findByPk($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Mahasiswa']))
		{
			$model->attributes=$_POST['Mahasiswa'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->NIM));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}
        
       public function actionUpdatemhs()
	{
		$id=Yii::app()->request->getParam('id',-1);
                $nim=Yii::app()->request->getParam('nim',-1);
                //$model=$this->loadModel($id);
                
                $model=  Mahasiswa::model()->findByPk($nim);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Mahasiswa']))
		{
			$model->attributes=$_POST['Mahasiswa'];
                     
			if($model->save())
				$this->redirect(array('surketnobeswa/view','id'=>$id));
		}

		$this->render('updatemhs',array(
			'model'=>$model,'id'=>$id
		));
	}
        
        public function actionUpdatebiodatamhs()
	{
		$id=Yii::app()->request->getParam('id',-1);
                $nim=Yii::app()->request->getParam('nim',-1);
                //$model=$this->loadModel($id);
                
                $model=  Mahasiswa::model()->findByPk($nim);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Mahasiswa']))
		{
			$model->attributes=$_POST['Mahasiswa'];
                     
			if($model->save())
				$this->redirect(array('surketnobeswa/isisurat','id'=>$id));
		}

		$this->render('updatemhs',array(
			'model'=>$model,'id'=>$id
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
		//$dataProvider=new CActiveDataProvider('Mahasiswa');
                $model=new Mahasiswa('search');
                $model->unsetAttributes(); 
		//$this->render('index',array(
			//'dataProvider'=>$dataProvider,
		if(isset($_GET['Mahasiswa']))
			$model->attributes=$_GET['Mahasiswa'];

		$this->render('index',array(
			'model'=>$model,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Mahasiswa('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Mahasiswa']))
			$model->attributes=$_GET['Mahasiswa'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Mahasiswa the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Mahasiswa::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Mahasiswa $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='mahasiswa-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
