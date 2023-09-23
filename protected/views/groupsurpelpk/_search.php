<?php
/* @var $this GroupsurpelpkController */
/* @var $model Groupsurpelpk */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'IDGROUPSURPELPK'); ?>
		<?php echo $form->textField($model,'IDGROUPSURPELPK'); ?>
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
		<?php echo $form->label($model,'NOURUTSURPELPK'); ?>
		<?php echo $form->textField($model,'NOURUTSURPELPK'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->