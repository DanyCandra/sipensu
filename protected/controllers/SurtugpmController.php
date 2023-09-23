<?php

class SurtugpmController extends Controller
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
                'actions'=>array('index','view','create','deletebyowner','permintaansurat','isisurat'),
                'users'=>array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions'=>array('create','createdosen','delete','update','view','deletebyowner','admin','updatenosurtugpm'
                ,'dekanat','subkor','updatetglsurtugpm','updatenosurtugpmoperator','AjaxTtd', 'Ajaxsubkor','Ajaxdekanat'
                ,'toggle','switch','qtoggle'),
                'users'=>array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions'=>array('admin','editable','delete','deletebyowner','AjaxTtd','Ajaxsubkor','Ajaxdekanat','toggle','switch','qtoggle'),
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
    public function actionEditable()
    {
        if(Yii::app()->request->isAjaxRequest)
        {
            Yii::import('booster.widgets.TbEditableSaver');
            $es=new TbEditableSaver('Surtugpm');
            $es->update();
        }
        else
            throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
    }

    public function actionS(){
        return array(
            'toggle'=>'ext.jtogglecolumn.ToggleAction',
            'switch'=>'ext.jtogglecolumn.SwitchAction', // only if you need it
            'qtoggle'=>'ext.jtogglecolumn.QtoggleAction', // only if you need it
        );
    }
    public function actionAjaxTtd(){

        $acc = $_POST['ACCSURTUGPM'];
        $idpm = $_POST['IDPM'];


        $model = Surtugpm::model()->findByPk($idpm);
        $model->ACCSURTUGPM = $acc;
        $model->TANGGALACCSURTUGPM =date('Y-m-d H:i:s');
        if($model->update()){
            $data['ACCSURTUGPM']=$model->ACCSURTUGPM;
        }
        else{
            $model = Surtugpm::model()->findByPk($idpm);
            $data['ACCSURTUGPM']=$model->ACCSURTUGPM;
        }
        echo json_encode($data);
        Yii::app()->end();
    }

    public function actionAjaxsubkor(){

        $acc = $_POST['ACCSUBKOR'];
        $idpm = $_POST['IDPM'];


        $model = Surtugpm::model()->findByPk($idpm);
        $model->ACCSUBKOR = $acc;
        $model->TANGGALACCSUBKOR = date('Y-m-d H:i:s');
        if($model->update()){
            $data['ACCSUBKOR']=$model->ACCSUBKOR;
        }
        else{
            $model = Surtugpm::model()->findByPk($idpm);
            $data['ACCSUBKOR']=$model->ACCSUBKOR;
        }
        echo json_encode($data);
        Yii::app()->end();
    }

    public function actionAjaxdekanat(){

        $acc = $_POST['ACCDEKANAT'];
        $idpm = $_POST['IDPM'];


        $model = Surtugpm::model()->findByPk($idpm);
        $model->ACCDEKANAT = $acc;
        $model->TANGGALACCDEKANAT = date('Y-m-d H:i:s');
        if($model->update()){
            $data['ACCDEKANAT']=$model->ACCDEKANAT;
        }
        else{
            $model = Surtugpm::model()->findByPk($idpm);
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

       $model=new Surtugpm;
       $model->IDJENISSURAT=1;
       $model->NIP=Yii::app()->user->getNama();

        if(isset($_POST['Surtugpm']))
        {
            $model->attributes=$_POST['Surtugpm'];
            if($model->save())
                $this->redirect(array('view','id'=>$model->IDPM));
        }

        $this->render('createdosen',array(
            'model'=>$model,
        ));
    }

    public function actionCreate()
    {
        $model=new Surtugpm;
        $model->IDJENISSURAT=1;
		$model->TGLSUBMITPM= date('Y-m-d H:i:s');
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if(isset($_POST['Surtugpm']))
        {
            $model->attributes=$_POST['Surtugpm'];
            if($model->save())
                $this->redirect(array('view','id'=>$model->IDPM));
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

        if(isset($_POST['Surtugpm']))
        {
            $model->attributes=$_POST['Surtugpm'];
            if($model->save())
                $this->redirect(array('view','id'=>$model->IDPM));
        }

        $this->render('update',array(
            'model'=>$model,
        ));
    }
    public function actionUpdatenosurtugpm($id)
    {
        $model=$this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if(isset($_POST['Surtugpm']))
        {
            $model->attributes=$_POST['Surtugpm'];
            if($model->save())
                $this->redirect(array('admin','id'=>$model->IDPM));
        }

        $this->render('updatenosurtugpm',array(
            'model'=>$model,
        ));
    }



    public function actionUpdatenosurtugpmoperator($id)
    {
        $model=$this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if(isset($_POST['Surtugpm']))
        {
            $model->attributes=$_POST['Surtugpm'];
            if($model->save())
                $this->redirect(array('detailsurtugpm/admin','id'=>$model->IDPM));
        }

        $this->render('updatenosurtugpm',array(
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

        $this->redirect(array('surtugpm/admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex()
    {
        $dataProvider=new CActiveDataProvider('Surtugpm');
        $this->render('index',array(
            'dataProvider'=>$dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin()
    {
        $model=new Surtugpm('search');
        $model->unsetAttributes();  // clear any default values
        if(isset($_GET['Surtugpm']))
            $model->attributes=$_GET['Surtugpm'];

        $this->render('admin',array(
            'model'=>$model,
        ));
    }

    public function actionSubkor()
    {
        $model=new Surtugpm('search');
        $model->unsetAttributes();  // clear any default values
        if(isset($_GET['Surtugpm']))
            $model->attributes=$_GET['Surtugpm'];

        $this->render('subkor',array(
            'model'=>$model,
        ));
    }

    public function actionDekanat()
    {
        $model=new Surtugpm('search');
        $model->unsetAttributes();  // clear any default values
        if(isset($_GET['Surtugpm']))
            $model->attributes=$_GET['Surtugpm'];

        $this->render('dekanat',array(
            'model'=>$model,
        ));
    }


    public function actionPermintaansurat()
    {
        $model=new Surtugpm('search');
        $model->unsetAttributes();  // clear any default values
        if(isset($_GET['Surtugpm']))
            $model->attributes=$_GET['Surtugpm'];

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
        $model=Surtugpm::model()->findByPk($id);
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
        if(isset($_POST['ajax']) && $_POST['ajax']==='surtugpm-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
}
