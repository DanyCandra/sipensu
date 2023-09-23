<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'msdos-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'form-horizontal','role'=>'form'),
)); ?>

	<div class="form-body">

	<?php echo $form->errorSummary($model,'<b>Silakan perbaiki kesalahan berikut :</b> ','',array('class'=>'alert alert-danger')); ?>

        <div class="form-group">
		<?php echo $form->labelEx($model,'IDFAKULTAS',array('class'=>'col-md-3 control-label'));?>
                <div class="col-md-4">   
		<?php echo $form->dropDownList($model,'IDFAKULTAS',
		CHtml::listData(Fakultas::model()->findAll(array('order'=>'IDFAKULTAS')), 'IDFAKULTAS', 'FAKULTAS'),array('empty'=>'-------Pilih Fakultas-------','class'=>'form-control select2me')); ?>
                <?php echo $form->error($model,'IDFAKULTAS'); ?>
		</div>
											<!--<div class="input-group-btn">
												<button type="button" class="btn green dropdown-toggle" data-toggle="dropdown">Action <i class="fa fa-angle-down"></i></button>
												<ul class="dropdown-menu">
													<li>
														<a href="<?php //echo Yii::app()->createUrl('fakultas/create'); ?>">
														Tambah Baru Fakultas </a>
													</li>
													
													<li class="divider">
													</li>
													
												</ul>
											</div>-->
											
										
									
								
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'IDJURUSAN',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-4">
		<?php echo $form->dropDownList($model,'IDJURUSAN',
		CHtml::listData(Jurusan::model()->findAll(array('order'=>'IDJURUSAN')), 'IDJURUSAN', 'NAMAJURUSAN'),array('empty'=>'-------Pilih Jurusan-------','class'=>'form-control select2me')); ?>
		<?php echo $form->error($model,'IDJURUSAN'); ?>
		</div>
                <!--<div class="input-group-btn">
												<button type="button" class="btn yellow dropdown-toggle" data-toggle="dropdown">Action <i class="fa fa-angle-down"></i></button>
												<ul class="dropdown-menu">
													<li>
														<a href="<?php //echo Yii::app()->createUrl('jurusan/create'); ?>">
														Tambah Baru Jurusan </a>
													</li>
													
													<li class="divider">
													</li>
													
												</ul>
											</div>-->
	</div>

	</div>
	<div class="form-group">
		<?php echo $form->labelEx($model,'NIP',array('class'=>'col-md-3 control-label')); ?>
		<div class="col-md-4">
		<?php echo $form->textField($model,'NIP',array('size'=>18,'maxlength'=>18,'class'=>'form-control'));  ?>
		<?php echo $form->error($model,'NIP'); ?>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'NAMA2',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-5">
		<?php echo $form->textField($model,'NAMA2',array('size'=>150,'maxlength'=>150,'class'=>'form-control'));  ?>
		<?php echo $form->error($model,'NAMA2'); ?>
		</div>
	</div>
        <div class="form-group">
		<?php echo $form->labelEx($model,'IDJENDER',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-2">
		<?php echo $form->dropDownList($model,'IDJENDER',
		CHtml::listData(Jender::model()->findAll(array('order'=>'IDJENDER')), 'IDJENDER', 'NAMAJENDER'),array('empty'=>'--Pilih Jender--','class'=>'form-control select2me')); ?>
		<?php echo $form->error($model,'IDJENDER'); ?>
		</div>
	</div>
        <div class="form-group">
		<?php echo $form->labelEx($model,'TEMPATLAHIR',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-5">
		<?php echo $form->textField($model,'TEMPATLAHIR',array('size'=>60,'maxlength'=>80,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'TEMPATLAHIR'); ?>
                </div>
	</div>

	
        <div class="form-group">
		<?php echo $form->labelEx($model,'TGLLAHIR2',array('class'=>'col-md-3 control-label date-picker'));?>
		<div class="col-md-2">
                <?php 
		$this->widget ('zii.widgets.jui.CJuiDatePicker', array (
                 //you must specify name or model/attribute
                 'model'=>$model,
                 'attribute'=>'TGLLAHIR2', 
                 'value'=>$model->TGLLAHIR2,
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
                  <?php echo $form->error ($model,'TGLLAHIR2');?>
        </div>    
		
        </div>
            
            
            
        <div class="form-group">
                <?php echo $form->labelEx($model,'NIDN',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-2">
		<?php echo $form->textField($model,'NIDN',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'NIDN'); ?>
                </div>
	</div>
      
	
	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Update',array('class'=>'btn green')); ?>
		<?php if(!$model->isNewRecord) echo CHtml::link('Manage Data Dosen',array('msdos/admin','NIP'=>$model->NIP),array('class'=>'btn yellow')) ?>
		</div>
	</div>
	

<?php $this->endWidget(); ?>



