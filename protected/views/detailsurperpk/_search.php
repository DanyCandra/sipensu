<?php
/* @var $this DetailsurperpkController */
/* @var $model Detailsurperpk */
/* @var $form CActiveForm */
?>

<div class="form-body">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
        'htmlOptions'=>array('class'=>'form-horizontal','role'=>'form'),
)); ?>

	<!--<div class="form-group">
		<?php //echo $form->label($model,'IDDETAILSURPERPK'); ?>
		<?php //echo $form->textField($model,'IDDETAILSURPERPK'); ?>
	</div>-->
        
        <div class="form-group">
		<?php echo $form->labelEx($model,'Nomor Surat',array('class'=>'col-md-3 control-label')); ?>
		<div class="col-md-2">
		<?php echo $form->dropDownList($model,'IDPK',
		   CHtml::listData(Surperpk::model()->findAll(), 'IDPK','NOSURATPK'),array('empty'=>'----Pilih----','class'=>'form-control select2me')); ?>
             
		</div>
	</div>
        <!--<div class="form-group">
		<?php //echo $form->labelEx($model,'Instansi Praktik Kerja',array('class'=>'col-md-3 control-label')); ?>
		<div class="col-md-4">
		<?php //echo $form->dropDownList($model,'IDDETAILSURPERPK',
		   //CHtml::listData(Detailsurperpk::model()->findAll(array('order'=>'IDDETAILSURPERPK')), 'IDDETAILSURPERPK','iDPK.INSTANSIPK'),array('empty'=>'----Pilih Instansi----','class'=>'form-control select2me')); ?>
             
		</div>
	</div>
	

	<div class="row">
		<?php //echo $form->label($model,'IDGROUPS'); ?>
		<?php //echo $form->textField($model,'IDGROUPS',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'TGLSUBMITDETAILSURPERPK'); ?>
		<?php //echo $form->textField($model,'TGLSUBMITDETAILSURPERPK'); ?>
	</div>-->

	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton('Search'); ?>
                </div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->