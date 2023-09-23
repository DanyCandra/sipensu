<?php
/* @var $this GroupsurperpkController */
/* @var $model Groupsurperpk */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'IDGROUPSURPERPK'); ?>
		<?php echo $form->textField($model,'IDGROUPSURPERPK'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IDPK'); ?>
		<?php echo $form->textField($model,'IDPK'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NIM'); ?>
		<?php echo $form->textField($model,'NIM',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NOURUTSURPERPK'); ?>
		<?php echo $form->textField($model,'NOURUTSURPERPK'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->