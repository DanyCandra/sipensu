<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'groupsurtugpn-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'form-horizontal','role'=>'form'),
)); ?>
        <div class="form-body">
	<?php echo $form->errorSummary($model,'<b>Silakan perbaiki kesalahan berikut :</b> ','',array('class'=>'alert alert-danger')); ?>

	<!--<div class="row">
		<?php //echo $form->labelEx($model,'IDGROUPPN'); ?>
		<?php //echo $form->textField($model,'IDGROUPPN'); ?>
		<?php //echo $form->error($model,'IDGROUPPN'); ?>
	</div>-->
        
        <!--<div class="row">
		<?php //echo $form->labelEx($model,'IDPN'); ?>
		<?php //echo $form->textField($model,'IDPN'); ?>
		<?php //echo $form->error($model,'IDPN'); ?>
	</div>-->
        
         <div class="form-group">
		<?php echo $form->labelEx($model,'Judul Penelitian',array('class'=>'col-md-3 control-label')); ?>
		<div class="col-md-8">
		<?php echo $form->dropDownList($model,'IDPN',
		   CHtml::listData(Surtugpn::model()->findAll(array('order'=>'IDPN')), 'IDPN','JUDULPN'),array('class'=>'form-control ','readonly'=>true)); ?>
                <?php echo $form->error($model,'IDPN'); ?>
		</div>
	</div>
        
         
       <div class="form-group">
		<?php echo $form->labelEx($model,'Nama ',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-4">
		<?php echo $form->dropDownList($model,'NIP',
                        CHtml::listData(Msdos::model()->findAll(array('order'=>'NIP')), 'NIP', 'NAMA2'),array('empty'=>'----Pilih Dosen----','class'=>'form-control  select2me')); ?>
		<?php echo $form->error($model,'NIP'); ?>
		</div>
	</div>
	<!--<div class="row">
		<?php //echo $form->labelEx($model,'IDPANGGOL'); ?>
		<?php //echo $form->textField($model,'IDPANGGOL'); ?>
		<?php //echo $form->error($model,'IDPANGGOL'); ?>
	</div>-->
        
         <div class="form-group">
            <?php echo $form->labelEx($model,'IDPANGGOL',array('class'=>'col-md-3 control-label')); ?>
             <div class="col-md-4">
		
                 
                <?php
                    $connection = Yii::app()->db;
                    $sql = "select IDPANGGOL,  CONCAT(PANGKAT,' / ',GOL) as GOL from panggol";
                    $command = $connection->createCommand($sql);
                    $results = $command->queryAll();
                    ?>
                    <?php echo CHtml::activeDropDownList($model, 'IDPANGGOL', CHtml::listData($results,  'IDPANGGOL','GOL'),array('empty'=>'----Pilih Panggol----','class'=>'form-control select2me'),
                            array(
                               
                                'ajax' => array(
                                'type'=>'POST', 
                                )
                                
                                )); ?> 
		<?php echo $form->error($model,'IDPANGGOL'); ?>
		</div>
	</div>    

	<!--<div class="row">
		<?php //echo $form->labelEx($model,'IDJABATANAKADEMIK'); ?>
		<?php //echo $form->textField($model,'IDJABATANAKADEMIK'); ?>
		<?php //echo $form->error($model,'IDJABATANAKADEMIK'); ?>
	</div>-->
        
        <div class="form-group">
		<?php echo $form->labelEx($model,'Jabatan Akademik',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-4">
		<?php echo $form->dropDownList($model,'IDJABATANAKADEMIK',
		CHtml::listData(Jabatanakademik::model()->findAll(array('order'=>'IDJABATANAKADEMIK')), 'IDJABATANAKADEMIK', 'NAMAJABATANAKADEMIK'),array('empty'=>'----Pilih----','class'=>'form-control select2me')); ?>
		<?php echo $form->error($model,'IDJABATANAKADEMIK'); ?>
		</div>
	</div>

	<!--<div class="row">
		<?php //echo $form->labelEx($model,'NIP'); ?>
		<?php //echo $form->textField($model,'NIP',array('size'=>18,'maxlength'=>18)); ?>
		<?php //echo $form->error($model,'NIP'); ?>
	</div>-->

	<div class="form-group">
		<?php echo $form->labelEx($model,'NOURUTGROUPPN',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-2">
		<?php echo $form->textField($model,'NOURUTGROUPPN',array('size'=>50,'maxlength'=>50,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'NOURUTGROUPPN'); ?>
                </div>
	</div>
	<!--<div class="row">
		<?php //echo $form->labelEx($model,'NOURUTGROUPPN'); ?>
		<?php //echo $form->textField($model,'NOURUTGROUPPN'); ?>
		<?php //echo $form->error($model,'NOURUTGROUPPN'); ?>
	</div>-->
	

	
	
	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Update',array('class'=>'btn btn-outline-warning round waves-effect')); ?>
		<?php echo CHtml::link('Kembali ke Detail ',array('surtugpn/view','id'=>$model->IDPN),array('class'=>'btn btn-outline-info round waves-effect')) ?>
		</div>
	</div>
	

<?php $this->endWidget(); ?>