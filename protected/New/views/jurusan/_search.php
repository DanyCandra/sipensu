<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'IDJURUSAN'); ?>
		<?php echo $form->textField($model,'IDJURUSAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NAMAJURUSAN'); ?>
		<?php echo $form->textField($model,'NAMAJURUSAN',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->