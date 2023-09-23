<?php
/* @var $this JurusanController */
/* @var $model Jurusan */
/* @var $form CActiveForm */
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'jurusan-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'form-horizontal','role'=>'form'),
)); ?>

	<div class="form-body">

	<?php echo $form->errorSummary($model,'<b>Silakan perbaiki kesalahan berikut :</b> ','',array('class'=>'alert alert-danger')); ?>


	<div class="form-group">
		<?php echo $form->labelEx($model,'IDJURUSAN',array('class'=>'col-md-3 control-label')); ?>
               <!-- <button class="btn red" tabindex="-1" type="button">Kode Jurusan otomatis</button>-->
		<div class="col-md-1">
		<?php echo $form->textField($model,'IDJURUSAN',array('size'=>10,'maxlength'=>10,'class'=>'form-control','readonly'=>true));  ?>
		<?php echo $form->error($model,'IDJURUSAN'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'NAMAJURUSAN',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-5">
		<?php echo $form->textField($model,'NAMAJURUSAN',array('size'=>150,'maxlength'=>150,'class'=>'form-control'));  ?>
		<?php echo $form->error($model,'NAMAJURUSAN'); ?>
		</div>
	</div>
	</div>
	
	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Update',array('class'=>'btn green')); ?>
		<?php if(!$model->isNewRecord) echo CHtml::link('Manage Jurusan',array('jurusan/admin','IDJURUSAN'=>$model->IDJURUSAN),array('class'=>'btn yellow')) ?>
		</div>
	</div>
	

<?php $this->endWidget(); ?>

