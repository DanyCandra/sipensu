<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'detailsurpermk-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'form-horizontal','role'=>'form'),
)); ?>
        <div class="form-body">
	<?php echo $form->errorSummary($model,'<b>Silakan perbaiki kesalahan berikut :</b> ','',array('class'=>'alert alert-danger')); ?>

	<!--<div class="row">
		<?php //echo $form->labelEx($model,'IDMK',array('class'=>'col-md-3 control-label')); ?>
		<?php //echo $form->textField($model,'IDMK'); ?>
		<?php //echo $form->error($model,'IDMK'); ?>
	</div>-->
        
        <div class="form-group">
		<?php echo $form->labelEx($model,'Nama',array('class'=>'col-md-3 control-label')); ?>
		<div class="col-md-4">
		<?php echo $form->dropDownList($model,'IDMK',
		   CHtml::listData(Surpermk::model()->findAll(array('order'=>'IDMK')), 'IDMK','nIM.NAMA'),array('class'=>'form-control ','readonly'=>true)); ?>
                
                <?php echo $form->error($model,'IDMK'); ?>
		</div>
	</div>

	<!--<div class="row">
		<?php //echo $form->labelEx($model,'IDGROUPS',array('class'=>'col-md-3 control-label')); ?>
		<?php //echo $form->textField($model,'IDGROUPS',array('size'=>1,'maxlength'=>1)); ?>
		<?php //echo $form->error($model,'IDGROUPS'); ?>
	</div>-->
        <div class="form-group">
                <button class="btn red" tabindex="-1" type="button">Permintaan/permohonan surat anda akan dikirim,<br>ke Sub.Bagian Umum dan Barang Milik Negara.<br></button>
		<?php echo $form->labelEx($model,'IDGROUPS',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-4">
		<?php echo $form->dropDownList($model,'IDGROUPS',
		CHtml::listData(Groups::model()->findAll(array('order'=>'IDGROUPS')), 'IDGROUPS', 'DIVISI'),array('class'=>'form-control','readonly'=>true)); ?>
		<?php echo $form->error($model,'IDGROUPS'); ?>
		</div>
	</div>

	
	<!--<div class="row">
		<?php //echo $form->labelEx($model,'TGLSUBMITDETAILSURPERMK',array('class'=>'col-md-3 control-label')); ?>
		<?php //echo $form->textField($model,'TGLSUBMITDETAILSURPERMK'); ?>
		<?php //echo $form->error($model,'TGLSUBMITDETAILSURPERMK'); ?>
	</div>-->

	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Kirim segera !' : 'Update',array('class'=>'btn red ')); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

<!-- form -->