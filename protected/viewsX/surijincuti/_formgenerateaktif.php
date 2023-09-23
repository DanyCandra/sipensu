<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'surijincuti-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'form-horizontal','role'=>'form'),
)); ?>

	<div class="form-body">
	<?php echo $form->errorSummary($model,'<b>Silahkan perbaiki kesalahan berikut :</b> ','',array('class'=>'alert alert-danger')); ?>
           
        <div class="form-group">
		<?php echo $form->labelEx($model,'IDJENISSURAT',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-1">
                <?php echo $form->textField($model,'IDJENISSURAT',array('size'=>10,'maxlength'=>10,'class'=>'form-control','disabled'=>true)); ?>
                </div>
                <div class="col-md-4">
                <?php echo $form->labelEx($model,'Surat Izin Cuti Akademik',array('size'=>50,'maxlength'=>50,'class'=>'form-control','disabled'=>true)); ?>
		<?php echo $form->error($model,'IDJENISSURAT'); ?>
                </div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'NOSURATIJINCUTI',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-1">
		<?php echo $form->textField($model,'NOSURATIJINCUTI',array('size'=>50,'maxlength'=>50,'class'=>'form-control','disabled'=>true)); ?>
                <?php echo $form->error($model,'NOSURATIJINCUTI'); ?>
                </div>   
	</div>
        
        <div class="form-group">
		<?php echo $form->labelEx($model,'NIM',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-2">
		<?php echo $form->textField($model,'NIM',array('size'=>20,'maxlength'=>20,'class'=>'form-control ','disabled'=>true)); ?>
                </div>
                <div class="col-md-5">
               <?php echo $form->dropDownList($model,'NIM',
		CHtml::listData(Mahasiswa::model()->findAll(array('order'=>'NIM')), 'NIM', 'NAMA'),array('class'=>'form-control select2me','disabled'=>true)); ?>
                </div>
                <?php echo $form->error($model,'NIM'); ?>
               
	</div>

        <div class="radio-list">
            
                <?php echo $form->labelEx($model,'Set Generate Aktif Kembali',array('class'=>'col-md-3 control-label'));?>
                <?php
                 echo $form->radioButtonList($model,
                         'SETGENERATEAKTIF',array('Approve'=>'Approve',
                             'Not Approved'=>'Not Approved'));
                ?>
                <?php echo $form->error($model,'SETGENERATEAKTIF'); ?>
           
        </div>
        
        </div>
	
	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Update',array('class'=>'btn green')); ?>
		<?php //if(!$model->isNewRecord) echo CHtml::link('Manage ',array('surijincuti/admin','IDIJINCUTI'=>$model->IDIJINCUTI),array('class'=>'btn yellow')) ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->