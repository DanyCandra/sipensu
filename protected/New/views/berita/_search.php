<?php
/* @var $this BeritaController */
/* @var $model Berita */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'IDBERITA'); ?>
		<?php echo $form->textField($model,'IDBERITA'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IDKATEGORI'); ?>
		<?php echo $form->textField($model,'IDKATEGORI'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'JUDUL'); ?>
		<?php echo $form->textField($model,'JUDUL',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ISI'); ?>
		<?php echo $form->textArea($model,'ISI',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ISPUBLISH'); ?>
		<?php echo $form->textField($model,'ISPUBLISH',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FILEIMAGE'); ?>
		<?php echo $form->textField($model,'FILEIMAGE',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HIT'); ?>
		<?php echo $form->textField($model,'HIT',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TGLSUBMIT'); ?>
		<?php echo $form->textField($model,'TGLSUBMIT'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SUMMARY'); ?>
		<?php echo $form->textArea($model,'SUMMARY',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->