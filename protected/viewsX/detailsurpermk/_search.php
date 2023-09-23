<?php
/* @var $this DetailsurpermkController */
/* @var $model Detailsurpermk */
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
		<?php echo $form->dropDownList($model,'IDMK',
		   CHtml::listData(Surpermk::model()->findAll(), 'IDMK','NOSURATMK'),array('empty'=>'----Pilih----','class'=>'form-control select2me')); ?>
             
		</div>
	</div>
        <!-- <div class="form-group">
		<?php //echo $form->labelEx($model,'Nama Pemohon',array('class'=>'col-md-3 control-label')); ?>
		<div class="col-md-4">
		<?php //echo $form->dropDownList($model,'IDDETAILSURPERMK',
		   //CHtml::listData(Detailsurpermk::model()->findAll(array('order'=>'IDDETAILSURPERMK')), 'IDDETAILSURPERMK','iDMK.nIM.NAMA'),array('empty'=>'----Pilih Nama----','class'=>'form-control select2me')); ?>
             
		</div>
	</div>
        
	<div class="row">
		<?php //echo $form->label($model,'IDDETAILSURPERMK'); ?>
		<?php //echo $form->textField($model,'IDDETAILSURPERMK'); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'IDMK'); ?>
		<?php //echo $form->textField($model,'IDMK'); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'IDGROUPS'); ?>
		<?php //echo $form->textField($model,'IDGROUPS',array('size'=>1,'maxlength'=>1)); ?>
	</div>


	<div class="row">
		<?php //echo $form->label($model,'KETERANGANSURPERMK'); ?>
		<?php //echo $form->textArea($model,'KETERANGANSURPERMK',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'TGLSUBMITDETAILSURPERMK'); ?>
		<?php //echo $form->textField($model,'TGLSUBMITDETAILSURPERMK'); ?>
	</div>-->

	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton('Search'); ?>
                </div>
	</div>


<?php $this->endWidget(); ?>

</div><!-- search-form -->