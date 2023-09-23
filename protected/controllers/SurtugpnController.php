<?php

class SurtugpnController extends Controller
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
				'actions'=>array('index','view','prosedurpn','create','deletebyowner','permintaansurat','isisurat'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','createdosen','update','view','admin','delete','deletebyowner','AjaxTtd','updatenosurtugpn','updatenosurtugpnoperator','Ajaxsubkor','Ajaxdekanat'
                ,'subkor','dekanat'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','deletebyowner','AjaxTtd','Ajaxsubkor','Ajaxdekanat'),
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
                        
                        $acc = $_POST['ACCSURTUGPN'];
                        $idpn = $_POST['IDPN'];

 
                        $model = Surtugpn::model()->findByPk($idpn);
                        $model->ACCSURTUGPN = $acc;
                        $model->TANGGALACCSURTUGPN = date('Y-m-d H:i:s');
                        if($model->update()){
                        $data['ACCSURTUGPN']=$model->ACCSURTUGPN;
                        }
                        else{
                        $model = Surtugpn::model()->findByPk($idpn);
                        $data['ACCSURTUGPN']=$model->ACCSURTUGPN;
                        }
                        echo json_encode($data);
                        Yii::app()->end();
                        }

    public function actionAjaxsubkor(){

        $acc = $_POST['ACCSUBKOR'];
        $idpn = $_POST['IDPN'];


        $model = Surtugpn::model()->findByPk($idpn);
        $model->ACCSUBKOR = $acc;
        $model->TANGGALACCSUBKOR = date('Y-m-d H:i:s');
        if($model->update()){
            $data['ACCSUBKOR']=$model->ACCSUBKOR;
        }
        else{
            $model = Surtugpn::model()->findByPk($idpn);
            $data['ACCSUBKOR']=$model->ACCSUBKOR;
        }
        echo json_encode($data);
        Yii::app()->end();
    }

    public function actionAjaxdekanat(){

        $acc = $_POST['ACCDEKANAT'];
        $idpn = $_POST['IDPN'];


        $model = Surtugpn::model()->findByPk($idpn);
        $model->ACCDEKANAT = $acc;
        $model->TANGGALACCDEKANAT = date('Y-m-d H:i:s');
        if($model->update()){
            $data['ACCDEKANAT']=$model->ACCDEKANAT;
        }
        else{
            $model = Surtugpn::model()->findByPk($idpn);
            $data['ACCDEKANAT']=$model->ACCDEKANAT;
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
    public function actionCreatedosen()
    {
        $model=new Surtugpn;
        $model->IDJENISSURAT=2;
        //$model->NIP=Yii::app()->user->getNama();

        if(isset($_POST['Surtugpn']))
        {
            $model->attributes=$_POST['Surtugpn'];
            if($model->save())
                $this->redirect(array('view','id'=>$model->IDPN));
        }

        $this->render('createdosen',array(
            'model'=>$model,
        ));
    }

	public function actionCreate()
		{
		$model=new Surtugpn;
                //generate kode jenis surat permintaan
                $model->IDJENISSURAT=2;
                
                
                
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Surtugpn']))
		{
			$model->attributes=$_POST['Surtugpn'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->IDPN));
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

		if(isset($_POST['Surtugpn']))
		{
			$model->attributes=$_POST['Surtugpn'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->IDPN));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}
        public function actionUpdatenosurtugpn($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Surtugpn']))
		{
			$model->attributes=$_POST['Surtugpn'];
			if($model->save())
				$this->redirect(array('admin','id'=>$model->IDPN));
		}

		$this->render('updatenosurtugpn',array(
			'model'=>$model,
		));
	}
        public function actionUpdatenosurtugpnoperator($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Surtugpn']))
		{
			$model->attributes=$_POST['Surtugpn'];
			if($model->save())
				$this->redirect(array('detailsurtugpn/admin','id'=>$model->IDPN));
		}

		$this->render('updatenosurtugpn',array(
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
        
         public function actionDeletebyowner($id)
	{
		$this->loadModel($id)->delete();

		$this->redirect(array('surtugpn/admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Surtugpn');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Surtugpn('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Surtugpn']))
			$model->attributes=$_GET['Surtugpn'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

    public function actionSubkor()
    {
        $model=new Surtugpn('search');
        $model->unsetAttributes();  // clear any default values
        if(isset($_GET['Surtugpn']))
            $model->attributes=$_GET['Surtugpn'];

        $this->render('subkor',array(
            'model'=>$model,
        ));
    }

    public function actionDekanat()
    {
        $model=new Surtugpn('search');
        $model->unsetAttributes();  // clear any default values
        if(isset($_GET['Surtugpn']))
            $model->attributes=$_GET['Surtugpn'];

        $this->render('dekanat',array(
            'model'=>$model,
        ));
    }
        
       
        
        public function actionPermintaansurat()
	{
		$model=new Surtugpn('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Surtugpn']))
			$model->attributes=$_GET['Surtugpn'];

		$this->render('permintaansurat',array(
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
		$model=Surtugpn::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='surtugpn-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
