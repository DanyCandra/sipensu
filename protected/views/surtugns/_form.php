<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'surtugns-form',
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
                    <div class="col-md-6">
            <?php echo $form->labelEx($model,'Surat Tugas Pembicara/Narasumber',array('size'=>50,'maxlength'=>50,'class'=>'form-control','disabled'=>true)); ?>
		
		
		<?php echo $form->error($model,'IDJENISSURAT'); ?>
                </div>
	</div>
        
            
            
            
	<div class="form-group">
		<?php echo $form->labelEx($model,'Nama',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-5">
		<?php echo $form->dropDownList($model,'NIP',
		CHtml::listData(Msdos::model()->findAll(array('order'=>'NIP')), 'NIP', 'NAMA2'),array('empty'=>'----Pilih----','class'=>'form-control select2me')); ?>
		<?php echo $form->error($model,'NIP'); ?>
		</div>
	</div>

	 <div class="form-group">
            <?php echo $form->labelEx($model,'Pangkat & Golongan',array('class'=>'col-md-3 control-label')); ?>
             <div class="col-md-4">
		
                 
                <?php
                    $connection = Yii::app()->db;
                    $sql = "select IDPANGGOL,  CONCAT(PANGKAT,' - ',GOL) as GOL from panggol";
                    $command = $connection->createCommand($sql);
                    $results = $command->queryAll();
                    ?>
                    <?php echo CHtml::activeDropDownList($model, 'IDPANGGOL', CHtml::listData($results,  'IDPANGGOL','GOL'),
                            array ('empty'=>'----Pilih----','class'=>'form-control select2me',
                                'ajax' => array(
                                'type'=>'POST', //request type
                                
                                //Style: CController::createUrl('currentController/methodToCall')
                              
                                //'data'=>'js:javascript statement' 
                                //leave out the data key to pass all form values through
                                )
                                
                                )); ?> 
		<?php echo $form->error($model,'IDPANGGOL'); ?>
		</div>
	</div>    
          
            
        <div class="form-group">
		<?php echo $form->labelEx($model,'Jabatan Akademik',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-4">
		<?php echo $form->dropDownList($model,'IDJABATANAKADEMIK',
		CHtml::listData(Jabatanakademik::model()->findAll(array('order'=>'IDJABATANAKADEMIK')), 'IDJABATANAKADEMIK', 'NAMAJABATANAKADEMIK'),array('empty'=>'----Pilih----','class'=>'form-control select2me')); ?>
		<?php echo $form->error($model,'IDJABATANAKADEMIK'); ?>
		</div>
	</div>
	

	<!--<div class="form-group">
		<?php //echo $form->labelEx($model,'NOSURTUGNS',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-2">
		<?php //echo $form->textField($model,'NOSURTUGNS',array('size'=>50,'maxlength'=>50,'class'=>'form-control')); ?>
		<?php //echo $form->error($model,'NOSURTUGNS'); ?>
                </div>
	</div>-->
	<div class="form-group">
		<?php echo $form->labelEx($model,'ISISURTUGNS1',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-7">
		<?php echo $form->textArea($model,'ISISURTUGNS1',array('size'=>60,'maxlength'=>500,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'ISISURTUGNS1'); ?>
                </div>
	</div>
	<div class="form-group">
		<?php echo $form->labelEx($model,'ISISURTUGNS',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-7">
		<?php echo $form->textArea($model,'ISISURTUGNS',array('size'=>60,'maxlength'=>500,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'ISISURTUGNS'); ?>
                </div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'INSTANSINS',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-4">
		<?php echo $form->textField($model,'INSTANSINS',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'INSTANSINS'); ?>
                </div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'ALAMATINSTANSINS',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-6">
		<?php echo $form->textArea($model,'ALAMATINSTANSINS',array('size'=>60,'maxlength'=>250,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'ALAMATINSTANSINS'); ?>
                </div>
	</div>
	<div class="form-group">
		<?php echo $form->labelEx($model,'TGLACARANS',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-4">
		<?php echo $form->textField($model,'TGLACARANS',array('size'=>100,'maxlength'=>100,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'TGLACARANS'); ?>
                </div>
	</div>
    <!-- <div class="form-group">
		<?php //echo $form->labelEx($model,'TGLACARANS',array('class'=>'col-md-3 control-label date-picker'));?>
		<div class="col-md-2">
                <?php 
		// $this->widget ('zii.widgets.jui.CJuiDatePicker', array (
                 //you must specify name or model/attribute
                 //'model'=>$model,
                // 'attribute'=>'TGLACARANS', 
                 //'value'=>$model->TGLACARANS,
                 //'options'=>array(
                 //        'dateFormat'=>'yy-mm-dd',
                         //'showOn'=>'button',
                  //       'yearRange'=>'-60',
                  //       'changeMonth'=>'true',
                  //       'changeYear'=>'true',
                   //      'constrainInput'=>'false',
                  //       'duration'=>'fast',
                  //       'showAnim'=>'fold',
			// 'showAnim'=>'slide',
                     //    ),
                       //  'htmlOptions'=>array('class'=>'form-control input-medium'),
                      //   )
                       //  );?>
                  <?php //echo $form->error ($model,'TGLACARANS');?>
        </div> 
        </div>-->
	

	<!--<div class="form-group">
		<?php //echo $form->labelEx($model,'KETERANGANNS',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-5">
		<?php //echo $form->textField($model,'KETERANGANNS',array('size'=>60,'maxlength'=>150,'class'=>'form-control')); ?>
		<?php //echo $form->error($model,'KETERANGANNS'); ?>
                </div>
	</div>

	<div class="form-group">
		<?php //echo $form->labelEx($model,'TGLSUBMITNS',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-3">
		<?php //echo $form->textField($model,'TGLSUBMITNS'); ?>
		<?php //echo $form->error($model,'TGLSUBMITNS'); ?>
                </div>
	</div>-->
        
        <div class="form-group has-success">
		<?php echo $form->labelEx($model,'KETERANGANNS',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-8">
                    <div class="input-icon right">
                        <i class="fa fa-check tooltips" data-container="body" data-original-titlr="You look OK!"></i>
                    </div>
		<?php echo $form->textField($model,'KETERANGANNS',array('size'=>60,'maxlength'=>150,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'KETERANGANNS'); ?>
                </div>
	</div>
</div>
	
	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Update',array('class'=>'btn btn-outline-warning round waves-effect')); ?>
		<?php if(!$model->isNewRecord) echo CHtml::link('Manage ',array('surtugns/admin','IDSURTUGNS'=>$model->IDSURTUGNS),array('class'=>'btn btn-outline-info round waves-effect')) ?>
		</div>
	</div>
	

<?php $this->endWidget(); ?>