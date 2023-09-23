<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card mb-12">
            <div class="card-body">
                <h4 class="card-title">View Acc. Surat Permohonan Izin Cuti Akademik  #<?php echo $model->IDDETAILSURIJINCUTI; ?></h4>
                <h2>
                    Nomor :&nbsp;<?php echo $model->iDIJINCUTI->NOSURATIJINCUTI;?>/<?php echo $model->iDIJINCUTI->iDJENISSURAT->iDJABATANSTRUKTURAL->IDJABATANSURAT; ?>/<?php echo $model->iDIJINCUTI->iDJENISSURAT->IDKLASIFIKASI;?>/<?php $tgl=date('Y');echo $tgl; ?>
                </h2>
                <?php $this->widget('zii.widgets.CDetailView', array(
                    'data'=>$model,
                    'htmlOptions' => array('class'=> 'table table-bordered table-striped table-advance table-hover'),
                    'attributes'=>array(
                        'IDDETAILSURIJINCUTI',
                        //'IDIJINCUTI',
                        'iDIJINCUTI.iDTASEMESTER.TAHUNAKADEMIK',
                        'iDIJINCUTI.iDTASEMESTER.SEMESTER',
                        'iDIJINCUTI.NOSURATIJINCUTI',
                        'iDIJINCUTI.NIM',
                        'iDIJINCUTI.nIM.NAMA',
                        'iDIJINCUTI.nIM.iDPRODI.NAMAPRODI',
                        'iDIJINCUTI.nIM.iDPRODI.iDFAKULTAS.FAKULTAS',
                        'iDIJINCUTI.nIM.ALAMATASAL',
                        'iDIJINCUTI.LAMAIJINCUTI',
                        'iDIJINCUTI.TAAKADEMIKCUTI',
                        'iDIJINCUTI.SEMESTERCUTI',
                        'iDIJINCUTI.SKSCAPAI',
                        'iDIJINCUTI.IPKCAPAI',
                        'iDIJINCUTI.KETERANGANIJINCUTI',
                        'iDIJINCUTI.STATUSTERKINI',
                        'iDIJINCUTI.NIP',
                        'iDIJINCUTI.nIP.NAMA2',
                        'iDGROUPS.DIVISI',
                        'iDIJINCUTI.ACCSURIJINCUTI',
                        'iDIJINCUTI.TGLCETAKSURATIJINCUTI',
                        'iDIJINCUTI.KETERANGAN',
                        'TGLSUBMITDETAILSURIJINCUTI',
                    ),
                )); ?>
                <?php
                echo CHtml::link('Manage ',array('detailsurijincuti/admin'),array('class'=>'btn btn-primary'));
                ?>
            </div>
        </div>
    </div>
</div>
    <!--update preview notifikasi setelah action view dilakukan-->
<?php
$IDDETAILSURIJINCUTI = Yii::app()->request->getParam('id', 0);
$smod4el = Detailsurijincuti::model()->updateByPk
        ($IDDETAILSURIJINCUTI, array("PREVIEW" => 'Y'));
?> 
