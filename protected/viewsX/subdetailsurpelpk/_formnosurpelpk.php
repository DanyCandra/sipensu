<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'subdetailsurpelpk-form',
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
            <?php echo $form->labelEx($model,'Surat Pelaksanaan Praktik Kerja',array('size'=>50,'maxlength'=>50,'class'=>'form-control','disabled'=>true)); ?>
		<?php echo $form->error($model,'IDJENISSURAT'); ?>
                </div>
	</div>
            
        <div class="form-group">
		<?php echo $form->labelEx($model,'Instansi / Perusahaan Praktik Kerja',array('class'=>'col-md-3 control-label')); ?>
		<div class="col-md-4">
		<?php echo $form->dropDownList($model,'IDPK',
		   CHtml::listData(Surperpk::model()->findAll(array('order'=>'IDPK')), 'IDPK','INSTANSIPK'),array('class'=>'form-control ','readonly'=>true)); ?>
                
                <?php echo $form->error($model,'IDPK'); ?>
		</div>
	</div> 
        
        <div class="form-group">
		<?php echo $form->labelEx($model,'Alamat Instansi',array('class'=>'col-md-3 control-label')); ?>
		<div class="col-md-5">
		<?php echo $form->dropDownList($model,'IDPK',
		   CHtml::listData(Surperpk::model()->findAll(array('order'=>'IDPK')), 'IDPK','ALAMATINSTANSIPK'),array('class'=>'form-control select2me','disabled'=>true)); ?>
                </div>
                <div class="col-md-3">
              
		<?php echo $form->dropDownList($model,'IDPK',
		   CHtml::listData(Surperpk::model()->findAll(array('order'=>'IDPK')), 'IDPK','KOTAINSTANSIPK'),array('class'=>'form-control select2me','disabled'=>true)); ?>
                
                <?php echo $form->error($model,'IDPK'); ?>
		</div>
	</div>    
        
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
		<?php echo $form->labelEx($model,'TGLMULAISURPELPK',array('class'=>'col-md-3 control-label date-picker'));?>
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
                         'yearRange'=>'-60',
                         'changeMonth'=>'true',
                         'changeYear'=>'true',
                         'constrainInput'=>'false',
                         'duration'=>'fast',
                         'showAnim'=>'fold',
			 'showAnim'=>'slide',
                         ),
                         'htmlOptions'=>array('class'=>'form-control input-medium','disabled'=>true),
                         )
                         );?>
                  <?php echo $form->error ($model,'TGLMULAISURPELPK');?>
        </div>    
		
        </div>
        <div class="form-group">
		<?php echo $form->labelEx($model,'TGLAKHIRSURPELPK',array('class'=>'col-md-3 control-label date-picker'));?>
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
                         'yearRange'=>'-60',
                         'changeMonth'=>'true',
                         'changeYear'=>'true',
                         'constrainInput'=>'false',
                         'duration'=>'fast',
                         'showAnim'=>'fold',
			 'showAnim'=>'slide',
                         ),
                         'htmlOptions'=>array('class'=>'form-control input-medium','disabled'=>true),
                         )
                         );?>
                  <?php echo $form->error ($model,'TGLAKHIRSURPELPK');?>
        </div>    
		
        </div><hr>
         <div class="form-group has-error">
		<?php echo $form->labelEx($model,'NOSURPELPK',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-2">
                    <div class="input-icon right">
                        <i class="fa fa-exclamation tooltips" data-container="body" data-original-title="please write a valid number"></i>
                    </div>
		<?php echo $form->textField($model,'NOSURPELPK',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'NOSURPELPK'); ?>
                </div>
	</div>
        
        <div class="form-group">
		<?php echo $form->labelEx($model,'TGLCETAKSURATSURPELPK',array('class'=>'col-md-3 control-label date-picker'));?>
		<div class="col-md-2">
                <?php 
		$this->widget ('zii.widgets.jui.CJuiDatePicker', array (
                 //you must specify name or model/attribute
                 'model'=>$model,
                 'attribute'=>'TGLCETAKSURATSURPELPK', 
                 'value'=>$model->TGLCETAKSURATSURPELPK,
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
                  <?php echo $form->error ($model,'TGLCETAKSURATSURPELPK');?>
        </div>  
        </div>      
	
       

	
	<!--<div class="row">
		<?php //echo $form->labelEx($model,'TGLSUBMITSUBDETAILSURPELPK',array('class'=>'col-md-3 control-label')); ?>
		<?php //echo $form->textField($model,'TGLSUBMITSUBDETAILSURPELPK'); ?>
		<?php //echo $form->error($model,'TGLSUBMITSUBDETAILSURPELPK'); ?>
	</div>-->

	</div>
	
	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Update',array('class'=>'btn green')); ?>
		<?php //if(!$model->isNewRecord) echo CHtml::link('Manage ',array('surperpk/admin','IDPK'=>$model->IDPK),array('class'=>'btn yellow')) ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

<!-- form -->