<?php
/* @var $this MahasiswaController */
/* @var $model Mahasiswa */
/* @var $form CActiveForm */
?>

<div class="form-body">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
        'htmlOptions'=>array('class'=>'form-horizontal','role'=>'form'),
)); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'NIM',array('class'=>'col-md-3 control-label'));?>
                 <div class="col-md-2">
		<?php echo $form->textField($model,'NIM',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
                 </div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'NAMA',array('class'=>'col-md-3 control-label'));?>
                 <div class="col-md-6">
		<?php echo $form->textField($model,'NAMA',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
                 </div>
	</div>

	<!--<div class="row">
		<?php // echo $form->label($model,'TEMPATLAHIR'); ?>
		<?php // echo $form->textField($model,'TEMPATLAHIR',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php // echo $form->label($model,'TGLLAHIR'); ?>
		<?php // echo $form->textField($model,'TGLLAHIR',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php // echo $form->label($model,'NOHP'); ?>
		<?php // echo $form->textField($model,'NOHP',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php // echo $form->label($model,'EMAIL'); ?>
		<?php // echo $form->textField($model,'EMAIL',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php // echo $form->label($model,'ALAMATASAL'); ?>
		<?php // echo $form->textArea($model,'ALAMATASAL',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php // echo $form->label($model,'NAMAAYAH'); ?>
		<?php // echo $form->textField($model,'NAMAAYAH',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php // echo $form->label($model,'NAMAIBU'); ?>
		<?php // echo $form->textField($model,'NAMAIBU',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php // echo $form->label($model,'PENGHASILANAYAH'); ?>
		<?php // echo $form->textField($model,'PENGHASILANAYAH',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php // echo $form->label($model,'PENGHASILANIBU'); ?>
		<?php // echo $form->textField($model,'PENGHASILANIBU',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php // echo $form->label($model,'JMLTANGGUNGAN'); ?>
		<?php // echo $form->textField($model,'JMLTANGGUNGAN',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php // echo $form->label($model,'NAMAKABUPATEN'); ?>
		<?php // echo $form->textField($model,'NAMAKABUPATEN',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php // echo $form->label($model,'NAMAPROPINSI'); ?>
		<?php // echo $form->textField($model,'NAMAPROPINSI',array('size'=>30,'maxlength'=>30)); ?>
	</div>-->

	<div class="form-group">
		<?php echo $form->labelEx($model,'TAHUNANGKATAN',array('class'=>'col-md-3 control-label'));?>
                 <div class="col-md-2">
		<?php echo $form->textField($model,'TAHUNANGKATAN',array('size'=>4,'maxlength'=>4,'class'=>'form-control')); ?>
                 </div>
	</div>
        
        <div class="form-group">
                <?php echo $form->labelEx($model,'Program Studi',array('class'=>'col-md-3 control-label'));?>
                <div class="col-md-4">    
                 <?php echo $form->dropDownList($model,'IDPRODI',
                     
		   CHtml::listData(Prodi::model()->findAll(array('order'=>'IDPRODI')), 'IDPRODI','NAMAPRODI'),array('class'=>'form-control select2me')); ?>
                 </div> 
        </div>

	<!--<div class="row">
		<?php // echo $form->label($model,'IDAGAMA'); ?>
		<?php // echo $form->textField($model,'IDAGAMA'); ?>
	</div>

	<div class="row">
		<?php // echo $form->label($model,'IDPRODI'); ?>
		<?php // echo $form->textField($model,'IDPRODI',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php // echo $form->label($model,'IDGOLDAR'); ?>
		<?php // echo $form->textField($model,'IDGOLDAR'); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'IDJENDER'); ?>
		<?php // echo $form->textField($model,'IDJENDER',array('size'=>1,'maxlength'=>1)); ?>
	</div>-->

	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton('Search'); ?>
                    </div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->