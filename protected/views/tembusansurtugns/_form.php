
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tembusansurtugns-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'form-horizontal','role'=>'form'),
)); ?>
        <div class="form-body">

	<?php echo $form->errorSummary($model,'<b>Silakan perbaiki kesalahan berikut :</b> ','',array('class'=>'alert alert-danger')); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'IDSURTUGNS',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-1">
		<?php echo $form->textField($model,'IDSURTUGNS',array('size'=>11,'maxlength'=>11,'class'=>'form-control ','readonly'=>true)); ?>
		<?php echo $form->error($model,'IDSURTUGNS'); ?>
                </div>
	</div>
        <div class="form-group">
		<?php echo $form->labelEx($model,'Nama Pemohon',array('class'=>'col-md-3 control-label')); ?>
		<div class="col-md-4">
		<?php echo $form->dropDownList($model,'IDSURTUGNS',
		   CHtml::listData(Surtugns::model()->findAll(array('order'=>'IDSURTUGNS')), 'IDSURTUGNS','nIP.NAMA2'),array('class'=>'form-control ','disabled'=>true)); ?>
                <?php echo $form->error($model,'IDSURTUGNS'); ?>
		</div>
	</div>    

	<div class="form-group">
		<?php echo $form->labelEx($model,'TUJUANTEMBUSAN',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-6">
		<?php echo $form->textField($model,'TUJUANTEMBUSAN',array('size'=>60,'maxlength'=>250,'class'=>'form-control ')); ?>
		<?php echo $form->error($model,'TUJUANTEMBUSAN'); ?>
                </div>
	</div>

	<!--<div class="form-group">
		<?php //echo $form->labelEx($model,'TGLSUBMITTEMBUSAN',array('class'=>'col-md-3 control-label')); ?>
		<?php //echo $form->textField($model,'TGLSUBMITTEMBUSAN'); ?>
		<?php //echo $form->error($model,'TGLSUBMITTEMBUSAN'); ?>
	</div>-->

	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Update',array('class'=>'btn green')); ?>
		<?php //if(!$model->isNewRecord) echo CHtml::link('Manage ',array('groupsurmag/admin','IDGROUPSURMAG'=>$model->IDGROUPSURMAG),array('class'=>'btn yellow')) ?>
		</div>
	</div>

<?php $this->endWidget(); ?>