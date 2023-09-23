<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'suraktifcuti-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'form-horizontal','role'=>'form'),
)); ?>

	<div class="form-body">
	<?php echo $form->errorSummary($model,'<b>Silahkan perbaiki kesalahan berikut :</b> ','',array('class'=>'alert alert-danger')); ?>
        
        <div class="form-group">
		<?php echo $form->labelEx($model,'Nomor Surat Izin Cuti Akademik',array('class'=>'col-md-3 control-label')); ?>
		<div class="col-md-2">
		<?php echo $form->dropDownList($model,'IDIJINCUTI',
		   CHtml::listData(Surijincuti::model()->findAll(array('order'=>'IDIJINCUTI')), 'IDIJINCUTI','NOSURATIJINCUTI'),array('class'=>'form-control select2me','disabled'=>true)); ?>
                
                <?php echo $form->error($model,'IDIJINCUTI'); ?>
		</div>
	</div> 
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
		<?php //echo $form->labelEx($model,'IDIJINCUTI',array('class'=>'col-md-3 control-label')); ?>
		<?php //echo $form->textField($model,'IDIJINCUTI'); ?>
		<?php //echo $form->error($model,'IDIJINCUTI'); ?>
	</div>-->
        
        <div class="form-group">
		<?php echo $form->labelEx($model,'Pemohon Aktif Kembali Cuti',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-2">
		<?php echo $form->dropDownList($model,'IDIJINCUTI',
		   CHtml::listData(Surijincuti::model()->findAll(array('order'=>'IDIJINCUTI')), 'IDIJINCUTI','NIM'),array('class'=>'form-control ','readonly'=>true)); ?>
                </div>
		<div class="col-md-4">
		<?php echo $form->dropDownList($model,'IDIJINCUTI',
		   CHtml::listData(Surijincuti::model()->findAll(array('order'=>'IDIJINCUTI')), 'IDIJINCUTI','nIM.NAMA'),array('class'=>'form-control ','disabled'=>true)); ?>
                
                <?php echo $form->error($model,'IDIJINCUTI'); ?>
		</div>
	</div> 
          

	<!--<div class="row">
		<?php //echo $form->labelEx($model,'NOSURATIJINAKTIFCUTI',array('class'=>'col-md-3 control-label')); ?>
		<?php //echo $form->textField($model,'NOSURATIJINAKTIFCUTI',array('size'=>50,'maxlength'=>50)); ?>
		<?php //echo $form->error($model,'NOSURATIJINAKTIFCUTI'); ?>
	</div>-->

	
	<!--<div class="row">
		<?php //echo $form->labelEx($model,'KETERANGANAKTIFCUTI',array('class'=>'col-md-3 control-label')); ?>
		<?php //echo $form->textField($model,'KETERANGANAKTIFCUTI',array('size'=>60,'maxlength'=>100)); ?>
		<?php //echo $form->error($model,'KETERANGANAKTIFCUTI'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'STATUS',array('class'=>'col-md-3 control-label')); ?>
		<?php //echo $form->textField($model,'STATUS',array('size'=>15,'maxlength'=>15)); ?>
		<?php //echo $form->error($model,'STATUS'); ?>
	</div>-->

        <div class="form-group">
		<?php echo $form->labelEx($model,'THAKADEMIKAKTIFCUTI',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-2">
		<?php echo $form->textField($model,'THAKADEMIKAKTIFCUTI',array('size'=>9,'maxlength'=>9,'class'=>'form-control ')); ?>
                </div>
                <span class="help-block">
                <?php echo $form->labelEx($model,'[Contoh Penulisan: 2014/2015]',array('class'=>'control-label')); ?>
                </span>
                <?php echo $form->error($model,'THAKADEMIKAKTIFCUTI'); ?>
               
	</div>
        <div class="form-group">
		<?php echo $form->labelEx($model,'SEMESTERAKTIFCUTI',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-2">
		<?php echo $form->textField($model,'SEMESTERAKTIFCUTI',array('size'=>5,'maxlength'=>5,'class'=>'form-control ')); ?>
                </div>
                <span class="help-block">
                <?php echo $form->labelEx($model,'[Contoh penulisan: gasal atau genap]',array('class'=>'control-label')); ?>
                </span>
                <?php echo $form->error($model,'SEMESTERAKTIFCUTI'); ?>
               
	</div>
        
	<div class="form-group">
		<?php echo $form->labelEx($model,'NIP',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-4">
		<?php echo $form->dropDownList($model,'NIP',
		CHtml::listData(Msdos::model()->findAll(array('order'=>'NIP')), 'NIP', 'NAMA2'),array('empty'=>'----Pilih Nama Dosen----','class'=>'form-control select2me')); ?>
		<?php echo $form->error($model,'NIP'); ?>
		</div>
	</div>

	<!--<div class="row">
		<?php //echo $form->labelEx($model,'TGLSUBMITAKTIFCUTI',array('class'=>'col-md-3 control-label')); ?>
		<?php //echo $form->textField($model,'TGLSUBMITAKTIFCUTI'); ?>
		<?php //echo $form->error($model,'TGLSUBMITAKTIFCUTI'); ?>
	</div>-->

	</div>
	
	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Update',array('class'=>'btn btn-primary')); ?>
		<?php //if(!$model->isNewRecord) echo CHtml::link('Manage ',array('suraktifcuti/admin','IDAKTIFCUTI'=>$model->IDAKTIFCUTI),array('class'=>'btn yellow')) ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->