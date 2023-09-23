<div class="form-body">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
        'htmlOptions'=>array('class'=>'form-horizontal','role'=>'form'),
)); ?>

	
        <!--<div class="form-group">
		<?php //echo $form->labelEx($model,'IDSURTUGNS',array('class'=>'col-md-3 control-label')); ?>
		<div class="col-md-4">
		<?php //echo $form->dropDownList($model,'IDDETAILSURTUGNS',
		   //CHtml::listData(Detailsurtugns::model()->findAll(array('order'=>'IDDETAILSURTUGNS')), 'IDDETAILSURTUGNS','iDSURTUGNS.nIP.NAMA2'),array('empty'=>'----Pilih Nama Dosen----','class'=>'form-control select2me')); ?>
             
		</div>
	</div>-->
        <div class="form-group">
		<?php echo $form->labelEx($model,'Nomor Surat',array('class'=>'col-md-3 control-label')); ?>
		<div class="col-md-2">
		<?php echo $form->dropDownList($model,'IDSURTUGNS',
		   CHtml::listData(Surtugns::model()->findAll(), 'IDSURTUGNS','NOSURTUGNS'),array('empty'=>'----Pilih----','class'=>'form-control select2me')); ?>
             
		</div>
	</div>
           <!--<div class="form-group">
		<?php //echo $form->labelEx($model,'Instansi',array('class'=>'col-md-3 control-label')); ?>
		<div class="col-md-6">
		<?php //echo $form->dropDownList($model,'IDDETAILSURTUGNS',
		  // CHtml::listData(Detailsurtugns::model()->findAll(array('order'=>'IDDETAILSURTUGNS')), 'IDDETAILSURTUGNS','iDSURTUGNS.INSTANSINS'),array('empty'=>'----Pilih Instansi----','class'=>'form-control select2me')); ?>
             
		</div>
	</div>
        
     <div class="row">
		<?php //echo $form->label($model,'IDDETAILSURTUGNS'); ?>
		<?php //echo $form->textField($model,'IDDETAILSURTUGNS'); ?>
	</div>

	
	<div class="row">
		<?php //echo $form->label($model,'TGLSUBMITDETAILSURTUGNS'); ?>
		<?php //echo $form->textField($model,'TGLSUBMITDETAILSURTUGNS'); ?>
	</div>-->

	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton('Search'); ?>
                </div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->