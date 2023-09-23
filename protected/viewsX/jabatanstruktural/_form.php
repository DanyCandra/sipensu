<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'jabatanstruktural-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'form-horizontal','role'=>'form'),
)); ?>
        <div class="form-body">
	<?php echo $form->errorSummary($model,'<b>Silakan perbaiki kesalahan berikut :</b> ','',array('class'=>'alert alert-danger')); ?>

	<!--<div class="form-group">
		<?php //echo $form->labelEx($model,'IDJABATANSTRUKTURAL',array('class'=>'col-md-3 control-label')); ?>
		<div class="col-md-2">
		<?php //echo $form->textField($model,'IDJABATANSTRUKTURAL',array('size'=>11,'maxlength'=>11,'class'=>'form-control')); ?>
		<?php //echo $form->error($model,'IDJABATANSTRUKTURAL'); ?>
                </div>
	</div>-->
            
        <div class="form-group">
		<?php echo $form->labelEx($model,'IDJABATANSURAT',array('class'=>'col-md-3 control-label')); ?>
		<div class="col-md-2">
		<?php echo $form->textField($model,'IDJABATANSURAT',array('size'=>20,'maxlength'=>20,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'IDJABATANSURAT'); ?>
                </div>
	</div>     

	<div class="form-group">
		<?php echo $form->labelEx($model,'NAMA PEJABAT',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-4">
		<?php echo $form->dropDownList($model,'NIP',
		CHtml::listData(Msdos::model()->findAll(array('order'=>'NIP')), 'NIP', 'NAMA2'),array('empty'=>'----Pilih Nama----','class'=>'form-control select2me')); ?>
		<?php echo $form->error($model,'NIP'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'NAMAJABATANSTRUKTURAL',array('class'=>'col-md-3 control-label')); ?>
		<div class="col-md-4">
		<?php echo $form->textField($model,'NAMAJABATANSTRUKTURAL',array('size'=>60,'maxlength'=>100,'class'=>'form-control ')); ?>
		<?php echo $form->error($model,'NAMAJABATANSTRUKTURAL'); ?>
                </div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'TAHUN',array('class'=>'col-md-3 control-label')); ?>
		<div class="col-md-2">
		<?php echo $form->textField($model,'TAHUN',array('size'=>11,'maxlength'=>11,'class'=>'form-control ')); ?>
		<?php echo $form->error($model,'TAHUN'); ?>
                </div>
	</div>
            
        <div class="form-group">
            <?php echo $form->labelEx($model,'Pangkat & Golongan',array('class'=>'col-md-3 control-label')); ?>
             <div class="col-md-4">
		
                 
                <?php
                    $connection = Yii::app()->db;
                    $sql = "select IDPANGGOL,  CONCAT(PANGKAT,' - ',GOL) as GOL from panggol";
                    $command = $connection->createCommand($sql);
                    $results = $command->queryAll();
                    ?>
                    <?php echo CHtml::activeDropDownList($model, 'IDPANGGOL', CHtml::listData($results,  'IDPANGGOL','GOL'),
                            array(
                                'class'=>'form-control select2me',
                                'ajax' => array(
                                'type'=>'POST', //request type
                                
                                //Style: CController::createUrl('currentController/methodToCall')
                              
                                //'data'=>'js:javascript statement' 
                                //leave out the data key to pass all form values through
                                )
                                
                                )); ?> 
		<?php echo $form->error($model,'IDPANGGOL'); ?>
		</div>
	</div> 
            
       <div class="form-group">
		<?php echo $form->labelEx($model,'Jabatan Akademik',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-4">
		<?php echo $form->dropDownList($model,'IDJABATANAKADEMIK',
		CHtml::listData(Jabatanakademik::model()->findAll(array('order'=>'IDJABATANAKADEMIK')), 'IDJABATANAKADEMIK', 'NAMAJABATANAKADEMIK'),array('empty'=>'----Pilih Jabatan Akademik----','class'=>'form-control select2me')); ?>
		<?php echo $form->error($model,'IDJABATANAKADEMIK'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'NOURUTJABATANSTRUKTURAL',array('class'=>'col-md-3 control-label')); ?>
		<div class="col-md-2">
		<?php echo $form->textField($model,'NOURUTJABATANSTRUKTURAL',array('size'=>5,'maxlength'=>5,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'NOURUTJABATANSTRUKTURAL'); ?>
                </div>
	</div>


	</div>
	
	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Update',array('class'=>'btn green')); ?>
		<?php if(!$model->isNewRecord) echo CHtml::link('Manage Jabatan Struktural',array('jabatanstruktural/admin','IDJABATANSTRUKTURAL'=>$model->IDJABATANSTRUKTURAL),array('class'=>'btn yellow')) ?>
		</div>
	</div>
	

<?php $this->endWidget(); ?>