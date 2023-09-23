<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'IDPANGGOL'); ?>
		<?php echo $form->textField($model,'IDPANGGOL'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PANGKAT'); ?>
		<?php echo $form->textField($model,'PANGKAT',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'GOL'); ?>
		<?php echo $form->textField($model,'GOL',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->