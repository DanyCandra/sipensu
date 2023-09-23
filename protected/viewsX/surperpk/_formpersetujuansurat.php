<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'surperpk-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'form-horizontal','role'=>'form'),
)); ?>
        <div class="form-body">
	<?php echo $form->errorSummary($model,'<b>Silahkan perbaiki kesalahan berikut :</b> ','',array('class'=>'alert alert-danger')); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'IDJENISSURAT',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-1">
		<?php echo $form->textField($model,'IDJENISSURAT',array('size'=>10,'maxlength'=>10,'class'=>'form-control','disabled'=>true)); ?>
                </div>
                    <div class="col-md-6">
            <?php echo $form->labelEx($model,'Surat Permohonan Praktik Kerja',array('size'=>50,'maxlength'=>50,'class'=>'form-control','disabled'=>true)); ?>
		
		
		<?php echo $form->error($model,'IDJENISSURAT'); ?>
                </div>
	</div>
       <div class="form-group">
		<?php echo $form->labelEx($model,'Tahun Akademik',array('class'=>'col-md-3 control-label'));?>
		<!--<div class="col-md-1">
                <?php //echo $form->textField($model,'IDTASEMESTER',array('size'=>10,'maxlength'=>10,'class'=>'form-control','disabled'=>true)); ?>
                </div>-->
                    
                <div class="col-md-2">
                 <?php echo $form->dropDownList($model,'IDTASEMESTER',
		   CHtml::listData(Currentsemester::model()->findAll(array('order'=>'IDTASEMESTER')), 'IDTASEMESTER','TAHUNAKADEMIK'),array('class'=>'form-control select2me','disabled'=>true)); ?>
               
                </div>
                
                    <div class="col-md-1">
                        <?php echo $form->labelEx($model,'semester',array('class'=>'control-label'));?>
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
		<?php echo $form->labelEx($model,'INSTANSIPK',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-4">
		<?php echo $form->textField($model,'INSTANSIPK',array('size'=>60,'maxlength'=>200,'style'=>"text-transform:capitalize",'class'=>'form-control','disabled'=>true)); ?>
		<?php echo $form->error($model,'INSTANSIPK'); ?>
                </div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'ALAMATINSTANSIPK',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-6">
		<?php echo $form->textField($model,'ALAMATINSTANSIPK',array('size'=>60,'maxlength'=>400,'style'=>"text-transform:capitalize",'class'=>'form-control','disabled'=>true)); ?>
		<?php echo $form->error($model,'ALAMATINSTANSIPK'); ?>
                </div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'KOTAINSTANSIPK',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-3">
		<?php echo $form->textField($model,'KOTAINSTANSIPK',array('size'=>60,'maxlength'=>100,'style'=>"text-transform:capitalize",'class'=>'form-control','disabled'=>true)); ?>
		<?php echo $form->error($model,'KOTAINSTANSIPK'); ?>
                </div>
	</div>
        
       
	
	 <div class="radio-list">
            
                <?php echo $form->labelEx($model,'Set Persetujuan Surat/Generate Pelaksanaan Praktik Kerja',array('class'=>'col-md-3 control-label'));?>
                <?php
                 echo $form->radioButtonList($model,
                         'ACCPERPK',array('Approve'=>'Approve',
                             'Not Approved'=>'Not Approved'));
                ?>
                <?php echo $form->error($model,'ACCPERPK'); ?>
           
        </div>
	</div>
	
	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Update',array('class'=>'btn green')); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>
<!-- form -->