<?php
/* @var $this ProdiController */
/* @var $model Prodi */
/* @var $form CActiveForm */
?>



<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'prodi-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
         'htmlOptions'=>array('class'=>'form-horizontal','role'=>'form'),
)); ?>

	<div class="form-body">
	<?php echo $form->errorSummary($model,'<b>Silakan perbaiki kesalahan berikut :</b> ','',array('class'=>'alert alert-danger')); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'IDPRODI',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-2">
		<?php echo $form->textField($model,'IDPRODI',array('size'=>4,'maxlength'=>4,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'IDPRODI'); ?>
                </div>
	</div>
        <div class="form-group">
		<?php echo $form->labelEx($model,'KODEPRODI',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-3">
		<?php echo $form->textField($model,'KODEPRODI',array('size'=>11,'maxlength'=>11,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'KODEPRODI'); ?>
                </div>
	</div>   
         <div class="form-group">
		<?php echo $form->labelEx($model,'KODEPRODIUNSOED',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-3">
		<?php echo $form->textField($model,'KODEPRODIUNSOED',array('size'=>11,'maxlength'=>11,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'KODEPRODIUNSOED'); ?>
                </div>
	</div>      

	<div class="form-group">
		<?php echo $form->labelEx($model,'IDJENJANG',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-2">
                <?php echo $form->dropDownList($model,'IDJENJANG',
                CHtml::listData(Jenjang::model()->findAll(array('order'=>'IDJENJANG')), 'IDJENJANG', 'NAMAJENJANG'),array('empty'=>'----Pilih Jenjang----','class'=>'form-control')); ?>        
		<?php //echo $form->textField($model,'IDJENJANG',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'IDJENJANG'); ?>
                </div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'IDFAKULTAS',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-3">
                <?php echo $form->dropDownList($model,'IDFAKULTAS',
                CHtml::listData(Fakultas::model()->findAll(array('order'=>'IDFAKULTAS')), 'IDFAKULTAS', 'FAKULTAS'),array('empty'=>'----Pilih Fakultas----','class'=>'form-control')); ?>
		<?php //echo $form->textField($model,'IDFAKULTAS'); ?>
		<?php echo $form->error($model,'IDFAKULTAS'); ?>
                </div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'NAMAPRODI',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-5">
		<?php echo $form->textField($model,'NAMAPRODI',array('size'=>60,'maxlength'=>80,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'NAMAPRODI'); ?>
                </div>
	</div>
         <div class="radio-list">
            
                <?php echo $form->labelEx($model,'ISAKTIF',array('class'=>'col-md-3 control-label'));?>
                <?php
                 echo $form->radioButtonList($model,
                         'ISAKTIF',array('A'=>'AKTIF',
                             'T'=>'TIDAK AKTIF'));
                ?>
                <?php echo $form->error($model,'ISAKTIF'); ?>
           
        </div>      
         <div class="form-group">
		<?php echo $form->labelEx($model,'KODEPRODILAMA',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-3">
		<?php echo $form->textField($model,'KODEPRODILAMA',array('size'=>4,'maxlength'=>4,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'KODEPRODILAMA'); ?>
                </div>
	</div>      

	</div>
	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Update',array('class'=>'btn green')); ?>
		<?php if(!$model->isNewRecord) echo CHtml::link('Manage Prodi',array('prodi/admin','IDPRODI'=>$model->IDPRODI),array('class'=>'btn yellow')) ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

<!-- form -->