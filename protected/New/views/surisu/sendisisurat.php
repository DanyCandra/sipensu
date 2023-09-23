<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card mb-12">
            <div class="card-body">
                <h4 class="card-title"> View Permintaan Surat Ijin Survei  #<?php echo $model->IDISU; ?></h4>
                <?php $this->widget('zii.widgets.CDetailView', array(
                    'data'=>$model,
                    'htmlOptions' => array('class'=> 'table table-bordered table-striped table-advance table-hover'),
                    'attributes'=>array(
                        'IDISU',
                        'iDJENISSURAT.NAMAJENISSURAT',
                        'NOISU',
                        'INSTANSIISU',
                        'ALAMATINSTANSIISU',
                        'KOTAINSTANSIISU',
                        'iDTASEMESTER.TAHUNAKADEMIK',
                        'iDTASEMESTER.SEMESTER',
                        'iDMATAKULIAHISU.NAMAMATAKULIAHISU',
                        'iDMATAKULIAHISU.iDTTD.NAMATTD',
                        'KETERANGANISU',
                        'TGLSUBMITISU',
                        'ACCSURISU',
                    ),
                )); ?>
                <div class="">

                    <?php echo CHtml::link('Lihat Daftar Permintaan Surat  <i class="fa fa-search"></i>' ,array('surisu/permintaansurat'),array('class'=>'btn btn-gradient-primary'));?>
                    <?php
                    $a=$model->IDISU;
                    $sql="select IDISU from detailsurisu where IDISU='$a'";
                    $b=  Yii::app()->db->createCommand($sql)->queryScalar();

                    if($b==0){
                        echo CHtml::link('Edit  <i class="fa fa-edit"></i>',array('surisu/updatebymahasiswa','id'=>$model->IDISU),array('class'=>'btn btn-gradient-info '));
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
</div>

<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card mb-12">
            <div class="card-body">
                <h4 class="card-title"> View Group Mahasiswa Ijin Survei   #<?php echo $model->IDISU; ?></h4>
                <i class="fa fa-cogs"></i> Group Mahasiswa Peminta/Pemohon Srt.Ijin Survei
                <?php
                //menampilkan list
                $listgroupmahasiswasurisu=new CActiveDataProvider('Groupsurisu',array('criteria'=>array('condition'=>'IDISU='.$model->IDISU)));
                $this->widget('ext.GroupGridView', array(
                    'id'=>'groupsurisu-grid',
                    'dataProvider'=>$listgroupmahasiswasurisu,
                    'itemsCssClass' => 'table table-bordered table-striped table-advance table-hover',
                    'columns'=>array(
                        //'IDISU',
                        //'IDGROUPSURISU',
                        'NIM',
                        'nIM.NAMA',
                        'nIM.iDPRODI.NAMAPRODI',
                        'NOURUTGROUPSURISU',



                    ),

                ));
                ?>
                <?php
                $a=$model->IDISU;
                $sql="select IDISU from detailsurisu where IDISU='$a'";
                $b=  Yii::app()->db->createCommand($sql)->queryScalar();

                if($b==0){

                    echo CHtml::link('Tambah Mahasiswa &nbsp<i class="fa fa-user"></i>',array('groupsurisu/createmhs','IDISU'=>$model->IDISU),array('class'=>'btn btn-default blue'));

                }
                else
                {
                    echo "Group Mahasiswa sudah terkirim..";
                }
                ?>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card mb-12">
            <div class="card-body">
                <button class="btn red" tabindex="-1" type="button">NOTE :</button>
                <?php
                array(
                    'value'=>$model->getListsendsurisu($model->IDISU) ,
                );
                ?>
                <!--jika surat permohonan sudah diajukan tombol pengajuan hilang jika belum akan -->
                <?php
                $a=$model->IDISU;
                $sql="select IDISU from detailsurisu where IDISU='$a'";
                $b=  Yii::app()->db->createCommand($sql)->queryScalar();

                if($b==0){

                    echo CHtml::link('Ajukan permintaan/permohonan surat.... &nbsp<i class="fa fa-arrow-circle-right"></i>',array('detailsurisu/createbymahasiswa','IDISU'=>$model->IDISU),array('class'=>'btn btn-default purple'));

                }
                else
                {
                    echo "Data sudah terkirim...";
                }
                ?>
            </div>
        </div>
    </div>
</div>