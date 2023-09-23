<?php
/* @var $this AgamaController */
/* @var $model Agama */
/* @var $form CActiveForm */
?>

<div class="form-body">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
        'htmlOptions'=>array('class'=>'form-horizontal','role'=>'form'),
)); ?>

	<!--<div class="form-group">
                <?php //echo $form->labelEx($model,'IDAGAMA',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-2">
		<?php //echo $form->label($model,'IDAGAMA'); ?>
		<?php //echo $form->textField($model,'IDAGAMA'); ?>
                </div>
	</div>-->

	<div class="form-group">
                <?php echo $form->labelEx($model,'NAMAAGAMA',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-3">
		<?php //echo $form->label($model,'NAMAAGAMA'); ?>
		<?php echo $form->textField($model,'NAMAAGAMA',array('size'=>15,'maxlength'=>15,'class'=>'form-control')); ?>
                </div>
	</div>

	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>
        </div>
<?php $this->endWidget(); ?>

</div><!-- search-form -->