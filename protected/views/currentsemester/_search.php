<?php
/* @var $this CurrentsemesterController */
/* @var $model Currentsemester */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'IDSEMESTER'); ?>
		<?php echo $form->textField($model,'IDSEMESTER'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SEMESTER'); ?>
		<?php echo $form->textField($model,'SEMESTER',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->