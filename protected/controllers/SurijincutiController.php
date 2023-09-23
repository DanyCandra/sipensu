<?php

class SurijincutiController extends Controller
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
				'actions'=>array('index','view','carimhs','permintaansurat','isisurat','createbymahasiswa','deletebyowner','updatebymahasiswa'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','admin','view','deletebyowner','updatenosurijincuti','updatenosurijincutioperator','createbymahasiswa','updatebymahasiswa',
                    'permintaansurat','isisurat','AjaxAcc','updategenerateaktif','notifikasi','preview','AjaxDekanat','dekanat','subkor'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','','deletebyowner','AjaxAcc','AjaxSubkor','Ajaxdekanat','notifikasi','preview'),
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
        
        $sql = "select count(IDIJINCUTI) as newrecord from surijincuti where PREVIEW='N' ";
        $data = Yii::app()->db->createCommand($sql)->queryAll();

        $this->renderPartial('notifikasi', array('data' => $data,));
    }
    public function actionPreview() {
        $user=Yii::app()->user->IDGROUPS;
        
        $sql="select * from surijincuti WHERE IDGROUPS='$user'";
        $data = Yii::app()->db->createCommand($sql)->queryAll();

        $this->renderPartial('preview', array('data' => $data,));
    }   
       public function actionAjaxAcc(){
                        
                        $acc = $_POST['ACCSURIJINCUTI'];
                        $idijincuti = $_POST['IDIJINCUTI'];
                   
 
                        $model = Surijincuti::model()->findByPk( $idijincuti);
                        $model->ACCSURIJINCUTI = $acc;
                        $model->TANGGALACCSURIJINCUTI = date('Y-m-d H:i:s');
                        if($model->update()){
                        $data['ACCSURIJINCUTI']=$model->ACCSURIJINCUTI;
                        }
                        else{
                        $model = Surijincuti::model()->findByPk( $idijincuti);
                        $data['ACCSURIJINCUTI']=$model->ACCSURIJINCUTI;
                        }
                        echo json_encode($data);
                        Yii::app()->end();
                        }

    public function actionAjaxSubkor() {

        $acc = $_POST['ACCSUBKOR'];
        $idijincuti = $_POST['IDIJINCUTI'];

        $model = Surijincuti::model()->findByPk($idijincuti);
        $model->ACCSUBKOR = $acc;
        $model->TANGGALACCSUBKOR = date('Y-m-d H:i:s');
        if ($model->update()) {
            $data['ACCSUBKOR'] = $model->ACCSUBKOR;
        } else {
            $model = Surijincuti::model()->findByPk($idijincuti);
            $data['ACCSUBKOR'] = $model->ACCSUBKOR;
        }
        echo json_encode($data);
        Yii::app()->end();
    }

    public function actionAjaxDekanat() {

        $acc = $_POST['ACCDEKANAT'];
        $idijincuti = $_POST['IDIJINCUTI'];

        $model = Surijincuti::model()->findByPk($idijincuti);
        $model->ACCDEKANAT = $acc;
        $model->TANGGALACCDEKANAT = date('Y-m-d H:i:s');
        if ($model->update()) {
            $data['ACCDEKANAT'] = $model->ACCDEKANAT;
        } else {
            $model = Surijincuti::model()->findByPk($idijincuti);
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
        
        public function actionSurpermohonanijincuti($id)
	{
            $model= Surijincuti::model()->findByPk($id);
		$this->renderPartial('surpermohonanijincuti',array('model'=>$model));
	}


	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Surijincuti;
               
                //generate kode jenis surat permintaan
                $model->IDJENISSURAT=12;
                $model->STATUSTERKINI='Cuti';
				$model->TGLSUBMITIJINCUTI=date('Y-m-d H:i:s');

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
                
               
                //membuat default tahun akademik dan semester berdasarkan konfigurasi tabel currentsemester
                $qry = "SELECT DISTINCT IDTASEMESTER from currentsemester WHERE STATUSTASEMESTER ='A'";
                $listtasmtr=Yii::app()->db->createCommand($qry)->queryScalar();
                $model->IDTASEMESTER=$listtasmtr;
                //batas

		if(isset($_POST['Surijincuti']))
		{
			$model->attributes=$_POST['Surijincuti'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->IDIJINCUTI));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}
        
        public function actionCreatebymahasiswa()
	{
		$model=new Surijincuti;
                //generate kode jenis surat permintaan
                $model->IDJENISSURAT=12;
                $model->STATUSTERKINI='Cuti';
                $model->NIM=Yii::app()->user->getNama();
				$model->TGLSUBMITIJINCUTI=date('Y-m-d H:i:s');

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
                  
                //membuat default tahun akademik dan semester berdasarkan konfigurasi tabel currentsemester
                $qry = "SELECT DISTINCT IDTASEMESTER from currentsemester WHERE STATUSTASEMESTER ='A'";
                $listtasmtr=Yii::app()->db->createCommand($qry)->queryScalar();
                $model->IDTASEMESTER=$listtasmtr;
                //batas

		if(isset($_POST['Surijincuti']))
		{
			$model->attributes=$_POST['Surijincuti'];
			if($model->save())
				$this->redirect(array('isisurat','id'=>$model->IDIJINCUTI));
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

		if(isset($_POST['Surijincuti']))
		{
			$model->attributes=$_POST['Surijincuti'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->IDIJINCUTI));
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

		if(isset($_POST['Surijincuti']))
		{
			$model->attributes=$_POST['Surijincuti'];
			if($model->save())
				$this->redirect(array('isisurat','id'=>$model->IDIJINCUTI));
		}

		$this->render('updatebymhs',array(
			'model'=>$model,
		));
	}
        
        public function actionUpdatenosurijincuti($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Surijincuti']))
		{
			$model->attributes=$_POST['Surijincuti'];
			if($model->save())
				$this->redirect(array('admin','id'=>$model->IDIJINCUTI));
		}

		$this->render('updatenosurijincuti',array(
			'model'=>$model,
		));
	}
        public function actionUpdatenosurijincutioperator($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Surijincuti']))
		{
			$model->attributes=$_POST['Surijincuti'];
			if($model->save())
				$this->redirect(array('detailsurijincuti/admin','id'=>$model->IDIJINCUTI));
		}

		$this->render('updatenosurijincuti',array(
			'model'=>$model,
		));
	}
        
        public function actionUpdategenerateaktif($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Surijincuti']))
		{
			$model->attributes=$_POST['Surijincuti'];
			if($model->save())
				$this->redirect(array('admin','id'=>$model->IDIJINCUTI));
		}

		$this->render('updategenerateaktif',array(
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

		$this->redirect(array('surijincuti/admin'));
	}
	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Surijincuti');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}
        
        public function actionPermintaansurat()
	{
		$model=new Surijincuti('search');
		$user =Yii::app()->user->getNama();
		$model->unsetAttributes();  // clear any default values
                
                $model->dbCriteria->condition='t.NIM=:NIM';
                $model->dbCriteria->params=array(':NIM'=>$user);
		if(isset($_GET['Surijincuti']))
			$model->attributes=$_GET['Surijincuti'];

		$this->render('permintaansurat',array(
			'model'=>$model,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Surijincuti('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Surijincuti']))
			$model->attributes=$_GET['Surijincuti'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

    public function actionSubkor()
    {
        $model=new Surijincuti('search');
        $model->unsetAttributes();  // clear any default values
        if(isset($_GET['Surijincuti']))
            $model->attributes=$_GET['Surijincuti'];

        $this->render('subkor',array(
            'model'=>$model,
        ));
    }

    public function actionDekant()
    {
        $model=new Surijincuti('search');
        $model->unsetAttributes();  // clear any default values
        if(isset($_GET['Surijincuti']))
            $model->attributes=$_GET['Surijincuti'];

        $this->render('dekanat',array(
            'model'=>$model,
        ));
    }
        
        //coba autocomplite
        public function actionCarimhs()
        {
            $term=isset ($_GET['term'])?$_GET['term']:'0';
            $row_set=array();
            $query="select NIM as id,  CONCAT(NIM,' - ',NAMA) as value from mahasiswa where "
                    ." NIM like '%$term%' or NAMA like '%$term%' limit 10";
            if ($term){
                $hasil=Yii::app()->db->createCommand($query)->queryAll();
                foreach ($hasil as $row){
                    $row ['value']=  htmlentities(stripslashes($row['value']));
                    $row['id']=$row['id'];
                    $row_set[]=$row;//buil an array
                   
                }
            }
            echo json_encode($row_set);
            
        }
        
       

    /**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Surijincuti the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Surijincuti::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Surijincuti $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='surijincuti-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
