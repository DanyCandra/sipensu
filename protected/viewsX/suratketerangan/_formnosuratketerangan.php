<?php
/* @var $this SuratketeranganController */
/* @var $model Suratketerangan */
/* @var $form CActiveForm */
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'surket-form',
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
		 <?php echo $form->labelEx($model,'Surat Keterangan',array('size'=>50,'maxlength'=>50,'class'=>'form-control','disabled'=>true)); ?>
		<?php echo $form->error($model,'IDJENISSURAT'); ?>
                </div>
	</div>

	<!--<div class="row">
		<?php //echo $form->labelEx($model,'IDTASEMESTER',array('class'=>'col-md-3 control-label')); ?>
		<?php //echo $form->textField($model,'IDTASEMESTER'); ?>
		<?php //echo $form->error($model,'IDTASEMESTER'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'NOSURKET',array('class'=>'col-md-3 control-label')); ?>
		<?php //echo $form->textField($model,'NOSURKET',array('size'=>50,'maxlength'=>50)); ?>
		<?php //echo $form->error($model,'NOSURKET'); ?>
	</div>-->
           
      

	<div class="form-group">
		<?php echo $form->labelEx($model,'Nama',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-5">
		<?php echo $form->dropDownList($model,'NIM',
		CHtml::listData(Mahasiswa::model()->findAll(array('order'=>'NIM')), 'NIM', 'NAMA'),array('empty'=>'----Pilih Nama----','class'=>'form-control','disabled'=>true)); ?>
		<?php echo $form->error($model,'NIM'); ?>
		</div>
	</div>
              <hr>
        
         <!--<div class="form-group ">
		<?php //echo $form->labelEx($model,'PERIHAL1',array('class'=>'col-md-3 control-label')); ?>
                 <div class="col-md-8">
                  
		<?php //echo $form->textField($model,'PERIHAL1',array('size'=>5,'maxlength'=>5000,'rows'=>6, 'cols'=>10,'class'=>'form-control')); ?>
		<?php //echo $form->error($model,'PERIHAL1'); ?>
                </div>
	</div>
        <div class="form-group ">
		<?php //echo $form->labelEx($model,'PERIHAL2',array('class'=>'col-md-3 control-label')); ?>
                 <div class="col-md-8">
                   
		<?php //echo $form->textField($model,'PERIHAL2',array('size'=>5,'maxlength'=>5000,'class'=>'form-control')); ?>
		<?php //echo $form->error($model,'PERIHAL2'); ?>
                </div>
	</div>-->
	
<div class="form-group has-error">
		<?php echo $form->labelEx($model,'NOSURKET',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-2">
                    <div class="input-icon right">
                        <i class="fa fa-exclamation tooltips" data-container="body" data-original-title="please write a valid number"></i>
                    </div>
		<?php echo $form->textField($model,'NOSURKET',array('size'=>50,'maxlength'=>50,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'NOSURKET'); ?>
                </div>
	</div>

	
       <div class="form-group">
		<?php echo $form->labelEx($model,'TGLCETAKSURKET',array('class'=>'col-md-3 control-label date-picker'));?>
		<div class="col-md-2">
                <?php 
		$this->widget ('zii.widgets.jui.CJuiDatePicker', array (
                 //you must specify name or model/attribute
                 'model'=>$model,
                 'attribute'=>'TGLCETAKSURKET', 
                 'value'=>$model->TGLCETAKSURKET,
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
                  <?php echo $form->error ($model,'TGLCETAKSURKET');?>
        </div>  
        </div>     
	

	

	</div>
	
	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Update' : 'Simpan',array('class'=>'btn green')); ?>
		
		</div>
	</div>
	

<?php $this->endWidget(); ?>