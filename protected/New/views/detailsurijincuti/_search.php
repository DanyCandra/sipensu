<?php
/* @var $this DetailsurijincutiController */
/* @var $model Detailsurijincuti */
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
		<?php echo $form->dropDownList($model,'IDIJINCUTI',
		   CHtml::listData(Surijincuti::model()->findAll(), 'IDIJINCUTI','NOSURATIJINCUTI'),array('empty'=>'----Pilih----','class'=>'form-control select2me')); ?>
             
		</div>
	</div>
	

	
        <!--<div class="form-group">
		<?php //echo $form->label($model,'IDDETAILSURIJINCUTI'); ?>
		<?php //echo $form->textField($model,'IDDETAILSURIJINCUTI'); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'IDGROUPS'); ?>
		<?php //echo $form->textField($model,'IDGROUPS',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	

	<div class="row">
		<?php //echo $form->label($model,'TGLSUBMITDETAILSURIJINCUTI'); ?>
		<?php //echo $form->textField($model,'TGLSUBMITDETAILSURIJINCUTI'); ?>
	</div>-->

	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton('Search'); ?>
                </div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->