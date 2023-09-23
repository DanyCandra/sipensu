<?php
/* @var $this GroupsurtugmonitoringController */
/* @var $model Groupsurtugmonitoring */
/* @var $form CActiveForm */
?>

<div class="form-body">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
        'htmlOptions'=>array('class'=>'form-horizontal','role'=>'form'),
)); ?>
        <!--
	 <div class="form-group">
		<?php //echo $form->label($model,'IDGROUPSURTUGMONITORING',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-4">
		<?php //echo $form->textField($model,'IDGROUPSURTUGMONITORING',array ('class'=>'form-control')); ?>
                </div>
	</div>-->
        
        

       <!-- <div class="form-group">
            <?php //echo $form->labelEx($model, 'Tahun Akademik Semester', array('class' => 'col-md-3 control-label')); ?>
            <div class="col-md-2">
                <div class="row">
                    <?php //echo $form->textField($model, 'carith', array('class' => 'form-control')); ?>
                </div>

            </div>
        </div> -->
          <!--QUERY CARI TAHUN AKADEMIK YANG ADA DI TABEL SURPERPK--> 
       
          <div class="form-group">
		<?php echo $form->labelEx($model,'Tahun Akademik & Semester',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-2">
                  <?php
                    $connection = Yii::app()->db;
                     $qry = "select  surperpk.IDTASEMESTER,KETSEMESTER, CONCAT(KETTAHUNAKADEMIK,'-',KETSEMESTER) as KETTAHUNAKADEMIK from surperpk inner join currentsemester on surperpk.IDTASEMESTER=currentsemester.IDTASEMESTER
                group by surperpk.IDTASEMESTER,KETSEMESTER";
                   // $command = $connection->createCommand($sql);
                    $listth = Yii::app()->db->createCommand($qry)->queryAll();
                    ?>
                    <?php echo CHtml::activeDropDownList($model, 'carismstr', CHtml::listData($listth,  'IDTASEMESTER','KETTAHUNAKADEMIK'),array('empty'=>'----Pilih----','class'=>'form-control select2me'),
                            array(
                                'class'=>'form-control select2me',
                                )); ?>     
		
                		</div>
	</div>
         
	 <div class="form-group">
		<?php echo $form->label($model,'NIM',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-2">
		<?php echo $form->textField($model,'NIM',array('size'=>9,'maxlength'=>9,'class'=>'form-control')); ?>
                </div>
	</div>

	 <!--<div class="form-group">
		<?php //echo $form->label($model,'NOURUTSURTUGMONITORING',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-2">
		<?php //echo $form->textField($model,'NOURUTSURTUGMONITORING',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
                </div>
	</div>-->
        
        
      
        <div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton('Search',array('class'=>'btn btn-primary')); ?>
                       
                </div>
	</div>
	

<?php $this->endWidget(); ?>

</div><!-- search-form -->