<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card mb-12">
            <div class="card-body">
                <h4 class="card-title">View Surat Permohonan Praktik Kerja (Prodi D3) #<?php echo $model->IDPK; ?></h4>
                <?php $this->widget('zii.widgets.CDetailView', array(
                    'data'=>$model,
                    'htmlOptions' => array('class'=> 'table table-bordered table-striped table-advance table-hover'),
                    'attributes'=>array(
                        'IDPK',
                        'iDJENISSURAT.NAMAJENISSURAT',
                        'NOSURATPK',
                        'INSTANSIPK',
                        'ALAMATINSTANSIPK',
                        'KOTAINSTANSIPK',
                        'iDTASEMESTER.TAHUNAKADEMIK',
                        'iDTASEMESTER.SEMESTER',
                        'ACCPERPK',
                        'KETERANGANPK',
                        'TGLSUBMITPK',
                        'ACCSURPERPK',
                        array(
                            'type'=>'raw',
                            'value'=>  CHtml::link('List Permintaan/Permohonan Surat  <i class="fa fa-search"></i>' ,array('surperpk/admin'),array('class'=>'btn btn-primary')).''.
                                CHtml::link('Hapus  <i class="fa fa-times"></i>',array('surperpk/deletebyowner','id'=>$model->IDPK),array('class'=>'btn btn-warning','confirm'=>'Hapus data ?')).''.
                                CHtml::link('Edit  <i class="fa fa-edit"></i>',array('surperpk/update','id'=>$model->IDPK),array('class'=>'btn btn-info ')),
                        )
                    ),
                )); ?>
            </div>
        </div>
    </div>
</div>

<!--membuat menu untuk mengirim permintaan srt.tugas ke divisi umum & perlengkapan -->
<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card mb-12">
            <div class="card-body">
                <h4 class="card-title">View Group Pemohon Surat Praktik Kerja  #<?php echo $model->IDPK; ?></h4>
                <i class="fa fa-cogs"></i> Group Mahasiswa Pemohon Surat
                <?php
                //menampilkan list
                $listgroupmahasiswasurmag=new CActiveDataProvider('Groupsurperpk',array('criteria'=>array('condition'=>'IDPK='.$model->IDPK)));
                $this->widget('ext.GroupGridView', array(
                    'id'=>'groupsurperpk-grid',
                    'dataProvider'=>$listgroupmahasiswasurmag,
                    'itemsCssClass' => 'table table-bordered table-striped table-advance table-hover',
                    'columns'=>array(
                        //'IDPK',
                        //'IDGROUPSURPERPK',
                        'NIM',
                        'nIM.NAMA',
                        'nIM.iDPRODI.NAMAPRODI',
                        'NOURUTSURPERPK',
                        array(
                            'header'=>'Action',
                            'htmlOptions'=>array('style'=>'width:60px'),
                            'class' => 'CButtonColumn',
                            'template' => ' {update} {delete}',
                            'buttons' => array(
                                'view' => array(
                                    //'label'=>'View',
                                    //'url'=>'Yii::app()->createUrl("/groupsurperpk/view", array("id" => $data->IDGROUPSURPERPK))',
                                ),
                                'update' => array(
                                    'label' => 'Update',
                                    'url' => 'Yii::app()->createUrl("/groupsurperpk/update", array("id" => $data->IDGROUPSURPERPK))',
                                ),
                                'delete' => array(
                                    'label' => 'delete',
                                    'url' => 'Yii::app()->createUrl("/groupsurperpk/delete", array("id" => $data->IDGROUPSURPERPK))',
                                ),
                            ),
                        ),
                    ),
                ));
                ?>
                <?php
                $a=$model->IDPK;
                $sql="select IDPK from detailsurperpk where IDPK='$a'";
                $b=  Yii::app()->db->createCommand($sql)->queryScalar();

                if($b==0){
                    echo CHtml::link('Tambahkan Group Mahasiswa &nbsp<i class="fa fa-user"></i>',array('groupsurperpk/create','IDPK'=>$model->IDPK),array('class'=>'btn btn-primary'));
                }
                else
                {
                    echo "Group Mahasiswa sudah terkirim..";
                }
                ?>

            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card mb-12">
            <div class="card-body">
                <h4 class="card-title">
                    <button class="btn red" tabindex="-1" type="button">NOTE :</button>
                    <?php
                    array(
                        'value'=>$model->getListsendsuratpk($model->IDPK) ,
                    );
                    ?>
                </h4>
                <?php
                $a=$model->IDPK;
                $sql="select IDPK from detailsurperpk where IDPK='$a'";
                $b=  Yii::app()->db->createCommand($sql)->queryScalar();

                if($b==0){
                    echo CHtml::link('Ajukan permintaan/permohonan surat.... &nbsp<i class="fa fa-arrow-circle-right"></i>',array('detailsurperpk/create','IDPK'=>$model->IDPK),array('class'=>'btn btn purple'));
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
<!--update preview notifikasi setelah action view dilakukan-->
<?php
$IDPK = Yii::app()->request->getParam('id', 0);
$smod4el = Surperpk::model()->updateByPk
($IDPK, array("PREVIEW" => 'Y'));
?>