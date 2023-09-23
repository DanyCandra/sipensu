<?php
/* @var $this SurpermkController */
/* @var $model Surpermk */
/* @var $form CActiveForm */
?>

<div class="form-body">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
        'htmlOptions'=>array('class'=>'form-horizontal','role'=>'form'),
)); ?>

        <div class="form-group">
		<?php echo $form->labelEx($model,'Program Studi',array('class'=>'col-md-3 control-label')); ?>
		<div class="col-md-4">
		<?php echo $form->dropDownList($model,'cariprodi',
		   CHtml::listData(Prodi::model()->findAll(array('order'=>'IDPRODI')), 'IDPRODI','NAMAPRODI'),array('empty'=>'----Pilih Prodi----','class'=>'form-control select2me')); ?>
             
		</div>
	</div> 
        
	

	<!--<div class="row">
		<?php //echo $form->label($model,'IDJENISSURAT'); ?>
		<?php //echo $form->textField($model,'IDJENISSURAT'); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'NOSURATMK'); ?>
		<?php //echo $form->textField($model,'NOSURATMK',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'NIM'); ?>
		<?php //echo $form->textField($model,'NIM',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	

	<div class="row">
		<?php //echo $form->label($model,'NAMAWALIMK'); ?>
		<?php //echo $form->textField($model,'NAMAWALIMK',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'NIPWALIMK'); ?>
		<?php //echo $form->textField($model,'NIPWALIMK',array('size'=>18,'maxlength'=>18)); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'IDPANGGOL'); ?>
		<?php //echo $form->textField($model,'IDPANGGOL'); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'INSTANSIWALIMK'); ?>
		<?php //echo $form->textField($model,'INSTANSIWALIMK',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'TGLSUBMITMK'); ?>
		<?php //echo $form->textField($model,'TGLSUBMITMK'); ?>
	</div>-->

	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton('Search'); ?>
                </div>
	</div>


<?php $this->endWidget(); ?>

</div><!-- search-form -->