<?php
/* @var $this SurperpkController */
/* @var $model Surperpk */
/* @var $form CActiveForm */
?>

<div class="form-body">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
        'htmlOptions'=>array('class'=>'form-horizontal','role'=>'form'),
)); ?>
         <div class="form-group">
		<?php echo $form->labelEx($model,'INSTANSIPK',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-4">
		<?php echo $form->textField($model,'INSTANSIPK',array('size'=>60,'maxlength'=>200,'style'=>"text-transform:capitalize",'class'=>'form-control')); ?>
		<?php echo $form->error($model,'INSTANSIPK'); ?>
                </div>
	</div>
	<!--<div class="row">
		<?php echo $form->label($model,'IDPK'); ?>
		<?php echo $form->textField($model,'IDPK'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IDJENISSURAT'); ?>
		<?php echo $form->textField($model,'IDJENISSURAT'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NOSURATPK'); ?>
		<?php echo $form->textField($model,'NOSURATPK',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'INSTANSIPK'); ?>
		<?php echo $form->textField($model,'INSTANSIPK',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ALAMATINSTANSIPK'); ?>
		<?php echo $form->textField($model,'ALAMATINSTANSIPK',array('size'=>60,'maxlength'=>400)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'KOTAINSTANSIPK'); ?>
		<?php echo $form->textField($model,'KOTAINSTANSIPK',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'KETERANGANPK'); ?>
		<?php echo $form->textArea($model,'KETERANGANPK',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TGLSUBMITPK'); ?>
		<?php echo $form->textField($model,'TGLSUBMITPK'); ?>
	</div>-->

	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton('Search'); ?>
                </div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->