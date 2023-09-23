<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pengguna-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'form-horizontal','role'=>'form'),
)); ?>
        <div class="form-body">
	<?php echo $form->errorSummary($model,'<b>Silakan perbaiki kesalahan berikut :</b> ','',array('class'=>'alert alert-danger')); ?>

	<!--<div class="form-group">
		<?php //echo $form->labelEx($model,'IDPENGGUNA',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-2">
		<?php //echo $form->textField($model,'IDPENGGUNA',array('size'=>11,'maxlength'=>11,'class'=>'form-control','disabled'=>true)); ?>
		<?php //echo $form->error($model,'IDPENGGUNA'); ?>
                </div>
	</div>-->
        <div class="form-group">
		<?php echo $form->labelEx($model,'IDGROUPS',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-2">
		<?php echo $form->dropDownList($model,'IDGROUPS',
		CHtml::listData(Groups::model()->findAll(array('order'=>'IDGROUPS')), 'IDGROUPS', 'NAMAGROUPS'),array('empty'=>'--Pilih Group--','class'=>'form-control')); ?>
		<?php echo $form->error($model,'IDGROUPS'); ?>
		</div>
	</div>
	<div class="form-group">
		<?php echo $form->labelEx($model,'USERNAME',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-3">
		<?php echo $form->textField($model,'USERNAME',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'USERNAME'); ?>
                </div>
	</div>
        

	<div class="form-group">
		<?php echo $form->labelEx($model,'PASS',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-3">
		<?php echo $form->passwordField($model,'PASS',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'PASS'); ?>
                </div>
	</div>


</div>
	
	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Update',array('class'=>'btn green')); ?>
		<?php if(!$model->isNewRecord) echo CHtml::link('Manage User',array('pengguna/admin','IDPENGGUNA'=>$model->IDPENGGUNA),array('class'=>'btn yellow')) ?>
		</div>
	</div>
	

<?php $this->endWidget(); ?>