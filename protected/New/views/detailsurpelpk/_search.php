<?php
/* @var $this DetailsurpelpkController */
/* @var $model Detailsurpelpk */
/* @var $form CActiveForm */
?>

<div class="form-body">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
         'htmlOptions'=>array('class'=>'form-horizontal','role'=>'form'),
)); ?>
       <!--<div class="form-group">
		<?php //echo $form->labelEx($model,'Instansi Praktik Kerja',array('class'=>'col-md-3 control-label')); ?>
		<div class="col-md-5">
		<?php //echo $form->dropDownList($model,'IDSUBDETAILSURPELPK',
		   //CHtml::listData(Subdetailsurpelpk::model()->findAll(array('order'=>'IDSUBDETAILSURPELPK')), 'IDSUBDETAILSURPELPK','iDPK.INSTANSIPK'),array('empty'=>'----Pilih Instansi----','class'=>'form-control select2me')); ?>
             
		</div>
	</div>-->
        <div class="form-group">
		<?php echo $form->labelEx($model,'Nomor Surat',array('class'=>'col-md-3 control-label')); ?>
		<div class="col-md-2">
		<?php echo $form->dropDownList($model,'IDSUBDETAILSURPELPK',
		   CHtml::listData(Subdetailsurpelpk::model()->findAll(), 'IDSUBDETAILSURPELPK','NOSURPELPK'),array('empty'=>'----Pilih----','class'=>'form-control select2me')); ?>
             
		</div>
	</div>
	
	
        <!--<div class="form-group">
		<?php //echo $form->labelEx($model,'Instansi Praktik Kerja',array('class'=>'col-md-3 control-label')); ?>
		<div class="col-md-4">
		<?php //echo $form->dropDownList($model,'IDSUBDETAILSURPELPK',
		   //CHtml::listData(Detailsurpelpk::model()->findAll(array('order'=>'IDSUBDETAILSURPELPK')), 'IDSUBDETAILSURPELPK','iDSUBDETAILSURPELPK.iDPK.INSTANSIPK'),array('empty'=>'----Pilih Instansi PK----','class'=>'form-control select2me')); ?>
             
		</div>
	</div>
   
        <div class="form-group">
		<?php //echo $form->labelEx($model,'Tgl. Mulai Praktik Kerja',array('class'=>'col-md-3 control-label')); ?>
		<div class="col-md-4">
		<?php //echo $form->dropDownList($model,'IDDETAILSURPELPK',
		  // CHtml::listData(Detailsurpelpk::model()->findAll(array('order'=>'IDDETAILSURPELPK')), 'IDDETAILSURPELPK','iDSUBDETAILSURPELPK.TGLMULAISURPELPK'),array('empty'=>'----Pilih Mulai PK----','class'=>'form-control select2me')); ?>
             
		</div>
	</div>
	
	<div class="form-group">
		<?php //echo $form->labelEx($model,'Tgl. Akhir Praktik Kerja',array('class'=>'col-md-3 control-label')); ?>
		<div class="col-md-4">
		<?php //echo $form->dropDownList($model,'IDDETAILSURPELPK',
		  // CHtml::listData(Detailsurpelpk::model()->findAll(array('order'=>'IDDETAILSURPELPK')), 'IDDETAILSURPELPK','iDSUBDETAILSURPELPK.TGLAKHIRSURPELPK'),array('empty'=>'----Pilih Akhir PK----','class'=>'form-control select2me')); ?>
             
		</div>
	</div>
        
	<!--<div class="row">
		<?php //echo $form->label($model,'IDDETAILSURPELPK'); ?>
		<?php //echo $form->textField($model,'IDDETAILSURPELPK'); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'IDSUBDETAILSURPELPK'); ?>
		<?php //echo $form->textField($model,'IDSUBDETAILSURPELPK'); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'IDGROUPS'); ?>
		<?php //echo $form->textField($model,'IDGROUPS',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'ACCDETAILSURPELPK'); ?>
		<?php //echo $form->textField($model,'ACCDETAILSURPELPK',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'TGLSUBMITDETAILSURPELPK'); ?>
		<?php //echo $form->textField($model,'TGLSUBMITDETAILSURPELPK'); ?>
	</div>-->

	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton('Search'); ?>
                </div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->