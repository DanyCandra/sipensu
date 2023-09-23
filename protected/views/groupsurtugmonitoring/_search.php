<?php
/* @var $this GroupsurtugmonitoringController */
/* @var $model Groupsurtugmonitoring */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'IDGROUPSURTUGMONITORING'); ?>
		<?php echo $form->textField($model,'IDGROUPSURTUGMONITORING'); ?>
	</div>

	

	<div class="row">
		<?php echo $form->label($model,'NIM'); ?>
		<?php echo $form->textField($model,'NIM',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NOURUTSURTUGMONITORING'); ?>
		<?php echo $form->textField($model,'NOURUTSURTUGMONITORING'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->