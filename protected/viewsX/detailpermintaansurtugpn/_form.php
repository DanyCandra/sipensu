<?php
/* @var $this DetailpermintaansurtugpnController */
/* @var $model Detailpermintaansurtugpn */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'detailpermintaansurtugpn-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'IDPN',array('class'=>'col-md-3 control-label')); ?>
		<?php echo $form->textField($model,'IDPN'); ?>
		<?php echo $form->error($model,'IDPN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IDGROUPPN',array('class'=>'col-md-3 control-label')); ?>
		<?php echo $form->textField($model,'IDGROUPPN'); ?>
		<?php echo $form->error($model,'IDGROUPPN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IDGROUPINSTANSIPN',array('class'=>'col-md-3 control-label')); ?>
		<?php echo $form->textField($model,'IDGROUPINSTANSIPN'); ?>
		<?php echo $form->error($model,'IDGROUPINSTANSIPN'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->