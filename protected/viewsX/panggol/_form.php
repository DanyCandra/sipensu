<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'panggol-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'form-horizontal','role'=>'form'),
)); ?>
        <div class="form-body">
	<?php echo $form->errorSummary($model,'<b>Silakan perbaiki kesalahan berikut :</b> ','',array('class'=>'alert alert-danger')); ?>
            
        <!--<div class="form-group">
		<?php //echo $form->labelEx($model,'IDPANGGOL',array('class'=>'col-md-3 control-label')); ?>
		<div class="col-md-1">
		<?php //echo $form->textField($model,'IDPANGGOL',array('size'=>10,'maxlength'=>10,'class'=>'form-control','disabled'=>true)); ?>
		<?php //echo $form->error($model,'IDPANGGOL'); ?>
                </div>
	</div>     -->
	<div class="form-group">
		<?php echo $form->labelEx($model,'PANGKAT',array('class'=>'col-md-3 control-label')); ?>
		<div class="col-md-4">
		<?php echo $form->textField($model,'PANGKAT',array('size'=>50,'maxlength'=>50,'class'=>'form-control'));  ?>
		<?php echo $form->error($model,'PANGKAT'); ?>
		</div>
	</div>
        <div class="form-group">
		<?php echo $form->labelEx($model,'GOL',array('class'=>'col-md-3 control-label')); ?>
		<div class="col-md-2">
		<?php echo $form->textField($model,'GOL',array('size'=>5,'maxlength'=>5,'class'=>'form-control'));  ?>
		<?php echo $form->error($model,'GOL'); ?>
		</div>
	</div>

	</div>
	
	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Update',array('class'=>'btn green')); ?>
		<?php if(!$model->isNewRecord) echo CHtml::link('Manage Pangkat & Golongan',array('panggol/admin','IDPANGGOL'=>$model->IDPANGGOL),array('class'=>'btn yellow')) ?>
		</div>
	</div>
	

<?php $this->endWidget(); ?>