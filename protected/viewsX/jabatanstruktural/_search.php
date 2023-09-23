<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'IDJABATANSTRUKTURAL'); ?>
		<?php echo $form->textField($model,'IDJABATANSTRUKTURAL',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NIP'); ?>
		<?php echo $form->textField($model,'NIP',array('size'=>18,'maxlength'=>18)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NAMAJABATANSTRUKTURAL'); ?>
		<?php echo $form->textField($model,'NAMAJABATANSTRUKTURAL',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TAHUN'); ?>
		<?php echo $form->textField($model,'TAHUN',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NOURUTJABATANSTRUKTURAL'); ?>
		<?php echo $form->textField($model,'NOURUTJABATANSTRUKTURAL'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->