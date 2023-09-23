<meta http-equiv="refresh" content="290">
<div class="portlet box red">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-cogs"></i>Data Permintaan Surat Ijin Penelitian
        </div>

    </div>

    <div class="portlet-body">
        <div class="table-responsive">
            <?php

            Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#surijinpn-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
            ?>


            <?php echo CHtml::link('Pencarian', '#', array('class' => 'search-button')); ?>
            <div class="search-form" style="display:none">
                <?php $this->renderPartial('_cari', array(
                    'model' => $model,
                )); ?>
            </div><!-- search-form -->
        </div>

        <?php $this->widget('zii.widgets.grid.CGridView', array(
            'id' => 'surijinpn-grid',
            'filter' => $model,
            'dataProvider' => $model->search(),
            'template' => "{summary}\n{items}\n{pager}",
            'itemsCssClass' => 'table table-bordered table-striped table-hover',
            'columns' => array(
                array(
                    'header' => 'No',
                    'value' => '$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
                ),
                //'IDIJINPN',
                //'IDJENISSURAT',
                array(

                    'header' => 'No.Surat',
                    'value' => '$data->NOSURATIJINPN',

                ),
                //'NIM',
                array(
                    'name' => 'NIM',
                    'type' => 'raw',
                    'header' => 'NIM',
                    'value' => 'CHtml::encode(
				$data->nIM->NIM)',
                    'htmlOptions' => array('widht' => ''),

                ),
                'nIM.NAMA',
                // 'nIM.iDPRODI.NAMAPRODI',
                array(
                    'name' => 'NIM',
                    'type' => 'html',
                    'header' => 'Jurusan/Prodi',
                    'value' => '$data->nIM->iDPRODI->NAMAPRODI',
                    'filter' => '',
                    //'filter'=>Chtml::listData(Prodi::model()->findAll(),'IDPRODI','NAMAPRODI'),
                    //'htmlOptions'=>array('widht'=>'5%'),
                ),
                //'NOSURATIJINPN',
                'INSTANSIIJINPN',
                'ALAMATINSTANSIIJINPN',
                //'KOTAINSTANSIIJINPN',
                //'iDTASEMESTER.TAHUNAKADEMIK',
                //'iDTASEMESTER.SEMESTER',
                'JUDULSKRIPSIIJINPN',
                /*
                        'KETERANGANIJINPN',
                'TGLSUBMITIJINPN',
                */
                array(
                    'header' => 'Detail Surat',
                    'type' => 'raw',
                    'value' => 'CHtml::link("Lihat ",array("surijinpn/isisurat","id"=>$data->primaryKey),array ("class"=>"btn btn-sm purple "))',


                ),
                array(
                    'name' => 'Statuskirimsurat',
                    'filter' => '',
                    'type' => 'raw',
                    'header' => 'Status Kirim Surat',
                ),
                array(
                    'name' => 'Statussurat',
                    'filter' => '',
                    'type' => 'raw',
                    'header' => 'Status Surat',
                ),
            array(
                'header' => 'Cetak Surat',
                'type' => 'raw',
                'value' => '$data->cetakbytgl',
            ),

        ))); ?>
        <div class="actions">
            <?php echo CHtml::link('<i class="fa fa-plus"></i> Buat Surat Permintaan', array('createbymahasiswa'), array('class' => 'btn btn-default blue')); ?>

        </div>
        <br>
        <B><U>KETERANGAN</U></B><br>
        Permohonan/permintaan surat dapat diambil di Sub bagian Akademik & Kemahasiswaan (BAPENDIK) dengan ketentuan
        status surat sebagai berikut:<br>
        <font color="red"><i class="fa fa-check"></i></font><font color="blue">&nbsp;Status surat sudah jadi/dapat
            diambil</font><br>
        <font color="red"><i class="icon-question"></i></font><font color="blue">&nbsp;Status surat sedang dalam
            proses</font><br>
        <font color="red"><i class="fa fa-times"></i></font><font color="blue">&nbsp;Status surat tidak jadi/terjadi
            kesalahan/syarat kurang</font>
        <font color="red"><h4>&nbsp;Jika Status Surat Belum Terkirim, Klik tomobol <b>Lihat</b> dan Klik tombol <b>Ajukan
                    Permohonan/Permintaan Anda </b></font></h4>

    </div>
</div>
