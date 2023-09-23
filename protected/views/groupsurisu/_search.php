<?php
/* @var $this GroupsurisuController */
/* @var $model Groupsurisu */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'IDGROUPSURISU'); ?>
		<?php echo $form->textField($model,'IDGROUPSURISU'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IDISU'); ?>
		<?php echo $form->textField($model,'IDISU'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NIM'); ?>
		<?php echo $form->textField($model,'NIM',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NOURUTGROUPSURISU'); ?>
		<?php echo $form->textField($model,'NOURUTGROUPSURISU'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->