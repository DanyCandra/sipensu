<?php
/* @var $this DetailaktifcutiController */
/* @var $model Detailaktifcuti */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
        'htmlOptions'=>array('class'=>'form-horizontal','role'=>'form'),
)); ?>
       
        <div class="form-group">
		<?php echo $form->labelEx($model,'Nomor Surat',array('class'=>'col-md-3 control-label')); ?>
		<div class="col-md-2">
		<?php echo $form->dropDownList($model,'IDAKTIFCUTI',
		   CHtml::listData(Suraktifcuti::model()->findAll(), 'IDAKTIFCUTI','NOSURATIJINAKTIFCUTI'),array('empty'=>'----Pilih----','class'=>'form-control select2me')); ?>
             
		</div>
	</div>

	<!--<div class="row">
		<?php //echo $form->label($model,'IDDETAILSURAKTIFCUTI'); ?>
		<?php //echo $form->textField($model,'IDDETAILSURAKTIFCUTI'); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'IDAKTIFCUTI'); ?>
		<?php //echo $form->textField($model,'IDAKTIFCUTI'); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'IDGROUPS'); ?>
		<?php //echo $form->textField($model,'IDGROUPS',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	

	<div class="row">
		<?php //echo $form->label($model,'TGLSUBMITDETAILSURAKTIFCUTI'); ?>
		<?php //echo $form->textField($model,'TGLSUBMITDETAILSURAKTIFCUTI'); ?>
	</div>-->

	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton('Search'); ?>
                </div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->