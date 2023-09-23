<?php
/* @var $this PemberiparafController */
/* @var $model Pemberiparaf */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'IDTTD'); ?>
		<?php echo $form->textField($model,'IDTTD'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NIPTTD'); ?>
		<?php echo $form->textField($model,'NIPTTD',array('size'=>18,'maxlength'=>18)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NAMATTD'); ?>
		<?php echo $form->textField($model,'NAMATTD',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'JABATANSTRUKTURALTTD'); ?>
		<?php echo $form->textField($model,'JABATANSTRUKTURALTTD',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->