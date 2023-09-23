<div class="form-body">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
        'htmlOptions'=>array('class'=>'form-horizontal','role'=>'form'),
)); ?>

	<!--<div class="row">
		<?php //echo $form->label($model,'IDDETAILSURTUGPM'); ?>
		<?php //echo $form->textField($model,'IDDETAILSURTUGPM'); ?>
	</div>-->

	<!--<div class="form-group">
		<?php //echo $form->label($model,'IDPM',array('class'=>'col-md-3 control-label'));?>
                <div class="col-md-2">
		<?php //echo $form->textField($model,'IDPM'); ?>
                </div>
	</div>-->
         <div class="form-group">
		<?php echo $form->labelEx($model,'Nomor Surat',array('class'=>'col-md-3 control-label')); ?>
		<div class="col-md-2">
		<?php echo $form->dropDownList($model,'IDPM',
		   CHtml::listData(Surtugpm::model()->findAll(), 'IDPM','NOSURATPM'),array('empty'=>'----Pilih----','class'=>'form-control select2me')); ?>
             
		</div>
	</div>
        <!--<div class="form-group">
		<?php //echo $form->labelEx($model,'IDPM',array('class'=>'col-md-3 control-label')); ?>
		<div class="col-md-4">
		<?php //echo $form->dropDownList($model,'IDDETAILSURTUGPM',
		   //CHtml::listData(Detailsurtugpm::model()->findAll(array('order'=>'IDDETAILSURTUGPM')), 'IDDETAILSURTUGPM','iDPM.nIP.NAMA2'),array('empty'=>'----Pilih Nama Dosen----','class'=>'form-control select2me')); ?>
             
		</div>
	</div>

	
	<div class="row">
		<?php //echo $form->label($model,'TGLSUBMITDETAILSURTUGPM'); ?>
		<?php //echo $form->textField($model,'TGLSUBMITDETAILSURTUGPM'); ?>
	</div>-->

	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton('Search'); ?>
                </div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->