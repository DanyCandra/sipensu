<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'detailsurperpk-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'form-horizontal','role'=>'form'),
)); ?>
        <div class="form-body">
	<?php echo $form->errorSummary($model,'<b>Silakan perbaiki kesalahan berikut :</b> ','',array('class'=>'alert alert-danger')); ?>
        
	
         <div class="form-group">
                <?php echo $form->labelEx($model,'Nama Instansi PK',array('class'=>'col-md-3 control-label')); ?>
		<div class="col-md-4">
		<?php echo $form->dropDownList($model,'IDPK',
		   CHtml::listData(Surperpk::model()->findAll(array('order'=>'IDPK')), 'IDPK','INSTANSIPK'),array('class'=>'form-control ','readonly'=>true)); ?>
                
                <?php echo $form->error($model,'IDPK'); ?>
		</div>
	</div>
        <div class="form-group">
                <?php echo $form->labelEx($model,'Kota Instansi PK ',array('class'=>'col-md-3 control-label')); ?>
		<div class="col-md-2">
		<?php echo $form->dropDownList($model,'IDPK',
		   CHtml::listData(Surperpk::model()->findAll(array('order'=>'IDPK')), 'IDPK','KOTAINSTANSIPK'),array('class'=>'form-control select2me','disabled'=>true)); ?>
                
                <?php echo $form->error($model,'IDPK'); ?>
		</div>
	</div>

	<div class="form-group">
                <button class="btn red" tabindex="-1" type="button">Permintaan/permohonan surat anda akan dikirim,<br>ke Sub.Bagian Umum dan Barang Milik Negara.<br></button>
		<?php echo $form->labelEx($model,'IDGROUPS',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-5">
		<?php echo $form->dropDownList($model,'IDGROUPS',
		CHtml::listData(Groups::model()->findAll(array('order'=>'IDGROUPS')), 'IDGROUPS', 'DIVISI'),array('class'=>'form-control','disabled'=>true)); ?>
		<?php echo $form->error($model,'IDGROUPS'); ?>
		</div>
	</div>

	<!--<div class="row">
		<?php //echo $form->labelEx($model,'TGLSUBMITDETAILSURPERPK',array('class'=>'col-md-3 control-label')); ?>
		<?php //echo $form->textField($model,'TGLSUBMITDETAILSURPERPK'); ?>
		<?php //echo $form->error($model,'TGLSUBMITDETAILSURPERPK'); ?>
	</div>-->

	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Kirim segera !' : 'Update',array('class'=>'btn red ')); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

<!-- form -->