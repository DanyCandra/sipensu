<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'surperpk-form',
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
                    <div class="col-md-5">
            <?php echo $form->labelEx($model,'Surat Permohonan Praktik Kerja',array('size'=>50,'maxlength'=>50,'class'=>'form-control','disabled'=>true)); ?>
		
		
		<?php echo $form->error($model,'IDJENISSURAT'); ?>
                </div>
	</div>
        
            <!--<div class="form-group">
		<?php //echo $form->labelEx($model,'TAHUNAKADEMIK',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-2">
		<?php //echo $form->textField($model,'TAHUNAKADEMIK',array('size'=>8,'maxlength'=>8,'class'=>'form-control','disabled'=>true)); ?>
		<?php //echo $form->error($model,'TAHUNAKADEMIK'); ?>
                </div>
	</div>
        <div class="form-group">
		<?php //echo $form->labelEx($model,'SEMESTER',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-1">
		<?php //echo $form->textField($model,'SEMESTER',array('size'=>8,'maxlength'=>8,'class'=>'form-control','disabled'=>true)); ?>
		<?php //echo $form->error($model,'SEMESTER'); ?>
                </div>
	</div>
            <hr>     --> 

	<!--<div class="row">
		<?php //echo $form->labelEx($model,'NOSURATPK',array('class'=>'col-md-3 control-label')); ?>
		<?php //echo $form->textField($model,'NOSURATPK',array('size'=>50,'maxlength'=>50)); ?>
		<?php //echo $form->error($model,'NOSURATPK'); ?>
	</div>-->
        
        <div class="form-group">
		<?php echo $form->labelEx($model,'INSTANSIPK',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-4">
		<?php echo $form->textField($model,'INSTANSIPK',array('size'=>60,'maxlength'=>200,'style'=>"text-transform:capitalize",'class'=>'form-control','disabled'=>true)); ?>
		<?php echo $form->error($model,'INSTANSIPK'); ?>
                </div>
	</div>

	<!--<div class="form-group">
		<?php //echo $form->labelEx($model,'ALAMATINSTANSIPK',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-6">
		<?php //echo $form->textField($model,'ALAMATINSTANSIPK',array('size'=>60,'maxlength'=>400,'style'=>"text-transform:capitalize",'class'=>'form-control','disabled'=>true)); ?>
		<?php //echo $form->error($model,'ALAMATINSTANSIPK'); ?>
                </div>
	</div>-->

	<div class="form-group">
		<?php echo $form->labelEx($model,'KOTAINSTANSIPK',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-3">
		<?php echo $form->textField($model,'KOTAINSTANSIPK',array('size'=>60,'maxlength'=>100,'style'=>"text-transform:capitalize",'class'=>'form-control','disabled'=>true)); ?>
		<?php echo $form->error($model,'KOTAINSTANSIPK'); ?>
                </div>
	</div>
       <hr>
        
         <div class="form-group has-error">
		<?php echo $form->labelEx($model,'NOSURATPK',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-2">
                     <div class="input-icon right">
                        <i class="fa fa-exclamation tooltips" data-container="body" data-original-title="please write a valid number"></i>
                    </div>
		<?php echo $form->textField($model,'NOSURATPK',array('size'=>50,'maxlength'=>50,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'NOSURATPK'); ?>
                </div>
	</div>
        
        <div class="form-group">
		<?php echo $form->labelEx($model,'TGLCETAKSURATPK',array('class'=>'col-md-3 control-label date-picker'));?>
		<div class="col-md-2">
                <?php 
		$this->widget ('zii.widgets.jui.CJuiDatePicker', array (
                 //you must specify name or model/attribute
                 'model'=>$model,
                 'attribute'=>'TGLCETAKSURATPK', 
                 'value'=>$model->TGLCETAKSURATPK,
                 'options'=>array(
                         'dateFormat'=>'yy-mm-dd',
                         //'showOn'=>'button',
                         'yearRange'=>'-60',
                         'changeMonth'=>'true',
                         'changeYear'=>'true',
                         'constrainInput'=>'false',
                         'duration'=>'fast',
                         'showAnim'=>'fold',
			 'showAnim'=>'slide',
                         ),
                         'htmlOptions'=>array('class'=>'form-control input-medium'),
                         )
                         );?>
                  <?php echo $form->error ($model,'TGLCETAKSURATPK');?>
        </div>  
        </div>      
	
       

	</div>
	

	<!--<div class="row">
		<?php //echo $form->labelEx($model,'TGLSUBMITPK',array('class'=>'col-md-3 control-label')); ?>
		<?php //echo $form->textField($model,'TGLSUBMITPK'); ?>
		<?php //echo $form->error($model,'TGLSUBMITPK'); ?>
	</div>-->

	
	
	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Update',array('class'=>'btn btn-primary')); ?>
		<?php //if(!$model->isNewRecord) echo CHtml::link('Manage ',array('surperpk/admin','IDPK'=>$model->IDPK),array('class'=>'btn yellow')) ?>
		</div>
	</div>

<?php $this->endWidget(); ?>
<!-- form -->