<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'jabatanakademik-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'form-horizontal','role'=>'form'),
)); ?>
        <div class="form-body">
	<?php echo $form->errorSummary($model,'<b>Silakan perbaiki kesalahan berikut :</b> ','',array('class'=>'alert alert-danger')); ?>

        <div class="form-group">
		<?php echo $form->labelEx($model,'IDJABATANAKADEMIK',array('class'=>'col-md-3 control-label')); ?>
		<div class="col-md-1">
		<?php echo $form->textField($model,'IDJABATANAKADEMIK',array('size'=>10,'maxlength'=>10,'class'=>'form-control','readonly'=>true)); ?>
		<?php echo $form->error($model,'IDJABATANAKADEMIK'); ?>
                </div>
	</div>    
	<div class="form-group">
		<?php echo $form->labelEx($model,'NAMAJABATANAKADEMIK',array('class'=>'col-md-3 control-label')); ?>
		<div class="col-md-3">
		<?php echo $form->textField($model,'NAMAJABATANAKADEMIK',array('size'=>60,'maxlength'=>80,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'NAMAJABATANAKADEMIK'); ?>
                </div>
	</div>
	</div>
	
	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Update',array('class'=>'btn green')); ?>
		<?php if(!$model->isNewRecord) echo CHtml::link('Manage Jabatan Akademik',array('jabatanakademik/admin','IDJABATANAKADEMIK'=>$model->IDJABATANAKADEMIK),array('class'=>'btn yellow')) ?>
		</div>
	</div>
	

<?php $this->endWidget(); ?>