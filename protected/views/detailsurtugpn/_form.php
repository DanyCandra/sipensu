<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'detailsurtugpn-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'form-horizontal','role'=>'form'),
)); ?>
        <div class="form-body">
	<?php echo $form->errorSummary($model,'<b>Silakan perbaiki kesalahan berikut :</b> ','',array('class'=>'alert alert-danger')); ?>

	 <!--<div class="form-group">
		<?php //echo $form->labelEx($model,'IDDETAILSURTUGPN',array('class'=>'col-md-3 control-label')); ?>
		<div class="col-md-2">
		<?php //echo $form->textField($model,'IDDETAILSURTUGPN',array('size'=>5,'maxlength'=>5,'class'=>'form-control')); ?>
		<?php //echo $form->error($model,'IDDETAILSURTUGPN'); ?>
                </div>
	</div>-->
         <!--<div class="row">
		<?php //echo $form->labelEx($model,'IDPN'); ?>
		<?php //echo $form->textField($model,'IDPN'); ?>
		<?php //echo $form->error($model,'IDPN'); ?>
	</div>-->
        
        <div class="form-group">
		<?php echo $form->labelEx($model,'Judul Penelitian',array('class'=>'col-md-3 control-label')); ?>
		<div class="col-md-9">
		<?php echo $form->dropDownList($model,'IDPN',
		   CHtml::listData(Groupsurtugpn::model()->findAll(array('order'=>'IDPN')), 'IDPN','iDPN.JUDULPN'),array('class'=>'form-control ','readonly'=>true)); ?>
                <?php echo $form->error($model,'IDPN'); ?>
		</div>
	</div>
         <div class="form-group">
                <button class="btn red" tabindex="-1" type="button">Permintaan/permohonan surat anda akan dikirim,<br>ke Sub.Bagian Umum dan Barang Milik Negara.<br></button>
		<?php echo $form->labelEx($model,'Sub Bagian/Divisi/Operator',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-4">
		<?php echo $form->dropDownList($model,'IDGROUPS',
		CHtml::listData(Groups::model()->findAll(array('order'=>'IDGROUPS')), 'IDGROUPS', 'DIVISI'),array('class'=>'form-control','disabled'=>true)); ?>
		<?php echo $form->error($model,'IDGROUPS'); ?>
		</div>
	</div>
	

	<!--<div class="form-group">
		<?php //echo $form->labelEx($model,'TGLSUBMITDETAILSURTUGPN',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-9">
		<?php //echo $form->textField($model,'TGLSUBMITDETAILSURTUGPN'); ?>
		<?php //echo $form->error($model,'TGLSUBMITDETAILSURTUGPN'); ?>
                </div>
	</div>-->

	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Kirim segera !' : 'Update',array('class'=>'btn red ')); ?>
		</div>
	</div>
	

<?php $this->endWidget(); ?>