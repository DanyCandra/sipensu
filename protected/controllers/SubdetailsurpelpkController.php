<?php

class SubdetailsurpelpkController extends Controller
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
				'actions'=>array('create','update','view','admin','delete','updatenosurpelpk','updatenosurpelpkoperator','deletebyowner','AjaxTtd','notifikasi','preview'
                ,'AjaxDekanat','dekanat','subkor'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','AjaxTtd','AjaxSubkor','AjaxDekanat','dekanat','subkor','notifikasi','preview'),
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
        
        $sql = "select count(IDSUBDETAILSURPELPK) as newrecord from subdetailsurpelpk where PREVIEW='N' ";
        $data = Yii::app()->db->createCommand($sql)->queryAll();

        $this->renderPartial('notifikasi', array('data' => $data,));
    }
    public function actionPreview() {
        $user=Yii::app()->user->IDGROUPS;
        
        $sql="select * from subdetailsurpelpk WHERE IDGROUPS='$user'";
        $data = Yii::app()->db->createCommand($sql)->queryAll();

        $this->renderPartial('preview', array('data' => $data,));
    }  
          public function actionAjaxTtd(){
                        
                        $acc = $_POST['ACCSURPELPK'];
                        $idsurpelpk = $_POST['IDSUBDETAILSURPELPK'];
                      
 
                        $model = Subdetailsurpelpk::model()->findByPk($idsurpelpk);
                        $model->ACCSURPELPK = $acc;
                        $model->TANGGALACCSURPELPK = date('Y-m-d H:i:s');
                        if($model->update()){
                        $data['ACCSURPELPK']=$model->ACCSURPELPK;
                        }
                        else{
                        $model = Subdetailsurpelpk::model()->findByPk($idsurpelpk);
                        $data['ACCSURPELPK']=$model->ACCSURPELPK;
                        }
                        echo json_encode($data);
                        Yii::app()->end();
                        }

    public function actionAjaxSubkor() {

        $acc = $_POST['ACCSUBKOR'];
        $idsurpelpk = $_POST['IDSUBDETAILSURPELPK'];

        $model = Subdetailsurpelpk::model()->findByPk($idsurpelpk);
        $model->ACCSUBKOR = $acc;
        $model->TANGGALACCSUBKOR = date('Y-m-d H:i:s');
        if ($model->update()) {
            $data['ACCSUBKOR'] = $model->ACCSUBKOR;
        } else {
            $model = Subdetailsurpelpk::model()->findByPk($idsurpelpk);
            $data['ACCSUBKOR'] = $model->ACCSUBKOR;
        }
        echo json_encode($data);
        Yii::app()->end();
    }

    public function actionAjaxDekanat() {

        $acc = $_POST['ACCDEKANAT'];
        $idsurpelpk = $_POST['IDSUBDETAILSURPELPK'];

        $model = Subdetailsurpelpk::model()->findByPk($idsurpelpk);
        $model->ACCDEKANAT = $acc;
        $model->TANGGALACCDEKANAT = date('Y-m-d H:i:s');
        if ($model->update()) {
            $data['ACCDEKANAT'] = $model->ACCDEKANAT;
        } else {
            $model = Subdetailsurpelpk::model()->findByPk($idsurpelpk);
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
		$model=new Subdetailsurpelpk;
                $model->IDJENISSURAT=10;
                 $IDPK=Yii::app()->request->getParam('IDPK','');
                 if($IDPK!=''){
                    $model->IDPK=$IDPK;
                }

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Subdetailsurpelpk']))
		{
			$model->attributes=$_POST['Subdetailsurpelpk'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->IDSUBDETAILSURPELPK));
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

		if(isset($_POST['Subdetailsurpelpk']))
		{
			$model->attributes=$_POST['Subdetailsurpelpk'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->IDSUBDETAILSURPELPK));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}
        
        public function actionUpdatenosurpelpk($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Subdetailsurpelpk']))
		{
			$model->attributes=$_POST['Subdetailsurpelpk'];
			if($model->save())
				$this->redirect(array('admin','id'=>$model->IDSUBDETAILSURPELPK));
		}

		$this->render('updatenosurpelpk',array(
			'model'=>$model,
		));
	}
         public function actionUpdatenosurpelpkoperator($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Subdetailsurpelpk']))
		{
			$model->attributes=$_POST['Subdetailsurpelpk'];
			if($model->save())
				$this->redirect(array('detailsurpelpk/admin','id'=>$model->IDSUBDETAILSURPELPK));
		}

		$this->render('updatenosurpelpk',array(
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

		$this->redirect(array('suraktifcuti/admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Subdetailsurpelpk');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Subdetailsurpelpk('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Subdetailsurpelpk']))
			$model->attributes=$_GET['Subdetailsurpelpk'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

    public function actionSubkor()
    {
        $model=new Subdetailsurpelpk('search');
        $model->unsetAttributes();  // clear any default values
        if(isset($_GET['Subdetailsurpelpk']))
            $model->attributes=$_GET['Subdetailsurpelpk'];

        $this->render('subkor',array(
            'model'=>$model,
        ));
    }

    public function actionDekanat()
    {
        $model=new Subdetailsurpelpk('search');
        $model->unsetAttributes();  // clear any default values
        if(isset($_GET['Subdetailsurpelpk']))
            $model->attributes=$_GET['Subdetailsurpelpk'];

        $this->render('dekanat',array(
            'model'=>$model,
        ));
    }
       
        
        public function actionPermintaansurat()
	{
		$model=new Subdetailsurpelpk('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Subdetailsurpelpk']))
			$model->attributes=$_GET['Subdetailsurpelpk'];

		$this->render('permintaansurat',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Subdetailsurpelpk the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Subdetailsurpelpk::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Subdetailsurpelpk $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='subdetailsurpelpk-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
