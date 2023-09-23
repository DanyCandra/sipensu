<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'detailsurijincuti-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'form-horizontal','role'=>'form'),
)); ?>
        <div class="form-body">
	<?php echo $form->errorSummary($model,'<b>Silakan perbaiki kesalahan berikut :</b> ','',array('class'=>'alert alert-danger')); ?>
        

	<!--<div class="row">
		<?php //echo $form->labelEx($model,'IDIJINCUTI',array('class'=>'col-md-3 control-label')); ?>
		<?php //echo $form->textField($model,'IDIJINCUTI'); ?>
		<?php //echo $form->error($model,'IDIJINCUTI'); ?>
	</div>-->
        <div class="form-group">
		<?php echo $form->labelEx($model,'Pemohon Surat Izin Cuti Akademik',array('class'=>'col-md-3 control-label')); ?>
		<div class="col-md-2">
		<?php echo $form->dropDownList($model,'IDIJINCUTI',
		   CHtml::listData(Surijincuti::model()->findAll(array('order'=>'IDIJINCUTI')), 'IDIJINCUTI','NIM'),array('class'=>'form-control ','readonly'=>true)); ?>
                </div>
                <div class="col-md-4">
                <?php echo $form->dropDownList($model,'IDIJINCUTI',
		   CHtml::listData(Surijincuti::model()->findAll(array('order'=>'IDIJINCUTI')), 'IDIJINCUTI','nIM.NAMA'),array('class'=>'form-control select2me','disabled'=>true)); ?>
                
                <?php echo $form->error($model,'IDIJINCUTI'); ?>
		</div>
	</div>
         <div class="form-group">
		<?php echo $form->labelEx($model,'Program Studi / Jurusan',array('class'=>'col-md-3 control-label')); ?>
		<div class="col-md-4">
		<?php echo $form->dropDownList($model,'IDIJINCUTI',
		   CHtml::listData(Surijincuti::model()->findAll(array('order'=>'IDIJINCUTI')), 'IDIJINCUTI','nIM.iDPRODI.NAMAPRODI'),array('class'=>'form-control ','disabled'=>true)); ?>
                
                <?php echo $form->error($model,'IDIJINCUTI'); ?>
		</div>
	</div>

	<div class="form-group">
                <button class="btn red" tabindex="-1" type="button">Permintaan/permohonan surat anda akan dikirim,<br>ke Sub.Bagian Umum dan Barang Milik Negara.<br></button>
		<?php echo $form->labelEx($model,'IDGROUPS',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-3">
		<?php echo $form->dropDownList($model,'IDGROUPS',
		CHtml::listData(Groups::model()->findAll(array('order'=>'IDGROUPS')), 'IDGROUPS', 'DIVISI'),array('class'=>'form-control','disabled'=>true)); ?>
		<?php echo $form->error($model,'IDGROUPS'); ?>
		</div>
	</div>

	<!--

	<div class="row">
		<?php //echo $form->labelEx($model,'TGLSUBMITDETAILSURIJINCUTI',array('class'=>'col-md-3 control-label')); ?>
		<?php //echo $form->textField($model,'TGLSUBMITDETAILSURIJINCUTI'); ?>
		<?php //echo $form->error($model,'TGLSUBMITDETAILSURIJINCUTI'); ?>
	</div>-->

	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Kirim segera !' : 'Update',array('class'=>'btn btn-primary ')); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>


<!-- form -->