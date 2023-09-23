<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'IDKLASIFIKASI'); ?>
		<?php echo $form->textField($model,'IDKLASIFIKASI',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NAMAKLASIFIKASI'); ?>
		<?php echo $form->textField($model,'NAMAKLASIFIKASI',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'KETERANGANKLASIFIKASISURAT'); ?>
		<?php echo $form->textField($model,'KETERANGANKLASIFIKASISURAT',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NOURUTKLASIFIKASISURAT'); ?>
		<?php echo $form->textField($model,'NOURUTKLASIFIKASISURAT'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->