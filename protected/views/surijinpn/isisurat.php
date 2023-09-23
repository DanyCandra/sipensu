<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card mb-12">
            <div class="card-body">
                <h4 class="card-title">View Permintaan Surat Ijin Penelitian #<?php echo $model->IDIJINPN; ?></h4>
                <?php $this->widget('zii.widgets.CDetailView', array(
                    'data'=>$model,
                    'htmlOptions' => array('class'=> 'table table-bordered table-striped table-advance table-hover'),
                    'attributes'=>array(
                        'IDIJINPN',
                        'iDJENISSURAT.NAMAJENISSURAT',
                        'NOSURATIJINPN',
                        'NIM',
                        'nIM.NAMA',
                        'nIM.iDPRODI.NAMAPRODI',
                        'INSTANSIIJINPN',
                        'ALAMATINSTANSIIJINPN',
                        'KOTAINSTANSIIJINPN',
                        'iDTASEMESTER.TAHUNAKADEMIK',
                        'iDTASEMESTER.SEMESTER',
                        'JUDULSKRIPSIIJINPN',
                        'KETERANGANIJINPN',
                        'TGLSUBMITIJINPN',
                        'ACCSURIJINPN',
                    ),
                )); ?>


            </div>
        </div>
    </div>
    <div class="col-md-12 col-lg-12">
        <div class="card mb-12">
            <div class="card-body">
                <?php echo CHtml::link('Lihat Daftar Permintaan Surat  <i class="fa fa-search"></i>' ,array('surijinpn/permintaansurat'),array('class'=>'btn btn-gradient-primary'));?>
                <?php
                $a=$model->IDIJINPN;
                $sql="select IDIJINPN from detailsurijinpn where IDIJINPN='$a'";
                $b=  Yii::app()->db->createCommand($sql)->queryScalar();

                if($b==0){
                    echo CHtml::link('Edit  <i class="fa fa-edit"></i>',array('surijinpn/updatebymahasiswa','id'=>$model->IDIJINPN),array('class'=>'btn btn-gradient-info'));
                }
                else
                {
                    echo "";
                }
                ?>
            </div>
        </div>
    </div>
    <!--membuat menu untuk mengirim permintaan srt.tugas ke divisi umum & perlengkapan -->


    <div class="col-md-12 col-lg-12">
        <div class="card mb-12">
            <div class="card-body">
                <i class="fa fa-envelope"></i> Kirim Permintaan Surat Ijin Penelitian #<?php echo $model->IDIJINPN; ?>
                <!--jika surat permohonan sudah diajukan tombol pengajuan hilang jika belum akan -->
                <?php
                $a=$model->IDIJINPN;
                $sql="select IDIJINPN from detailsurijinpn where IDIJINPN='$a'";
                $b=  Yii::app()->db->createCommand($sql)->queryScalar();

                if($b==0){
                    echo CHtml::link('Ajukan permintaan/permohonan surat.... <i class="fa fa-arrow-circle-right"></i>',array('detailsurijinpn/createbymahasiswa','IDIJINPN'=>$model->IDIJINPN),array('class'=>'btn btn-gradient-primary'));
                }
                else
                {
                    echo "Data sudah terkirim...";
                }
                ?>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-lg-12">
        <div class="card mb-12">
            <div class="card-body">  <button class="btn btn-gradient-warning" tabindex="-1" type="button">NOTE :</button>
                <?php array(
                    'value'=>$model->getListsendsurijinpn($model->IDIJINPN) ,
                );
                ?>

            </div>
        </div>
    </div>
</div>
  
