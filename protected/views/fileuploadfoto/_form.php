<?php
/* @var $this FileuploadfotoController */
/* @var $model Fileuploadfoto */
/* @var $form CActiveForm */
?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'fileuploadfoto-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
        'htmlOptions' => array('enctype' => 'multipart/form-data','class'=>'form-horizontal','role'=>'form'),
)); ?>

	<div class="form-body">
	<?php echo $form->errorSummary($model,'<b>Silakan perbaiki kesalahan berikut :</b> ','',array('class'=>'alert alert-danger')); ?>

	<!--<div class="form-group">
		<?php //echo $form->labelEx($model,'IDFILEFOTO',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-2">
		<?php //echo $form->textField($model,'IDFILEFOTO',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
		<?php //echo $form->error($model,'IDFILEFOTO'); ?>
                </div>
	</div>-->

	<div class="form-group">
		<?php echo $form->labelEx($model,'NIM',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-3">
		<?php //echo $form->labelEx($model,'NIM',array('class'=>'col-md-3 control-label')); ?>
		<?php echo $form->textField($model,'NIM',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'NIM'); ?>
                </div>
	</div>
            
        <div class="form-group">
		<?php echo $form->labelEx($model,'FILEFOTO',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-4">
		<?php echo $form->textField($model,'FILEFOTO',array('size'=>60,'maxlength'=>100,'class'=>'form-control','readonly'=>true)); ?>
		<?php echo $form->fileField($model, 'FILEFOTO', array('class'=>'input-file form-control')); ?>
                <?php //echo $form->error($model,'fileuploadfoto'); ?>
                    <font color="#ffcc00">File yang bisa diupload <b>png.jpeg</b> <br> Ukuran file <b>max 2 MB</b></font><br>
                </div>
	</div>
	<!--<div class="form-group">
		<?php //echo $form->labelEx($model,'FILEFOTO',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-3">
		<?php //echo $form->labelEx($model,'FILEFOTO',array('class'=>'col-md-3 control-label')); ?>
		<?php //echo $form->textField($model,'FILEFOTO',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
		<?php //echo $form->error($model,'FILEFOTO'); ?>
                </div>
	</div>-->
        </div>

	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Update',array('class'=>'btn green')); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

<!-- form -->