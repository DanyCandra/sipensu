<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'subdetailsurpelpk-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'form-horizontal','role'=>'form'),
)); ?>
        <div class="form-body">
	<?php echo $form->errorSummary($model,'<b>Silahkan perbaiki kesalahan berikut :</b> ','',array('class'=>'alert alert-danger')); ?>
            
            
        <div class="form-group">
		<?php echo $form->labelEx($model,'Jenis Surat',array('class'=>'col-md-3 control-label'));?>
		<!--<div class="col-md-1">
		<?php //echo $form->textField($model,'IDJENISSURAT',array('size'=>10,'maxlength'=>10,'class'=>'form-control','disabled'=>true)); ?>
                </div>-->
                    <div class="col-md-5">
            <?php echo $form->labelEx($model,'Surat Pelaksanaan Praktik Kerja',array('size'=>50,'maxlength'=>50,'class'=>'form-control','disabled'=>true)); ?>
		<?php echo $form->error($model,'IDJENISSURAT'); ?>
                </div>
	</div>
         <div class="form-group">
		<?php echo $form->labelEx($model,'Tahun Akademik Sekarang',array('class'=>'col-md-3 control-label'));?>
		
                <div class="col-md-2">
                <?php echo $form->dropDownList($model,'IDPK',
		   CHtml::listData(Surperpk::model()->findAll(array('order'=>'IDPK')), 'IDPK','iDTASEMESTER.TAHUNAKADEMIK'),array('class'=>'form-control ','disabled'=>true)); ?>
                
                </div>
                
                    <div class="col-md-2">
                        <?php echo $form->labelEx($model,'Semester Sekarang',array('class'=>'control-label'));?>
                    </div>
                <div class="col-md-2">
                 <?php echo $form->dropDownList($model,'IDPK',
		   CHtml::listData(Surperpk::model()->findAll(array('order'=>'IDPK')), 'IDPK','iDTASEMESTER.KETSEMESTER'),array('class'=>'form-control ','disabled'=>true)); ?>
                 </div>
                 
	</div>    
        <hr>    
            
        <div class="form-group">
		<?php echo $form->labelEx($model,'Instansi / Perusahaan',array('class'=>'col-md-3 control-label')); ?>
		<div class="col-md-4">
		<?php echo $form->dropDownList($model,'IDPK',
		   CHtml::listData(Surperpk::model()->findAll(array('order'=>'IDPK')), 'IDPK','INSTANSIPK'),array('class'=>'form-control ','readonly'=>true)); ?>
                
                <?php echo $form->error($model,'IDPK'); ?>
		</div>
	</div> 
        
        <div class="form-group">
		<?php echo $form->labelEx($model,'Alamat Instansi / Perusahaan',array('class'=>'col-md-3 control-label')); ?>
		<div class="col-md-6">
		<?php echo $form->dropDownList($model,'IDPK',
		   CHtml::listData(Surperpk::model()->findAll(array('order'=>'IDPK')), 'IDPK','ALAMATINSTANSIPK'),array('class'=>'form-control ','disabled'=>true)); ?>
                
                <?php echo $form->error($model,'IDPK'); ?>
		</div>
	</div>    
        
        <div class="form-group">
		<?php echo $form->labelEx($model,'Kota Instansi / Perusahaan',array('class'=>'col-md-3 control-label')); ?>
		<div class="col-md-3">
		<?php echo $form->dropDownList($model,'IDPK',
		   CHtml::listData(Surperpk::model()->findAll(array('order'=>'IDPK')), 'IDPK','KOTAINSTANSIPK'),array('class'=>'form-control ','disabled'=>true)); ?>
                
                <?php echo $form->error($model,'IDPK'); ?>
		</div>
	</div>         
     <hr>       
	<!--<div class="form-group">
		<?php //echo $form->labelEx($model,'IDPK',array('class'=>'col-md-3 control-label')); ?>
		<?php //echo $form->textField($model,'IDPK'); ?>
		<?php //echo $form->error($model,'IDPK'); ?>
	</div>-->

	<!--<div class="row">
		<?php //echo $form->labelEx($model,'NOSURPELPK',array('class'=>'col-md-3 control-label')); ?>
		<?php //echo $form->textField($model,'NOSURPELPK',array('size'=>10,'maxlength'=>10)); ?>
		<?php //echo $form->error($model,'NOSURPELPK'); ?>
	</div>-->

        <div class="form-group">
		<?php echo $form->labelEx($model,'Tanggal Mulai Praktik Kerja',array('class'=>'col-md-3 control-label date-picker'));?>
		<div class="col-md-2">
                <?php 
		$this->widget ('zii.widgets.jui.CJuiDatePicker', array (
                 //you must specify name or model/attribute
                 'model'=>$model,
                 'attribute'=>'TGLMULAISURPELPK', 
                 'value'=>$model->TGLMULAISURPELPK,
                 'options'=>array(
                         'dateFormat'=>'yy-mm-dd',
                         //'showOn'=>'button',
                         //'yearRange'=>'-60',
                         'changeMonth'=>'true',
                         'changeYear'=>'true',
                         'constrainInput'=>'false',
                         'duration'=>'fast',
                         'showAnim'=>'fold',
			 'showAnim'=>'slide',
                         ),
                         'htmlOptions'=>array('class'=>'form-control input-medium'),
                         )
                         );?>
                  <?php echo $form->error ($model,'TGLMULAISURPELPK');?>
        </div>    
		
        </div>
        <div class="form-group">
		<?php echo $form->labelEx($model,'Tanggal Akhir Praktik Kerja',array('class'=>'col-md-3 control-label date-picker'));?>
		<div class="col-md-2">
                <?php 
		$this->widget ('zii.widgets.jui.CJuiDatePicker', array (
                 //you must specify name or model/attribute
                 'model'=>$model,
                 'attribute'=>'TGLAKHIRSURPELPK', 
                 'value'=>$model->TGLAKHIRSURPELPK,
                 'options'=>array(
                         'dateFormat'=>'yy-mm-dd',
                         //'showOn'=>'button',
                         //'yearRange'=>'-60',
                         'changeMonth'=>'true',
                         'changeYear'=>'true',
                         'constrainInput'=>'false',
                         'duration'=>'fast',
                         'showAnim'=>'fold',
			 'showAnim'=>'slide',
                         ),
                         'htmlOptions'=>array('class'=>'form-control input-medium'),
                         )
                         );?>
                  <?php echo $form->error ($model,'TGLAKHIRSURPELPK');?>
        </div>    
		
        </div>

	<!--<div class="row">
		<?php //echo $form->labelEx($model,'KETERANGANSUBDETAILSURPELPK',array('class'=>'col-md-3 control-label')); ?>
		<?php //echo $form->textField($model,'KETERANGANSUBDETAILSURPELPK',array('size'=>60,'maxlength'=>100)); ?>
		<?php //echo $form->error($model,'KETERANGANSUBDETAILSURPELPK'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'TGLSUBMITSUBDETAILSURPELPK',array('class'=>'col-md-3 control-label')); ?>
		<?php //echo $form->textField($model,'TGLSUBMITSUBDETAILSURPELPK'); ?>
		<?php //echo $form->error($model,'TGLSUBMITSUBDETAILSURPELPK'); ?>
	</div>-->
         <div class="form-group has-success">
		<?php echo $form->labelEx($model,'KETERANGANSUBDETAILSURPELPK',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-6">
                     <div class="input-icon right">
                        <i class="fa fa-check tooltips" data-container="body" data-original-titlr="You look OK!"></i>
                    </div>
		<?php echo $form->textArea($model,'KETERANGANSUBDETAILSURPELPK',array('rows'=>6, 'cols'=>50,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'KETERANGANSUBDETAILSURPELPK'); ?>
                </div>
	</div>
	</div>
	
	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Update',array('class'=>'btn btn-primary')); ?>
		<?php //if(!$model->isNewRecord) echo CHtml::link('Manage ',array('surperpk/admin','IDPK'=>$model->IDPK),array('class'=>'btn yellow')) ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

<!-- form -->