<?php
/* @var $this GoldarahController */
/* @var $model Goldarah */
/* @var $form CActiveForm */
?>

<div class="form-body">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
        'htmlOptions'=>array('class'=>'form-horizontal','role'=>'form'),
)); ?>

	<!--<div class="row">
		<?php //echo $form->label($model,'IDGOLDAR'); ?>
		<?php //echo $form->textField($model,'IDGOLDAR'); ?>
	</div>-->

	<div class="form-group">
		<?php echo $form->label($model,'NAMAGOLDAR',array('class'=>'col-md-3 control-label')); ?>
             <div class="col-md-2">
		<?php echo $form->textField($model,'NAMAGOLDAR',array('size'=>15,'maxlength'=>15,'class'=>'form-control')); ?>
             </div>
	</div>

	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton('Search'); ?>
                </div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->