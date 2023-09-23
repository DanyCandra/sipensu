<?php
/* @var $this DetailsurketnobeswaController */
/* @var $model Detailsurketnobeswa */
/* @var $form CActiveForm */
?>
<div class="form-body">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
        'htmlOptions'=>array('class'=>'form-horizontal','role'=>'form'),
)); ?>
         <div class="form-group">
		<?php echo $form->labelEx($model,'Nomor Surat',array('class'=>'col-md-3 control-label')); ?>
		<div class="col-md-2">
		<?php echo $form->dropDownList($model,'IDSURKETNOBESWA',
		   CHtml::listData(Surketnobeswa::model()->findAll(), 'IDSURKETNOBESWA','NOSURKETNOBESWA'),array('empty'=>'----Pilih----','class'=>'form-control select2me')); ?>
             
		</div>
	</div>
         <!--<div class="form-group">
		<?php //echo $form->labelEx($model,'Nama Pemohon',array('class'=>'col-md-3 control-label')); ?>
		<div class="col-md-4">
		<?php //echo $form->dropDownList($model,'IDDETAILSURKETNOBESWA',
		  // CHtml::listData(Detailsurketnobeswa::model()->findAll(array('order'=>'IDDETAILSURKETNOBESWA')), 'IDDETAILSURKETNOBESWA','iDSURKETNOBESWA.nIM.NAMA'),array('empty'=>'----Pilih Nama----','class'=>'form-control select2me')); ?>
             
		</div>
	</div>
	<div class="row">
		<?php //echo $form->label($model,'IDDETAILSURKETNOBESWA'); ?>
		<?php //echo $form->textField($model,'IDDETAILSURKETNOBESWA'); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'IDSURKETNOBESWA'); ?>
		<?php //echo $form->textField($model,'IDSURKETNOBESWA'); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'IDGROUPS'); ?>
		<?php //echo $form->textField($model,'IDGROUPS',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	

	<div class="row">
		<?php //echo $form->label($model,'TGLSUBMITDETAILSURKETNOBESWA'); ?>
		<?php //echo $form->textField($model,'TGLSUBMITDETAILSURKETNOBESWA'); ?>
	</div>-->

	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton('Search'); ?>
                </div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->