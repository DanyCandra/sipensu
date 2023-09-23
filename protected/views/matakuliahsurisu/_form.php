<?php
/* @var $this MatakuliahsurisuController */
/* @var $model Matakuliahsurisu */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'matakuliahsurisu-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'form-horizontal','role'=>'form'),
)); ?>

	<div class="form-body">

	<?php echo $form->errorSummary($model,'<b>Silakan perbaiki kesalahan berikut :</b> ','',array('class'=>'alert alert-danger')); ?>


	<div class="form-group">
		<?php echo $form->labelEx($model,'NAMAMATAKULIAHISU',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-5">
		<?php echo $form->textField($model,'NAMAMATAKULIAHISU',array('size'=>60,'maxlength'=>100,'class'=>'form-control'));  ?>
		<?php echo $form->error($model,'NAMAMATAKULIAHISU'); ?>
                </div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Dosen Pengampu Mata Kuliah',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-4">
		<?php echo $form->dropDownList($model,'NIP',
		CHtml::listData(Msdos::model()->findAll(array('order'=>'NIP')), 'NIP', 'NAMA2'),array('empty'=>'----Pilih Nama----','class'=>'form-control select2me')); ?>
		<?php echo $form->error($model,'NIP'); ?>
		</div>
                 <div class="col-md-4">
                <button class="btn red" tabindex="-1" type="button">Wajib Diisi dengan nama dosen pengampu saat ini<br>atau Boleh diisi dengan Nama Ketua Program Studi saat ini<br></button>
		
                </div>
	</div>

	<div class="form-group">
            <?php echo $form->labelEx($model,'IDTTD',array('class'=>'col-md-3 control-label')); ?>
             <div class="col-md-8">
		
                 
                <?php
                    $connection = Yii::app()->db;
                    $sql = "select IDTTD,  CONCAT(NAMATTD,' - ',JABATANSTRUKTURALTTD) as NAMATTD from pemberiparaf where AKTIF='Y'";
                    $command = $connection->createCommand($sql);
                    $results = $command->queryAll();
                    ?>
                    <?php echo CHtml::activeDropDownList($model, 'IDTTD', CHtml::listData($results,  'IDTTD','NAMATTD'),array('empty'=>'----Pilih NIP----','class'=>'form-control select2me'),
                            array(
                               'class'=>'form-control ',
                                'ajax' => array(
                                'type'=>'POST', //request type
                                
                                //Style: CController::createUrl('currentController/methodToCall')
                              
                                //'data'=>'js:javascript statement' 
                                //leave out the data key to pass all form values through
                                )
                                 )); ?> 
		<?php echo $form->error($model,'IDTTD'); ?>
		</div>
	</div> 
            
        </div>    

	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Update',array('class'=>'btn green')); ?>
		<?php  //if(!$model->isNewRecord) echo CHtml::link('Manage Mata Kuliah',array('matakuliahsurisu/admin','IDMATAKULIAHISU'=>$model->IDMATAKULIAHISU),array('class'=>'btn yellow')) ?>
		</div>
	</div>
	</div>

<?php $this->endWidget(); ?>