<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'surtugpn-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'form-horizontal','role'=>'form'),
)); ?>
        <div class="form-body">
	<?php echo $form->errorSummary($model,'<b>Silahkan perbaiki kesalahan berikut :</b> ','',array('class'=>'alert alert-danger')); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'IDJENISSURAT',array('class'=>'col-md-3 control-label'));?>
		<!--<div class="col-md-1">
		<?php //echo $form->textField($model,'IDJENISSURAT',array('size'=>10,'maxlength'=>10,'class'=>'form-control','disabled'=>true)); ?>
                </div>-->
                    <div class="col-md-6">
            <?php echo $form->labelEx($model,'Surat Tugas Penelitian',array('size'=>50,'maxlength'=>50,'class'=>'form-control','disabled'=>true)); ?>
		
		
		<?php echo $form->error($model,'IDJENISSURAT'); ?>
                </div>
	</div>

	<!--<div class="form-group">
		<?php //echo $form->labelEx($model,'NOSURATPN',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-2">
		<?php //echo $form->textField($model,'NOSURATPN',array('size'=>50,'maxlength'=>50,'class'=>'form-control')); ?>
		<?php //echo $form->error($model,'NOSURATPN'); ?>
                </div>
	</div>-->
	<div class="form-group">
		<?php echo $form->labelEx($model,'JUDULPN',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-9">
		<?php echo $form->textField($model,'JUDULPN',array('size'=>60,'maxlength'=>500,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'JUDULPN'); ?>
                </div>
	</div>
        
        
        
	<div class="form-group">
		<?php echo $form->labelEx($model,'WAKTUDATAPN',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-3">
		<?php echo $form->textField($model,'WAKTUDATAPN',array('size'=>50,'maxlength'=>50,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'WAKTUDATAPN'); ?>
                </div>
	</div>

	<!--<div class="form-group">
		<?php //echo $form->labelEx($model,'TGLSUBMITPN',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-3">
		<?php //echo $form->textField($model,'TGLSUBMITPN'); ?>
		<?php //echo $form->error($model,'TGLSUBMITPN'); ?>
                </div>
	</div>-->
         <div class="form-group has-success">
		<?php echo $form->labelEx($model,'KETERANGANSURTUGPN',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-8">
                    <div class="input-icon right">
                        <i class="fa fa-check tooltips" data-container="body" data-original-titlr="You look OK!"></i>
                    </div>
		<?php echo $form->textArea($model,'KETERANGANSURTUGPN',array('rows'=>6, 'cols'=>50,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'KETERANGANSURTUGPN'); ?>
                </div>
	</div>

	</div>
	
	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Update',array('class'=>'btn btn-outline-warning round waves-effect')); ?>
		<?php if(!$model->isNewRecord) echo CHtml::link('Manage ',array('surtugpn/admin','IDPN'=>$model->IDPN),array('class'=>'btn btn-outline-info round waves-effect')) ?>
		</div>
	</div>
	

<?php $this->endWidget(); ?>