<?php

class SurtugmonitoringController extends Controller
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
				'actions'=>array('index','view','permintaansurat','isisurat'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','admin','delete','view','updatenosurtugmonitoring',
                    'updatenosurtugmonitoringoperator','deletebyowner','AjaxTtd','notifikasi','preview'
                ,'AjaxDekanat','dekanat','subkor'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','AjaxTtd','Ajaxsubkor','Ajaxdekanat','notifikasi','preview'),
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
        
        $sql = "select count(IDSURTUGMONITORING) as newrecord from surtugmonitoring where PREVIEW='N' ";
        $data = Yii::app()->db->createCommand($sql)->queryAll();

        $this->renderPartial('notifikasi', array('data' => $data,));
    }
    public function actionPreview() {
        $user=Yii::app()->user->IDGROUPS;
        
        $sql="select * from surtugmonitoring WHERE IDGROUPS='$user'";
        $data = Yii::app()->db->createCommand($sql)->queryAll();

        $this->renderPartial('preview', array('data' => $data,));
    }  
        
         public function actionAjaxTtd(){
                        
                        $acc = $_POST['ACCSURTUGMONITORING'];
                        $idsurmonitor = $_POST['IDSURTUGMONITORING'];
                    
 
                        $model = Surtugmonitoring::model()->findByPk($idsurmonitor);
                        $model->ACCSURTUGMONITORING = $acc;
                        $model->TANGGALACCSURTUGMONITORING = date('Y-m-d H:i:s');
                        if($model->update()){
                        $data['ACCSURTUGMONITORING']=$model->ACCSURTUGMONITORING;
                        }
                        else{
                        $model = Surtugmonitoring::model()->findByPk($idsurmonitor);
                        $data['ACCSURTUGMONITORING']=$model->ACCSURTUGMONITORING;
                        }
                        echo json_encode($data);
                        Yii::app()->end();
                        }

    public function actionAjaxSubkor() {

        $acc = $_POST['ACCSUBKOR'];
        $idsurmonitor = $_POST['IDSURTUGMONITORING'];

        $model = Surtugmonitoring::model()->findByPk($idsurmonitor);
        $model->ACCSUBKOR = $acc;
        $model->TANGGALACCSUBKOR = date('Y-m-d H:i:s');
        if ($model->update()) {
            $data['ACCSUBKOR'] = $model->ACCSUBKOR;
        } else {
            $model = Surtugmonitoring::model()->findByPk($idsurmonitor);
            $data['ACCSUBKOR'] = $model->ACCSUBKOR;
        }
        echo json_encode($data);
        Yii::app()->end();
    }

    public function actionAjaxDekanat() {

        $acc = $_POST['ACCDEKANAT'];
        $idsurmonitor = $_POST['IDSURTUGMONITORING'];

        $model = Surtugmonitoring::model()->findByPk($idsurmonitor);
        $model->ACCDEKANAT = $acc;
        $model->TANGGALACCDEKANAT = date('Y-m-d H:i:s');
        if ($model->update()) {
            $data['ACCDEKANAT'] = $model->ACCDEKANAT;
        } else {
            $model = Surtugmonitoring::model()->findByPk($idsurmonitor);
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
		$model=new Surtugmonitoring;
                $model->IDJENISSURAT=11;
                 $IDSUBDETAILSURPELPK=Yii::app()->request->getParam('IDSUBDETAILSURPELPK','');
                 if($IDSUBDETAILSURPELPK!=''){
                    $model->IDSUBDETAILSURPELPK=$IDSUBDETAILSURPELPK;
                }

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Surtugmonitoring']))
		{
			$model->attributes=$_POST['Surtugmonitoring'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->IDSURTUGMONITORING));
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

		if(isset($_POST['Surtugmonitoring']))
		{
			$model->attributes=$_POST['Surtugmonitoring'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->IDSURTUGMONITORING));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}
        
        public function actionUpdatesurtugmonitoring($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Surtugmonitoring']))
		{
			$model->attributes=$_POST['Surtugmonitoring'];
			if($model->save())
				$this->redirect(array('admin','id'=>$model->IDSURTUGMONITORING));
		}

		$this->render('updatenosurtugmonitoring',array(
			'model'=>$model,
		));
	}
        
         public function actionUpdatenosurtugmonitoringoperator($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Surtugmonitoring']))
		{
			$model->attributes=$_POST['Surtugmonitoring'];
			if($model->save())
				$this->redirect(array('detailsurtugmonitoring/admin','id'=>$model->IDSUBDETAILSURPELPK));
		}

		$this->render('updatenosurtugmonitoring',array(
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

		$this->redirect(array('surtugmonitoring/admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Surtugmonitoring');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Surtugmonitoring('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Surtugmonitoring']))
			$model->attributes=$_GET['Surtugmonitoring'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

    public function actionADekanat()
    {
        $model=new Surtugmonitoring('search');
        $model->unsetAttributes();  // clear any default values
        if(isset($_GET['Surtugmonitoring']))
            $model->attributes=$_GET['Surtugmonitoring'];

        $this->render('dekanat',array(
            'model'=>$model,
        ));
    }

    public function actionSubkor()
    {
        $model=new Surtugmonitoring('search');
        $model->unsetAttributes();  // clear any default values
        if(isset($_GET['Surtugmonitoring']))
            $model->attributes=$_GET['Surtugmonitoring'];

        $this->render('subkor',array(
            'model'=>$model,
        ));
    }
               
        public function actionPermintaansurat()
	{
		$model=new Surtugmonitoring('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Surtugmonitoring']))
			$model->attributes=$_GET['Surtugmonitoring'];

		$this->render('permintaansurat',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Surtugmonitoring the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Surtugmonitoring::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Surtugmonitoring $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='surtugmonitoring-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
