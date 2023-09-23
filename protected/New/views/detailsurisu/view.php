<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card mb-12">
            <div class="card-body">
                <h4 class="card-title"> View Acc. Surat Permohonan Ijin Survei (Prodi-D3) #<?php echo $model->IDDETAILSURISU; ?></h4>
                <h2>
                    Nomor :&nbsp;<?php echo $model->iDISU->NOISU;?>/<?php echo $model->iDISU->iDJENISSURAT->iDJABATANSTRUKTURAL->IDJABATANSURAT; ?>/<?php echo $model->iDISU->iDJENISSURAT->IDKLASIFIKASI;?>/<?php $tgl=date('Y');echo $tgl;?>
                </h2>
                <?php $this->widget('zii.widgets.CDetailView', array(
                    'data'=>$model,
                    'htmlOptions' => array('class'=> 'table table-bordered table-striped table-advance table-hover'),
                    'attributes'=>array(
                        'IDDETAILSURISU',
                        //'IDISU',
                        'iDISU.NOISU',
                        'iDISU.INSTANSIISU',
                        'iDISU.ALAMATINSTANSIISU',
                        'iDISU.KOTAINSTANSIISU',
                        'iDISU.iDTASEMESTER.TAHUNAKADEMIK',
                        'iDISU.iDTASEMESTER.SEMESTER',
                        'iDISU.iDMATAKULIAHISU.NAMAMATAKULIAHISU',
                        'iDISU.iDMATAKULIAHISU.iDTTD.NAMATTD',
                        'iDGROUPS.DIVISI',
                        'iDISU.TGLCETAKSURATISU',
                        'iDISU.KETERANGANISU',
                        'TGLSUBMITDETAILSURISU',
                        'iDISU.ACCSURISU',
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
                <h4 class="card-title"> View Group Mahasiswa Permohonan Ijin Survei #<?php echo $model->IDDETAILSURISU; ?>  </h4>
                <?php
                //menampilkan list
                $listgroupmahasiswasurisu=new CActiveDataProvider('Groupsurisu',array('criteria'=>array('condition'=>'IDISU='.$model->IDISU)));
                $this->widget('ext.GroupGridView', array(
                    'id'=>'groupsurisu-grid',
                    'dataProvider'=>$listgroupmahasiswasurisu,
                    'itemsCssClass' => 'table table-bordered table-striped table-advance table-hover',
                    'columns'=>array(
                        //'IDISU',
                        //'IDGROUPPN',
                        'NIM',
                        'nIM.NAMA',
                        'nIM.iDPRODI.NAMAPRODI',
                        'NOURUTGROUPSURISU',
                    ),
                ));
                ?>
                <?php
                echo CHtml::link('Manage ',array('detailsurisu/admin'),array('class'=>'btn btn-primary'));
                ?>
            </div>
        </div>
    </div>
</div>
 <!--update preview notifikasi setelah action view dilakukan-->
<?php
$IDDETAILSURISU = Yii::app()->request->getParam('id', 0);
$smod4el = Detailsurisu::model()->updateByPk
        ($IDDETAILSURISU, array("PREVIEW" => 'Y'));
?>    