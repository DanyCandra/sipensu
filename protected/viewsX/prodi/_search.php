<?php
/* @var $this ProdiController */
/* @var $model Prodi */
/* @var $form CActiveForm */
?>

<div class="form-body">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
        'htmlOptions'=>array('class'=>'form-horizontal','role'=>'form'),
)); ?>

	<!--<div class="row">
		<?php //echo $form->label($model,'IDPRODI'); ?>
		<?php //echo $form->textField($model,'IDPRODI',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'IDJENJANG'); ?>
		<?php //echo $form->textField($model,'IDJENJANG',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'IDFAKULTAS'); ?>
		<?php //echo $form->textField($model,'IDFAKULTAS'); ?>
	</div>-->

	<div class="form-group">
		<?php echo $form->labelEx($model,'NAMAPRODI',array('class'=>'col-md-3 control-label'));?>
                <div class="col-md-5">
		<?php echo $form->textField($model,'NAMAPRODI',array('size'=>60,'maxlength'=>80,'class'=>'form-control')); ?>
                </div>
	</div>

	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton('Search'); ?>
                </div>
	</div>

<?php $this->endWidget(); ?>

<!-- search-form -->
</div>