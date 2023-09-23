<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card mb-12">
            <div class="card-body">
                <h4 class="card-title">View Permintaan Surat Keterangan Tidak Menerima Beasiswa #<?php echo $model->IDSURKETNOBESWA; ?></h4>
                <?php $this->widget('zii.widgets.CDetailView', array(
                    'data'=>$model,
                    'htmlOptions' => array('class'=> 'table table-bordered table-striped table-advance table-hover'),
                    'attributes'=>array(
                        'IDSURKETNOBESWA',
                        'iDJENISSURAT.NAMAJENISSURAT',
                        'NOSURKETNOBESWA',
                        'NIM',
                        'nIM.NAMA',
                        'nIM.TEMPATLAHIR',
                        array(
                            'filter'=>'',
                            'label'=>'Tgl. Lahir',
                            'value' =>  IDDate::getDate($model->nIM->TGLLAHIR),

                        ),
                        'nIM.TAHUNANGKATAN',
                        'nIM.iDPRODI.NAMAPRODI',
                        'nIM.iDPRODI.iDJENJANG.NAMAJENJANG',
                        'iDTASEMESTER.TAHUNAKADEMIK',
                        'iDTASEMESTER.SEMESTER',
                        'nIM.ALAMATASAL',
                        'KEPERLUANSURKETNOBESWA',
                        'KETERANGANSURKETNOBESWA',
                        'TGLSUBMITSURKETNOBESWA',
                        'ACCSURKETNOBESWA',
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
                <?php echo CHtml::link('Lihat Daftar Permintaan Surat  <i class="fa fa-search"></i>' ,array('surketnobeswa/permintaansurat'),array('class'=>'btn btn-gradient-primary'));?>
                <?php
                $a=$model->IDSURKETNOBESWA;
                $sql="select IDSURKETNOBESWA from detailsurketnobeswa where IDSURKETNOBESWA='$a'";
                $b=  Yii::app()->db->createCommand($sql)->queryScalar();
                if($b==0){
                    echo CHtml::link('Edit  <i class="fa fa-edit"></i>',array('surketnobeswa/updatebymahasiswa','id'=>$model->IDSURKETNOBESWA),array('class'=>'btn btn-gradient-danger'));
                    echo CHtml::link('Update Biodata  <i class="fa fa-edit"></i>',array('mahasiswa/updatebiodatamhs','nim'=>$model->NIM,'id'=>$model->IDSURKETNOBESWA),array('class'=>'btn btn-gradient-dark'));
                }
                else {
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
                <i class="fa fa-envelope"></i> Kirim Permintaan Surat Keterangan Tidak Menerima Beasiswa #<?php echo $model->IDSURKETNOBESWA; ?>  </div>
            <!--jika surat permohonan sudah diajukan tombol pengajuan hilang jika belum akan -->
            <?php
            $a=$model->IDSURKETNOBESWA;
            $sql="select IDSURKETNOBESWA from detailsurketnobeswa where IDSURKETNOBESWA='$a'";
            $b=  Yii::app()->db->createCommand($sql)->queryScalar();

            if($b==0){
                echo CHtml::link('Ajukan permintaan/permohonan surat.... <i class="fa fa-arrow-circle-right"></i>',array('detailsurketnobeswa/createbymahasiswa','IDSURKETNOBESWA'=>$model->IDSURKETNOBESWA),array('class'=>'btn btn-gradient-danger'));
            }
            else
            {
                echo "Data sudah terkirim...";
            }
            ?>
            <button class="btn red" tabindex="-1" type="button">NOTE :</button>
            <?php array(
                'value'=>$model->getListsendsurketnobeswa($model->IDSURKETNOBESWA) ,
            );
            ?>
        </div>
    </div>
</div>
</div>



