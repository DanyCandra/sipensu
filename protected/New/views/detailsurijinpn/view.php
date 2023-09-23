<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card mb-12">
            <div class="card-body">
                <h4 class="card-title"> View Acc. Surat Ijin Penelitian #<?php echo $model->IDDETAILSURIJINPN; ?> </h4>
                <h2>
                    Nomor :&nbsp;<?php echo $model->iDIJINPN->NOSURATIJINPN;?>/<?php echo $model->iDIJINPN->iDJENISSURAT->iDJABATANSTRUKTURAL->IDJABATANSURAT; ?>/<?php echo $model->iDIJINPN->iDJENISSURAT->IDKLASIFIKASI;?>/<?php $tgl=date('Y');echo $tgl;?>
                </h2>
                <?php $this->widget('zii.widgets.CDetailView', array(
                    'data'=>$model,
                    'htmlOptions' => array('class'=> 'table table-bordered table-striped table-advance table-hover'),
                    'attributes'=>array(
                        'IDDETAILSURIJINPN',
                        //'IDIJINPN',
                        'iDIJINPN.NOSURATIJINPN',
                        'iDIJINPN.iDJENISSURAT.NAMAJENISSURAT',
                        'iDIJINPN.nIM.NIM',
                        'iDIJINPN.nIM.NAMA',
                        'iDIJINPN.INSTANSIIJINPN',
                        'iDIJINPN.ALAMATINSTANSIIJINPN',
                        'iDIJINPN.KOTAINSTANSIIJINPN',
                        'iDIJINPN.iDTASEMESTER.TAHUNAKADEMIK',
                        'iDIJINPN.iDTASEMESTER.SEMESTER',
                        'iDIJINPN.JUDULSKRIPSIIJINPN',
                        'iDGROUPS.DIVISI',
                        'iDIJINPN.TGLCETAKSURATIJINPN',
                        'iDIJINPN.KETERANGANIJINPN',
                        'TGLSUBMITDETAILSURIJINPN',
                        'iDIJINPN.ACCSURIJINPN',
                    ),

                )); ?>
                <?php
                echo CHtml::link('Manage ',array('detailsurijinpn/admin'),array('class'=>'btn btn-primary'));
                ?>
            </div>
        </div>
    </div>
</div>
 <!--update preview notifikasi setelah action view dilakukan-->
<?php
$IDDETAILSURIJINPN = Yii::app()->request->getParam('id', 0);
$smod4el = Detailsurijinpn::model()->updateByPk
        ($IDDETAILSURIJINPN, array("PREVIEW" => 'Y'));
?>     