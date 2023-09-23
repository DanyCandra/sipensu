<?php
/* @var $this KategoriberitaController */
/* @var $model Kategoriberita */
/* @var $form CActiveForm */
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'kategoriberita-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'form-horizontal','role'=>'form'),
)); ?>

	<div class="form-body">

	<?php echo $form->errorSummary($model,'<b>Silakan perbaiki kesalahan berikut :</b> ','',array('class'=>'alert alert-danger')); ?>

        <div class="form-group">
		<?php echo $form->labelEx($model,'IDKATEGORI',array('class'=>'col-md-3 control-label')); ?>
               <!-- <button class="btn red" tabindex="-1" type="button">Kode Kategori Berita otomatis</button>-->
		<div class="col-md-1">
		<?php echo $form->textField($model,'IDKATEGORI',array('size'=>11,'maxlength'=>11,'class'=>'form-control','readonly'=>true));  ?>
		<?php echo $form->error($model,'IDKATEGORI'); ?>
		</div>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'NAMAKATEGORI',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-5">
		<?php echo $form->textField($model,'NAMAKATEGORI',array('size'=>60,'maxlength'=>100,'class'=>'form-control'));  ?>
		<?php echo $form->error($model,'NAMAKATEGORI'); ?>
                </div>
	</div>
            </div>
	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Update',array('class'=>'btn green')); ?>
		<?php if(!$model->isNewRecord) echo CHtml::link('Manage ',array('kategoriberita/admin','IDKATEGORI'=>$model->IDKATEGORI),array('class'=>'btn yellow')) ?>
		</div>
	</div>
	

<?php $this->endWidget(); ?>
