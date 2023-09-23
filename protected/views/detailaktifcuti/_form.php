<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'detailaktifcuti-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'form-horizontal','role'=>'form'),
)); ?>
        <div class="form-body">
	<?php echo $form->errorSummary($model,'<b>Silakan perbaiki kesalahan berikut :</b> ','',array('class'=>'alert alert-danger')); ?>
        
	<!--<div class="row">
		<?php //echo $form->labelEx($model,'IDAKTIFCUTI',array('class'=>'col-md-3 control-label')); ?>
		<?php //echo $form->textField($model,'IDAKTIFCUTI'); ?>
		<?php //echo $form->error($model,'IDAKTIFCUTI'); ?>
	</div>-->
        <div class="form-group">
		<?php echo $form->labelEx($model,'Pemohon Surat Izin Cuti Akademik',array('class'=>'col-md-3 control-label')); ?>
		<div class="col-md-2">
		<?php echo $form->dropDownList($model,'IDAKTIFCUTI',
		   CHtml::listData(Suraktifcuti::model()->findAll(array('order'=>'IDAKTIFCUTI')), 'IDAKTIFCUTI','iDIJINCUTI.NIM'),array('class'=>'form-control ','readonly'=>true)); ?>
                </div>
                <div class="col-md-4">
                <?php echo $form->dropDownList($model,'IDAKTIFCUTI',
		   CHtml::listData(Suraktifcuti::model()->findAll(array('order'=>'IDAKTIFCUTI')), 'IDAKTIFCUTI','iDIJINCUTI.nIM.NAMA'),array('class'=>'form-control select2me','readonly'=>true)); ?>
                
                <?php echo $form->error($model,'IDAKTIFCUTI'); ?>
		</div>
	</div>
        <div class="form-group">
		<?php echo $form->labelEx($model,'Program Studi / Jurusan',array('class'=>'col-md-3 control-label')); ?>
		<div class="col-md-3">
		<?php echo $form->dropDownList($model,'IDAKTIFCUTI',
		   CHtml::listData(Suraktifcuti::model()->findAll(array('order'=>'IDAKTIFCUTI')), 'IDAKTIFCUTI','iDIJINCUTI.nIM.iDPRODI.NAMAPRODI'),array('class'=>'form-control ','disabled'=>true)); ?>
                
                <?php echo $form->error($model,'IDAKTIFCUTI'); ?>
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

	<!--

	<div class="row">
		<?php //echo $form->labelEx($model,'TGLSUBMITDETAILSURAKTIFCUTI',array('class'=>'col-md-3 control-label')); ?>
		<?php //echo $form->textField($model,'TGLSUBMITDETAILSURAKTIFCUTI'); ?>
		<?php //echo $form->error($model,'TGLSUBMITDETAILSURAKTIFCUTI'); ?>
	</div>-->

	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Kirim segera !' : 'Update',array('class'=>'btn btn-outline-warning waves-effect ')); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>


<!-- form -->