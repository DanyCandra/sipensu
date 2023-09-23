<div class="row">
    <div class="col-md-6 col-lg-6">
        <div class="card mb-6">
            <div class="card-body">
                <h4 class="card-title">View Permintaan Surat Pernyataan Masih Kuliah #<?php echo $model->IDMK; ?></h4>
                <?php $this->widget('zii.widgets.CDetailView', array(
                    'data'=>$model,
                    'htmlOptions' => array('class'=> 'table table-bordered table-striped table-advance table-hover'),
                    'attributes'=>array(
                        'IDMK',
                        'iDJENISSURAT.NAMAJENISSURAT',
                        'NOSURATMK',
                        'NIM',
                        'nIM.NAMA',
                        'nIM.iDPRODI.NAMAPRODI',
                        'iDTASEMESTER.TAHUNAKADEMIK',
                        'iDTASEMESTER.SEMESTER',
                        'NAMAWALIMK',
                        'NIPWALIMK',
                        'PANGGOL',
                        'INSTANSIWALIMK',
                        'KETERANGANSURPERMK',
                        'TGLSUBMITMK',
                        'ACCSURPERMK',
                    ),
                )); ?>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-lg-6">
        <div class="card mb-6">
            <div class="card-body">
                <?php echo CHtml::link('Lihat Daftar Permintaan Surat  <i class="fa fa-search"></i>' ,array('surpermk/permintaansurat'),array('class'=>'btn btn-outline-warning waves-effect'));?>
                <?php
                $a=$model->IDMK;
                $sql="select IDMK from detailsurpermk where IDMK='$a'";
                $b=  Yii::app()->db->createCommand($sql)->queryScalar();

                if($b==0){
                    echo CHtml::link('Edit  <i class="fa fa-edit"></i>',array('surpermk/updatebymahasiswa','id'=>$model->IDMK),array('class'=>'btn blue '));
                }
                else
                {
                    echo "";
                }
                ?>
            </div>
        </div>
        <div class="card mb-6">
            <div class="card-body">
                <h4 class="card-title">Kirim Permintaan Surat Pernyataan Masih Kuliah #<?php echo $model->IDMK; ?></h4>
                <?php
                $a=$model->IDMK;
                $sql="select IDMK from detailsurpermk where IDMK='$a'";
                $b=  Yii::app()->db->createCommand($sql)->queryScalar();

                if($b==0){
                    echo CHtml::link('Ajukan permintaan/permohonan surat.... <i class="fa fa-arrow-circle-right"></i>',array('detailsurpermk/createbymahasiswa','IDMK'=>$model->IDMK),array('class'=>'btn btn-outline-primary waves-effect'));
                }
                else
                {
                    echo "Data sudah terkirim...";
                }
                ?>
                <button class="btn btn-outline-danger waves-effect" tabindex="-1" type="button">NOTE :</button>
                <?php array(
                    'value'=>$model->getListsendsuratmk($model->IDMK) ,
                );
                ?>
            </div>
        </div>
    </div>
</div>
