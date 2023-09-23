<?php
/* @var $this TembusansurtugnsController */
/* @var $model Tembusansurtugns */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'IDTEMBUSAN'); ?>
		<?php echo $form->textField($model,'IDTEMBUSAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IDSURTUGNS'); ?>
		<?php echo $form->textField($model,'IDSURTUGNS'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TUJUANTEMBUSAN'); ?>
		<?php echo $form->textField($model,'TUJUANTEMBUSAN',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TGLSUBMITTEMBUSAN'); ?>
		<?php echo $form->textField($model,'TGLSUBMITTEMBUSAN'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->