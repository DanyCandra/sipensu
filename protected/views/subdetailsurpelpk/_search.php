<?php
/* @var $this SubdetailsurpelpkController */
/* @var $model Subdetailsurpelpk */
/* @var $form CActiveForm */
?>


<div class="form-body">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
        'htmlOptions'=>array('class'=>'form-horizontal','role'=>'form'),
)); ?>
    
          <div class="form-group">
		<?php echo $form->labelEx($model,'Instansi / Perusahaan',array('class'=>'col-md-3 control-label')); ?>
		<div class="col-md-4">
		<?php echo $form->dropDownList($model,'IDPK',
		   CHtml::listData(Surperpk::model()->findAll(array('order'=>'IDPK')), 'IDPK','INSTANSIPK'),array('empty'=>'----Pilih Instansi----','class'=>'form-control select2me')); ?>
                
                <?php echo $form->error($model,'IDPK'); ?>
		</div>
	</div> 
	<!--<div class="row">
		<?php echo $form->label($model,'IDSUBDETAILSURPELPK'); ?>
		<?php echo $form->textField($model,'IDSUBDETAILSURPELPK'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IDPK'); ?>
		<?php echo $form->textField($model,'IDPK'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IDJENISSURAT'); ?>
		<?php echo $form->textField($model,'IDJENISSURAT'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NOSURPELPK'); ?>
		<?php echo $form->textField($model,'NOSURPELPK',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TGLMULAISURPELPK'); ?>
		<?php echo $form->textField($model,'TGLMULAISURPELPK',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TGLAKHIRSURPELPK'); ?>
		<?php echo $form->textField($model,'TGLAKHIRSURPELPK',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'KETERANGANSUBDETAILSURPELPK'); ?>
		<?php echo $form->textField($model,'KETERANGANSUBDETAILSURPELPK',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TGLSUBMITSUBDETAILSURPELPK'); ?>
		<?php echo $form->textField($model,'TGLSUBMITSUBDETAILSURPELPK'); ?>
	</div>-->

	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton('Search'); ?>
                </div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->