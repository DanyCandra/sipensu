<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'groupsurpelpk-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'form-horizontal','role'=>'form'),
  
)); ?>
        <div class="form-body">
	<?php echo $form->errorSummary($model,'<b>Silakan perbaiki kesalahan berikut :</b> ','',array('class'=>'alert alert-danger')); ?>
         <!--<input type="hidden" value="<?php //echo $id ?>" />-->
	<div class="form-group">
		<?php echo $form->labelEx($model,'Instansi / Perusahaan',array('class'=>'col-md-3 control-label')); ?>
                <!--<div class="col-md-1">
		<?php //echo $form->textField($model,'IDSUBDETAILSURPELPK',array('class'=>'form-control select2me','readonly'=>true)); ?></div>-->
		<div class="col-md-5">
                    <?php echo $form->dropDownList($model,'IDSUBDETAILSURPELPK',
		   CHtml::listData(Subdetailsurpelpk::model()->findAll(array('order'=>'IDSUBDETAILSURPELPK')), 'IDSUBDETAILSURPELPK','iDPK.INSTANSIPK'),array('class'=>'form-control select2me','disabled'=>true)); ?>
                <?php echo $form->error($model,'IDSUBDETAILSURPELPK'); ?>
                </div>
               
	</div>
           
        <!--<div class="form-group">
		<?php //echo $form->labelEx($model,'Nama Mahasiswa',array('class'=>'col-md-3 control-label')); ?>
		<div class="col-md-4">
		<?php //echo $form->dropDownList($model,'NIM',
		    //CHtml::listData(Groupsurperpk::model()->findAll(array('with'=>array('nIM'=>array('alias'=>'mhs')),'order'=>'t.NIM')), 'NIM','nIM.NAMA'),array('empty'=>'----Pilih Nama Mahasiswa----','class'=>'form-control ')); ?></div>
                 <?php //echo $form->error($model,'NIM'); ?>
		
	</div>-->
	<hr>
       <div class="form-group">
		<?php echo $form->labelEx($model,'NIM',array('class'=>'col-md-3 control-label')); ?>
		
                <?php
                $a=Yii::app()->request->getParam('IDSUBDETAILSURPELPK');
                $connection=Yii::app()->db;
                //$sql="select groupsurperpk.IDPK,subdetailsurpelpk.IDPK,subdetailsurpelpk.IDSUBDETAILSURPELPK,groupsurperpk.NIM, concat(groupsurperpk.NIM,' - ',mahasiswa.NAMA)as 'namamhs' from groupsurperpk join mahasiswa on groupsurperpk.NIM=mahasiswa.NIM join subdetailsurpelpk on groupsurperpk.IDPK=subdetailsurpelpk.IDPK where subdetailsurpelpk.IDSUBDETAILSURPELPK='$a'";
                $sql="select groupsurperpk.IDPK,groupsurperpk.NIM, concat(groupsurperpk.NIM,' - ',mahasiswa.NAMA) as NAMA from groupsurperpk join mahasiswa on groupsurperpk.NIM=mahasiswa.NIM join subdetailsurpelpk on groupsurperpk.IDPK=subdetailsurpelpk.IDPK where subdetailsurpelpk.IDSUBDETAILSURPELPK='$a'";
                
                $command=$connection->createCommand($sql);
                $result=$command->queryAll();
                ?>
                <div class="col-md-4">
                <?php echo CHtml::activeDropDownList($model, 'NIM', CHtml::listData($result,  'NIM','NAMA'),array('class'=>'form-control'),
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
		<?php echo $form->labelEx($model,'NOURUTSURPELPK',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-1">
		<?php echo $form->textField($model,'NOURUTSURPELPK',array('size'=>50,'maxlength'=>50,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'NOURUTSURPELPK'); ?>
                </div>
	</div>
        
	<div class="form-actions fluid">
		<div class="col-md-offset-3 col-md-9">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Update',array('class'=>'btn green')); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

<!-- form -->