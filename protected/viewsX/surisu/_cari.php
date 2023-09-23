<?php
/* @var $this SurisuController */
/* @var $model Surisu */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
        'htmlOptions'=>array('class'=>'form-horizontal','role'=>'form'),
)); ?>
    
         <div class="form-group">
		<?php echo $form->labelEx($model,'INSTANSIISU',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-4">
		<?php echo $form->textField($model,'INSTANSIISU',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'INSTANSIISU'); ?>
                </div>
	</div>
        
        <div class="form-group">
		<?php echo $form->labelEx($model,'ALAMATINSTANSIISU',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-8">
		<?php echo $form->textField($model,'ALAMATINSTANSIISU',array('size'=>60,'maxlength'=>200,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'ALAMATINSTANSIISU'); ?>
                </div>
	</div>
	<!--<div class="row">
		<?php echo $form->label($model,'IDISU'); ?>
		<?php echo $form->textField($model,'IDISU'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IDJENISSURAT'); ?>
		<?php echo $form->textField($model,'IDJENISSURAT'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NOISU'); ?>
		<?php echo $form->textField($model,'NOISU',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'INSTANSIISU'); ?>
		<?php echo $form->textField($model,'INSTANSIISU',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ALAMATINSTANSIISU'); ?>
		<?php echo $form->textField($model,'ALAMATINSTANSIISU',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'KOTAINSTANSIISU'); ?>
		<?php echo $form->textField($model,'KOTAINSTANSIISU',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IDTASEMESTER'); ?>
		<?php echo $form->textField($model,'IDTASEMESTER',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	
	<div class="row">
		<?php echo $form->label($model,'KETERANGANISU'); ?>
		<?php echo $form->textArea($model,'KETERANGANISU',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TGLSUBMITISU'); ?>
		<?php echo $form->textField($model,'TGLSUBMITISU'); ?>
	</div>-->

	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton('Search'); ?>
                </div>
	</div>


<?php $this->endWidget(); ?>

</div><!-- search-form -->