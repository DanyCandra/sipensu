<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'surmag-form',
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
                <?php echo $form->labelEx($model,'Surat Pernyataan Permohonan Magang',array('size'=>50,'maxlength'=>50,'class'=>'form-control','disabled'=>true)); ?>
		<?php echo $form->error($model,'IDJENISSURAT'); ?>
                </div>
	</div>
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

	<!--<div class="row">
		<?php //echo $form->labelEx($model,'NOSURMAG',array('class'=>'col-md-3 control-label')); ?>
		<?php //echo $form->textField($model,'NOSURMAG',array('size'=>50,'maxlength'=>50)); ?>
		<?php //echo $form->error($model,'NOSURMAG'); ?>
	</div>-->
        
        <div class="form-group">
		<?php echo $form->labelEx($model,'INSTANSISURMAG',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-4">
		<?php echo $form->textField($model,'INSTANSISURMAG',array('size'=>60,'maxlength'=>500,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'INSTANSISURMAG'); ?>
                </div>
	</div>
	

	<div class="form-group">
		<?php echo $form->labelEx($model,'ALAMATINSTANSISURMAG',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-8">
		<?php echo $form->textField($model,'ALAMATINSTANSISURMAG',array('size'=>60,'maxlength'=>250,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'ALAMATINSTANSISURMAG'); ?>
                </div>
	</div>
        <div class="form-group">
		<?php echo $form->labelEx($model,'KOTAINSTANSISURMAG',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-4">
		<?php echo $form->textField($model,'KOTAINSTANSISURMAG',array('size'=>60,'maxlength'=>100,'style'=>"text-transform:capitalize",'class'=>'form-control')); ?>
		<?php echo $form->error($model,'KOTAINSTANSISURMAG'); ?>
                </div>
	</div>

	
         <div class="form-group">
		<?php echo $form->labelEx($model,'TGLMULAISURMAG',array('class'=>'col-md-3 control-label date-picker'));?>
		<div class="col-md-2">
                <?php 
		$this->widget ('zii.widgets.jui.CJuiDatePicker', array (
                 //you must specify name or model/attribute
                 'model'=>$model,
                 'attribute'=>'TGLMULAISURMAG', 
                 'value'=>$model->TGLMULAISURMAG,
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
                  <?php echo $form->error ($model,'TGLMULAISURMAG');?>
        </div>    
		
        </div>
        <div class="form-group">
		<?php echo $form->labelEx($model,'TGLAKHIRSURMAG',array('class'=>'col-md-3 control-label date-picker'));?>
		<div class="col-md-2">
                <?php 
		$this->widget ('zii.widgets.jui.CJuiDatePicker', array (
                 //you must specify name or model/attribute
                 'model'=>$model,
                 'attribute'=>'TGLAKHIRSURMAG', 
                 'value'=>$model->TGLAKHIRSURMAG,
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
                  <?php echo $form->error ($model,'TGLAKHIRSURMAG');?>
        </div>    
		
        </div>

	<!--<div class="form-group">
		<?php //echo $form->labelEx($model,'KETERANGANSURMAG',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-6">
		<?php //echo $form->textArea($model,'KETERANGANSURMAG',array('rows'=>6, 'cols'=>50,'class'=>'form-control')); ?>
		<?php //echo $form->error($model,'KETERANGANSURMAG'); ?>
                </div>
	</div>

	<div class="form-group">
		<?php //echo $form->labelEx($model,'TGLSUBMITSURMAG',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-3">
		<?php //echo $form->textField($model,'TGLSUBMITSURMAG'); ?>
		<?php //echo $form->error($model,'TGLSUBMITSURMAG'); ?>
                </div>
	</div>-->

	</div>
	
	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Update',array('class'=>'btn btn-primary waves-effect waves-float waves-light')); ?>
		<?php //if(!$model->isNewRecord) echo CHtml::link('Manage ',array('surmag/admin','IDSURMAG'=>$model->IDSURMAG),array('class'=>'btn yellow')) ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

<!-- form -->