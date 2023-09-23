<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'groupsurmag-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'form-horizontal','role'=>'form'),
)); ?>
        <div class="form-body">
	<?php echo $form->errorSummary($model,'<b>Silakan perbaiki kesalahan berikut :</b> ','',array('class'=>'alert alert-danger')); ?>

	<!--<div class="row">
		<?php //echo $form->labelEx($model,'IDSURMAG',array('class'=>'col-md-3 control-label')); ?>
		<?php //echo $form->textField($model,'IDSURMAG'); ?>
		<?php //echo $form->error($model,'IDSURMAG'); ?>
	</div>-->
         <div class="form-group">
		<?php echo $form->labelEx($model,'Instansi Tempat Magang',array('class'=>'col-md-3 control-label')); ?>
		<div class="col-md-5">
		<?php echo $form->dropDownList($model,'IDSURMAG',
		   CHtml::listData(Surmag::model()->findAll(array('order'=>'IDSURMAG')), 'IDSURMAG','INSTANSISURMAG'),array('class'=>'form-control ','readonly'=>true)); ?>
                <?php echo $form->error($model,'IDSURMAG'); ?>
		</div>
	</div>
        <hr>
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
		<?php echo $form->labelEx($model,'NOURUTGROUPSURMAG',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-2">
		<?php echo $form->textField($model,'NOURUTGROUPSURMAG',array('size'=>50,'maxlength'=>50,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'NOURUTGROUPSURMAG'); ?>
                </div>
	</div>
	
	<!--<div class="row">
		<?php //echo $form->labelEx($model,'NOURUTGROUPSURMAG',array('class'=>'col-md-3 control-label')); ?>
		<?php //echo $form->textField($model,'NOURUTGROUPSURMAG'); ?>
		<?php //echo $form->error($model,'NOURUTGROUPSURMAG'); ?>
	</div>-->

	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Update',array('class'=>'btn green')); ?>
		<?php //if(!$model->isNewRecord) echo CHtml::link('Manage ',array('groupsurmag/admin','IDGROUPSURMAG'=>$model->IDGROUPSURMAG),array('class'=>'btn yellow')) ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

<!-- form -->