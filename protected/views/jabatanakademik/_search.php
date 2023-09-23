<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'IDJABATANAKADEMIK'); ?>
		<?php echo $form->textField($model,'IDJABATANAKADEMIK'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NAMAJABATANAKADEMIK'); ?>
		<?php echo $form->textField($model,'NAMAJABATANAKADEMIK',array('size'=>60,'maxlength'=>80)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->