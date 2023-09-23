<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pemberiparaf-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'form-horizontal','role'=>'form'),
)); ?>
        <div class="form-body">
	<?php echo $form->errorSummary($model,'<b>Silakan perbaiki kesalahan berikut :</b> ','',array('class'=>'alert alert-danger')); ?>
          
	<div class="form-group">
		<?php echo $form->labelEx($model,'NIPTTD',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-4">
		<?php echo $form->textField($model,'NIPTTD',array('size'=>18,'maxlength'=>18,'class'=>'form-control'));  ?>
		<?php echo $form->error($model,'NIPTTD'); ?>
                </div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Nama',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-5">
		<?php echo $form->textField($model,'NAMATTD',array('size'=>60,'maxlength'=>100,'class'=>'form-control'));  ?>
		<?php echo $form->error($model,'NAMATTD'); ?>
                </div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'JABATANSTRUKTURALTTD',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-5">
		<?php echo $form->textField($model,'JABATANSTRUKTURALTTD',array('size'=>60,'maxlength'=>100,'class'=>'form-control'));  ?>
		<?php echo $form->error($model,'JABATANSTRUKTURALTTD'); ?>
                </div>
	</div>
        </div>

<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Update',array('class'=>'btn green')); ?>
		<?php if(!$model->isNewRecord) echo CHtml::link('Manage Pemberi Paraf',array('pemberiparaf/admin','IDTTD'=>$model->IDTTD),array('class'=>'btn yellow')) ?>
		</div>
	</div>
	

<?php $this->endWidget(); ?>