<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'NIP'); ?>
		<?php echo $form->textField($model,'NIP',array('size'=>18,'maxlength'=>18)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IDFAKULTAS'); ?>
		<?php echo $form->textField($model,'IDFAKULTAS',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IDJURUSAN'); ?>
		<?php echo $form->textField($model,'IDJURUSAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IDJENDER'); ?>
		<?php echo $form->textField($model,'IDJENDER',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NIDN'); ?>
		<?php echo $form->textField($model,'NIDN',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NAMA2'); ?>
		<?php echo $form->textField($model,'NAMA2',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TEMPATLAHIR'); ?>
		<?php echo $form->textField($model,'TEMPATLAHIR',array('size'=>60,'maxlength'=>80)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TGLLAHIR2'); ?>
		<?php echo $form->textField($model,'TGLLAHIR2'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->