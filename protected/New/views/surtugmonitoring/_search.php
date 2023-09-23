<?php
/* @var $this SurtugmonitoringController */
/* @var $model Surtugmonitoring */
/* @var $form CActiveForm */
?>
<div class="form-body">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
        'htmlOptions'=>array('class'=>'form-horizontal','role'=>'form'),
)); ?>
         <div class="form-group">
		<?php echo $form->labelEx($model,'Instansi/Perusahaan Praktik Kerja',array('class'=>'col-md-3 control-label')); ?>
		<div class="col-md-5">
		<?php echo $form->dropDownList($model,'IDSUBDETAILSURPELPK',
		   CHtml::listData(Subdetailsurpelpk::model()->findAll(array('order'=>'IDSUBDETAILSURPELPK')), 'IDSUBDETAILSURPELPK','iDPK.INSTANSIPK'),array('empty'=>'----Pilih Instansi----','class'=>'form-control select2me')); ?>
                
                <?php echo $form->error($model,'IDSUBDETAILSURPELPK'); ?>
		</div>
	</div> 
	<!--<div class="row">
		<?php echo $form->label($model,'IDSURTUGMONITORING'); ?>
		<?php echo $form->textField($model,'IDSURTUGMONITORING'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IDSUBDETAILSURPELPK'); ?>
		<?php echo $form->textField($model,'IDSUBDETAILSURPELPK'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IDJENISSURAT'); ?>
		<?php echo $form->textField($model,'IDJENISSURAT'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NOSURTUGMONITORING'); ?>
		<?php echo $form->textField($model,'NOSURTUGMONITORING',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'KETERANGANSURTUGMONITORING'); ?>
		<?php echo $form->textArea($model,'KETERANGANSURTUGMONITORING',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TGLSUBMITSURTUGMONITORING'); ?>
		<?php echo $form->textField($model,'TGLSUBMITSURTUGMONITORING'); ?>
	</div>-->

	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton('Search'); ?>
                </div>
	</div>
<?php $this->endWidget(); ?>

</div><!-- search-form -->