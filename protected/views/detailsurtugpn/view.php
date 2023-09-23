<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card mb-12">
            <div class="card-body">
                <h4 class="card-title"> View Acc. Surat Tugas Ijin Penelitian #<?php echo $model->IDDETAILSURTUGPN; ?></h4>
                <h2>
                    Nomor :&nbsp;<?php echo $model->iDPN->NOSURATPN;?>/<?php echo $model->iDPN->iDJENISSURAT->iDJABATANSTRUKTURAL->IDJABATANSURAT; ?>/<?php echo $model->iDPN->iDJENISSURAT->IDKLASIFIKASI;?>/<?php $tgl=date('Y');echo $tgl;?>
                </h2>
                <?php $this->widget('zii.widgets.CDetailView', array(
                    'data'=>$model,
                    'htmlOptions' => array('class'=> 'table table-bordered table-striped table-advance table-hover'),
                    'attributes'=>array(
                        'IDDETAILSURTUGPN',
                        'iDPN.iDJENISSURAT.NAMAJENISSURAT',
                        'iDPN.NOSURATPN',
                        'iDPN.JUDULPN',
                        'iDPN.WAKTUDATAPN',
                        'iDGROUPS.DIVISI',
                        'iDPN.KETERANGANSURTUGPN',
                        'iDPN.TGLCETAKSURATPN',
                        'iDPN.ACCSURTUGPN',
                        'TGLSUBMITDETAILSURTUGPN',
                    ),
                ));
                ?>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card mb-12">
            <div class="card-body">
                <h4 class="card-title"> View Instansi dan Group Dosen Pemohon Ijin Penelitian  #<?php echo $model->IDPN; ?>  </h4>
                <?php
                //menampilkan list
                $listgroupdosen=new CActiveDataProvider('Groupsurtugpn',array('criteria'=>array('condition'=>'IDPN='.$model->IDPN)));
                $this->widget('ext.GroupGridView', array(
                    'id'=>'groupsurtugpn-grid',
                    'dataProvider'=>$listgroupdosen,
                    'itemsCssClass' => 'table table-bordered table-striped table-advance table-hover',
                    'columns'=>array(
                        'NIP',
                        'nIP.NAMA2',
                        'iDPANGGOL.PANGKAT',
                        'iDPANGGOL.GOL',
                        'iDJABATANAKADEMIK.NAMAJABATANAKADEMIK',
                        array(
                            'header'=>'Instansi Penelitian',
                            'value' => '$data->listgroupinstansipn',
                        ),
                    ),
                ));
                ?>
                <?php
                echo CHtml::link('Manage ',array('detailsurtugpn/admin'),array('class'=>'btn btn-info'));
                ?>
            </div>
        </div>
    </div>
</div>
<!--update preview notifikasi setelah action view dilakukan-->
<?php
$IDDETAILSURTUGPN = Yii::app()->request->getParam('id', 0);
$smod4el = Detailsurtugpn::model()->updateByPk
        ($IDDETAILSURTUGPN, array("PREVIEW" => 'Y'));
?>   