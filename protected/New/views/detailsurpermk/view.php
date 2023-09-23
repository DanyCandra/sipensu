<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card mb-12">
            <div class="card-body">
                <h4 class="card-title"> View Acc. Surat Pernyataan Masih Kuliah #<?php echo $model->IDDETAILSURPERMK; ?></h4>
                <h2>
                    Nomor :&nbsp;<?php echo $model->iDMK->NOSURATMK;?>/<?php echo $model->iDMK->iDJENISSURAT->iDJABATANSTRUKTURAL->IDJABATANSURAT; ?>/<?php echo $model->iDMK->iDJENISSURAT->IDKLASIFIKASI;?>/<?php $tgl=date('Y');echo $tgl;?>
                </h2>
                <?php $this->widget('zii.widgets.CDetailView', array(
                    'data'=>$model,
                    'htmlOptions' => array('class'=> 'table table-bordered table-striped table-advance table-hover'),
                    'attributes'=>array(
                        'IDDETAILSURPERMK',
                        //'IDMK',
                        'iDMK.NOSURATMK',
                        'iDMK.NIM',
                        'iDMK.nIM.NAMA',
                        'iDMK.nIM.iDPRODI.NAMAPRODI',
                        'iDMK.iDTASEMESTER.TAHUNAKADEMIK',
                        'iDMK.iDTASEMESTER.SEMESTER',
                        'iDMK.NAMAWALIMK',
                        'iDMK.NIPWALIMK',
                        'iDMK.PANGGOL',
                        'iDMK.INSTANSIWALIMK',
                        'iDGROUPS.DIVISI',
                        'iDMK.KETERANGANSURPERMK',
                        'iDMK.TGLCETAKSURATMK',
                        'TGLSUBMITDETAILSURPERMK',
                        'iDMK.ACCSURPERMK',
                    ),

                ));?>
                <?php
                echo CHtml::link('Manage ',array('detailsurpermk/admin'),array('class'=>'btn btn-info'));
                ?>
            </div>
        </div>
    </div>
</div>

    <!--update preview notifikasi setelah action view dilakukan-->
<?php
$IDDETAILSURPERMK = Yii::app()->request->getParam('id', 0);
$smod4el = Detailsurpermk::model()->updateByPk
        ($IDDETAILSURPERMK, array("PREVIEW" => 'Y'));
?>  