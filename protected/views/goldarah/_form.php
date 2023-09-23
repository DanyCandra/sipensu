<?php
/* @var $this GoldarahController */
/* @var $model Goldarah */
/* @var $form CActiveForm */
?>



<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'goldarah-form',
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
		<?php echo $form->labelEx($model,'IDGOLDAR',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-2">
		<?php echo $form->textField($model,'IDGOLDAR',array('size'=>1,'maxlength'=>1,'class'=>'form-control','readonly'=>true)); ?>
		<?php echo $form->error($model,'IDGOLDAR'); ?>
                </div>
	</div>
        <div class="form-group">
		<?php echo $form->labelEx($model,'NAMAGOLDAR',array('class'=>'col-md-3 control-label')); ?>
                 <div class="col-md-2">
		<?php echo $form->textField($model,'NAMAGOLDAR',array('size'=>15,'maxlength'=>15,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'NAMAGOLDAR'); ?>
                 </div>
	</div>
        </div>
	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Update',array('class'=>'btn green')); ?>
		<?php if(!$model->isNewRecord) echo CHtml::link('Manage Golongan Darah',array('goldarah/admin','IDGOLDAR'=>$model->IDGOLDAR),array('class'=>'btn yellow')) ?>
		</div>
	</div>
<?php $this->endWidget(); ?>
<!-- form -->