<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'groupinstansisurtugpn-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'form-horizontal','role'=>'form'),
)); ?>
        <div class="form-body">
	<?php echo $form->errorSummary($model,'<b>Silahkan perbaiki kesalahan berikut :</b> ','',array('class'=>'alert alert-danger')); ?>
            
        <div class="form-group">
		<?php echo $form->labelEx($model,'IDPN',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-1">
		<?php echo $form->textField($model,'IDPN',array('class'=>'form-control','readonly'=>true)); ?>
		<?php echo $form->error($model,'IDPN'); ?>
                </div>
	</div>
            
	<div class="form-group">
		<?php echo $form->labelEx($model,'INSTANSIPN',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-4">
		<?php echo $form->textField($model,'INSTANSIPN',array('size'=>60,'maxlength'=>250,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'INSTANSIPN'); ?>
                </div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'ALAMATINSTANSIPN',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-7">
		<?php echo $form->textField($model,'ALAMATINSTANSIPN',array('size'=>60,'maxlength'=>150,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'ALAMATINSTANSIPN'); ?>
                </div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'KOTAINSTANSIPN',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-4">
		<?php echo $form->textField($model,'KOTAINSTANSIPN',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'KOTAINSTANSIPN'); ?>
                </div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'NOURUTINSTANSIPN',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-1">
		<?php echo $form->textField($model,'NOURUTINSTANSIPN',array('size'=>11,'maxlength'=>11,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'NOURUTINSTANSIPN'); ?>
                </div>
	</div>

	</div>

	
<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Update',array('class'=>'btn btn-outline-warning round waves-effect')); ?>
		<?php echo CHtml::link('Kembali ke Detail ',array('surtugpn/view','id'=>$model->IDPN),array('class'=>'btn btn-outline-info round waves-effect')) ?>
		</div>
	</div>
	

<?php $this->endWidget(); ?>