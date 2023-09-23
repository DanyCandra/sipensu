<?php
/* @var $this DetailsurmagController */
/* @var $model Detailsurmag */
/* @var $form CActiveForm */
?>
<div class="form-body">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
        'htmlOptions'=>array('class'=>'form-horizontal','role'=>'form'),
)); ?>
    
         <div class="form-group">
		<?php echo $form->labelEx($model,'Nomor Surat',array('class'=>'col-md-3 control-label')); ?>
		<div class="col-md-2">
		<?php echo $form->dropDownList($model,'IDSURMAG',
		   CHtml::listData(Surmag::model()->findAll(), 'IDSURMAG','NOSURMAG'),array('empty'=>'----Pilih----','class'=>'form-control select2me')); ?>
             
		</div>
	</div>
       <!-- <div class="form-group">
		<?php //echo $form->labelEx($model,'Instansi',array('class'=>'col-md-3 control-label')); ?>
		<div class="col-md-5">
		<?php //echo $form->dropDownList($model,'IDDETAILSURMAG',
		   //CHtml::listData(Detailsurmag::model()->findAll(array('order'=>'IDDETAILSURMAG')), 'IDDETAILSURMAG','iDSURMAG.INSTANSISURMAG'),array('empty'=>'----Pilih Instansi----','class'=>'form-control select2me')); ?>
             
		</div>
	</div>
       
        
	<div class="row">
		<?php //echo $form->label($model,'IDDETAILSURMAG'); ?>
		<?php //echo $form->textField($model,'IDDETAILSURMAG'); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'IDSURMAG'); ?>
		<?php //echo $form->textField($model,'IDSURMAG'); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'IDGROUPS'); ?>
		<?php //echo $form->textField($model,'IDGROUPS',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	
	<div class="row">
		<?php //echo $form->label($model,'TGLSUBMITDETAILSURMAG'); ?>
		<?php //echo $form->textField($model,'TGLSUBMITDETAILSURMAG'); ?>
	</div>-->

	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton('Search'); ?>
                </div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->