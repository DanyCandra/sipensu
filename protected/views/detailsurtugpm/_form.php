<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'detailsurtugpm-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'form-horizontal','role'=>'form'),
)); ?>
        <div class="form-body">
	<?php echo $form->errorSummary($model,'<b>Silakan perbaiki kesalahan berikut :</b> ','',array('class'=>'alert alert-danger')); ?>

	<!--<div class="row">
		<?php //echo $form->labelEx($model,'IDPM'); ?>
		<?php //echo $form->textField($model,'IDPM'); ?>
		<?php //echo $form->error($model,'IDPM'); ?>
	</div>-->
        <div class="form-group">
		<?php echo $form->labelEx($model,'IDPM',array('class'=>'col-md-3 control-label')); ?>
		<div class="col-md-4">
		<?php echo $form->dropDownList($model,'IDPM',
		   CHtml::listData(Surtugpm::model()->findAll(array('order'=>'IDPM')), 'IDPM','nIP.NAMA2'),array('class'=>'form-control ','readonly'=>true)); ?>
                
                <?php echo $form->error($model,'IDPM'); ?>
		</div>
	</div>
       
        
        <div class="form-group">
                <button class="btn red" tabindex="-1" type="button">Permintaan/permohonan surat anda akan dikirim,<br>ke Sub.Bagian Umum dan Barang Milik Negara.<br></button>
		<?php echo $form->labelEx($model,'IDGROUPS',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-4">
		<?php echo $form->dropDownList($model,'IDGROUPS',
		CHtml::listData(Groups::model()->findAll(array('order'=>'IDGROUPS')), 'IDGROUPS', 'DIVISI'),array('class'=>'form-control','disabled'=>true)); ?>
		<?php echo $form->error($model,'IDGROUPS'); ?>
		</div>
	</div>
       
	<!--<div class="form-group">
		<?php //echo $form->labelEx($model,'TGLSUBMITDETAILSURTUGPM',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-9">
		<?php //echo $form->textField($model,'TGLSUBMITDETAILSURTUGPM'); ?>
		<?php //echo $form->error($model,'TGLSUBMITDETAILSURTUGPM'); ?>
                </div>
	</div>-->

	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Kirim segera !' : 'Update',array('class'=>'btn red ')); ?>
		</div>
	</div>
	

<?php $this->endWidget(); ?>