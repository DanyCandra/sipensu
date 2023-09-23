<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card mb-12">
            <div class="card-body">
                <h4 class="card-title"> View Permintaan Surat Izin Cuti Akademik  #<?php echo $model->IDIJINCUTI; ?> </h4>
                <?php $this->widget('zii.widgets.CDetailView', array(
                    'data'=>$model,
                    'htmlOptions' => array('class'=> 'table table-bordered table-striped table-advance table-hover'),
                    'attributes'=>array(
                        'IDIJINCUTI',
                        'IDJENISSURAT',
                        'iDJENISSURAT.NAMAJENISSURAT',
                        'iDTASEMESTER.TAHUNAKADEMIK',
                        'iDTASEMESTER.SEMESTER',
                        'NOSURATIJINCUTI',
                        'NIM',
                        'nIM.NAMA',
                        'nIM.TAHUNANGKATAN',
                        'nIM.iDPRODI.NAMAPRODI',
                        'nIM.iDPRODI.iDFAKULTAS.FAKULTAS',
                        'nIM.ALAMATASAL',
                        'LAMAIJINCUTI',
                        'THAKADEMIKCUTI',
                        'SEMESTERCUTI',
                        'SKSCAPAI',
                        'IPKCAPAI',
                        'KETERANGANIJINCUTI',
                        'STATUSTERKINI',
                        'NIP',
                        'nIP.NAMA2',
                        'KETERANGAN',
                        'TGLSUBMITIJINCUTI',
                    ),
                )); ?>
            </div>
        </div>
    </div>
</div>

<div class="card mb-12">
    <div class="card-body">
        <?php echo CHtml::link('Lihat Daftar Permintaan Surat  <i class="fa fa-search"></i>' ,array('surijincuti/permintaansurat'),array('class'=>'btn btn-gradient-primary'));?>
        <?php
        $a=$model->IDIJINCUTI;
        $sql="select IDIJINCUTI from detailsurijincuti where IDIJINCUTI='$a'";
        $b=  Yii::app()->db->createCommand($sql)->queryScalar();

        if($b==0){
            echo CHtml::link('Edit  <i class="fa fa-edit"></i>',array('surijincuti/updatebymahasiswa','id'=>$model->IDIJINCUTI),array('class'=>'btn btn-gradient-info '));
        }
        else
        {
            echo "";
        }
        ?>
    </div>
</div>
<!--membuat menu untuk mengirim permintaan srt.tugas ke divisi umum & perlengkapan -->


<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card mb-12">
            <div class="card-body">
                <h4 class="card-title">  Kirim Permintaan Surat Izin Cuti Akademik #<?php echo $model->IDIJINCUTI; ?>  </h4>
                <div class="actions">
                    <!--jika surat permohonan sudah diajukan tombol pengajuan hilang jika belum akan -->
                    <?php
                    $a=$model->IDIJINCUTI;
                    $sql="select IDIJINCUTI from detailsurijincuti where IDIJINCUTI='$a'";
                    $b=  Yii::app()->db->createCommand($sql)->queryScalar();

                    if($b==0){
                        echo CHtml::link('Ajukan permintaan/permohonan surat.... <i class="fa fa-arrow-circle-right"></i>',array('detailsurijincuti/createbymahasiswa','IDIJINCUTI'=>$model->IDIJINCUTI),array('class'=>'btn btn-gradient-warning'));
                    }
                    else
                    {
                        echo "Data sudah terkirim...";
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="card mb-12">
            <div class="card-body">
                <button class="btn btn-gradient-danger" tabindex="-1" type="button">NOTE :</button>
                <?php array(
                    'value'=>$model->getListsendsuratijincuti($model->IDIJINCUTI) ,
                );
                ?>
            </div>
        </div>
    </div>
</div>