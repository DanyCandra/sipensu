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
        <div class="form-group">
		<?php echo $form->labelEx($model,'Tahun Akademik Sekarang',array('class'=>'col-md-3 control-label'));?>
		<!--<div class="col-md-1">
                <?php //echo $form->textField($model,'IDTASEMESTER',array('size'=>10,'maxlength'=>10,'class'=>'form-control','disabled'=>true)); ?>
                </div>-->
                    
                <div class="col-md-2">
                 <?php echo $form->dropDownList($model,'IDTASEMESTER',
		   CHtml::listData(Currentsemester::model()->findAll(array('order'=>'IDTASEMESTER')), 'IDTASEMESTER','TAHUNAKADEMIK'),array('class'=>'form-control select2me','disabled'=>true)); ?>
               
                </div>
                
                    <div class="col-md-2">
                        <?php echo $form->labelEx($model,'Semester Sekarang',array('class'=>'control-label'));?>
                    </div>
                <div class="col-md-2">
               <?php echo $form->dropDownList($model,'IDTASEMESTER',
		   CHtml::listData(Currentsemester::model()->findAll(array('order'=>'IDTASEMESTER')), 'IDTASEMESTER','KETSEMESTER'),array('class'=>'form-control select2me','disabled'=>true)); ?>
                </div>
                <?php echo $form->error($model,'IDTASEMESTER'); ?>    
	</div>
        <hr>
                

	<!--<div class="row">
		<?php //echo $form->labelEx($model,'NOSURATPK',array('class'=>'col-md-3 control-label')); ?>
		<?php //echo $form->textField($model,'NOSURATPK',array('size'=>50,'maxlength'=>50)); ?>
		<?php //echo $form->error($model,'NOSURATPK'); ?>
	</div>-->
    
	<div class="form-group">
		<?php echo $form->labelEx($model,'TUJUANPK',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-4">
		<?php echo $form->textField($model,'TUJUANPK',array('size'=>60,'maxlength'=>200,'style'=>"text-transform:capitalize",'class'=>'form-control','placeholder'=>'Contoh : Kepala / Direktur / Manager')); ?>
		<?php echo $form->error($model,'TUJUANPK'); ?>
                </div>
	
	</div>
	
    
    <div class="form-group">
		<?php echo $form->labelEx($model,'INSTANSIPK',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-4">
		<?php echo $form->textField($model,'INSTANSIPK',array('size'=>60,'maxlength'=>200,'style'=>"text-transform:capitalize",'class'=>'form-control','placeholder'=>'Nama Perusahan / Instansi')); ?>
		<?php echo $form->error($model,'INSTANSIPK'); ?>
                </div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'ALAMATINSTANSIPK',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-6">
		<?php echo $form->textField($model,'ALAMATINSTANSIPK',array('size'=>60,'maxlength'=>400,'style'=>"text-transform:capitalize",'class'=>'form-control')); ?>
		<?php echo $form->error($model,'ALAMATINSTANSIPK'); ?>
                </div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'KOTAINSTANSIPK',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-3">
		<?php echo $form->textField($model,'KOTAINSTANSIPK',array('size'=>60,'maxlength'=>100,'style'=>"text-transform:capitalize",'class'=>'form-control')); ?>
		<?php echo $form->error($model,'KOTAINSTANSIPK'); ?>
                </div>
	</div>
        
                 
        
        
	 <div class="form-group has-success">
		<?php echo $form->labelEx($model,'KETERANGANPK',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-5">
                    <div class="input-icon right">
                        <i class="fa fa-check tooltips" data-container="body" data-original-titlr="You look OK!"></i>
                    </div>
		<?php echo $form->textArea($model,'KETERANGANPK',array('rows'=>6, 'cols'=>50,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'KETERANGANPK'); ?>
                </div>
	</div>
	<!--<div class="row">
		<?php //echo $form->labelEx($model,'KETERANGANPK',array('class'=>'col-md-3 control-label')); ?>
		<?php //echo $form->textArea($model,'KETERANGANPK',array('rows'=>6, 'cols'=>50)); ?>
		<?php //echo $form->error($model,'KETERANGANPK'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'TGLSUBMITPK',array('class'=>'col-md-3 control-label')); ?>
		<?php //echo $form->textField($model,'TGLSUBMITPK'); ?>
		<?php //echo $form->error($model,'TGLSUBMITPK'); ?>
	</div>-->

	</div>
	
	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Update',array('class'=>'btn btn-primary')); ?>
		<?php //if(!$model->isNewRecord) echo CHtml::link('Manage ',array('surperpk/admin','IDPK'=>$model->IDPK),array('class'=>'btn yellow')) ?>
		</div>
	</div>

<?php $this->endWidget(); ?>
<!-- form -->