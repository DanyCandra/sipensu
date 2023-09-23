<div class="wide form">
<div class="form-body">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
        'htmlOptions'=>array('class'=>'form-horizontal','role'=>'form'),
)); ?>
        
        <div class="form-group">
		<?php echo $form->labelEx($model,'JUDULPN',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-6">
		<?php echo $form->textField($model,'JUDULPN',array('size'=>60,'maxlength'=>500,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'JUDULPN'); ?>
                </div>
	</div>
	<!--<div class="row">
		<?php echo $form->label($model,'IDPN'); ?>
		<?php echo $form->textField($model,'IDPN'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IDJENISSURAT'); ?>
		<?php echo $form->textField($model,'IDJENISSURAT'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NOSURATPN'); ?>
		<?php echo $form->textField($model,'NOSURATPN',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'JUDULPN'); ?>
		<?php echo $form->textField($model,'JUDULPN',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'WAKTUDATAPN'); ?>
		<?php echo $form->textField($model,'WAKTUDATAPN',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TGLSUBMITPN'); ?>
		<?php echo $form->textField($model,'TGLSUBMITPN'); ?>
	</div>-->

	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton('Search'); ?>
                </div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
</div>