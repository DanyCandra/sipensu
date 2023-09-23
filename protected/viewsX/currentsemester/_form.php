<?php
/* @var $this CurrentsemesterController */
/* @var $model Currentsemester */
/* @var $form CActiveForm */
?>

    
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'currentsemester-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'form-horizontal','role'=>'form'),
)); ?>    

	<div class="form-body">
	<?php echo $form->errorSummary($model,'<b>Silakan perbaiki kesalahan berikut :</b> ','',array('class'=>'alert alert-danger')); ?>

<!--
	<div class="form-group">
                <?php echo $form->labelEx($model,'IDTASEMESTER',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-1">
		<?php echo $form->textField($model,'IDTASEMESTER',array('size'=>11,'maxlength'=>11,'class'=>'form-control','disabled'=>true)); ?>
		<?php echo $form->error($model,'IDTASEMESTER'); ?>
                </div>
	</div>-->
            
	<div class="form-group">
		<?php echo $form->labelEx($model,'TAHUNAKADEMIK',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-2">
		<?php echo $form->textField($model,'TAHUNAKADEMIK',array('size'=>8,'maxlength'=>8,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'TAHUNAKADEMIK'); ?>
                </div>   
	</div>
        <div class="form-group">
		<?php echo $form->labelEx($model,'KETTAHUNAKADEMIK',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-3">
		<?php echo $form->textField($model,'KETTAHUNAKADEMIK',array('size'=>9,'maxlength'=>9,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'KETTAHUNAKADEMIK'); ?>
                </div>   
	</div>    
            
         <div class="radio-list">
            
                <?php echo $form->labelEx($model,'SEMESTER',array('class'=>'col-md-3 control-label'));?>
                <?php
                 echo $form->radioButtonList($model,
                         'SEMESTER',array('1'=>'1',
                             '2'=>'2'));
                ?>
                <?php echo $form->error($model,'SEMESTER'); ?>
           
        </div>  
            
            
        <div class="form-group">
		<?php echo $form->labelEx($model,'KETSEMESTER',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-2">
		<?php echo $form->textField($model,'KETSEMESTER',array('size'=>5,'maxlength'=>5,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'KETSEMESTER'); ?>
                </div>   
	</div> 
            
        <div class="radio-list">
            
                <?php echo $form->labelEx($model,'STATUSTASEMESTER',array('class'=>'col-md-3 control-label'));?>
                <?php
                 echo $form->radioButtonList($model,
                         'STATUSTASEMESTER',array('A'=>'AKTIF',
                             'T'=>'TIDAK AKTIF'));
                ?>
                <?php echo $form->error($model,'STATUSTASEMESTER'); ?>
           
        </div>      
            
	</div>
	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Update',array('class'=>'btn green')); ?>
		<?php if(!$model->isNewRecord) echo CHtml::link('Manage ',array('currentsemester/admin','IDTASEMESTER'=>$model->IDTASEMESTER),array('class'=>'btn yellow')) ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

<!-- form -->