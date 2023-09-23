<?php
/* @var $this JenjangController */
/* @var $model Jenjang */
/* @var $form CActiveForm */
?>


<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'jenjang-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
        'htmlOptions'=>array('class'=>'form-horizontal','role'=>'form'),
)); ?>

	<div class="form-body">
	<?php echo $form->errorSummary($model,'<b>Silakan perbaiki kesalahan berikut :</b> ','',array('class'=>'alert alert-danger')); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'IDJENJANG',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-1">
		<?php echo $form->textField($model,'IDJENJANG',array('size'=>1,'maxlength'=>11,'class'=>'form-control','disabled'=>true)); ?>
		<?php echo $form->error($model,'IDJENJANG'); ?>
                </div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'NAMAJENJANG',array('class'=>'col-md-3 control-label')); ?>
             <div class="col-md-2">
		<?php echo $form->textField($model,'NAMAJENJANG',array('size'=>20,'maxlength'=>20,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'NAMAJENJANG'); ?>
             </div>
	</div>
        </div>
	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Update',array('class'=>'btn green')); ?>
		<?php if(!$model->isNewRecord) echo CHtml::link('Manage Jenjang',array('jenjang/admin','IDJENJANG'=>$model->IDJENJANG),array('class'=>'btn yellow')) ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

<!-- form -->