<?php
/* @var $this DetailpermintaansurtugpnController */
/* @var $model Detailpermintaansurtugpn */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'IDDETAILPERMINTAANSURTUGPN'); ?>
		<?php echo $form->textField($model,'IDDETAILPERMINTAANSURTUGPN'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IDPN'); ?>
		<?php echo $form->textField($model,'IDPN'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IDGROUPPN'); ?>
		<?php echo $form->textField($model,'IDGROUPPN'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IDGROUPINSTANSIPN'); ?>
		<?php echo $form->textField($model,'IDGROUPINSTANSIPN'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->