<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'groups-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'form-horizontal','role'=>'form'),
)); ?>
        <div class="form-body">
	<?php echo $form->errorSummary($model,'<b>Silakan perbaiki kesalahan berikut :</b> ','',array('class'=>'alert alert-danger')); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'IDGROUPS',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-2">
		<?php echo $form->textField($model,'IDGROUPS',array('size'=>1,'maxlength'=>1,'class'=>'form-control','disabled'=>true)); ?>
		<?php echo $form->error($model,'IDGROUPS'); ?>
                </div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'NAMAGROUPS',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-3">
		<?php echo $form->textField($model,'NAMAGROUPS',array('size'=>25,'maxlength'=>25,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'NAMAGROUPS'); ?>
                </div>
	</div>
         
        <div class="form-group">
		<?php echo $form->labelEx($model,'DIVISI',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-3">
		<?php echo $form->textField($model,'DIVISI',array('size'=>100,'maxlength'=>100,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'DIVISI'); ?>
                </div>
	</div>

</div>
	
	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Update',array('class'=>'btn green')); ?>
		<?php if(!$model->isNewRecord) echo CHtml::link('Manage Groups User',array('groups/admin','IDGROUPS'=>$model->IDGROUPS),array('class'=>'btn yellow')) ?>
		</div>
	</div>
	

<?php $this->endWidget(); ?>
