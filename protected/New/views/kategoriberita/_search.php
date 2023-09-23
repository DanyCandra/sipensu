<?php
/* @var $this KategoriberitaController */
/* @var $model Kategoriberita */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'IDKATEGORI'); ?>
		<?php echo $form->textField($model,'IDKATEGORI'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NAMAKATEGORI'); ?>
		<?php echo $form->textField($model,'NAMAKATEGORI',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->