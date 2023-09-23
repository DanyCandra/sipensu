<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'surisu-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'form-horizontal','role'=>'form'),
)); ?>

	<div class="form-body">
	<?php echo $form->errorSummary($model,'<b>Silahkan perbaiki kesalahan berikut :</b> ','',array('class'=>'alert alert-danger')); ?>
           
        <div class="form-group">
		<?php echo $form->labelEx($model,'IDJENISSURAT',array('class'=>'col-md-3 control-label'));?>
		<!--<div class="col-md-1">
                <?php //echo $form->textField($model,'IDJENISSURAT',array('size'=>10,'maxlength'=>10,'class'=>'form-control','disabled'=>true)); ?>
                </div>-->
                <div class="col-md-5">
                <?php echo $form->labelEx($model,'Surat Pernyataan Permohonan Ijin Survei',array('size'=>50,'maxlength'=>50,'class'=>'form-control','disabled'=>true)); ?>
		<?php echo $form->error($model,'IDJENISSURAT'); ?>
                </div>
	</div>
            
       <div class="form-group">
		<?php echo $form->labelEx($model,'Tahun Akademik Sekarang',array('class'=>'col-md-3 control-label'));?>
		<!--<div class="col-md-1">
                <?php //echo $form->textField($model,'IDTASEMESTER',array('size'=>10,'maxlength'=>10,'class'=>'form-control','disabled'=>true)); ?>
                </div>-->
                    
                <div class="col-md-2">
                 <?php echo $form->dropDownList($model,'IDTASEMESTER',CHtml::listData(Currentsemester::model()->findAll(array('order'=>'IDTASEMESTER')), 'IDTASEMESTER','TAHUNAKADEMIK'),array('class'=>'form-control select2me','disabled'=>true)); ?>
               
                </div>
                
                    <div class="col-md-2">
                        <?php echo $form->labelEx($model,'Semester Sekarang',array('class'=>'control-label'));?>
                    </div>
                <div class="col-md-2">
               <?php echo $form->dropDownList($model,'IDTASEMESTER',
		   CHtml::listData(Currentsemester::model()->findAll(array('order'=>'IDTASEMESTER')), 'IDTASEMESTER','KETSEMESTER'),array('class'=>'form-control select2me','disabled'=>true)); ?>
                </div>
                <?php echo $form->error($model,'IDTASEMESTER'); ?>    
	</div>
        <hr>    

	<!--<div class="row">
		<?php //echo $form->labelEx($model,'NOISU',array('class'=>'col-md-3 control-label')); ?>
		<?php //echo $form->textField($model,'NOISU',array('size'=>50,'maxlength'=>50)); ?>
		<?php //echo $form->error($model,'NOISU'); ?>
	</div>-->
        
         <div class="form-group">
		<?php echo $form->labelEx($model,'INSTANSIISU',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-4">
		<?php echo $form->textField($model,'INSTANSIISU',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'INSTANSIISU'); ?>
                </div>
	</div>
        
        <div class="form-group">
		<?php echo $form->labelEx($model,'ALAMATINSTANSIISU',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-8">
		<?php echo $form->textField($model,'ALAMATINSTANSIISU',array('size'=>60,'maxlength'=>200,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'ALAMATINSTANSIISU'); ?>
                </div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'KOTAINSTANSIISU',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-4">
		<?php echo $form->textField($model,'KOTAINSTANSIISU',array('size'=>60,'maxlength'=>100,'style'=>"text-transform:capitalize",'class'=>'form-control')); ?>
		<?php echo $form->error($model,'KOTAINSTANSIISU'); ?>
                </div>
	</div>
         
        
         
         <div class="form-group"> 
                <?php echo $form->labelEx($model,'IDMATAKULIAHISU',array('class'=>'col-md-3 control-label'));?>
               <div class="col-md-3">
                   <div class="radio-list"> 
                <?php
                 /*echo $form->radioButtonList($model,
                         'IDMATAKULIAHISU',array('1'=>'Manajemen Kearsipan',
                                               '2'=>'Manajemen Perkantoran',
                                               '3'=>'Adm. Keuangan Negara',
											    '4'=>'Ekonomi Pertanian',
												'5'=>'Praktik Kesekretariatan',
												'6'=>'Kewirausahaan',
												'7'=>'Ekonomi Koperasi',
												'8'=>'Perencanaan Pajak',
												'9'=>'Demografi',
												'10'=>'Perilaku Keorganisasian',
												'11'=>'Koperasi dan UMKM',
												'12'=>'Evaluasi Pembelajaran',
												'13'=>'Pengembangan Diri',
												'14'=>'Manajemen Strategi',
												'15'=>'Manajemen Akuntansi',));*/
                ?>
				<?php echo $form->dropDownList($model,'IDMATAKULIAHISU',CHtml::listData(Matakuliahsurisu::model()->findAll(array('order'=>'IDMATAKULIAHISU')), 'IDMATAKULIAHISU','NAMAMATAKULIAHISU'),array('class'=>'form-control select2me')); ?>
				</div>
                <?php echo $form->error($model,'IDMATAKULIAHISU'); ?>
                </div>
        </div>
 
	<!--<div class="row">
		<?php //echo $form->labelEx($model,'KETERANGANISU',array('class'=>'col-md-3 control-label')); ?>
		<?php //echo $form->textArea($model,'KETERANGANISU',array('rows'=>6, 'cols'=>50)); ?>
		<?php //echo $form->error($model,'KETERANGANISU'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'TGLSUBMITISU',array('class'=>'col-md-3 control-label')); ?>
		<?php //echo $form->textField($model,'TGLSUBMITISU'); ?>
		<?php //echo $form->error($model,'TGLSUBMITISU'); ?>
	</div>-->
        <div class="form-group has-success">
		<?php echo $form->labelEx($model,'KETERANGANISU',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-5">
                     <div class="input-icon right">
                        <i class="fa fa-check tooltips" data-container="body" data-original-titlr="You look OK!"></i>
                    </div>
		<?php echo $form->textArea($model,'KETERANGANISU',array('rows'=>6, 'cols'=>50,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'KETERANGANISU'); ?>
                </div>
	</div>
	</div>
	
	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Update',array('class'=>'btn green')); ?>
		<?php //if(!$model->isNewRecord) echo CHtml::link('Manage ',array('surisu/admin','IDISU'=>$model->IDISU),array('class'=>'btn yellow')) ?>
		</div>
	</div>


	
<?php $this->endWidget(); ?>

</div><!-- form -->