
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'groupsurperpk-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'form-horizontal','role'=>'form'),
)); ?>
        <div class="form-body">
	<?php echo $form->errorSummary($model,'<b>Silakan perbaiki kesalahan berikut :</b> ','',array('class'=>'alert alert-danger')); ?>

	<!--<div class="row">
		<?php //echo $form->labelEx($model,'IDPK',array('class'=>'col-md-3 control-label')); ?>
		<?php //echo $form->textField($model,'IDPK'); ?>
		<?php //echo $form->error($model,'IDPK'); ?>
	</div>-->
        <div class="form-group">
		<?php echo $form->labelEx($model,'Instansi / Perusahaan',array('class'=>'col-md-3 control-label')); ?>
		 <!--<div class="col-md-1">
		<?php //echo $form->textField($model,'IDPK',array('class'=>'form-control select2me','readonly'=>true)); ?></div>-->
		<div class="col-md-5">
		<?php echo $form->dropDownList($model,'IDPK',
		   CHtml::listData(Surperpk::model()->findAll(array('order'=>'IDPK')), 'IDPK','INSTANSIPK'),array('class'=>'form-control ','readonly'=>true)); ?>
                <?php echo $form->error($model,'IDPK'); ?>
		</div>
	</div>
	<hr>
	<div class="form-group">
            <?php echo $form->labelEx($model,'Mahasiswa ',array('class'=>'col-md-3 control-label')); ?>
             <div class="col-md-4">
		
                 
                <?php
                    $connection = Yii::app()->db;
                    //$sql = "select NIM,  CONCAT(NIM,' - ',NAMA) as NAMA from mahasiswa";
                    //dievalusi utk NIM/NAMA yang muncul di form hanya mhs D3 saja
                    $sql = "select mahasiswa.NIM,prodi.IDJENJANG ,mahasiswa.NAMA, CONCAT(NIM,' - ',NAMA) as NAMA from mahasiswa join prodi on mahasiswa.IDPRODI=prodi.IDPRODI where prodi.IDJENJANG=2";
                    $command = $connection->createCommand($sql);
                    $results = $command->queryAll();
                    ?>
                    <?php echo CHtml::activeDropDownList($model, 'NIM', CHtml::listData($results,  'NIM','NAMA'),array('empty'=>'----Pilih NIM----','class'=>'form-control'),
                            array(
                                'class'=>'form-control select2me',
                                'ajax' => array(
                                'type'=>'POST', //request type
                                
                                //Style: CController::createUrl('currentController/methodToCall')
                              
                                //'data'=>'js:javascript statement' 
                                //leave out the data key to pass all form values through
                                )
                                
                                )); ?> 
		<?php echo $form->error($model,'NIM'); ?>
		</div>
	</div> 
        
        <div class="form-group">
		<?php echo $form->labelEx($model,'NOURUTSURPERPK',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-2">
		<?php echo $form->textField($model,'NOURUTSURPERPK',array('size'=>50,'maxlength'=>50,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'NOURUTSURPERPK'); ?>
                </div>
	</div>

	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Update',array('class'=>'btn green')); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

<!-- form -->