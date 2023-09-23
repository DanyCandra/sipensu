<?php
/* @var $this MahasiswaController */
/* @var $model Mahasiswa */
/* @var $form CActiveForm */
?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'mahasiswa-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
        'htmlOptions'=>array('class'=>'form-horizontal','role'=>'form'),
)); ?>

	<div class="form-body">
	<?php echo $form->errorSummary($model,'<b>Silakan perbaiki kesalahan berikut :</b> ','',array('class'=>'alert alert-danger')); ?>
            <input type="hidden" value="<?php echo $id ?>" />
	<div class="form-group">
		<?php echo $form->labelEx($model,'NIM',array('class'=>'col-md-3 control-label')); ?>
                 <div class="col-md-2">
		<?php echo $form->textField($model,'NIM',array('size'=>10,'maxlength'=>10,'class'=>'form-control','disabled'=>TRUE)); ?>
		<?php echo $form->error($model,'NIM'); ?>
                 </div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'NAMA',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-6">
		<?php echo $form->textField($model,'NAMA',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'NAMA'); ?>
                </div>
	</div>
            
       <div class="form-group">
		<?php echo $form->labelEx($model,'JENIS KELAMIN',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-3">
                <?php echo $form->dropDownList($model,'IDJENDER',
                CHtml::listData(Jender::model()->findAll(array('order'=>'IDJENDER')), 'IDJENDER', 'NAMAJENDER'),array('empty'=>'----Pilih Jenis Kelamin----','class'=>'form-control select2me','disabled'=>true)); ?>
		<?php //echo $form->textField($model,'IDJENDER',array('size'=>1,'maxlength'=>1,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'IDJENDER'); ?>
                </div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'TEMPATLAHIR',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-5">
		<?php echo $form->textField($model,'TEMPATLAHIR',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'TEMPATLAHIR'); ?>
                </div>
	</div>
            
         <div class="form-group">
		<?php echo $form->labelEx($model,'TGLLAHIR',array('class'=>'col-md-3 control-label date-picker'));?>
		<div class="col-md-2">
                <?php 
		$this->widget ('zii.widgets.jui.CJuiDatePicker', array (
                 //you must specify name or model/attribute
                 'model'=>$model,
                 'attribute'=>'TGLLAHIR', 
                 'value'=>$model->TGLLAHIR,
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
                  <?php echo $form->error ($model,'TGLLAHIR');?>
        </div>    
		
        </div>    
	<!--<div class="form-group">
		<?php //echo $form->labelEx($model,'TGLLAHIR',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-3">
		<?php //echo $form->textField($model,'TGLLAHIR',array('size'=>50,'maxlength'=>50,'class'=>'form-control')); ?>
		<?php //echo $form->error($model,'TGLLAHIR'); ?>
                </div>
	</div>-->
            
        <div class="form-group">
		<?php echo $form->labelEx($model,'AGAMA',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-3">
                <?php echo $form->dropDownList($model,'IDAGAMA',
                CHtml::listData(Agama::model()->findAll(array('order'=>'IDAGAMA')), 'IDAGAMA', 'NAMAAGAMA'),array('empty'=>'----Pilih Agama----','class'=>'form-control select2me')); ?>
		<?php //echo $form->textField($model,'IDAGAMA',array('size'=>4,'maxlength'=>4,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'IDAGAMA'); ?>
                </div>
	</div>
       
	<div class="form-group">
		<?php echo $form->labelEx($model,'GOLONGAN DARAH',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-3">
                <?php echo $form->dropDownList($model,'IDGOLDAR',
                CHtml::listData(Goldarah::model()->findAll(array('order'=>'IDGOLDAR')), 'IDGOLDAR', 'NAMAGOLDAR'),array('empty'=>'----Pilih Gol.darah----','class'=>'form-control select2me')); ?>
		<?php //echo $form->textField($model,'IDGOLDAR',array('size'=>4,'maxlength'=>4,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'IDGOLDAR'); ?>
                </div>
	</div>
            
        
       <div class="form-group">
		<?php echo $form->labelEx($model,'PRODI',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-3">
                <?php echo $form->dropDownList($model,'IDPRODI',
                CHtml::listData(Prodi::model()->findAll(array('order'=>'IDPRODI')), 'IDPRODI', 'NAMAPRODI'),array('empty'=>'----Pilih Prodi----','class'=>'form-control select2me','disabled'=>true)); ?>
		<?php //echo $form->textField($model,'IDPRODI',array('size'=>4,'maxlength'=>4,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'IDPRODI'); ?>
                </div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'NOHP',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-3">
		<?php echo $form->textField($model,'NOHP',array('size'=>50,'maxlength'=>50,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'NOHP'); ?>
                </div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'EMAIL',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-5">
		<?php echo $form->textField($model,'EMAIL',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'EMAIL'); ?>
                </div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'ALAMATASAL',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-5">
		<?php echo $form->textArea($model,'ALAMATASAL',array('rows'=>6, 'cols'=>50,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'ALAMATASAL'); ?>
                </div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'NAMAAYAH',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-3">
		<?php echo $form->textField($model,'NAMAAYAH',array('size'=>50,'maxlength'=>50,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'NAMAAYAH'); ?>
                </div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'NAMAIBU',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-3">
		<?php echo $form->textField($model,'NAMAIBU',array('size'=>50,'maxlength'=>50,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'NAMAIBU'); ?>
                </div>
	</div>

	<!--<div class="form-group">
		<?php //echo $form->labelEx($model,'PENGHASILANAYAH',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-3">
		<?php //echo $form->textField($model,'PENGHASILANAYAH',array('size'=>15,'maxlength'=>15,'class'=>'form-control')); ?>
		<?php //echo $form->error($model,'PENGHASILANAYAH'); ?>
                </div>
	</div>

	<div class="form-group">
		<?php //echo $form->labelEx($model,'PENGHASILANIBU',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-3">
		<?php //echo $form->textField($model,'PENGHASILANIBU',array('size'=>15,'maxlength'=>15,'class'=>'form-control')); ?>
		<?php //echo $form->error($model,'PENGHASILANIBU'); ?>
                </div>
	</div>

	<div class="form-group">
		<?php //echo $form->labelEx($model,'JMLTANGGUNGAN',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-1">
		<?php //echo $form->textField($model,'JMLTANGGUNGAN',array('size'=>15,'maxlength'=>15,'class'=>'form-control')); ?>
		<?php //echo $form->error($model,'JMLTANGGUNGAN'); ?>
                </div>
	</div>-->

	<div class="form-group">
		<?php echo $form->labelEx($model,'NAMAKABUPATEN',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-6">
		<?php echo $form->textField($model,'NAMAKABUPATEN',array('size'=>30,'maxlength'=>30,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'NAMAKABUPATEN'); ?>
                </div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'NAMAPROPINSI',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-6">
		<?php echo $form->textField($model,'NAMAPROPINSI',array('size'=>30,'maxlength'=>30,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'NAMAPROPINSI'); ?>
                </div>
	</div>

	<!--<div class="form-group">
		<?php //echo $form->labelEx($model,'TAHUNANGKATAN',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-2">
		<?php //echo $form->textField($model,'TAHUNANGKATAN',array('size'=>4,'maxlength'=>4,'class'=>'form-control')); ?>
		<?php //echo $form->error($model,'TAHUNANGKATAN'); ?>
                </div>
	</div>-->

	</div>
	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Update',array('class'=>'btn green')); ?>
		
                
                </div>
	</div>

<?php $this->endWidget(); ?>

<!-- form -->