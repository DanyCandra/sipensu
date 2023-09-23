<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card mb-12">
            <div class="card-body">
                <h4 class="card-title"> View Acc. Surat Permohonan Praktik Kerja (Prodi D3) #<?php echo $model->IDDETAILSURPERPK; ?> </h4>
                <h2>
                    Nomor :&nbsp;<?php echo $model->iDPK->NOSURATPK;?>/<?php echo $model->iDPK->iDJENISSURAT->iDJABATANSTRUKTURAL->IDJABATANSURAT; ?>/<?php echo $model->iDPK->iDJENISSURAT->IDKLASIFIKASI;?>/<?php $tgl=date('Y');echo $tgl;?>
                </h2>
                <?php $this->widget('zii.widgets.CDetailView', array(
                    'data'=>$model,
                    'htmlOptions' => array('class'=> 'table table-bordered table-striped table-advance table-hover'),
                    'attributes'=>array(
                        'IDDETAILSURPERPK',
                        //'IDPK',
                        'iDPK.NOSURATPK',
                        'iDPK.INSTANSIPK',
                        'iDPK.ALAMATINSTANSIPK',
                        'iDPK.KOTAINSTANSIPK',
                        'iDPK.iDTASEMESTER.TAHUNAKADEMIK',
                        'iDPK.iDTASEMESTER.SEMESTER',
                        //'iDPK.ACCPERPK',
                        'iDGROUPS.DIVISI',
                        'iDPK.TGLCETAKSURATPK',
                        'iDPK.KETERANGANPK',
                        'TGLSUBMITDETAILSURPERPK',
                        'iDPK.ACCSURPERPK',
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
                <h4 class="card-title">  Group Mahasiswa Pemohon Surat</h4>
                <?php
                //menampilkan list
                $listgroupmahasiswasurperpk=new CActiveDataProvider('Groupsurperpk',array('criteria'=>array('condition'=>'IDPK='.$model->IDPK)));
                $this->widget('ext.GroupGridView', array(
                    'id'=>'groupsurperpk-grid',
                    'dataProvider'=>$listgroupmahasiswasurperpk,
                    'itemsCssClass' => 'table table-bordered table-striped table-advance table-hover',
                    'columns'=>array(
                        //'IDPK',
                        'NIM',
                        'nIM.NAMA',
                        'nIM.iDPRODI.NAMAPRODI',
                        'NOURUTSURPERPK',
                    ),

                ));
                ?>
                <?php
                echo CHtml::link('Manage ',array('detailsurperpk/admin'),array('class'=>'btn btn-primary'));
                ?>
            </div>
        </div>
    </div>
</div>
 <!--update preview notifikasi setelah action view dilakukan-->
<?php
$IDDETAILSURPERPK = Yii::app()->request->getParam('id', 0);
$smod4el = Detailsurperpk::model()->updateByPk
        ($IDDETAILSURPERPK, array("PREVIEW" => 'Y'));
?>     

		