<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'surijincuti-form',
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
                <?php echo $form->labelEx($model,'Surat Izin Cuti Akademik',array('size'=>50,'maxlength'=>50,'class'=>'form-control','disabled'=>true)); ?>
		<?php //echo $form->error($model,'IDJENISSURAT'); ?>
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
                        <?php echo $form->labelEx($model,'semester sekarang',array('class'=>'control-label'));?>
                    </div>
                <div class="col-md-2">
               <?php echo $form->dropDownList($model,'IDTASEMESTER',
		   CHtml::listData(Currentsemester::model()->findAll(array('order'=>'IDTASEMESTER')), 'IDTASEMESTER','KETSEMESTER'),array('class'=>'form-control select2me','disabled'=>true)); ?>
                </div>
                <?php echo $form->error($model,'IDTASEMESTER'); ?>    
	</div>
            <hr>    

	<!--<div class="row">
		<?php //echo $form->labelEx($model,'NOSURATIJINCUTI',array('class'=>'col-md-3 control-label')); ?>
		<?php //echo $form->textField($model,'NOSURATIJINCUTI',array('size'=>50,'maxlength'=>50)); ?>
		<?php //echo $form->error($model,'NOSURATIJINCUTI'); ?>
	</div>-->

	<div class="form-group">
            <?php echo $form->labelEx($model,'NIM',array('class'=>'col-md-3 control-label')); ?>
             <div class="col-md-4">
                <?php
                    $connection = Yii::app()->db;
                    $sql = "select NIM,  CONCAT(NIM,' - ',NAMA) as NAMA from mahasiswa";
                    $command = $connection->createCommand($sql);
                    $results = $command->queryAll();
                    ?>
                    <?php echo CHtml::activeDropDownList($model, 'NIM', CHtml::listData($results,  'NIM','NAMA'),array('empty'=>'----Pilih NIM----','class'=>'form-control'),
                            array(
                                'class'=>'form-control select2me',
                                'ajax' => array(
                                'type'=>'POST', //request type
                                
                                //Style: CController::createUrl('currentController/methodToCall')
                              
                                //'data'=>'js:javascript statement' 
                                //leave out the data key to pass all form values through
                                )
                                
                                )); ?> 
		<?php echo $form->error($model,'NIM'); ?>
		</div>
	</div> 

	<div class="form-group">
		<?php echo $form->labelEx($model,'LAMAIJINCUTI',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-2">
		<?php echo $form->textField($model,'LAMAIJINCUTI',array('size'=>20,'maxlength'=>20,'class'=>'form-control ')); ?>
                </div>
                <span class="help-block">
                <?php echo $form->labelEx($model,'[Contoh penulisan : dua]',array('class'=>'control-label')); ?>
                </span>
                <?php echo $form->error($model,'LAMAIJINCUTI'); ?>
               
	</div>
        <div class="form-group">
		<?php echo $form->labelEx($model,'THAKADEMIKCUTI',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-2">
		<?php echo $form->textField($model,'THAKADEMIKCUTI',array('size'=>9,'maxlength'=>9,'class'=>'form-control ')); ?>
                </div>
                <span class="help-block">
                <?php echo $form->labelEx($model,'[Contoh Penulisan: 2014/2015]',array('class'=>'control-label')); ?>
                </span>
                <?php echo $form->error($model,'THAKADEMIKCUTI'); ?>
               
	</div>
        <div class="form-group">
		<?php echo $form->labelEx($model,'SEMESTERCUTI',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-2">
		<?php echo $form->textField($model,'SEMESTERCUTI',array('size'=>5,'maxlength'=>5,'class'=>'form-control ')); ?>
                </div>
                <span class="help-block">
                <?php echo $form->labelEx($model,'[Contoh penulisan: gasal atau genap]',array('class'=>'control-label')); ?>
                </span>
                <?php echo $form->error($model,'SEMESTERCUTI'); ?>
               
	</div>
        
       
	<div class="form-group">
		<?php echo $form->labelEx($model,'SKSCAPAI',array('class'=>'col-md-3 control-label')); ?>
                 <div class="col-md-1">
		<?php echo $form->textField($model,'SKSCAPAI',array('size'=>20,'maxlength'=>20,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'SKSCAPAI'); ?>
                 </div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'IPKCAPAI',array('class'=>'col-md-3 control-label')); ?>
                 <div class="col-md-1">
		<?php echo $form->textField($model,'IPKCAPAI',array('size'=>20,'maxlength'=>20,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'IPKCAPAI'); ?>
                 </div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'KETERANGANIJINCUTI',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-5">
		<?php echo $form->textField($model,'KETERANGANIJINCUTI',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'KETERANGANIJINCUTI'); ?>
                </div>
	</div>
       <div class="form-group">
		<?php echo $form->labelEx($model,'NIP',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-4">
		<?php echo $form->dropDownList($model,'NIP',
		CHtml::listData(Msdos::model()->findAll(array('order'=>'NIP')), 'NIP', 'NAMA2'),array('empty'=>'----Pilih Nama Dosen----','class'=>'form-control select2me')); ?>
		<?php echo $form->error($model,'NIP'); ?>
		</div>
	</div>

	<!--<div class="form-group">
		<?php //echo $form->labelEx($model,'STATUSTERKINI',array('class'=>'col-md-3 control-label')); ?>
                 <div class="col-md-4">
		<?php //echo $form->textField($model,'STATUSTERKINI',array('size'=>15,'maxlength'=>15,'class'=>'form-control')); ?>
		<?php //echo $form->error($model,'STATUSTERKINI'); ?>
                 </div>
	</div>

	<div class="form-group">
		<?php //echo $form->labelEx($model,'TGLSUBMITIJINCUTI',array('class'=>'col-md-3 control-label')); ?>
                 <div class="col-md-4">
		<?php //echo $form->textField($model,'TGLSUBMITIJINCUTI'); ?>
		<?php //echo $form->error($model,'TGLSUBMITIJINCUTI'); ?>
                 </div>
	</div>-->
         <div class="form-group has-success">
		<?php echo $form->labelEx($model,'KETERANGAN',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-8">
                    <div class="input-icon right">
                        <i class="fa fa-check tooltips" data-container="body" data-original-titlr="You look OK!"></i>
                    </div>
		<?php echo $form->textArea($model,'KETERANGAN',array('rows'=>6, 'cols'=>50,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'KETERANGAN'); ?>
                </div>
	</div>
	</div>
	
	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Update',array('class'=>'btn btn-primary')); ?>
		<?php //if(!$model->isNewRecord) echo CHtml::link('Manage ',array('surijincuti/admin','IDIJINCUTI'=>$model->IDIJINCUTI),array('class'=>'btn yellow')) ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->