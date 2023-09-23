<?php
/* @var $this DetailsuratketeranganController */
/* @var $model Detailsuratketerangan */
/* @var $form CActiveForm */
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'detailsuratketerangan-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
        'htmlOptions'=>array('class'=>'form-horizontal','role'=>'form'),
	'enableAjaxValidation'=>false,
)); ?>

	 <div class="form-body">
	<?php echo $form->errorSummary($model,'<b>Silakan perbaiki kesalahan berikut :</b> ','',array('class'=>'alert alert-danger')); ?>
       <div class="form-group">      
		<?php echo $form->labelEx($model,'Pemohon Surat Keterangan',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-4">
		<?php //echo $form->textField($model,'IDSURKET'); ?>
		<?php echo $form->dropDownList($model,'IDSURKET',
		   CHtml::listData(Suratketerangan::model()->findAll(array('order'=>'IDSURKET')), 'IDSURKET','nIM.NAMA'),array('class'=>'form-control ','readonly'=>true)); ?>
                
                    <?php echo $form->error($model,'IDSURKET'); ?>
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

	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Kirim segera !' : 'Update',array('class'=>'btn btn-primary ')); ?>
		</div>
	</div>
	

<?php $this->endWidget(); ?>