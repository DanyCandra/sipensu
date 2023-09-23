<div class="row">
    <div class="col-md-6 col-lg-12">
        <div class="card mb-12">
            <div class="card-body">
                <h4 class="card-title"> View Permintaan Surat Keterangan  #<?php echo $model->IDSURKET; ?> </h4>
                <?php $this->widget('zii.widgets.CDetailView', array(
                    'data'=>$model,
                    'htmlOptions' => array('class'=> 'table table-bordered table-striped table-advance table-hover'),
                    'attributes'=>array(
                        'IDSURKET',
                        //'IDJENISSURAT',
                        'iDJENISSURAT.NAMAJENISSURAT',
                        'NOSURKET',
                        //'IDTASEMESTER',
                        'iDTASEMESTER.TAHUNAKADEMIK',
                        'iDTASEMESTER.SEMESTER',
                        'NIM',
                        'nIM.NAMA',
                        'nIM.TEMPATLAHIR',
                        'nIM.TGLLAHIR',
                        'nIM.ALAMATASAL',
                        'nIM.iDPRODI.NAMAPRODI',
                        //'PERIHAL1',
                        //'PERIHAL2',
                        array(
                            'label'=>'Perihal',
                            //'type'=>'raw',
                            'value'=>$model->getStatusperihalsuratketerangan(),
                        ),
                        'KETERANGANSURKET',
                        'TGLCETAKSURKET',
                        'TGLSUBMITSURKET',
                        'ACCSURKET',

                        /*array(
                                        'type'=>'raw',
                                        'value'=>  CHtml::link('List Permintaan Surat Keterangan <i class="fa fa-search"></i>' ,array('suratketerangan/permintaansuratketerangan'),array('class'=>'btn green')),

                                    )*/
                    ),
                )); ?>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-12">
        <div class="card mb-12">
            <div class="card-body">
                <?php echo CHtml::link('Lihat Daftar Permintaan Surat  <i class="fa fa-search"></i>' ,array('suratketerangan/permintaansuratketerangan'),array('class'=>'btn btn-gradient-warning'));?>
                <?php
                $a=$model->IDSURKET;
                $sql="select IDSURKET from detailsuratketerangan where IDSURKET='$a'";
                $b=  Yii::app()->db->createCommand($sql)->queryScalar();

                if($b==0){
                    echo CHtml::link('Edit  <i class="fa fa-edit"></i>',array('suratketerangan/updatebymhs','id'=>$model->IDSURKET),array('class'=>'btn btn-gradient-info '));
                }
                else
                {
                    echo "";
                }
                ?>
            </div>
        </div>
    </div>
</div>



<!--membuat menu untuk mengirim permintaan srt.keterangan ke divisi umum & perlengkapan -->
<div class="row">
    <div class="col-md-6 col-lg-12">
        <div class="card mb-12">
            <div class="card-body">
                <i class="fa fa-envelope"></i> Kirim Permintaan Surat Keterangan #<?php echo $model->IDSURKET; ?>  </div>
            <div class="actions">
                <!--jika surat permohonan sudah diajukan tombol pengajuan hilang jika belum akan -->
                <?php
                $a=$model->IDSURKET;
                $sql="select IDSURKET from detailsuratketerangan where IDSURKET='$a'";
                $b=  Yii::app()->db->createCommand($sql)->queryScalar();

                if($b==0){
                    echo CHtml::link('Ajukan permintaan/permohonan surat.... <i class="fa fa-arrow-circle-right"></i>',array('detailsuratketerangan/createbymhs','IDSURKET'=>$model->IDSURKET),array('class'=>'btn btn-danger'));
                }
                else
                {
                    echo "Data sudah terkirim...";
                }
                ?>

                <button class="btn btn-warning" tabindex="-1" type="button">NOTE :</button>
                <?php array(
                    'value'=>$model->getListsendsuratketerangan($model->IDSURKET) ,
                );
                ?>
            </div>
        </div>
    </div>
</div>