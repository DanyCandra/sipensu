<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'suraktifcuti-form',
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
                <div class="col-md-4">
                <?php echo $form->labelEx($model,'Surat Aktif Kembali Cuti Akademik',array('size'=>50,'maxlength'=>50,'class'=>'form-control','disabled'=>true)); ?>
		<?php echo $form->error($model,'IDJENISSURAT'); ?>
                </div>
	</div>    
	<!--<div class="row">
		<?php //echo $form->labelEx($model,'IDIJINCUTI',array('class'=>'col-md-3 control-label')); ?>
		<?php //echo $form->textField($model,'IDIJINCUTI'); ?>
		<?php //echo $form->error($model,'IDIJINCUTI'); ?>
	</div>-->
        
        <div class="form-group">
		<?php echo $form->labelEx($model,'Pemohon Aktif Kembali Cuti',array('class'=>'col-md-3 control-label')); ?>
		<div class="col-md-4">
		<?php echo $form->dropDownList($model,'IDIJINCUTI',
		   CHtml::listData(Surijincuti::model()->findAll(array('order'=>'IDIJINCUTI')), 'IDIJINCUTI','nIM.NAMA'),array('class'=>'form-control ','readonly'=>true)); ?>
                
                <?php echo $form->error($model,'IDIJINCUTI'); ?>
		</div>
	</div> 
       

	<!--<div class="row">
		<?php //echo $form->labelEx($model,'NOSURATIJINAKTIFCUTI',array('class'=>'col-md-3 control-label')); ?>
		<?php //echo $form->textField($model,'NOSURATIJINAKTIFCUTI',array('size'=>50,'maxlength'=>50)); ?>
		<?php //echo $form->error($model,'NOSURATIJINAKTIFCUTI'); ?>
	</div>-->

	<!--<div class="form-group">
		<?php //echo $form->labelEx($model,'SEMESTERAKTIFCUTI',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-2">
		<?php //echo $form->textField($model,'SEMESTERAKTIFCUTI',array('size'=>5,'maxlength'=>5,'class'=>'form-control')); ?>
                </div> 
                <span class="help-block">
                <?php //echo $form->labelEx($model,'Contoh : Gasal atau Genap',array('class'=>'control-label')); ?>
                </span>    
		<?php //echo $form->error($model,'SEMESTERAKTIFCUTI'); ?>
                   
	</div>

	<div class="form-group">
		<?php //echo $form->labelEx($model,'THAKADEMIKAKTIFCUTI',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-2">
		<?php //echo $form->textField($model,'THAKADEMIKAKTIFCUTI',array('size'=>9,'maxlength'=>9,'class'=>'form-control')); ?>
                </div>
                <span class="help-block">
                <?php //echo $form->labelEx($model,'Contoh : 2014/2015',array('class'=>'control-label')); ?>
                 </span>
		<?php //echo $form->error($model,'THAKADEMIKAKTIFCUTI'); ?>
	</div>-->
	<hr>
        
         <div class="form-group has-error">
		<?php echo $form->labelEx($model,'NOSURATIJINAKTIFCUTI',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-2">
                    <div class="input-icon right">
                        <i class="fa fa-exclamation tooltips" data-container="body" data-original-title="please write a valid number"></i>
                    </div>
		<?php echo $form->textField($model,'NOSURATIJINAKTIFCUTI',array('size'=>50,'maxlength'=>50,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'NOSURATIJINAKTIFCUTI'); ?>
                </div>
	</div>
        
        <div class="form-group">
		<?php echo $form->labelEx($model,'TGLCETAKSURATAKTIFCUTI',array('class'=>'col-md-3 control-label date-picker'));?>
		<div class="col-md-2">
                <?php 
		$this->widget ('zii.widgets.jui.CJuiDatePicker', array (
                 //you must specify name or model/attribute
                 'model'=>$model,
                 'attribute'=>'TGLCETAKSURATAKTIFCUTI', 
                 'value'=>$model->TGLCETAKSURATAKTIFCUTI,
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
                  <?php echo $form->error ($model,'TGLCETAKSURATAKTIFCUTI');?>
        </div>  
        </div>

	

	<!--<div class="row">
		<?php //echo $form->labelEx($model,'STATUS',array('class'=>'col-md-3 control-label')); ?>
		<?php //echo $form->textField($model,'STATUS',array('size'=>15,'maxlength'=>15)); ?>
		<?php //echo $form->error($model,'STATUS'); ?>
	</div>-->

	

	<!--<div class="row">
		<?php //echo $form->labelEx($model,'TGLSUBMITAKTIFCUTI',array('class'=>'col-md-3 control-label')); ?>
		<?php //echo $form->textField($model,'TGLSUBMITAKTIFCUTI'); ?>
		<?php //echo $form->error($model,'TGLSUBMITAKTIFCUTI'); ?>
	</div>-->

	</div>
	
	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Update',array('class'=>'btn green')); ?>
		<?php //if(!$model->isNewRecord) echo CHtml::link('Manage ',array('suraktifcuti/admin','IDAKTIFCUTI'=>$model->IDAKTIFCUTI),array('class'=>'btn yellow')) ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->