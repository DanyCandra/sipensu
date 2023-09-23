
<?php
/* @var $this SurmagController */
/* @var $model Surmag */
/* @var $form CActiveForm */
?>

<div class="form-body">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
        'htmlOptions'=>array('class'=>'form-horizontal','role'=>'form'),
)); ?>
         <div class="form-group">
		<?php echo $form->labelEx($model,'INSTANSISURMAG',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-4">
		<?php echo $form->textField($model,'INSTANSISURMAG',array('size'=>60,'maxlength'=>500,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'INSTANSISURMAG'); ?>
                </div>
	</div>
	

	<div class="form-group">
		<?php echo $form->labelEx($model,'ALAMATINSTANSISURMAG',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-8">
		<?php echo $form->textField($model,'ALAMATINSTANSISURMAG',array('size'=>60,'maxlength'=>250,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'ALAMATINSTANSISURMAG'); ?>
                </div>
	</div>
        <div class="form-group">
		<?php echo $form->labelEx($model,'KOTAINSTANSISURMAG',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-4">
		<?php echo $form->textField($model,'KOTAINSTANSISURMAG',array('size'=>60,'maxlength'=>100,'style'=>"text-transform:capitalize",'class'=>'form-control')); ?>
		<?php echo $form->error($model,'KOTAINSTANSISURMAG'); ?>
                </div>
	</div>
         <div class="form-group">
		<?php echo $form->labelEx($model,'TGLMULAISURMAG',array('class'=>'col-md-3 control-label date-picker'));?>
		<div class="col-md-2">
                <?php 
		$this->widget ('zii.widgets.jui.CJuiDatePicker', array (
                 //you must specify name or model/attribute
                 'model'=>$model,
                 'attribute'=>'TGLMULAISURMAG', 
                 'value'=>$model->TGLMULAISURMAG,
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
                  <?php echo $form->error ($model,'TGLMULAISURMAG');?>
        </div>    
		
        </div>
        <div class="form-group">
		<?php echo $form->labelEx($model,'TGLAKHIRSURMAG',array('class'=>'col-md-3 control-label date-picker'));?>
		<div class="col-md-2">
                <?php 
		$this->widget ('zii.widgets.jui.CJuiDatePicker', array (
                 //you must specify name or model/attribute
                 'model'=>$model,
                 'attribute'=>'TGLAKHIRSURMAG', 
                 'value'=>$model->TGLAKHIRSURMAG,
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
                  <?php echo $form->error ($model,'TGLAKHIRSURMAG');?>
        </div>  
        </div>
	<!--<div class="row">
		<?php //echo $form->label($model,'IDSURMAG'); ?>
		<?php //echo $form->textField($model,'IDSURMAG'); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'IDJENISSURAT'); ?>
		<?php //echo $form->textField($model,'IDJENISSURAT'); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'NOSURMAG'); ?>
		<?php //echo $form->textField($model,'NOSURMAG',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'INSTANSISURMAG'); ?>
		<?php //echo $form->textField($model,'INSTANSISURMAG',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'ALAMATINSTANSISURMAG'); ?>
		<?php //echo $form->textField($model,'ALAMATINSTANSISURMAG',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'SEMESTER'); ?>
		<?php //echo $form->textField($model,'SEMESTERG',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'TAHUNAKADEMIK'); ?>
		<?php //echo $form->textField($model,'TAHUNAKADEMIK',array('size'=>9,'maxlength'=>9)); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'KETERANGANSURMAG'); ?>
		<?php //echo $form->textArea($model,'KETERANGANSURMAG',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'TGLSUBMITSURMAG'); ?>
		<?php //echo $form->textField($model,'TGLSUBMITSURMAG'); ?>
	</div>-->

	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton('Search'); ?>
                </div>
	</div>


<?php $this->endWidget(); ?>

</div><!-- search-form -->