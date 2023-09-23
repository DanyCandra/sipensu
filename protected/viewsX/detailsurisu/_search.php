<?php
/* @var $this DetailsurisuController */
/* @var $model Detailsurisu */
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
		<?php echo $form->dropDownList($model,'IDISU',
		   CHtml::listData(Surisu::model()->findAll(), 'IDISU','NOISU'),array('empty'=>'----Pilih----','class'=>'form-control select2me')); ?>
             
		</div>
	</div>
         <!--<div class="form-group">
		<?php //echo $form->labelEx($model,'Instansi',array('class'=>'col-md-3 control-label')); ?>
		<div class="col-md-6">
		<?php //echo $form->dropDownList($model,'IDDETAILSURISU',
		   //CHtml::listData(Detailsurisu::model()->findAll(array('order'=>'IDDETAILSURISU')), 'IDDETAILSURISU','iDISU.INSTANSIISU'),array('empty'=>'----Pilih Instansi----','class'=>'form-control select2me')); ?>
             
		</div>
	</div>
        
	<div class="row">
		<?php //echo $form->label($model,'IDDETAILSURISU'); ?>
		<?php //echo $form->textField($model,'IDDETAILSURISU'); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'IDISU'); ?>
		<?php //echo $form->textField($model,'IDISU'); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'IDGROUPS'); ?>
		<?php //echo $form->textField($model,'IDGROUPS',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	
	<div class="row">
		<?php //echo $form->label($model,'TGLSUBMITDETAILSURISU'); ?>
		<?php //echo $form->textField($model,'TGLSUBMITDETAILSURISU'); ?>
	</div>-->

	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton('Search'); ?>
                </div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->