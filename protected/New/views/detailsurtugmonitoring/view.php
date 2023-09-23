<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card mb-12">
            <div class="card-body">
                <h4 class="card-title"> View Acc. Surat Tugas Monitoring Praktik Kerja (Prodi D3) #<?php echo $model->IDDETAILSURTUGMONITORING; ?>  </h4>
                <h2>
                    Nomor :&nbsp;<?php echo $model->iDSURTUGMONITORING->NOSURTUGMONITORING;?>/<?php echo $model->iDSURTUGMONITORING->iDJENISSURAT->iDJABATANSTRUKTURAL->IDJABATANSURAT; ?>/<?php echo $model->iDSURTUGMONITORING->iDJENISSURAT->IDKLASIFIKASI;?>/<?php $tgl=date('Y');echo $tgl;?>
                </h2>
                <?php $this->widget('zii.widgets.CDetailView', array(
                    'data'=>$model,
                    'htmlOptions' => array('class'=> 'table table-bordered table-striped table-advance table-hover'),
                    'attributes'=>array(
                        'IDDETAILSURTUGMONITORING',
                        'iDSURTUGMONITORING.NOSURTUGMONITORING',
                        'iDSURTUGMONITORING.iDSUBDETAILSURPELPK.iDPK.INSTANSIPK',
                        'iDSURTUGMONITORING.iDSUBDETAILSURPELPK.iDPK.ALAMATINSTANSIPK',
                        'iDSURTUGMONITORING.iDSUBDETAILSURPELPK.iDPK.KOTAINSTANSIPK',
                        'iDSURTUGMONITORING.iDSUBDETAILSURPELPK.iDPK.iDTASEMESTER.TAHUNAKADEMIK',
                        'iDSURTUGMONITORING.iDSUBDETAILSURPELPK.iDPK.iDTASEMESTER.SEMESTER',
                        'iDSURTUGMONITORING.iDSUBDETAILSURPELPK.TGLMULAISURPELPK',
                        'iDSURTUGMONITORING.iDSUBDETAILSURPELPK.TGLAKHIRSURPELPK',
                        'iDSURTUGMONITORING.NIP',
                        'iDSURTUGMONITORING.nIP.NAMA2',
                        'iDGROUPS.DIVISI',
                        'iDSURTUGMONITORING.TGLCETAKSURATMONITORING',
                        'iDSURTUGMONITORING.KETERANGANSURTUGMONITORING',
                        'TGLSUBMITSURTUGMONITORING',
                        'iDSURTUGMONITORING.ACCSURTUGMONITORING',
                    ),
                )); ?>

            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card mb-12">
            <div class="card-body">
                <h4 class="card-title"> Group Mahasiswa Pemohon Surat </h4>
                <?php
                //menampilkan list
                $listgroupmahasiswasurtugmonitoring=new CActiveDataProvider('Groupsurtugmonitoring',array('criteria'=>array('condition'=>'IDSURTUGMONITORING='.$model->IDSURTUGMONITORING)));
                $this->widget('ext.GroupGridView', array(
                    'id'=>'groupsurtugmonitoring-grid',
                    'dataProvider'=>$listgroupmahasiswasurtugmonitoring,
                    'itemsCssClass' => 'table table-bordered table-striped table-advance table-hover',
                    'columns'=>array(
                        //'IDGROUPSURTUGMONITORING',
                        'NIM',
                        'nIM.NAMA',
                        'nIM.iDPRODI.NAMAPRODI',
                        'NOURUTSURTUGMONITORING',
                    ),
                ));
                ?>
                <?php
                echo CHtml::link('Manage ',array('detailsurtugmonitoring/admin'),array('class'=>'btn btn-primary'));
                ?>
            </div>
        </div>
    </div>
</div>

    <!--update preview notifikasi setelah action view dilakukan-->
<?php
$IDDETAILSURTUGMONITORING = Yii::app()->request->getParam('id', 0);
$smod4el = Detailsurtugmonitoring::model()->updateByPk
        ($IDDETAILSURTUGMONITORING, array("PREVIEW" => 'Y'));
?> 