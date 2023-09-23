<?php
/* @var $this FileuploadfotoController */
/* @var $model Fileuploadfoto */
/* @var $form CActiveForm */
?>

<div class="form-body">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
        'htmlOptions'=>array('class'=>'form-horizontal','role'=>'form'),
)); ?>

	<!--<div class="row">
		<?php //echo $form->label($model,'IDFILEFOTO'); ?>
		<?php //echo $form->textField($model,'IDFILEFOTO'); ?>
	</div>-->

	<div class="form-group">
		<?php echo $form->labelEx($model,'NIM',array('class'=>'col-md-3 control-label'));?>
                 <div class="col-md-2">
		<?php echo $form->textField($model,'NIM',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
                 </div>
	</div>

	<!--<div class="row">
		<?php //echo $form->label($model,'FILEFOTO'); ?>
		<?php //echo $form->textField($model,'FILEFOTO',array('size'=>60,'maxlength'=>100)); ?>
	</div>-->

	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton('Search'); ?>
                </div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->