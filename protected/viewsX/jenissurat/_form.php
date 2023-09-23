<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'jenissurat-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'form-horizontal','role'=>'form'),
)); ?>
        <div class="form-body">
	<?php echo $form->errorSummary($model,'<b>Silakan perbaiki kesalahan berikut :</b> ','',array('class'=>'alert alert-danger')); ?>

        <div class="form-group">
		<?php echo $form->labelEx($model,'IDJENISSURAT',array('class'=>'col-md-3 control-label')); ?>
		<div class="col-md-1">
		<?php echo $form->textField($model,'IDJENISSURAT',array('size'=>10,'maxlength'=>10,'class'=>'form-control','disabled'=>true)); ?>
		<?php echo $form->error($model,'IDJENISSURAT'); ?>
                </div>
	</div> 
        
        <div class="form-group">
		<?php echo $form->labelEx($model,'NAMAJENISSURAT',array('class'=>'col-md-3 control-label')); ?>
		<div class="col-md-5">
		<?php echo $form->textField($model,'NAMAJENISSURAT',array('size'=>50,'maxlength'=>50,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'NAMAJENISSURAT'); ?>
                </div>
	</div>       
       
        <div class="form-group">
		<?php echo $form->labelEx($model,'IDKLASIFIKASI',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-4">
		<?php echo $form->dropDownList($model,'IDKLASIFIKASI',
		CHtml::listData(Klasifikasisurat::model()->findAll(array('order'=>'IDKLASIFIKASI')), 'IDKLASIFIKASI', 'NAMAKLASIFIKASI'),array('empty'=>'-------Pilih KLASIFIKASI-------','class'=>'form-control select2me')); ?>
		<?php echo $form->error($model,'IDKLASIFIKASI'); ?>
		</div>
	</div>
    	
        
         <div class="form-group">
		<?php echo $form->labelEx($model,'IDJABATANSTRUKTURAL',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-4">
		<?php //echo $form->dropDownList($model,'IDJABATANSTRUKTURAL',CHtml::listData(Jabatanstruktural::model()->findAll(array('order'=>'IDJABATANSTRUKTURAL')), 'IDJABATANSTRUKTURAL', 'NAMAJABATANSTRUKTURAL'),array('empty'=>'-------Pilih JABATAN STURKTURAL-------','class'=>'form-control select2me')); ?>	
		<?php
                    $connection = Yii::app()->db;
                    $sql = "select IDJABATANSTRUKTURAL,  CONCAT(NAMA2,' - ',NAMAJABATANSTRUKTURAL) as NAMATTD from jabatanstruktural inner join msdos on jabatanstruktural.NIP=msdos.NIP";
                    $command = $connection->createCommand($sql);
                    $results = $command->queryAll();
                    ?>
                    <?php echo CHtml::activeDropDownList($model, 'IDJABATANSTRUKTURAL', CHtml::listData($results,  'IDJABATANSTRUKTURAL','NAMATTD'),array('empty'=>'----Pilih Nama----','class'=>'form-control select2me'),
                            array(
                                'class'=>'form-control ',
                                'ajax' => array(
                                'type'=>'POST', 
                                )
                                
                                )); ?>
		<?php echo $form->error($model,'IDJABATANSTRUKTURAL'); ?>
		</div>
	</div>  
            
        <!--<div class="form-group">
		<?php //echo $form->labelEx($model,'Pemberi Paraf',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-4">
		<?php //echo $form->dropDownList($model,'IDTTD',
		//CHtml::listData(Pemberiparaf::model()->findAll(array('order'=>'IDTTD')), 'IDTTD', 'NAMATTD'),array('empty'=>'-------Pemberi Paraf-------','class'=>'form-control select2me')); ?>
		<?php //echo $form->error($model,'IDTTD'); ?>
		</div>
	</div>  -->
        
        <div class="form-group">
            <?php echo $form->labelEx($model,'Pemberi Paraf',array('class'=>'col-md-3 control-label')); ?>
             <div class="col-md-8">
		
                 
                <?php
                    $connection = Yii::app()->db;
                    $sql = "select IDTTD,  CONCAT(NAMATTD,' - ',JABATANSTRUKTURALTTD) as NAMATTD from pemberiparaf";
                    $command = $connection->createCommand($sql);
                    $results = $command->queryAll();
                    ?>
                    <?php echo CHtml::activeDropDownList($model, 'IDTTD', CHtml::listData($results,  'IDTTD','NAMATTD'),array('empty'=>'----Pilih Nama----','class'=>'form-control select2me'),
                            array(
                                'class'=>'form-control ',
                                'ajax' => array(
                                'type'=>'POST', 
                                )
                                
                                )); ?> 
		<?php echo $form->error($model,'IDTTD'); ?>
		</div>
	</div> 
            
	</div>
	
	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Update',array('class'=>'btn green')); ?>
		<?php if(!$model->isNewRecord) echo CHtml::link('Manage Jenis Surat',array('jenissurat/admin','IDJENISSURAT'=>$model->IDJENISSURAT),array('class'=>'btn yellow')) ?>
		</div>
	</div>
	

<?php $this->endWidget(); ?>
