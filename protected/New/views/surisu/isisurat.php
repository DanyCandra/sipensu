<div class="row">
    <div class="col-md-12 col-lg-6">
        <div class="card mb-6">
            <div class="card-body">
                <h4 class="card-title"> View Permintaan Surat Ijin Survei  #<?php echo $model->IDISU; ?></h4>
                <?php $this->widget('zii.widgets.CDetailView', array(
                    'data'=>$model,
                    'htmlOptions' => array('class'=> 'table table-bordered table-striped table-advance table-hover'),
                    'attributes'=>array(
                        'IDISU',
                        'iDJENISSURAT.NAMAJENISSURAT',
                        'NOISU',
                        'INSTANSIISU',
                        'ALAMATINSTANSIISU',
                        'KOTAINSTANSIISU',
                        'iDTASEMESTER.TAHUNAKADEMIK',
                        'iDTASEMESTER.SEMESTER',
                        'iDMATAKULIAHISU.NAMAMATAKULIAHISU',
                        'KETERANGANISU',
                        'TGLSUBMITISU',
                        'ACCSURISU',
                    ),
                )); ?>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-lg-6">
        <div class="card mb-6">
            <div class="card-body">
                <?php echo CHtml::link('Lihat Daftar Permintaan Surat  <i class="fa fa-search"></i>' ,array('surisu/permintaansurat'),array('class'=>'btn btn-gradient-primary'));?>
                <?php
                $a=$model->IDISU;
                $sql="select IDISU from detailsurisu where IDISU='$a'";
                $b=  Yii::app()->db->createCommand($sql)->queryScalar();

                if($b==0){
                    echo CHtml::link('Edit  <i class="fa fa-edit"></i>',array('surisu/updatebymahasiswa','id'=>$model->IDISU),array('class'=>'btn btn-gradient-info'));
                }
                else
                {
                    echo "";
                }
                ?>
            </div>
            <div class="card-body">
                <i class="fa fa-envelope"></i> View Group Mahasiswa Ijin Survei  #<?php echo $model->IDISU; ?>
                <i class="fa fa-cogs"></i> Group Mahasiswa Peminta/Pemohon Srt.Ijin Survei
                <?php
                //menampilkan list
                $listgroupmahasiswasurisu=new CActiveDataProvider('Groupsurisu',array('criteria'=>array('condition'=>'IDISU='.$model->IDISU)));
                $this->widget('ext.GroupGridView', array(
                    'id'=>'groupsurisu-grid',
                    'dataProvider'=>$listgroupmahasiswasurisu,
                    'itemsCssClass' => 'table table-bordered table-striped table-advance table-hover',
                    'columns'=>array(
                        //'IDISU',
                        //'IDGROUPSURISU',
                        'NIM',
                        'nIM.NAMA',
                        'nIM.iDPRODI.NAMAPRODI',
                        'NOURUTGROUPSURISU',
                        array(
                            'header'=>'Action',
                            'htmlOptions'=>array('style'=>'width:60px'),
                            'class' => 'CButtonColumn',
                            'template' => ' {update} {delete}',
                            'buttons' => array(
                                'view' => array(
                                    //'label'=>'View',
                                    //'url'=>'Yii::app()->createUrl("/groupsurisu/view", array("id" => $data->IDGROUPSURISU))',
                                ),

                                'update' => array(
                                    'label' => 'Update',
                                    'url' => 'Yii::app()->createUrl("/groupsurisu/updatemhs", array("id" => $data->IDGROUPSURISU))',
                                ),
                                'delete' => array(
                                    'label' => 'delete',
                                    'url' => 'Yii::app()->createUrl("/groupsurisu/deletemhs", array("id" => $data->IDGROUPSURISU))',
                                ),
                            ),
                        ),


                    ),

                ));

                ?>
                <?php
                $a=$model->IDISU;
                $sql="select IDISU from detailsurisu where IDISU='$a'";
                $b=  Yii::app()->db->createCommand($sql)->queryScalar();

                if($b==0){
                    echo CHtml::link('Create Mahasiswa &nbsp<i class="fa fa-user"></i>',array('groupsurisu/createmhs','IDISU'=>$model->IDISU),array('class'=>'btn btn-info'));
                }
                else
                {
                    echo "Group Mahasiswa sudah terkirim..";
                }
                ?>
            </div>
            <div class="card-body">
                <button class="btn btn-danger" tabindex="-1" type="button">NOTE :</button>
                <?php
                array(
                    'value'=>$model->getListsendsurisu($model->IDISU) ,
                );
                ?>
                <?php
                $a=$model->IDISU;
                $sql="select IDISU from detailsurisu where IDISU='$a'";
                $b=  Yii::app()->db->createCommand($sql)->queryScalar();

                if($b==0){
                    echo CHtml::link('Ajukan permintaan/permohonan surat.... &nbsp<i class="fa fa-arrow-circle-right"></i>',array('detailsurisu/createbymahasiswa','IDISU'=>$model->IDISU),array('class'=>'btn btn-warning'));
                }
                else
                {
                    echo "Data sudah terkirim...";
                }
                ?>
            </div>
        </div>
    </div>
</div>