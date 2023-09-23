<?php
/* @var $this SurmagController */
/* @var $model Surmag */
/* @var $form CActiveForm */
?>

<div class="form-body">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
        'htmlOptions'=>array('class'=>'form-horizontal','role'=>'form'),
)); ?>
        
         <div class="form-group">
	<!--<div class="row">
		<?php //echo $form->label($model,'IDSURMAG'); ?>
		<?php //echo $form->textField($model,'IDSURMAG'); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'IDJENISSURAT'); ?>
		<?php //echo $form->textField($model,'IDJENISSURAT'); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'NOSURMAG'); ?>
		<?php //echo $form->textField($model,'NOSURMAG',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'INSTANSISURMAG'); ?>
		<?php //echo $form->textField($model,'INSTANSISURMAG',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'ALAMATINSTANSISURMAG'); ?>
		<?php //echo $form->textField($model,'ALAMATINSTANSISURMAG',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'SEMESTERSURMAG'); ?>
		<?php //echo $form->textField($model,'SEMESTERSURMAG',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'THAKADEMIKSURMAG'); ?>
		<?php //echo $form->textField($model,'THAKADEMIKSURMAG',array('size'=>9,'maxlength'=>9)); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'KETERANGANSURMAG'); ?>
		<?php //echo $form->textArea($model,'KETERANGANSURMAG',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'TGLSUBMITSURMAG'); ?>
		<?php //echo $form->textField($model,'TGLSUBMITSURMAG'); ?>
	</div>-->

	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton('Search'); ?>
                </div>
	</div>


<?php $this->endWidget(); ?>

</div><!-- search-form -->