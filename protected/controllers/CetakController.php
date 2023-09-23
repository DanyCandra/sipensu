<?php

class CetakController extends Controller
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
			
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('surtugpm','surtugpenyusunanpm','surtugns','surtugpn','surtugpnbyinstansi','surpermk','fakultas','surketnobeswa','surmag','surisu','surijinpn','surperpk','subdetailsurpelpk','surtugmonitoring','surijincuti','surpermohonanijincuti','suraktifcuti','surpermohonanaktifcuti','groupinstansisurtugpn'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','view','surpermohonanijincuti','surpermohonanaktifcuti','suratketerangan'),
				'users'=>array('admin'),
			),
			array('allow',  // deny all users
                                'actions'=>array('surpermohonanijincuti','surpermohonanaktifcuti','suratketerangan'),
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionSurtugpm($id)
	{
            $model=Surtugpm::model()->findByPk($id);
		$this->renderPartial('surtugpm',array('model'=>$model));
	}
        public function actionSurtugpenyusunanpm($id)
	{
            $model=Surtugpm::model()->findByPk($id);
		$this->renderPartial('surtugpenyusunanpm',array('model'=>$model));
	}
        
        public function actionSurtugns($id)
	{
            $model=Surtugns::model()->findByPk($id);
		$this->renderPartial('surtugns',array('model'=>$model));
	}
        
        public function actionSurtugpn($id)
	{
            $model=Surtugpn::model()->findByPk($id);
		$this->renderPartial('surtugpn',array('model'=>$model));
	}
        
         public function actionGroupinstansisurtugpn()
	{
            //$model= Groupinstansisurtugpn::model()->findByPk($id);
		$this->renderPartial('groupinstansisurtugpn');
	}
        
        public function actionSurtugpnbyinstansi($id)
	{
            $model=Surtugpn::model()->findByPk($id);
		$this->renderPartial('surtugpnbyinstansi',array('model'=>$model));
	}
        
         public function actionSurpermk($id)
	{
            $model=Surpermk::model()->findByPk($id);
		$this->renderPartial('surpermk',array('model'=>$model));
	}
        public function actionSurijinpn($id)
	{
            $model=Surpermk::model()->findByPk($id);
		$this->renderPartial('surijinpn',array('model'=>$model));
	}
        
         public function actionSurketnobeswa($id)
	{
            $model=  Surketnobeswa::model()->findByPk($id);
		$this->renderPartial('surketnobeswa',array('model'=>$model));
	}
        public function actionSurmag($id)
	{
            $model= Surmag::model()->findByPk($id);
		$this->renderPartial('surmag',array('model'=>$model));
	}
        public function actionSurperpk($id)
	{
            $model= Surperpk::model()->findByPk($id);
		$this->renderPartial('surperpk',array('model'=>$model));
	}
        public function actionSubdetailsurpelpk($id)
	{
            $model= Subdetailsurpelpk::model()->findByPk($id);
		$this->renderPartial('subdetailsurpelpk',array('model'=>$model));
	}
        public function actionSurtugmonitoring($id)
	{
            $model= Surtugmonitoring::model()->findByPk($id);
		$this->renderPartial('surtugmonitoring',array('model'=>$model));
	}
        
        public function actionSurisu($id)
	{
            $model= Surisu::model()->findByPk($id);
		$this->renderPartial('surisu',array('model'=>$model));
	}
        public function actionFakultas($id)
	{
            $model=Fakultas::model()->findByPk($id);
		$this->renderPartial('fakultas',array('model'=>$model));
	}
        public function actionSurijincuti($id)
	{
            $model= Surijincuti::model()->findByPk($id);
		$this->renderPartial('surijincuti',array('model'=>$model));
	}
         public function actionSurpermohonanijincuti($id)
	{
            $model= Surijincuti::model()->findByPk($id);
		$this->renderPartial('surpermohonanijincuti',array('model'=>$model));
	}
        public function actionSuraktifcuti($id)
	{
            $model= Suraktifcuti::model()->findByPk($id);
		$this->renderPartial('suraktifcuti',array('model'=>$model));
	}
         public function actionSurpermohonanaktifcuti($id)
	{
            $model= Suraktifcuti::model()->findByPk($id);
		$this->renderPartial('surpermohonanaktifcuti',array('model'=>$model));
	}
	public function actionSuratketerangan($id)
	{
            $model=  Suratketerangan::model()->findByPk($id);
		$this->renderPartial('suratketerangan',array('model'=>$model));
	}

	
}
