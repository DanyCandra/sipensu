<?php
/* @var $this BeritaController */
/* @var $model Berita */
/* @var $form CActiveForm */
?>

<script src="<?php echo Yii::app()->baseUrl.'/ckeditor/ckeditor.js'; ?>"></script>
<?php $form=$this->beginWidget('CActiveForm', array(

   	'id'=>'berita-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
        'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'form-horizontal','role'=>'form'),
     
)); ?>
        
	<div class="form-body">
	<?php echo $form->errorSummary($model,'<b>Silakan perbaiki kesalahan berikut :</b> ','',array('class'=>'alert alert-danger')); ?>
        <div class="tools">
								
	<div class="form-group">
		<?php echo $form->labelEx($model,'IDKATEGORI',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-4">
                <?php echo $form->dropDownList($model,'IDKATEGORI',
		   CHtml::listData(Kategoriberita::model()->findAll(array('order'=>'IDKATEGORI')), 'IDKATEGORI','NAMAKATEGORI'),array('empty'=>'----Pilih Kategori----','class'=>'form-control select2me')); ?>    
		<?php echo $form->error($model,'IDKATEGORI'); ?>
                </div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'JUDUL',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-9">
		<?php echo $form->textField($model,'JUDUL',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'JUDUL'); ?>
                </div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'ISI',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-9">
		<?php echo $form->textArea($model,'ISI',array('rows'=>6, 'cols'=>50,'class'=>'form-control','id'=>'editor1')); ?>
		<?php echo $form->error($model,'ISI'); ?>
                </div>
	</div>
    <script type="text/javascript">
    CKEDITOR.replace( 'editor1', {
         filebrowserBrowseUrl: '<?php echo Yii::app()->baseUrl; ?>/kcfinder/browse.php?type=files',
         filebrowserImageBrowseUrl: '<?php echo Yii::app()->baseUrl; ?>/kcfinder/browse.php?type=images',
         filebrowserFlashBrowseUrl: '<?php echo Yii::app()->baseUrl; ?>/kcfinder/browse.php?type=flash',
         filebrowserUploadUrl: '<?php echo Yii::app()->baseUrl; ?>/kcfinder/upload.php?type=files',
         filebrowserImageUploadUrl: '<?php echo Yii::app()->baseUrl; ?>/kcfinder/upload.php?type=images',
         filebrowserFlashUploadUrl: '<?php echo Yii::app()->baseUrl; ?>/kcfinder/upload.php?type=flash'
    });
</script> 

	<div class="form-group">
		<?php echo $form->labelEx($model,'ISPUBLISH',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-2">
		<?php
                 echo $form->checkbox($model,
                         'ISPUBLISH',array('1'=>'Publish','class'=>'form-control'
                             ));
                ?>
                
		<?php echo $form->error($model,'ISPUBLISH'); ?>
                </div>
               
                
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'FILEIMAGE',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-6">
		<?php echo $form->textField($model,'FILEIMAGE',array('size'=>50,'maxlength'=>50,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'FILEIMAGE'); ?>
                </div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'HIT',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-6">
		<?php echo $form->textField($model,'HIT',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'HIT'); ?>
                </div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'TGLSUBMIT',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-6">
		<?php echo $form->textField($model,'TGLSUBMIT',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'TGLSUBMIT'); ?>
                </div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'SUMMARY',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-9">
		<?php echo $form->textArea($model,'SUMMARY',array('rows'=>6, 'cols'=>50,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'SUMMARY'); ?>
                </div>
	</div>
        
        </div>
	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Update',array('class'=>'btn green')); ?>
		<?php if(!$model->isNewRecord) echo CHtml::link('Manage',array('berita/admin','IDBERITA'=>$model->IDBERITA),array('class'=>'btn yellow')) ?>
		</div>
	</div>

<?php $this->endWidget(); ?>