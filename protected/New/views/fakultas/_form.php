<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'fakultas-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'form-horizontal','role'=>'form'),
)); ?>
        <div class="form-body">
	<?php echo $form->errorSummary($model,'<b>Silakan perbaiki kesalahan berikut :</b> ','',array('class'=>'alert alert-danger')); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'IDFAKULTAS',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-2">
		<?php echo $form->textField($model,'IDFAKULTAS',array('size'=>8,'maxlength'=>8,'class'=>'form-control','disabled'=>true)); ?>
		<?php echo $form->error($model,'IDFAKULTAS'); ?>
                </div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'FAKULTAS',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-3">
		<?php echo $form->textField($model,'FAKULTAS',array('size'=>60,'maxlength'=>200,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'FAKULTAS'); ?>
                </div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'ALAMATFAKULTAS',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-5">
		<?php echo $form->textField($model,'ALAMATFAKULTAS',array('size'=>60,'maxlength'=>500,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'ALAMATFAKULTAS'); ?>
                </div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'WEBSITE',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-3">
		<?php echo $form->textField($model,'WEBSITE',array('size'=>20,'maxlength'=>20,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'WEBSITE'); ?>
                </div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'EMAIL',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-3">
		<?php echo $form->textField($model,'EMAIL',array('size'=>20,'maxlength'=>20,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'EMAIL'); ?>
                </div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'TLPFAKULTAS',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-3">
		<?php echo $form->textField($model,'TLPFAKULTAS',array('size'=>20,'maxlength'=>20,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'TLPFAKULTAS'); ?>
                </div>
	</div>
        <div class="form-group">
		<?php echo $form->labelEx($model,'UNIVERSITAS',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-5">
		<?php echo $form->textField($model,'UNIVERSITAS',array('size'=>50,'maxlength'=>50,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'UNIVERSITAS'); ?>
                </div>
	</div>

</div>
	
	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Update',array('class'=>'btn btn-primary btn-next waves-effect waves-float waves-light')); ?>
		<?php if(!$model->isNewRecord) echo CHtml::link('Manage Fakultas',array('fakultas/admin','IDFAKULTAS'=>$model->IDFAKULTAS),array('class'=>'btn btn-warning btn-next waves-effect waves-float waves-light')) ?>
		</div>
	</div>
	

<?php $this->endWidget(); ?>