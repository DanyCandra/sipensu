<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'IDGROUPPN'); ?>
		<?php echo $form->textField($model,'IDGROUPPN'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IDPANGGOL'); ?>
		<?php echo $form->textField($model,'IDPANGGOL'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IDJABATANAKADEMIK'); ?>
		<?php echo $form->textField($model,'IDJABATANAKADEMIK'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NIP'); ?>
		<?php echo $form->textField($model,'NIP',array('size'=>18,'maxlength'=>18)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IDPN'); ?>
		<?php echo $form->textField($model,'IDPN'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NOURUTGROUPPN'); ?>
		<?php echo $form->textField($model,'NOURUTGROUPPN'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'KETERANGANPN'); ?>
		<?php echo $form->textField($model,'KETERANGANPN',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->