<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'surmag-form',
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
                <?php echo $form->labelEx($model,'Surat Pernyataan Permohonan Magang',array('size'=>50,'maxlength'=>50,'class'=>'form-control','disabled'=>true)); ?>
		<?php echo $form->error($model,'IDJENISSURAT'); ?>
                </div>
	</div>

	<!--<div class="row">
		<?php //echo $form->labelEx($model,'NOSURMAG',array('class'=>'col-md-3 control-label')); ?>
		<?php //echo $form->textField($model,'NOSURMAG',array('size'=>50,'maxlength'=>50)); ?>
		<?php //echo $form->error($model,'NOSURMAG'); ?>
	</div>-->
        
        <div class="form-group">
		<?php echo $form->labelEx($model,'INSTANSISURMAG',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-4">
		<?php echo $form->textField($model,'INSTANSISURMAG',array('size'=>60,'maxlength'=>500,'class'=>'form-control','disabled'=>true)); ?>
		<?php echo $form->error($model,'INSTANSISURMAG'); ?>
                </div>
	</div>
	

	<div class="form-group">
		<?php echo $form->labelEx($model,'ALAMATINSTANSISURMAG',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-8">
		<?php echo $form->textField($model,'ALAMATINSTANSISURMAG',array('size'=>60,'maxlength'=>250,'class'=>'form-control','disabled'=>true)); ?>
		<?php echo $form->error($model,'ALAMATINSTANSISURMAG'); ?>
                </div>
	</div>
	<hr>
        
      <div class="form-group has-error">
		<?php echo $form->labelEx($model,'NOSURMAG',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-2">
                    <div class="input-icon right">
                        <i class="fa fa-exclamation tooltips" data-container="body" data-original-title="please write a valid number"></i>
                    </div>
		<?php echo $form->textField($model,'NOSURMAG',array('size'=>50,'maxlength'=>50,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'NOSURMAG'); ?>
                </div>
	</div>
        
         <div class="form-group">
		<?php echo $form->labelEx($model,'TGLCETAKSURATSURMAG',array('class'=>'col-md-3 control-label date-picker'));?>
		<div class="col-md-2">
                <?php 
		$this->widget ('zii.widgets.jui.CJuiDatePicker', array (
                 //you must specify name or model/attribute
                 'model'=>$model,
                 'attribute'=>'TGLCETAKSURATSURMAG', 
                 'value'=>$model->TGLCETAKSURATSURMAG,
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
                  <?php echo $form->error ($model,'TGLCETAKSURATSURMAG');?>
        </div>  
        </div> 

	
	</div>
	
	<!--<div class="form-group">
		<?php //echo $form->labelEx($model,'TGLSUBMITSURMAG',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-3">
		<?php //echo $form->textField($model,'TGLSUBMITSURMAG'); ?>
		<?php //echo $form->error($model,'TGLSUBMITSURMAG'); ?>
                </div>
	</div>-->

	
	
	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Update',array('class'=>'btn btn-primary waves-effect waves-float waves-light')); ?>
		<?php //if(!$model->isNewRecord) echo CHtml::link('Manage ',array('surmag/admin','IDSURMAG'=>$model->IDSURMAG),array('class'=>'btn yellow')) ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

<!-- form -->