<?php
/* @var $this DetailsurijinpnController */
/* @var $model Detailsurijinpn */
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
		<?php echo $form->dropDownList($model,'IDIJINPN',
		   CHtml::listData(Surijinpn::model()->findAll(), 'IDIJINPN','NOSURATIJINPN'),array('empty'=>'----Pilih----','class'=>'form-control select2me')); ?>
             
		</div>
	</div>
       <!-- <div class="form-group">
		<?php //echo $form->labelEx($model,'Instansi',array('class'=>'col-md-3 control-label')); ?>
		<div class="col-md-4">
		<?php //echo $form->dropDownList($model,'IDDETAILSURIJINPN',
		   //CHtml::listData(Detailsurijinpn::model()->findAll(array('order'=>'IDDETAILSURIJINPN')), 'IDDETAILSURIJINPN','iDIJINPN.INSTANSIIJINPN'),array('empty'=>'----Pilih Nama----','class'=>'form-control select2me')); ?>
             
		</div>
	</div>
         
        
	<div class="row">
		<?php //echo $form->label($model,'IDDETAILSURIJINPN'); ?>
		<?php //echo $form->textField($model,'IDDETAILSURIJINPN'); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'IDIJINPN'); ?>
		<?php //echo $form->textField($model,'IDIJINPN'); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'IDGROUPS'); ?>
		<?php //echo $form->textField($model,'IDGROUPS',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	

	<div class="row">
		<?php //echo $form->label($model,'TGLSUBMITDETAILSURIJINPN'); ?>
		<?php //echo $form->textField($model,'TGLSUBMITDETAILSURIJINPN'); ?>
	</div>-->

	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton('Search'); ?>
                </div>
	</div>


<?php $this->endWidget(); ?>

</div><!-- search-form -->