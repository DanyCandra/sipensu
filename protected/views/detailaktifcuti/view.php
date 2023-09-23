<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card mb-12">
            <div class="card-body">
                <h4 class="card-title">  View Acc. Surat Aktif Kembali Cuti  #<?php echo $model->IDDETAILSURAKTIFCUTI; ?></h4>
                <h2>
                    Nomor :&nbsp;<?php echo $model->iDAKTIFCUTI->NOSURATIJINAKTIFCUTI;?>/<?php echo $model->iDAKTIFCUTI->iDJENISSURAT->iDJABATANSTRUKTURAL->IDJABATANSURAT; ?>/<?php echo $model->iDAKTIFCUTI->iDJENISSURAT->IDKLASIFIKASI;?>/<?php $tgl=date('Y');echo $tgl;?>
                </h2>
                <?php $this->widget('zii.widgets.CDetailView', array(
                    'data'=>$model,
                    'htmlOptions' => array('class'=> 'table table-bordered table-striped table-advance table-hover'),
                    'attributes'=>array(
                        'IDDETAILSURAKTIFCUTI',
                        'iDAKTIFCUTI.iDTASEMESTER.TAHUNAKADEMIK',
                        'iDAKTIFCUTI.iDTASEMESTER.SEMESTER',
                        //'IDAKTIFCUTI',
                        'iDAKTIFCUTI.iDIJINCUTI.NOSURATIJINCUTI',
                        'iDAKTIFCUTI.NOSURATIJINAKTIFCUTI',
                        'iDAKTIFCUTI.iDIJINCUTI.NIM',
                        'iDAKTIFCUTI.iDIJINCUTI.nIM.NAMA',
                        'iDAKTIFCUTI.iDIJINCUTI.nIM.iDPRODI.NAMAPRODI',
                        'iDAKTIFCUTI.iDIJINCUTI.nIM.iDPRODI.iDFAKULTAS.FAKULTAS',
                        'iDAKTIFCUTI.iDIJINCUTI.nIM.TAHUNANGKATAN',
                        'iDAKTIFCUTI.iDIJINCUTI.nIM.ALAMATASAL',
                        'iDAKTIFCUTI.iDIJINCUTI.TAAKADEMIKCUTI',
                        'iDAKTIFCUTI.iDIJINCUTI.SEMESTERCUTI',
                        'iDAKTIFCUTI.TAAKADEMIKAKTIFCUTI',
                        'iDAKTIFCUTI.SEMESTERAKTIFCUTI',
                        'iDAKTIFCUTI.STATUS',
                        'iDAKTIFCUTI.NIP',
                        'iDAKTIFCUTI.nIP.NAMA2',
                        'iDGROUPS.DIVISI',
                        'iDAKTIFCUTI.TGLCETAKSURATAKTIFCUTI',
                        'iDAKTIFCUTI.KETERANGANAKTIFCUTI',
                        'TGLSUBMITDETAILSURAKTIFCUTI',
                        'iDAKTIFCUTI.ACCSURAKTIFCUTI',
                    ),
                )); ?>
                <?php
                echo CHtml::link('Manage ',array('detailaktifcuti/admin'),array('class'=>'btn btn-primary'));
                ?>
            </div>
        </div>
    </div>
</div>
 <!--update preview notifikasi setelah action view dilakukan-->
<?php
$IDDETAILSURAKTIFCUTI = Yii::app()->request->getParam('id', 0);
$smod4el = Detailaktifcuti::model()->updateByPk
        ($IDDETAILSURAKTIFCUTI, array("PREVIEW" => 'Y'));
?> 