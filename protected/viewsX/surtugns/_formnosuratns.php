<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'surtugns-form',
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
            <?php echo $form->labelEx($model,'Surat Tugas Pembicara/Narasumber',array('size'=>50,'maxlength'=>50,'class'=>'form-control','disabled'=>true)); ?>
		
		
		<?php echo $form->error($model,'IDJENISSURAT'); ?>
                </div>
	</div>
        
            
            
            
	<div class="form-group">
		<?php echo $form->labelEx($model,'Nama',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-5">
		<?php echo $form->dropDownList($model,'NIP',
		CHtml::listData(Msdos::model()->findAll(array('order'=>'NIP')), 'NIP', 'NAMA2'),array('empty'=>'----Pilih Nama----','class'=>'form-control','disabled'=>true)); ?>
		<?php echo $form->error($model,'NIP'); ?>
		</div>
	</div>
<hr>
	 
	<div class="form-group has-error">
		<?php echo $form->labelEx($model,'NOSURTUGNS',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-2">
                    <div class="input-icon right">
                        <i class="fa fa-exclamation tooltips" data-container="body" data-original-title="please write a valid number"></i>
                    </div>
		<?php echo $form->textField($model,'NOSURTUGNS',array('size'=>50,'maxlength'=>50,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'NOSURTUGNS'); ?>
                </div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'TGLCETAKSURATNS',array('class'=>'col-md-3 control-label date-picker'));?>
		<div class="col-md-2">
                <?php 
		$this->widget ('zii.widgets.jui.CJuiDatePicker', array (
                 //you must specify name or model/attribute
                 'model'=>$model,
                 'attribute'=>'TGLCETAKSURATNS', 
                 'value'=>$model->TGLCETAKSURATNS,
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
                  <?php echo $form->error ($model,'TGLCETAKSURATNS');?>
        </div>  
        </div>
            
	

	<!--<div class="form-group">
		<?php //echo $form->labelEx($model,'TGLSUBMITNS',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-3">
		<?php //echo $form->textField($model,'TGLSUBMITNS'); ?>
		<?php //echo $form->error($model,'TGLSUBMITNS'); ?>
                </div>
	</div>-->
</div>
	
	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Update' : 'Simpan',array('class'=>'btn green')); ?>
		
		</div>
	</div>
	

<?php $this->endWidget(); ?>