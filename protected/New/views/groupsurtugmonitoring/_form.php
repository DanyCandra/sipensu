<script type="text/javascript" src="<?php echo Yii::app()->baseUrl;?>/metronic/assets/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl;?>/metronic/assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css"/>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'groupsurtugmonitoring-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'form-horizontal','role'=>'form'),
)); ?>
        <div class="form-body">
	<?php echo $form->errorSummary($model,'<b>Silakan perbaiki kesalahan berikut :</b> ','',array('class'=>'alert alert-danger')); ?>

	<!--<div class="form-group">
		<?php //echo $form->labelEx($model,'IDSURTUGMONITORING',array('class'=>'col-md-3 control-label')); ?>
		<?php //echo $form->textField($model,'IDSURTUGMONITORING'); ?>
		<?php //echo $form->error($model,'IDSURTUGMONITORING'); ?>
	</div>-->
        <div class="form-group">
		<?php echo $form->labelEx($model,'IDSURTUGMONITORING',array('class'=>'col-md-3 control-label')); ?>
                <div class="col-md-1">
		<?php echo $form->textField($model,'IDSURTUGMONITORING',array('class'=>'form-control select2me','readonly'=>true)); ?></div>
		
                    <div class="col-md-5">
                     <?php echo $form->dropDownList($model,'IDSURTUGMONITORING',
		   CHtml::listData(Surtugmonitoring::model()->findAll(array('order'=>'IDSURTUGMONITORING')), 'IDSURTUGMONITORING','iDSUBDETAILSURPELPK.iDPK.INSTANSIPK'),array('class'=>'form-control select2me','readonly'=>true)); ?>
                <?php echo $form->error($model,'IDSURTUGMONITORING'); ?>
                </div>
               
	</div>
        <div class="form-group">
		<?php echo $form->labelEx($model,'Dosen Monitoring',array('class'=>'col-md-3 control-label')); ?>
                    <div class="col-md-4">
                     <?php echo $form->dropDownList($model,'IDSURTUGMONITORING',
		   CHtml::listData(Surtugmonitoring::model()->findAll(array('order'=>'IDSURTUGMONITORING')), 'IDSURTUGMONITORING','nIP.NAMA2'),array('class'=>'form-control select2me','readonly'=>true)); ?>
                <?php echo $form->error($model,'IDSURTUGMONITORING'); ?>
                </div>
               
	</div>

	
        <!--<div class="form-group">
		<?php //echo $form->labelEx($model,'Nama Mahasiswa',array('class'=>'col-md-3 control-label')); ?>
		<div class="col-md-3">
		<?php //echo $form->dropDownList($model,'NIM',
		    //CHtml::listData(Groupsurpelpk::model()->findAll(array('order'=>'NIM')), 'NIM','nIM.NAMA'),array('empty'=>'----Pilih Nama Mahasiswa----','class'=>'form-control select2me')); ?></div>
                 <?php //echo $form->error($model,'NIM'); ?>
		
	</div>-->
         <div class="form-group">
		<?php echo $form->labelEx($model,'NIM',array('class'=>'col-md-3 control-label')); ?>
		
                <?php
                $a=Yii::app()->request->getParam('IDSURTUGMONITORING');
                $connection=Yii::app()->db;
                $sql="SELECT surtugmonitoring.IDSUBDETAILSURPELPK, groupsurpelpk.NIM, concat(groupsurpelpk.NIM,' - ',mahasiswa.NAMA)as 'namamhs' from groupsurpelpk
                join mahasiswa on groupsurpelpk.NIM=mahasiswa.NIM JOIN surtugmonitoring ON groupsurpelpk.IDSUBDETAILSURPELPK=surtugmonitoring.IDSUBDETAILSURPELPK
                WHERE surtugmonitoring.IDSURTUGMONITORING='$a'";
                $command=$connection->createCommand($sql);
                $result=$command->queryAll();
                ?>
                <div class="col-md-4">
                <?php echo CHtml::activeDropDownList($model,'NIM', CHtml::listData($result, 'NIM','namamhs'),
                        array(
                            'class'=>'form-control select2me',
                            'ajax'=>array(
                               'type'=>'POST',
                                
                            ))
                        );?>
                </div>
		<?php echo $form->error($model,'NIM'); ?>
	</div>  
            
        <div class="form-group">
		<?php echo $form->labelEx($model,'NOURUTSURTUGMONITORING',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-1">
		<?php echo $form->textField($model,'NOURUTSURTUGMONITORING',array('size'=>50,'maxlength'=>50,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'NOURUTSURTUGMONITORING'); ?>
                </div>
	</div>     

	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Update',array('class'=>'btn green')); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

<!-- form -->