<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
        'htmlOptions'=>array('class'=>'form-horizontal','role'=>'form'),
)); ?>

	<!--<div class="row">
		<?php //echo $form->label($model,'IDJENISSURAT'); ?>
		<?php //echo $form->textField($model,'IDJENISSURAT'); ?>
	</div>-->

	<div class="form-group">
		<?php echo $form->label($model,'Kode Surat Pejabat',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-3">
		<?php echo $form->dropDownList($model,'IDJABATANSTRUKTURAL',
		   CHtml::listData(Jabatanstruktural::model()->findAll(array('order'=>'IDJABATANSTRUKTURAL')), 'IDJABATANSTRUKTURAL','IDJABATANSURAT'),array('empty'=>'----Pilih ----','class'=>'form-control select2me')); ?>
             
                </div>
	</div>  

	<div class="form-group">
		<?php echo $form->label($model,'IDKLASIFIKASI',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-3">
		<?php echo $form->dropDownList($model,'IDKLASIFIKASI',
		   CHtml::listData(Klasifikasisurat::model()->findAll(array('order'=>'IDKLASIFIKASI')), 'IDKLASIFIKASI','NAMAKLASIFIKASI'),array('empty'=>'----Pilih ----','class'=>'form-control select2me')); ?>
             
                </div>    
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'NAMAJENISSURAT',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-4">
		<?php echo $form->textField($model,'NAMAJENISSURAT',array('size'=>50,'maxlength'=>50,'class'=>'form-control')); ?>
                </div>    
	</div>

	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton('Search'); ?>
                </div>
	</div>


<?php $this->endWidget(); ?>

</div><!-- search-form -->