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
		<?php echo $form->labelEx($model,'JUDULPM',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-6">
		<?php echo $form->textField($model,'JUDULPM',array('size'=>60,'maxlength'=>500,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'JUDULPM'); ?>
                </div>
	</div>

	<!--
        <div class="row">
		<?php echo $form->label($model,'NIP'); ?>
		<?php echo $form->textField($model,'NIP',array('size'=>18,'maxlength'=>18)); ?>
	</div>
        <div class="row">
		<?php echo $form->label($model,'IDPM'); ?>
		<?php echo $form->textField($model,'IDPM'); ?>
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
		<?php echo $form->label($model,'IDJABATANAKADEMIK'); ?>
		<?php echo $form->textField($model,'IDJABATANAKADEMIK'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NOSURATPM'); ?>
		<?php echo $form->textField($model,'NOSURATPM',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'JUDULPM'); ?>
		<?php echo $form->textField($model,'JUDULPM',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TGLDILAKSANAKANPM'); ?>
		<?php echo $form->textField($model,'TGLDILAKSANAKANPM'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'INSTANSIPM'); ?>
		<?php echo $form->textField($model,'INSTANSIPM',array('size'=>60,'maxlength'=>80)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ALAMATINSTANSIPM'); ?>
		<?php echo $form->textArea($model,'ALAMATINSTANSIPM',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'KETERANGANPM'); ?>
		<?php echo $form->textField($model,'KETERANGANPM',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TGLSUBMITPM'); ?>
		<?php echo $form->textField($model,'TGLSUBMITPM'); ?>
	</div>-->

	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton('Search'); ?>
                </div>
	</div>


<?php $this->endWidget(); ?>

</div><!-- search-form -->