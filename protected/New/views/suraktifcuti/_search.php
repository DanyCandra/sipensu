<?php
/* @var $this SuraktifcutiController */
/* @var $model Suraktifcuti */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
        'htmlOptions'=>array('class'=>'form-horizontal','role'=>'form'),
)); ?>
        
         <!--<div class="form-group">
		<?php //echo $form->labelEx($model,'Nomor Surat',array('class'=>'col-md-3 control-label')); ?>
		<div class="col-md-2">
		<?php //echo $form->dropDownList($model,'IDIJINCUTI',
		   //CHtml::listData(Surijincuti::model()->findAll(), 'IDIJINCUTI','nIM.iDPRODI.NAMAPRODI'),array('empty'=>'----Pilih----','class'=>'form-control select2me')); ?>
             
		</div>
	</div>
	<div class="row">
		<?php //echo $form->label($model,'IDAKTIFCUTI'); ?>
		<?php //echo $form->textField($model,'IDAKTIFCUTI'); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'IDIJINCUTI'); ?>
		<?php //echo $form->textField($model,'IDIJINCUTI'); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'NOSURATIJINAKTIFCUTI'); ?>
		<?php //echo $form->textField($model,'NOSURATIJINAKTIFCUTI',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'SEMESTER'); ?>
		<?php //echo $form->textField($model,'SEMESTER',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'TAHUNAKADEMIK'); ?>
		<?php //echo $form->textField($model,'TAHUNAKADEMIK',array('size'=>9,'maxlength'=>9)); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'KETERANGANAKTIFCUTI'); ?>
		<?php //echo $form->textField($model,'KETERANGANAKTIFCUTI',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'STATUS'); ?>
		<?php //echo $form->textField($model,'STATUS',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'NIP'); ?>
		<?php //echo $form->textField($model,'NIP',array('size'=>18,'maxlength'=>18)); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'TGLSUBMITAKTIFCUTI'); ?>
		<?php //echo $form->textField($model,'TGLSUBMITAKTIFCUTI'); ?>
	</div>-->

	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton('Search'); ?>
                </div>
	</div>


<?php $this->endWidget(); ?>

</div><!-- search-form -->