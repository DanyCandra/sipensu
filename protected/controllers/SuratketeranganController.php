<?php

class SuratketeranganController extends Controller
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
				'actions'=>array('index','createbymhs','updatebymhs','view','permintaansuratketerangan','isisuratketerangan'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','index','admin','deletebyowner','updatenosuratketerangan','updatenosuratketeranganoperator','AjaxTtd','notifikasi','preview'
                ,'AjaxDekanat','dekanat','subkor'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','view','index','deletebyowner','AjaxTtd','Ajaxsubkor','Ajaxdekanat', 'notifikasi','preview'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
        
        //membuat action notifikasi
        public function actionNotifikasi() {
        
        $sql = "select count(IDSURKET) as newrecord from suratketerangan where PREVIEW='N' ";
        $data = Yii::app()->db->createCommand($sql)->queryAll();

        $this->renderPartial('notifikasi', array('data' => $data,));
    }
    public function actionPreview() {
        $user=Yii::app()->user->IDGROUPS;
        
        $sql="select * from suratketerangan WHERE IDGROUPS='$user'";
        $data = Yii::app()->db->createCommand($sql)->queryAll();

        $this->renderPartial('preview', array('data' => $data,));
    }   
        
         public function actionDeletebyowner($id)
	{
		$this->loadModel($id)->delete();

		$this->redirect(array('suratketerangan/admin'));
	}
        
        public function actionAjaxTtd(){
                        
                        $acc = $_POST['ACCSURKET'];
                        $idsurket = $_POST['IDSURKET'];
                      
                        $model = Suratketerangan::model()->findByPk($idsurket);
                        $model->ACCSURKET = $acc;
                        if($model->update()){
                        $data['ACCSURKET']=$model->ACCSURKET;
                        }
                        else{
                        $model = Suratketerangan::model()->findByPk($idsurket);
                        $data['ACCSURKET']=$model->ACCSURKET;
                        }
                        echo json_encode($data);
                        Yii::app()->end();
                        }


    public function actionAjaxSubkor() {

        $acc = $_POST['ACCSUBKOR'];
        $idsurket = $_POST['IDSURKET'];

        $model = Suratketerangan::model()->findByPk($idsurket);
        $model->ACCSUBKOR = $acc;
        $model->TANGGALACCSUBKOR = date('Y-m-d H:i:s');
        if ($model->update()) {
            $data['ACCSUBKOR'] = $model->ACCSUBKOR;
        } else {
            $model = Suratketerangan::model()->findByPk($idsurket);
            $data['ACCSUBKOR'] = $model->ACCSUBKOR;
        }
        echo json_encode($data);
        Yii::app()->end();
    }

    public function actionAjaxDekanat()
    {

        $acc = $_POST['ACCDEKANAT'];
        $idsurket = $_POST['IDSURKET'];

        $model = Suratketerangan::model()->findByPk($idsurket);
        $model->ACCDEKANAT = $acc;
        $model->TANGGALACCDEKANAT = date('Y-m-d H:i:s');
        if ($model->update()) {
            $data['ACCDEKANAT'] = $model->ACCDEKANAT;
        } else {
            $model = Suratketerangan::model()->findByPk($idsurket);
            $data['ACCDEKANAT'] = $model->ACCDEKANAT;
        }
        echo json_encode($data);
        Yii::app()->end();
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
        
         public function actionIsisuratketerangan($id)
	{
		$this->render('isisuratketerangan',array(
			'model'=>$this->loadModel($id),
		));
	} 

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Suratketerangan;
                $model->IDJENISSURAT=14;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
                //membuat default tahun akademik dan semester berdasarkan konfigurasi tabel currentsemester
                $qry = "SELECT DISTINCT IDTASEMESTER from currentsemester WHERE STATUSTASEMESTER ='A'";
                $listtasmtr=Yii::app()->db->createCommand($qry)->queryScalar();
                $model->IDTASEMESTER=$listtasmtr;
                //batas

		if(isset($_POST['Suratketerangan']))
		{
			$model->attributes=$_POST['Suratketerangan'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->IDSURKET));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}
        
        public function actionCreatebymhs()
	{
		$model=new Suratketerangan;
                $model->IDJENISSURAT=14;
                $model->NIM=Yii::app()->user->getNama();
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
                //membuat default tahun akademik dan semester berdasarkan konfigurasi tabel currentsemester
                $qry = "SELECT DISTINCT IDTASEMESTER from currentsemester WHERE STATUSTASEMESTER ='A'";
                $listtasmtr=Yii::app()->db->createCommand($qry)->queryScalar();
                $model->IDTASEMESTER=$listtasmtr;
                //batas

		if(isset($_POST['Suratketerangan']))
		{
			$model->attributes=$_POST['Suratketerangan'];
			if($model->save())
				$this->redirect(array('isisuratketerangan','id'=>$model->IDSURKET));
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

		if(isset($_POST['Suratketerangan']))
		{
			$model->attributes=$_POST['Suratketerangan'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->IDSURKET));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}
        
        public function actionUpdatebymhs($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Suratketerangan']))
		{
			$model->attributes=$_POST['Suratketerangan'];
			if($model->save())
				$this->redirect(array('isisuratketerangan','id'=>$model->IDSURKET));
		}

		$this->render('updatebymhs',array(
			'model'=>$model,
		));
	}
        
         public function actionUpdatenosuratketerangan($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Suratketerangan']))
		{
			$model->attributes=$_POST['Suratketerangan'];
			if($model->save())
				$this->redirect(array('admin','id'=>$model->IDSURKET));
		}

		$this->render('updatenosuratketerangan',array(
			'model'=>$model,
		));
	}
        
         public function actionUpdatenosuratketeranganoperator($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Suratketerangan']))
		{
			$model->attributes=$_POST['Suratketerangan'];
			if($model->save())
				$this->redirect(array('detailsuratketerangan/admin','id'=>$model->IDSURKET));
		}

		$this->render('updatenosuratketerangan',array(
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
		$dataProvider=new CActiveDataProvider('Suratketerangan');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}
        

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Suratketerangan('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Suratketerangan']))
			$model->attributes=$_GET['Suratketerangan'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

    public function actionSubkor()
    {
        $model=new Suratketerangan('search');
        $model->unsetAttributes();  // clear any default values
        if(isset($_GET['Suratketerangan']))
            $model->attributes=$_GET['Suratketerangan'];

        $this->render('subkor',array(
            'model'=>$model,
        ));
    }

    public function actionDekanat()
    {
        $model=new Suratketerangan('search');
        $model->unsetAttributes();  // clear any default values
        if(isset($_GET['Suratketerangan']))
            $model->attributes=$_GET['Suratketerangan'];

        $this->render('dekanat',array(
            'model'=>$model,
        ));
    }
        
         public function actionPermintaansuratketerangan()
	{
		$model=new Suratketerangan('search');
		$user =Yii::app()->user->getNama();
		$model->unsetAttributes();  // clear any default values
                
                $model->dbCriteria->condition='t.NIM=:NIM';
                $model->dbCriteria->params=array(':NIM'=>$user);
		if(isset($_GET['Suratketerangan']))
			$model->attributes=$_GET['Suratketerangan'];

		$this->render('permintaansuratketerangan',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Suratketerangan the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Suratketerangan::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Suratketerangan $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='suratketerangan-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
