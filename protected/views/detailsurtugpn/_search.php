<div class="form-body">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
        'htmlOptions'=>array('class'=>'form-horizontal','role'=>'form'),
)); ?>

	<!--<div class="row">
		<?php //echo $form->label($model,'IDDETAILSURTUGPN'); ?>
		<?php //echo $form->textField($model,'IDDETAILSURTUGPN'); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'IDPN'); ?>
		<?php //echo $form->textField($model,'IDPN'); ?>
	</div>-->
        <div class="form-group">
		<?php echo $form->labelEx($model,'Nomor Surat',array('class'=>'col-md-3 control-label')); ?>
		<div class="col-md-2">
		<?php echo $form->dropDownList($model,'IDPN',
		   CHtml::listData(Surtugpn::model()->findAll(), 'IDPN','NOSURATPN'),array('empty'=>'----Pilih----','class'=>'form-control select2me')); ?>
             
		</div>
	</div>
        
        
       <!-- <div class="form-group">
		<?php //echo $form->labelEx($model,'Judul Penelitian',array('class'=>'col-md-3 control-label')); ?>
		<div class="col-md-8">
		<?php //echo $form->dropDownList($model,'IDDETAILSURTUGPN',
		   //CHtml::listData(Detailsurtugpn::model()->findAll(array('order'=>'IDDETAILSURTUGPN')), 'IDDETAILSURTUGPN','iDPN.JUDULPN'),array('empty'=>'----Pilih Judul Penelitian----','class'=>'form-control select2me')); ?>
             
		</div>
	</div>
	
	<div class="row">
		<?php //echo $form->label($model,'TGLSUBMITDETAILSURTUGPN'); ?>
		<?php //echo $form->textField($model,'TGLSUBMITDETAILSURTUGPN'); ?>
	</div>-->

	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton('Search'); ?>
                </div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->