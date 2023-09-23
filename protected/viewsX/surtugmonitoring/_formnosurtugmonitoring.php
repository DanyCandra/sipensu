<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'surtugmonitoring-form',
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
                    <div class="col-md-5">
            <?php echo $form->labelEx($model,'Surat Tugas Monitoring Praktik Kerja',array('size'=>50,'maxlength'=>50,'class'=>'form-control','disabled'=>true)); ?>
		<?php echo $form->error($model,'IDJENISSURAT'); ?>
                </div>
	</div>
        <div class="form-group">
		<?php echo $form->labelEx($model,'Tahun Akademik',array('class'=>'col-md-3 control-label'));?>
		
                <div class="col-md-2">
                <?php echo $form->dropDownList($model,'IDSUBDETAILSURPELPK',
		   CHtml::listData(Subdetailsurpelpk::model()->findAll(array('order'=>'IDPK')), 'IDPK','iDPK.iDTASEMESTER.TAHUNAKADEMIK'),array('class'=>'form-control ','disabled'=>true)); ?>
                
                </div>
                
                    <div class="col-md-1">
                        <?php echo $form->labelEx($model,'semester',array('class'=>'control-label'));?>
                    </div>
                <div class="col-md-2">
                 <?php echo $form->dropDownList($model,'IDSUBDETAILSURPELPK',
		   CHtml::listData(Subdetailsurpelpk::model()->findAll(array('order'=>'IDPK')), 'IDPK','iDPK.iDTASEMESTER.KETSEMESTER'),array('class'=>'form-control ','disabled'=>true)); ?>
                 </div>
                 
	</div>  
            <hr>        
        <!--<div class="form-group">
		<?php //echo $form->labelEx($model,'IDSUBDETAILSURPELPK',array('class'=>'col-md-3 control-label')); ?>
		<?php //echo $form->textField($model,'IDSUBDETAILSURPELPK'); ?>
		<?php //echo $form->error($model,'IDSUBDETAILSURPELPK'); ?>
	</div>-->
        <div class="form-group">
		<?php echo $form->labelEx($model,'Instansi/Perusahaan Praktik Kerja',array('class'=>'col-md-3 control-label')); ?>
		<div class="col-md-5">
		<?php echo $form->dropDownList($model,'IDSUBDETAILSURPELPK',
		   CHtml::listData(Subdetailsurpelpk::model()->findAll(array('order'=>'IDSUBDETAILSURPELPK')), 'IDSUBDETAILSURPELPK','iDPK.INSTANSIPK'),array('class'=>'form-control ','readonly'=>true)); ?>
                
                <?php echo $form->error($model,'IDSUBDETAILSURPELPK'); ?>
		</div>
	</div> 
        
        <div class="form-group">
		<?php echo $form->labelEx($model,'Pelaksanaan Praktik Kerja ',array('class'=>'col-md-3 control-label')); ?>
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
		<?php echo $form->labelEx($model,'Dosen Monitoring',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-4">
		<?php echo $form->dropDownList($model,'NIP',
		CHtml::listData(Msdos::model()->findAll(array('order'=>'NIP')), 'NIP', 'NAMA2'),array('empty'=>'----Pilih Dosen----','class'=>'form-control','disabled'=>true)); ?>
		<?php echo $form->error($model,'NIP'); ?>
		</div>
	</div>
	<hr>

	<div class="form-group has-error">
		<?php echo $form->labelEx($model,'NOSURTUGMONITORING',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-2">
                    <div class="input-icon right">
                        <i class="fa fa-exclamation tooltips" data-container="body" data-original-title="please write a valid number"></i>
                    </div>
		<?php echo $form->textField($model,'NOSURTUGMONITORING',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'NOSURTUGMONITORING'); ?>
                </div>
	</div>
        
        <div class="form-group">
		<?php echo $form->labelEx($model,'TGLCETAKSURATMONITORING',array('class'=>'col-md-3 control-label date-picker'));?>
		<div class="col-md-2">
                <?php 
		$this->widget ('zii.widgets.jui.CJuiDatePicker', array (
                 //you must specify name or model/attribute
                 'model'=>$model,
                 'attribute'=>'TGLCETAKSURATMONITORING', 
                 'value'=>$model->TGLCETAKSURATMONITORING,
                 'options'=>array(
                         'dateFormat'=>'yy-mm-dd',
                         //'showOn'=>'button',
                         'yearRange'=>'-60',
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
                  <?php echo $form->error ($model,'TGLCETAKSURATMONITORING');?>
        </div>  
        </div>   

	
	<!--<div class="row">
		<?php //echo $form->labelEx($model,'TGLSUBMITSURTUGMONITORING',array('class'=>'col-md-3 control-label')); ?>
		<?php //echo $form->textField($model,'TGLSUBMITSURTUGMONITORING'); ?>
		<?php //echo $form->error($model,'TGLSUBMITSURTUGMONITORING'); ?>
	</div>-->

	</div>
	
	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Update',array('class'=>'btn green')); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

<!-- form -->