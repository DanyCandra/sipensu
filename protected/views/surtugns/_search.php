<div class="wide form">
<div class="form-body">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
        'htmlOptions'=>array('class'=>'form-horizontal','role'=>'form'),
)); ?>
        <div class="form-group">
		<?php echo $form->labelEx($model,'Nama',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-5">
		<?php echo $form->dropDownList($model,'NIP',
		CHtml::listData(Msdos::model()->findAll(array('order'=>'NAMA2')), 'NIP', 'NAMA2'),array('empty'=>'----Pilih Dosen----','class'=>'form-control select2me')); ?>
		<?php echo $form->error($model,'NIP'); ?>
		</div>
	</div>
        <div class="form-group">
		<?php echo $form->labelEx($model,'INSTANSINS',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-4">
		<?php echo $form->textField($model,'INSTANSINS',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'INSTANSINS'); ?>
                </div>
	</div>
	<!--<div class="row">
		<?php echo $form->label($model,'IDSURTUGNS'); ?>
		<?php echo $form->textField($model,'IDSURTUGNS'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NIP'); ?>
		<?php echo $form->textField($model,'NIP',array('size'=>18,'maxlength'=>18)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IDJABATANAKADEMIK'); ?>
		<?php echo $form->textField($model,'IDJABATANAKADEMIK'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IDJENISSURAT'); ?>
		<?php echo $form->textField($model,'IDJENISSURAT'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IDPANGGOL'); ?>
		<?php echo $form->textField($model,'IDPANGGOL'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NOSURTUGNS'); ?>
		<?php echo $form->textField($model,'NOSURTUGNS',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ISISURTUGNS'); ?>
		<?php echo $form->textField($model,'ISISURTUGNS',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'INSTANSINS'); ?>
		<?php echo $form->textField($model,'INSTANSINS',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ALAMATINSTANSINS'); ?>
		<?php echo $form->textField($model,'ALAMATINSTANSINS',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TGLACARANS'); ?>
		<?php echo $form->textField($model,'TGLACARANS'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'KETERANGANNS'); ?>
		<?php echo $form->textField($model,'KETERANGANNS',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TGLSUBMITNS'); ?>
		<?php echo $form->textField($model,'TGLSUBMITNS'); ?>
	</div>-->

	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton('Search'); ?>
                </div>
	</div>

<?php $this->endWidget(); ?>

</div>
</div><!-- search-form -->