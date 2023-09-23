<?php
/* @var $this GroupsurmagController */
/* @var $model Groupsurmag */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'IDGROUPSURMAG'); ?>
		<?php echo $form->textField($model,'IDGROUPSURMAG'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IDSURMAG'); ?>
		<?php echo $form->textField($model,'IDSURMAG'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NIM'); ?>
		<?php echo $form->textField($model,'NIM',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NOURUTGROUPSURMAG'); ?>
		<?php echo $form->textField($model,'NOURUTGROUPSURMAG'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->