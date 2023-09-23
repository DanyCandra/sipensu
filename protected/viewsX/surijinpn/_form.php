<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'surijinpn-form',
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
            <?php echo $form->labelEx($model,'Surat Ijin Penelitian',array('size'=>50,'maxlength'=>50,'class'=>'form-control','disabled'=>true)); ?>
		
		
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
        <HR>    

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

	<!--<div class="row">
		<?php //echo $form->labelEx($model,'NOSURATIJINPN',array('class'=>'col-md-3 control-label')); ?>
		<?php //echo $form->textField($model,'NOSURATIJINPN',array('size'=>50,'maxlength'=>50)); ?>
		<?php //echo $form->error($model,'NOSURATIJINPN'); ?>
	</div>-->

	<div class="form-group">
		<?php echo $form->labelEx($model,'INSTANSIIJINPN',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-5">
		<?php echo $form->textField($model,'INSTANSIIJINPN',array('size'=>60,'maxlength'=>80,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'INSTANSIIJINPN'); ?>
                </div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'ALAMATINSTANSIIJINPN',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-8">
		<?php echo $form->textField($model,'ALAMATINSTANSIIJINPN',array('size'=>60,'maxlength'=>250,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'ALAMATINSTANSIIJINPN'); ?>
                </div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'KOTAINSTANSIIJINPN',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-3">
		<?php echo $form->textField($model,'KOTAINSTANSIIJINPN',array('size'=>60,'maxlength'=>100,'style'=>"text-transform:capitalize",'class'=>'form-control')); ?>
		<?php echo $form->error($model,'KOTAINSTANSIIJINPN'); ?>
                </div>
	</div>
        
      

	
        
        <div class="form-group">
		<?php echo $form->labelEx($model,'JUDULSKRIPSIIJINPN',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-8">
		<?php echo $form->textField($model,'JUDULSKRIPSIIJINPN',array('size'=>800,'maxlength'=>1000,'style'=>"text-transform:uppercase",'class'=>'form-control')); ?>
		<?php echo $form->error($model,'JUDULSKRIPSIIJINPN'); ?>
                </div>
	</div>

	<!--<div class="form-group">
		<?php //echo $form->labelEx($model,'KETERANGANIJINPN',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-5">
		<?php //echo $form->textArea($model,'KETERANGANIJINPN',array('rows'=>6, 'cols'=>50,'class'=>'form-control')); ?>
		<?php //echo $form->error($model,'KETERANGANIJINPN'); ?>
                </div>
	</div>

	<div class="form-group">
		<?php //echo $form->labelEx($model,'TGLSUBMITIJINPN',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-5">
		<?php //echo $form->textField($model,'TGLSUBMITIJINPN'); ?>
		<?php //echo $form->error($model,'TGLSUBMITIJINPN'); ?>
                </div>
	</div>-->
         <div class="form-group has-success">
		<?php echo $form->labelEx($model,'KETERANGANIJINPN',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-5">
                      <div class="input-icon right">
                        <i class="fa fa-check tooltips" data-container="body" data-original-titlr="You look OK!"></i>
                    </div>
		<?php echo $form->textArea($model,'KETERANGANIJINPN',array('rows'=>6, 'cols'=>50,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'KETERANGANIJINPN'); ?>
                </div>
	</div>

	</div>
	
	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Update',array('class'=>'btn green')); ?>
		<?php //if(!$model->isNewRecord) echo CHtml::link('Manage ',array('surijinpn/admin','IDIJINPN'=>$model->IDIJINPN),array('class'=>'btn yellow')) ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

<!-- form -->