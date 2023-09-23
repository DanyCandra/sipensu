<?php
/* @var $this SurijinpnController */
/* @var $model Surijinpn */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
        'htmlOptions'=>array('class'=>'form-horizontal','role'=>'form'),
)); ?>
         <div class="form-group">
		<?php echo $form->labelEx($model,'Program Studi',array('class'=>'col-md-3 control-label')); ?>
		<div class="col-md-4">
		<?php echo $form->dropDownList($model,'cariprodi',
		   CHtml::listData(Prodi::model()->findAll(array('order'=>'IDPRODI')), 'IDPRODI','NAMAPRODI'),array('empty'=>'----Pilih Prodi----','class'=>'form-control select2me')); ?>
             
		</div>
	</div>  
	<!--<div class="row">
		<?php //echo $form->label($model,'IDIJINPN'); ?>
		<?php //echo $form->textField($model,'IDIJINPN'); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'IDJENISSURAT'); ?>
		<?php //echo $form->textField($model,'IDJENISSURAT'); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'NIM'); ?>
		<?php //echo $form->textField($model,'NIM',array('size'=>18,'maxlength'=>18)); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'NOSURATIJINPN'); ?>
		<?php //echo $form->textField($model,'NOSURATIJINPN',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'INSTANSIIJINPN'); ?>
		<?php //echo $form->textField($model,'INSTANSIIJINPN',array('size'=>60,'maxlength'=>80)); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'ALAMATINSTANSIIJINPN'); ?>
		<?php //echo $form->textField($model,'ALAMATINSTANSIIJINPN',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'KOTAINSTANSIIJINPN'); ?>
		<?php //echo $form->textField($model,'KOTAINSTANSIIJINPN',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'IDTASEMESTER'); ?>
		<?php //echo $form->textField($model,'SEMESTER',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	

	<div class="row">
		<?php //echo $form->label($model,'KETERANGANIJINPN'); ?>
		<?php //echo $form->textArea($model,'KETERANGANIJINPN',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'TGLSUBMITIJINPN'); ?>
		<?php //echo $form->textField($model,'TGLSUBMITIJINPN'); ?>
	</div>-->

	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton('Search'); ?>
                </div>
	</div>


<?php $this->endWidget(); ?>

</div><!-- search-form -->