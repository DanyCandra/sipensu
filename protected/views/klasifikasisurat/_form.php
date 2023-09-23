<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'klasifikasisurat-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'form-horizontal','role'=>'form'),
)); ?>
        <div class="form-body">
	<?php echo $form->errorSummary($model,'<b>Silakan perbaiki kesalahan berikut :</b> ','',array('class'=>'alert alert-danger')); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'IDKLASIFIKASI',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-3">
		<?php echo $form->textField($model,'IDKLASIFIKASI',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'IDKLASIFIKASI'); ?>
                </div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'NAMAKLASIFIKASI',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-4">
		<?php echo $form->textField($model,'NAMAKLASIFIKASI',array('size'=>60,'maxlength'=>200,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'NAMAKLASIFIKASI'); ?>
                </div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'KETERANGANKLASIFIKASISURAT',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-6">
		<?php echo $form->textField($model,'KETERANGANKLASIFIKASISURAT',array('size'=>60,'maxlength'=>150,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'KETERANGANKLASIFIKASISURAT'); ?>
                </div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'NOURUTKLASIFIKASISURAT',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-1">
		<?php echo $form->textField($model,'NOURUTKLASIFIKASISURAT',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'NOURUTKLASIFIKASISURAT'); ?>
                </div>
	</div>
</div>
	
	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Update',array('class'=>'btn green')); ?>
		<?php if(!$model->isNewRecord) echo CHtml::link('Manage Klasifikasi Surat Tugas',array('klasifikasisurat/admin','IDKLASIFIKASI'=>$model->IDKLASIFIKASI),array('class'=>'btn yellow')) ?>
		</div>
	</div>
	

<?php $this->endWidget(); ?>
