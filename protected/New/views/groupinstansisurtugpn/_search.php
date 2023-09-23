<?php
/* @var $this GroupinstansisurtugpnController */
/* @var $model Groupinstansisurtugpn */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'IDGROUPINSTANSIPN'); ?>
		<?php echo $form->textField($model,'IDGROUPINSTANSIPN'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'INSTANSIPN'); ?>
		<?php echo $form->textField($model,'INSTANSIPN',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ALAMATINSTANSIPN'); ?>
		<?php echo $form->textField($model,'ALAMATINSTANSIPN',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'KOTAINSTANSIPN'); ?>
		<?php echo $form->textField($model,'KOTAINSTANSIPN',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NOURUTINSTANSIPN'); ?>
		<?php echo $form->textField($model,'NOURUTINSTANSIPN'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IDPN'); ?>
		<?php echo $form->textField($model,'IDPN'); ?>
	</div>

	

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->