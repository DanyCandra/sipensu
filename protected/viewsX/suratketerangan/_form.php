<?php
/* @var $this SuratketeranganController */
/* @var $model Suratketerangan */
/* @var $form CActiveForm */
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'surket-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'form-horizontal','role'=>'form'),
)); ?>



	<div class="form-body">
	<?php echo $form->errorSummary($model,'<b>Silahkan perbaiki kesalahan berikut :</b> ','',array('class'=>'alert alert-danger')); ?>
           
        <div class="form-group">
		<?php echo $form->labelEx($model,'IDJENISSURAT',array('class'=>'col-md-3 control-label'));?>
		<!--<div class="col-md-1">
                <?php //echo $form->textField($model,'IDJENISSURAT',array('size'=>10,'maxlength'=>10,'class'=>'form-control','disabled'=>true)); ?>
                </div>-->
                <div class="col-md-4">
		 <?php echo $form->labelEx($model,'Surat Keterangan',array('size'=>50,'maxlength'=>50,'class'=>'form-control','disabled'=>true)); ?>
		<?php echo $form->error($model,'IDJENISSURAT'); ?>
                </div>
	</div>

	<!--<div class="row">
		<?php //echo $form->labelEx($model,'IDTASEMESTER',array('class'=>'col-md-3 control-label')); ?>
		<?php //echo $form->textField($model,'IDTASEMESTER'); ?>
		<?php //echo $form->error($model,'IDTASEMESTER'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'NOSURKET',array('class'=>'col-md-3 control-label')); ?>
		<?php //echo $form->textField($model,'NOSURKET',array('size'=>50,'maxlength'=>50)); ?>
		<?php //echo $form->error($model,'NOSURKET'); ?>
	</div>-->
           <div class="form-group">
		<?php echo $form->labelEx($model,'Tahun Akademik Sekarang',array('class'=>'col-md-3 control-label'));?>
		<!--<div class="col-md-1">
                <?php //echo $form->textField($model,'IDTASEMESTER',array('size'=>10,'maxlength'=>10,'class'=>'form-control','disabled'=>true)); ?>
                </div>-->
                    
                <div class="col-md-2">
                 <?php echo $form->dropDownList($model,'IDTASEMESTER',
		   CHtml::listData(Currentsemester::model()->findAll(array('order'=>'IDTASEMESTER')), 'IDTASEMESTER','TAHUNAKADEMIK'),array('class'=>'form-control select2me','disabled'=>true)); ?>
               
                </div>
                
                    <div class="col-md-2">
                        <?php echo $form->labelEx($model,'Semester Sekarang',array('class'=>'control-label'));?>
                    </div>
                <div class="col-md-2">
               <?php echo $form->dropDownList($model,'IDTASEMESTER',
		   CHtml::listData(Currentsemester::model()->findAll(array('order'=>'IDTASEMESTER')), 'IDTASEMESTER','KETSEMESTER'),array('class'=>'form-control select2me','disabled'=>true)); ?>
                </div>
                <?php echo $form->error($model,'IDTASEMESTER'); ?>    
	</div>
        <hr>

	<div class="form-group">
            <?php echo $form->labelEx($model,'NIM',array('class'=>'col-md-3 control-label')); ?>
             <div class="col-md-4">
                <?php
                    $connection = Yii::app()->db;
                    $sql = "select NIM,  CONCAT(NIM,' - ',NAMA) as NAMA from mahasiswa";
                    $command = $connection->createCommand($sql);
                    $results = $command->queryAll();
                    ?>
                    <?php echo CHtml::activeDropDownList($model, 'NIM', CHtml::listData($results,  'NIM','NAMA'),array('empty'=>'----Pilih NIM----','class'=>'form-control select2me'),
                            array(
                                'class'=>'form-control select2me',
                                )); ?> 
		<?php echo $form->error($model,'NIM'); ?>
		</div>
	</div> 
        
         <div class="form-group ">
		<?php echo $form->labelEx($model,'PERIHAL1',array('class'=>'col-md-3 control-label')); ?>
                 <div class="col-md-8">
                <B><U>LENGKAPI KALIMAT PADA PARAGRAF PERTAMA DI BAWAH INI</U></B><br>     
                <font color="red"></font><font color="orange">Adalah benar-benar mahasiswa  Fakutas Ekonomi dan Bisnis Universitas Jenderal Soedirman Purwokerto,</font><br>
		<?php echo $form->textArea($model,'PERIHAL1',array('size'=>5,'maxlength'=>5000,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'PERIHAL1'); ?>
                </div>
	</div>
        <div class="form-group ">
		<?php echo $form->labelEx($model,'PERIHAL2',array('class'=>'col-md-3 control-label')); ?>
                 <div class="col-md-8">
                 <B><U>LENGKAPI KALIMAT PADA PARAGRAF KEDUA DI BAWAH INI</U></B><br>     
                <font color="red"></font><font color="orange">Surat keterangan ini dibuat sebagai</font><br>   
		<?php echo $form->textArea($model,'PERIHAL2',array('size'=>5,'maxlength'=>5000,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'PERIHAL2'); ?>
                </div>
	</div>
	

	<!--<div class="row">
		<?php //echo $form->labelEx($model,'KETERANGANSURKET',array('class'=>'col-md-3 control-label')); ?>
		<?php //echo $form->textArea($model,'KETERANGANSURKET',array('rows'=>6, 'cols'=>50)); ?>
		<?php //echo $form->error($model,'KETERANGANSURKET'); ?>
	</div>-->
         <div class="form-group has-success">
		<?php echo $form->labelEx($model,'KETERANGANSURKET',array('class'=>'col-md-3 control-label')); ?>
                 <div class="col-md-6">
                   
                        <i data-container="body" data-original-title="You look OK!"></i>
                 
		<?php echo $form->textArea($model,'KETERANGANSURKET',array('rows'=>6, 'cols'=>50,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'KETERANGANSURKET'); ?>
                </div>
	</div>

	<!--<div class="row">
		<?php //echo $form->labelEx($model,'TGLCETAKSURKET',array('class'=>'col-md-3 control-label')); ?>
		<?php //echo $form->textField($model,'TGLCETAKSURKET',array('size'=>20,'maxlength'=>20)); ?>
		<?php //echo $form->error($model,'TGLCETAKSURKET'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'TGLSUBMITSURKET',array('class'=>'col-md-3 control-label')); ?>
		<?php //echo $form->textField($model,'TGLSUBMITSURKET'); ?>
		<?php //echo $form->error($model,'TGLSUBMITSURKET'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'ACCSURKET',array('class'=>'col-md-3 control-label')); ?>
		<?php //echo $form->textField($model,'ACCSURKET',array('size'=>15,'maxlength'=>15)); ?>
		<?php //echo $form->error($model,'ACCSURKET'); ?>
	</div>

	-->

	 </div>
	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Update',array('class'=>'btn green')); ?>
		<?php //if(!$model->isNewRecord) echo CHtml::link('Manage ',array('suratketerangan/admin','IDSURKET'=>$model->IDSURKET),array('class'=>'btn yellow')) ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

<!-- form -->