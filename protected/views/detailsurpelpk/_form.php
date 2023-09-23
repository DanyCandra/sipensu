<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'detailsurpelpk-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'form-horizontal','role'=>'form'),
)); ?>
        <div class="form-body">
	<?php echo $form->errorSummary($model,'<b>Silakan perbaiki kesalahan berikut :</b> ','',array('class'=>'alert alert-danger')); ?>
        
	
	
        <div class="form-group">
		<?php echo $form->labelEx($model,'Kode / Nama Instansi Praktik Kerja',array('class'=>'col-md-3 control-label')); ?>
		<div class="col-md-1">
                <?php echo $form->textField($model,'IDSUBDETAILSURPELPK',array('class'=>'form-control select2me','readonly'=>true)); ?>
                </div>
                <div class="col-md-4">
		<?php echo $form->dropDownList($model,'IDSUBDETAILSURPELPK',
		  CHtml::listData(Subdetailsurpelpk::model()->findAll(array('order'=>'IDSUBDETAILSURPELPK')), 'IDSUBDETAILSURPELPK','iDPK.INSTANSIPK'),array('class'=>'form-control select2me','readonly'=>true)); ?>
                
                <?php echo $form->error($model,'IDSUBDETAILSURPELPK'); ?>
		</div>
	</div>    
         
        <div class="form-group">
                <?php echo $form->labelEx($model,'Kota Instansi Praktik Kerja ',array('class'=>'col-md-3 control-label')); ?>
		<div class="col-md-3">
		<?php echo $form->dropDownList($model,'IDSUBDETAILSURPELPK',
		   CHtml::listData(Subdetailsurpelpk::model()->findAll(array('order'=>'IDSUBDETAILSURPELPK')), 'IDSUBDETAILSURPELPK','iDPK.KOTAINSTANSIPK'),array('class'=>'form-control select2me','disabled'=>true)); ?>
                
                <?php echo $form->error($model,'IDSUBDETAILSURPELPK'); ?>
		</div>
	</div>   
            
        <div class="form-group">
		<?php echo $form->labelEx($model,'Tanggal Pelaksanaan ',array('class'=>'col-md-3 control-label')); ?>
		<div class="col-md-2">
		<?php echo $form->dropDownList($model,'IDSUBDETAILSURPELPK',
		   CHtml::listData(Subdetailsurpelpk::model()->findAll(array('order'=>'IDSUBDETAILSURPELPK')), 'IDSUBDETAILSURPELPK','TGLMULAISURPELPK'),array('class'=>'form-control select2me','disabled'=>true)); ?>
                </div>
                 <div class="col-md-2">
               <button class="btn dark" tabindex="-1" type="button">sampai dengan</button>
                </div>
                <div class="col-md-2">
		<?php echo $form->dropDownList($model,'IDSUBDETAILSURPELPK',
		   CHtml::listData(Subdetailsurpelpk::model()->findAll(array('order'=>'IDSUBDETAILSURPELPK')), 'IDSUBDETAILSURPELPK','TGLAKHIRSURPELPK'),array('class'=>'form-control select2me','disabled'=>true)); ?>
                
                <?php echo $form->error($model,'IDSUBDETAILSURPELPK'); ?>
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
		<?php //echo $form->labelEx($model,'ACCDETAILSURPELPK',array('class'=>'col-md-3 control-label')); ?>
		<?php //echo $form->textField($model,'ACCDETAILSURPELPK',array('size'=>15,'maxlength'=>15)); ?>
		<?php //echo $form->error($model,'ACCDETAILSURPELPK'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'TGLSUBMITDETAILSURPELPK',array('class'=>'col-md-3 control-label')); ?>
		<?php //echo $form->textField($model,'TGLSUBMITDETAILSURPELPK'); ?>
		<?php //echo $form->error($model,'TGLSUBMITDETAILSURPELPK'); ?>
	</div>-->

	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Kirim segera !' : 'Update',array('class'=>'btn red ')); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

<!-- form -->