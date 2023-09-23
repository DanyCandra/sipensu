<?php
/* @var $this MatakuliahsurisuController */
/* @var $model Matakuliahsurisu */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'IDMATAKULIAHISU'); ?>
		<?php echo $form->textField($model,'IDMATAKULIAHISU'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NAMAMATAKULIAHISU'); ?>
		<?php echo $form->textField($model,'NAMAMATAKULIAHISU',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NIP'); ?>
		<?php echo $form->textField($model,'NIP',array('size'=>18,'maxlength'=>18)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IDTTD'); ?>
		<?php echo $form->textField($model,'IDTTD'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->