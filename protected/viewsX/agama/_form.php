<?php
/* @var $this AgamaController */
/* @var $model Agama */
/* @var $form CActiveForm */
?>


<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'agama-form',
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
                <?php echo $form->labelEx($model,'IDAGAMA',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-2">
		<?php echo $form->textField($model,'IDAGAMA',array('size'=>8,'maxlength'=>8,'class'=>'form-control','disabled'=>true)); ?>
		<?php echo $form->error($model,'IDAGAMA'); ?>
                </div>
	</div>
        <div class="form-group">
                <?php echo $form->labelEx($model,'NAMAAGAMA',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-3">
		<?php echo $form->textField($model,'NAMAAGAMA',array('size'=>15,'maxlength'=>15,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'NAMAAGAMA'); ?>
                </div>
	</div>
        </div>
	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Update',array('class'=>'btn green')); ?>
		<?php if(!$model->isNewRecord) echo CHtml::link('Manage Agama',array('agama/admin','IDAGAMA'=>$model->IDAGAMA),array('class'=>'btn yellow')) ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

<!-- form -->