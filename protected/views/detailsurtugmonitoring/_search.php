<?php
/* @var $this DetailsurtugmonitoringController */
/* @var $model Detailsurtugmonitoring */
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
		<?php echo $form->dropDownList($model,'IDSURTUGMONITORING',
		   CHtml::listData(Surtugmonitoring::model()->findAll(), 'IDSURTUGMONITORING','NOSURTUGMONITORING'),array('empty'=>'----Pilih----','class'=>'form-control select2me')); ?>
             
		</div>
	</div>
       

	<!--<div class="row">
		<?php //echo $form->label($model,'IDDETAILSURTUGMONITORING'); ?>
		<?php //echo $form->textField($model,'IDDETAILSURTUGMONITORING'); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'IDSURTUGMONITORING'); ?>
		<?php //echo $form->textField($model,'IDSURTUGMONITORING'); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'IDGROUPS'); ?>
		<?php //echo $form->textField($model,'IDGROUPS',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	
	<div class="row">
		<?php //echo $form->label($model,'TGLSUBMITSURTUGMONITORING'); ?>
		<?php //echo $form->textField($model,'TGLSUBMITSURTUGMONITORING'); ?>
	</div>-->

	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton('Search'); ?>
                </div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->