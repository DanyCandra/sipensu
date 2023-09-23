<?php
/* @var $this SuratketeranganController */
/* @var $model Suratketerangan */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
        'htmlOptions'=>array('class'=>'form-horizontal','role'=>'form'),
)); ?>
    
           
          <!--<div class="form-group">
            <?php //echo $form->labelEx($model,'NIM',array('class'=>'col-md-3 control-label')); ?>
             <div class="col-md-4">
                <?php
                    //$connection = Yii::app()->db;
                    //$sql = "select NIM,  CONCAT(NIM,' - ',NAMA) as NAMA from mahasiswa ";
                    //$command = $connection->createCommand($sql);
                    //$results = $command->queryAll();
                    ?>
                    <?php //cho CHtml::activeDropDownList($model, 'NIM', CHtml::listData($results,  'NIM','NAMA'),array('empty'=>'----Pilih NIM----','class'=>'form-control select2me'),
                            //array(
                              //  'class'=>'form-control select2me',
                             //   )); ?> 
		<?php // echo $form->error($model,'NIM'); ?>
		</div>
	</div> -->
          <div class="form-group">
		<?php echo $form->labelEx($model,'Program Studi',array('class'=>'col-md-3 control-label')); ?>
		<div class="col-md-4">
		<?php echo $form->dropDownList($model,'cariprodi',
		   CHtml::listData(Prodi::model()->findAll(array('order'=>'IDPRODI')), 'IDPRODI','NAMAPRODI'),array('empty'=>'----Pilih Prodi----','class'=>'form-control select2me')); ?>
             
		</div>
	</div>  
	<!--<div class="row">
		<?php echo $form->label($model,'IDSURKET'); ?>
		<?php echo $form->textField($model,'IDSURKET'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IDJENISSURAT'); ?>
		<?php echo $form->textField($model,'IDJENISSURAT'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IDTASEMESTER'); ?>
		<?php echo $form->textField($model,'IDTASEMESTER'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NOSURKET'); ?>
		<?php echo $form->textField($model,'NOSURKET',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NIM'); ?>
		<?php echo $form->textField($model,'NIM',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PERIHAL1'); ?>
		<?php echo $form->textArea($model,'PERIHAL1',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PERIHAL2'); ?>
		<?php echo $form->textArea($model,'PERIHAL2',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'KETERANGANSURKET'); ?>
		<?php echo $form->textArea($model,'KETERANGANSURKET',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TGLCETAKSURKET'); ?>
		<?php echo $form->textField($model,'TGLCETAKSURKET',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TGLSUBMITSURKET'); ?>
		<?php echo $form->textField($model,'TGLSUBMITSURKET'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ACCSURKET'); ?>
		<?php echo $form->textField($model,'ACCSURKET',array('size'=>15,'maxlength'=>15)); ?>
	</div>-->

	
	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton('Search'); ?>
                </div>
	</div>


<?php $this->endWidget(); ?>

</div><!-- search-form -->