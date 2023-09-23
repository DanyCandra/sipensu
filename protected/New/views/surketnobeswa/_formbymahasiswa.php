   
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'surketnobeswa-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'form-horizontal','role'=>'form'),
)); ?>

	<div class="form-body">
	<?php echo $form->errorSummary($model,'<b>Silahkan perbaiki kesalahan berikut :</b> ','',array('class'=>'alert alert-danger')); ?>
           
        <div class="form-group">
		<?php echo $form->labelEx($model,'IDJENISSURAT',array('class'=>'col-md-3 control-label')); ?>
                <!--<div class="col-md-1">
		<?php //echo $form->textField($model,'IDJENISSURAT',array('size'=>10,'maxlength'=>10,'class'=>'form-control','disabled'=>true)); ?>
                </div>-->
                <div class="col-md-5">
                <?php echo $form->labelEx($model,'Surat Keterangan Tidak Menerima Beasiswa',array('size'=>50,'maxlength'=>50,'class'=>'form-control','disabled'=>true)); ?>
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
		<?php //echo $form->labelEx($model,'NOSURKETNOBESWA',array('class'=>'col-md-3 control-label')); ?>
		<?php //echo $form->textField($model,'NOSURKETNOBESWA',array('size'=>50,'maxlength'=>50)); ?>
		<?php //echo $form->error($model,'NOSURKETNOBESWA'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'NIM',array('class'=>'col-md-3 control-label')); ?>
		<?php //echo $form->textField($model,'NIM',array('size'=>10,'maxlength'=>10)); ?>
		<?php //echo $form->error($model,'NIM'); ?>
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
                    <?php echo CHtml::activeDropDownList($model, 'NIM', CHtml::listData($results,  'NIM','NAMA'),array('class'=>'form-control','disabled'=>true),
                            array(
                                'class'=>'form-control ',
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
		<?php echo $form->labelEx($model,'KEPERLUANSURKETNOBESWA',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-9">
		<?php echo $form->textField($model,'KEPERLUANSURKETNOBESWA',array('size'=>250,'maxlength'=>250,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'KEPERLUANSURKETNOBESWA'); ?>
                </div>
	</div>

	<!--<div class="row">
		<?php //echo $form->labelEx($model,'KETERANGANSURKETNOBESWA',array('class'=>'col-md-3 control-label')); ?>
		<?php //echo $form->textArea($model,'KETERANGANSURKETNOBESWA',array('rows'=>6, 'cols'=>50)); ?>
		<?php //echo $form->error($model,'KETERANGANSURKETNOBESWA'); ?>
	</div>

	<div class="form-group">
		<?php //echo $form->labelEx($model,'TGLSUBMITSURKETNOBESWA',array('class'=>'col-md-3 control-label')); ?>
            <div class="col-md-2">
		<?php //echo $form->textField($model,'TGLSUBMITSURKETNOBESWA'); ?>
		<?php //echo $form->error($model,'TGLSUBMITSURKETNOBESWA'); ?>
            </div>
	</div>-->

	</div>
	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Update',array('class'=>'btn btn-primary waves-effect waves-float waves-light')); ?>
		<?php //if(!$model->isNewRecord) echo CHtml::link('Manage ',array('surketnobeswa/admin','IDSURKETNOBESWA'=>$model->IDSURKETNOBESWA),array('class'=>'btn yellow')) ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

<!-- form -->