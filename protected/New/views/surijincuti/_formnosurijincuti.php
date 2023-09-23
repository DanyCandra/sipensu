<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'surijincuti-form',
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
                <?php echo $form->labelEx($model,'Surat Izin Cuti Akademik',array('size'=>50,'maxlength'=>50,'class'=>'form-control','disabled'=>true)); ?>
		<?php echo $form->error($model,'IDJENISSURAT'); ?>
                </div>
	</div>

	<!--<div class="row">
		<?php //echo $form->labelEx($model,'NOSURATIJINCUTI',array('class'=>'col-md-3 control-label')); ?>
		<?php //echo $form->textField($model,'NOSURATIJINCUTI',array('size'=>50,'maxlength'=>50)); ?>
		<?php //echo $form->error($model,'NOSURATIJINCUTI'); ?>
	</div>-->

	<div class="form-group">
            <?php echo $form->labelEx($model,'NIM',array('class'=>'col-md-3 control-label')); ?>
             <div class="col-md-4">
                <?php
                    $connection = Yii::app()->db;
                    $sql = "select NIM,  CONCAT(NIM,' - ',NAMA) as NAMA from mahasiswa";
                    $command = $connection->createCommand($sql);
                    $results = $command->queryAll();
                    ?>
                    <?php echo CHtml::activeDropDownList($model, 'NIM', CHtml::listData($results,  'NIM','NAMA'),array('empty'=>'----Pilih NIM----','class'=>'form-control','readonly'=>true),
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

	<!--<div class="form-group">
		<?php //echo $form->labelEx($model,'LAMAIJINCUTI',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-4">
		<?php //echo $form->textField($model,'LAMAIJINCUTI',array('size'=>20,'maxlength'=>20,'class'=>'form-control')); ?>
		<?php //echo $form->error($model,'LAMAIJINCUTI'); ?>
                </div>
	</div>

	<div class="form-group">
		<?php //echo $form->labelEx($model,'SEMESTERIJINCUTI',array('class'=>'col-md-3 control-label')); ?>
                 <div class="col-md-2">
		<?php //echo $form->textField($model,'SEMESTERIJINCUTI',array('size'=>5,'maxlength'=>5,'class'=>'form-control')); ?>
                 </div>
                <div class="col-md-3">
                <?php //echo $form->labelEx($model,'Contoh : Gasal atau Genap',array('size'=>50,'maxlength'=>50,'class'=>'form-control','disabled'=>true)); ?>
                
                <?php //echo $form->error($model,'SEMESTERIJINCUTI'); ?>
                 </div>
	</div>

	<div class="form-group">
		<?php //echo $form->labelEx($model,'THAKADEMIKIJINCUTI',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-2">
		<?php //echo $form->textField($model,'THAKADEMIKIJINCUTI',array('size'=>9,'maxlength'=>9,'class'=>'form-control')); ?>
                </div>
                 <div class="col-md-3">
                <?php //echo $form->labelEx($model,'Contoh : 2014/2015',array('size'=>50,'maxlength'=>50,'class'=>'form-control','disabled'=>true)); ?>
                <?php //echo $form->error($model,'THAKADEMIKIJINCUTI'); ?>
                 </div>
	</div>

	<div class="form-group">
		<?php //echo $form->labelEx($model,'SKSCAPAI',array('class'=>'col-md-3 control-label')); ?>
                 <div class="col-md-2">
		<?php //echo $form->textField($model,'SKSCAPAI',array('size'=>20,'maxlength'=>20,'class'=>'form-control')); ?>
		<?php //echo $form->error($model,'SKSCAPAI'); ?>
                 </div>
	</div>

	<div class="form-group">
		<?php //echo $form->labelEx($model,'IPKCAPAI',array('class'=>'col-md-3 control-label')); ?>
                 <div class="col-md-2">
		<?php //echo $form->textField($model,'IPKCAPAI',array('size'=>20,'maxlength'=>20,'class'=>'form-control')); ?>
		<?php //echo $form->error($model,'IPKCAPAI'); ?>
                 </div>
	</div>-->
       

	<div class="form-group">
		<?php echo $form->labelEx($model,'KETERANGANIJINCUTI',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-6">
		<?php echo $form->textField($model,'KETERANGANIJINCUTI',array('size'=>60,'maxlength'=>100,'class'=>'form-control','disabled'=>true)); ?>
		<?php echo $form->error($model,'KETERANGANIJINCUTI'); ?>
                </div>
	</div>
	<hr>
        <div class="form-group has-error">
		<?php echo $form->labelEx($model,'NOSURATIJINCUTI',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-2">
                    <div class="input-icon right">
                        <i class="fa fa-exclamation tooltips" data-container="body" data-original-title="please write a valid number"></i>
                    </div>
		<?php echo $form->textField($model,'NOSURATIJINCUTI',array('size'=>50,'maxlength'=>50,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'NOSURATIJINCUTI'); ?>
                </div>
	</div>
        
        <div class="form-group">
		<?php echo $form->labelEx($model,'TGLCETAKSURATIJINCUTI',array('class'=>'col-md-3 control-label date-picker'));?>
		<div class="col-md-2">
                <?php 
		$this->widget ('zii.widgets.jui.CJuiDatePicker', array (
                 //you must specify name or model/attribute
                 'model'=>$model,
                 'attribute'=>'TGLCETAKSURATIJINCUTI', 
                 'value'=>$model->TGLCETAKSURATIJINCUTI,
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
                  <?php echo $form->error ($model,'TGLCETAKSURATIJINCUTI');?>
        </div>  
        </div>

	<!--<div class="form-group">
		<?php //echo $form->labelEx($model,'STATUSTERKINI',array('class'=>'col-md-3 control-label')); ?>
                 <div class="col-md-4">
		<?php //echo $form->textField($model,'STATUSTERKINI',array('size'=>15,'maxlength'=>15,'class'=>'form-control')); ?>
		<?php //echo $form->error($model,'STATUSTERKINI'); ?>
                 </div>
	</div>

	<div class="form-group">
		<?php //echo $form->labelEx($model,'TGLSUBMITIJINCUTI',array('class'=>'col-md-3 control-label')); ?>
                 <div class="col-md-4">
		<?php //echo $form->textField($model,'TGLSUBMITIJINCUTI'); ?>
		<?php //echo $form->error($model,'TGLSUBMITIJINCUTI'); ?>
                 </div>
	</div>-->

	</div>
	
	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Update',array('class'=>'btn btn-primary')); ?>
		<?php //if(!$model->isNewRecord) echo CHtml::link('Manage ',array('surijincuti/admin','IDIJINCUTI'=>$model->IDIJINCUTI),array('class'=>'btn yellow')) ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->