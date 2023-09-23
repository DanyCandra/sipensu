<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'surtugpm-form',
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
            <div class="col-md-6">
                <?php echo $form->labelEx($model,'Surat Tugas Pengabdian pada Masyarakat',array('size'=>50,'maxlength'=>50,'class'=>'form-control','disabled'=>true)); ?>


                <?php echo $form->error($model,'IDJENISSURAT'); ?>
            </div>
        </div>



        <div class="form-group">
            <?php echo $form->labelEx($model,'Nama',array('class'=>'col-md-3 control-label'));?>
            <div class="col-md-5">
                <?php echo $form->dropDownList($model,'NIP',
                    CHtml::listData(Msdos::model()->findAll(array('order'=>'NAMA2')), 'NIP', 'NAMA2'),array('empty'=>'----Pilih----','class'=>'form-control select2me','disabled'=>true)); ?>
                <?php echo $form->error($model,'NIP'); ?>
            </div>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model,'Pangkat & Golongan',array('class'=>'col-md-3 control-label')); ?>
            <div class="col-md-4">


                <?php
                $connection = Yii::app()->db;
                $sql = "select IDPANGGOL,  CONCAT(PANGKAT,' - ',GOL) as GOL from panggol";
                $command = $connection->createCommand($sql);
                $results = $command->queryAll();
                ?>
                <?php echo CHtml::activeDropDownList($model, 'IDPANGGOL', CHtml::listData($results,  'IDPANGGOL','GOL'),
                    array(
                        'empty'=>'----Pilih----','class'=>'form-control select2me',
                        'ajax' => array(
                            'type'=>'POST', //request type

                            //Style: CController::createUrl('currentController/methodToCall')

                            //'data'=>'js:javascript statement'
                            //leave out the data key to pass all form values through
                        )

                    )); ?>
                <?php echo $form->error($model,'IDPANGGOL'); ?>
            </div>
        </div>


        <div class="form-group">
            <?php echo $form->labelEx($model,'Jabatan Akademik',array('class'=>'col-md-3 control-label'));?>
            <div class="col-md-4">
                <?php echo $form->dropDownList($model,'IDJABATANAKADEMIK',
                    CHtml::listData(Jabatanakademik::model()->findAll(array('order'=>'IDJABATANAKADEMIK')), 'IDJABATANAKADEMIK', 'NAMAJABATANAKADEMIK'),array('empty'=>'----Pilih----','class'=>'form-control select2me')); ?>
                <?php echo $form->error($model,'IDJABATANAKADEMIK'); ?>
            </div>
        </div>


        <!--<div class="form-group">
		<?php //echo $form->labelEx($model,'NOSURATPM',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-2">
		<?php //echo $form->textField($model,'NOSURATPM',array('size'=>50,'maxlength'=>50,'class'=>'form-control')); ?>
		<?php //echo $form->error($model,'NOSURATPM'); ?>
                </div>
	</div>-->

        <div class="form-group">
            <?php echo $form->labelEx($model,'JUDULPM',array('class'=>'col-md-3 control-label'));?>
            <div class="col-md-9">
                <?php echo $form->textField($model,'JUDULPM',array('size'=>60,'maxlength'=>500,'class'=>'form-control')); ?>
                <?php echo $form->error($model,'JUDULPM'); ?>
            </div>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model,'TGLDILAKSANAKANPM',array('class'=>'col-md-3 control-label date-picker'));?>
            <div class="col-md-2">
                <?php
                $this->widget ('zii.widgets.jui.CJuiDatePicker', array (
                        //you must specify name or model/attribute
                        'model'=>$model,
                        'attribute'=>'TGLDILAKSANAKANPM',
                        'value'=>$model->TGLDILAKSANAKANPM,
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
                <?php echo $form->error ($model,'TGLDILAKSANAKANPM');?>
            </div>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model,'INSTANSIPM',array('class'=>'col-md-3 control-label'));?>
            <div class="col-md-6">
                <?php echo $form->textField($model,'INSTANSIPM',array('size'=>60,'maxlength'=>80,'class'=>'form-control')); ?>
                <?php echo $form->error($model,'INSTANSIPM'); ?>
            </div>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model,'ALAMATINSTANSIPM',array('class'=>'col-md-3 control-label'));?>
            <div class="col-md-6">
                <?php echo $form->textArea($model,'ALAMATINSTANSIPM',array('rows'=>6, 'cols'=>50,'class'=>'form-control')); ?>
                <?php echo $form->error($model,'ALAMATINSTANSIPM'); ?>
            </div>
        </div>

        <div class="form-group has-success">
            <?php echo $form->labelEx($model,'KETERANGANPM',array('class'=>'col-md-3 control-label'));?>
            <div class="col-md-8">
                <div class="input-icon right">
                    <i class="fa fa-check tooltips" data-container="body" data-original-titlr="You look OK!"></i>
                </div>
                <?php echo $form->textField($model,'KETERANGANPM',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
                <?php echo $form->error($model,'KETERANGANPM'); ?>
            </div>
        </div>



        <!--<div class="form-group">
		<?php //echo $form->labelEx($model,'TGLSUBMITPM',array('class'=>'col-md-3 control-label'));?>
		<div class="col-md-3">
		<?php //echo $form->textField($model,'TGLSUBMITPM'); ?>
		<?php //echo $form->error($model,'TGLSUBMITPM'); ?>
                </div>
	</div>-->

    </div>

    <div class="form-actions fluid">
        <div class="col-md-offset-3 col-md-9">
            <?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Update',array('class'=>'btn btn-outline-warning round waves-effect')); ?>
            <?php if(!$model->isNewRecord) echo CHtml::link('Manage ',array('surtugpm/admin','IDPM'=>$model->IDPM),array('btn btn-outline-warning round waves-effect')) ?>
        </div>
    </div>


<?php $this->endWidget(); ?>