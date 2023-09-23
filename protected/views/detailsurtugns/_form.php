<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'detailsurtugns-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'form-horizontal','role'=>'form'),
)); ?>
        <div class="form-body">
	<?php echo $form->errorSummary($model,'<b>Silakan perbaiki kesalahan berikut :</b> ','',array('class'=>'alert alert-danger')); ?>

	<!--<div class="row">
		<?php //echo $form->labelEx($model,'IDSURTUGNS'); ?>
		<?php //echo $form->textField($model,'IDSURTUGNS'); ?>
		<?php //echo $form->error($model,'IDSURTUGNS'); ?>
	</div>-->
        <div class="form-group">
		<?php echo $form->labelEx($model,'IDSURTUGNS',array('class'=>'col-md-3 control-label')); ?>
		<div class="col-md-4">
		<?php echo $form->dropDownList($model,'IDSURTUGNS',
		   CHtml::listData(Surtugns::model()->findAll(array('order'=>'IDSURTUGNS')), 'IDSURTUGNS','nIP.NAMA2'),array('class'=>'form-control ','readonly'=>true)); ?>
                
                <?php echo $form->error($model,'IDSURTUGNS'); ?>
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
		<?php //echo $form->labelEx($model,'TGLSUBMITDETAILSURTUGNS',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-9">
		<?php //echo $form->textField($model,'TGLSUBMITDETAILSURTUGNS'); ?>
		<?php //echo $form->error($model,'TGLSUBMITDETAILSURTUGNS'); ?>
                </div>
	</div>-->
	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Kirim segera !' : 'Update',array('class'=>'btn red ')); ?>
		</div>
	</div>
	

<?php $this->endWidget(); ?>