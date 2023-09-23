<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'surpermk-form',
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
                <div class="col-md-4">
                <?php echo $form->labelEx($model,'Surat Pernyataan Masih Kuliah',array('size'=>50,'maxlength'=>50,'class'=>'form-control','disabled'=>true)); ?>
		<?php echo $form->error($model,'IDJENISSURAT'); ?>
                </div>
	</div>

	<!--<div class="row">
		<?php //echo $form->labelEx($model,'NOSURATMK',array('class'=>'col-md-3 control-label')); ?>
		<?php //echo $form->textField($model,'NOSURATMK',array('size'=>50,'maxlength'=>50)); ?>
		<?php //echo $form->error($model,'NOSURATMK'); ?>
	</div>-->

	<!--<div class="row">
		<?php //echo $form->labelEx($model,'NIM',array('class'=>'col-md-3 control-label')); ?>
		<?php //echo $form->textField($model,'NIM',array('size'=>10,'maxlength'=>10)); ?>
		<?php //echo $form->error($model,'NIM'); ?>
	</div>-->
          <div class="form-group">
		<?php echo $form->labelEx($model,'Tahun Akademik Sekarang',array('class'=>'col-md-3 control-label'));?>
		<!--<div class="col-md-1">
                <?php //echo $form->textField($model,'IDTASEMESTER',array('size'=>10,'maxlength'=>10,'class'=>'form-control','disabled'=>true)); ?>
                </div>-->
                    
                <div class="col-md-2">
                 <?php echo $form->dropDownList($model,'IDTASEMESTER',
		   CHtml::listData(Currentsemester::model()->findAll(array('order'=>'IDTASEMESTER')), 'IDTASEMESTER','TAHUNAKADEMIK'),array('class'=>'form-control select2me','disabled'=>true)); ?>
               
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

        
        <div class="form-group">
            <?php echo $form->labelEx($model,'NIM',array('class'=>'col-md-3 control-label')); ?>
             <div class="col-md-4">
                <?php
                    $connection = Yii::app()->db;
                    $sql = "select NIM,  CONCAT(NIM,' - ',NAMA) as NAMA from mahasiswa";
                    $command = $connection->createCommand($sql);
                    $results = $command->queryAll();
                    ?>
                    <?php echo CHtml::activeDropDownList($model, 'NIM', CHtml::listData($results,  'NIM','NAMA'),array('class'=>'form-control select2me','disabled'=>true),
                            array(
                                'class'=>'form-control select2me',
                                )); ?> 
		<?php echo $form->error($model,'NIM'); ?>
		</div>
	</div> 

	
        <hr>
	<div class="form-group">
		<?php echo $form->labelEx($model,'NAMAWALIMK',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-6">
		<?php echo $form->textField($model,'NAMAWALIMK',array('size'=>50,'maxlength'=>50,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'NAMAWALIMK'); ?>
                </div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'NIPWALIMK',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-8">
		<?php echo $form->textField($model,'NIPWALIMK',array('size'=>1,'maxlength'=>500,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'NIPWALIMK'); ?>
                </div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'PANGGOL',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-5">
		<?php echo $form->textField($model,'PANGGOL',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'PANGGOL'); ?>
                </div>
	
            <li class="btn-group">
                <button type="button" class="btn blue dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
                    <span>Contoh Klik disini..</span><i class="fa fa-angle-down"></i>
                </button>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li>
                       <a href="#"><b>Format Penulisan :</b> </a> 
                       <a href="#">Pangkat / Golongan</a>
                    </li>
                    <li class="divider">
                    </li>
                    <li>
                        <a href="#"><b>Contoh:</b> </a>
                        <a href="#">Pengatur TK.I / IId </a>
                    </li>
                    <li class="divider">
                    </li>
                </ul>
            </li>
            
        </div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'INSTANSIWALIMK',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-7">
		<?php echo $form->textField($model,'INSTANSIWALIMK',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'INSTANSIWALIMK'); ?>
                </div>
	</div>

	<!--<div class="form-group">
		<?php //echo $form->labelEx($model,'TGLSUBMITMK',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-2">
		<?php //echo $form->textField($model,'TGLSUBMITMK'); ?>
		<?php //echo $form->error($model,'TGLSUBMITMK'); ?>
                </div>
	</div>-->
        </div>
	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Update',array('class'=>'btn btn-primary waves-effect waves-float waves-light')); ?>
		<?php //if(!$model->isNewRecord) echo CHtml::link('Manage ',array('surpermk/admin','IDMK'=>$model->IDMK),array('class'=>'btn yellow')) ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

<!-- form -->