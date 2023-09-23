<meta http-equiv="refresh" content="290">
<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card mb-12">
            <div class="card-body">
                <h4 class="card-title">Daftar Permintaan Surat Keterangan</h4>
                <div class="actions">
                    <?php echo CHtml::link('<i class="fa fa-plus"></i> Buat Surat Permintaan', array('createbymhs'), array('class' => 'btn btn-primary')); ?>
                </div>
                <?php $this->widget('zii.widgets.grid.CGridView', array(
                    'id' => 'suratketerangan-grid',
                    'dataProvider' => $model->search(),
                    'filter' => $model,
                    'itemsCssClass' => 'table table-bordered table-striped table-advance table-hover',
                    'columns' => array(
                        array(
                            'header' => 'No.Surat',
                            'type' => 'html',
                            'value' => '$data->listbuatnosuratketerangan',
                            'htmlOptions' => array('width' => '20%'),
                        ),
                        array(
                            'name' => 'NIM',
                            'type' => 'raw',
                            'header' => 'NIM',
                            'value' => 'CHtml::encode($data->nIM->NIM)',
                            'htmlOptions' => array('widht' => ''),
                        ),
                        array(
                            'name' => 'IDSURKET',
                            'type' => 'raw',
                            'header' => 'Nama Peminta/Pemohon',
                            'value' => '$data->nIM->NAMA',
                            'filter' => '',
                            //'filter'=>Chtml::listData(Suratketerangan::model()->findAll(),'IDSURKET','nIM.NAMA')
                        ),
                        array(
                            'name' => 'NIM',
                            'type' => 'html',
                            'header' => 'Jurusan/Prodi',
                            'value' => '$data->nIM->iDPRODI->NAMAPRODI',
                            'filter' => '',
                            //'filter'=>Chtml::listData(Prodi::model()->findAll(),'IDPRODI','NAMAPRODI'),
                            //'htmlOptions'=>array('widht'=>'5%'),
                        ),
                        array(
                            'header' => 'Perihal',
                            'type' => 'raw',
                            'value' => '$data->listperihalsuratketerangan',
                        ),
                        array(
                            'header' => 'Detail Surat',
                            'type' => 'raw',
                            //'value'=>'CHtml::link("View ",array("suratketerangan/isisurat","id"=>$data->primaryKey),array ("target"=>"_blank","class"=>"btn btn-sm purple "))',
                            'value' => 'CHtml::link("Lihat ",array("suratketerangan/isisuratketerangan","id"=>$data->primaryKey),array ("class"=>"btn btn-sm purple "))',
                        ),
                        array(
                            'name' => 'Statuskirimsurat',
                            'filter' => '',
                            'type' => 'raw',
                            'header' => 'Status Kirim Surat',
                        ),
                        array(
                            'name' => 'Accsurat',
                            'filter' => '',
                            'type' => 'raw',
                            'header' => 'Status Surat',
                        ),
                        array(
                            'type'=>'html',
                            'header'=>'Cetak Srt. Keterangan',
                            'value'=>'$data->cetakbytgl',
                        ),
                    ),
                )); ?>
                <B><U>KETERANGAN</U></B><br>
                Permohonan/permintaan surat dapat diambil di Sub bagian Akademik & Kemahasiswaan (BAPENDIK)
                dengan ketentuan status surat sebagai berikut:<br>
                <font color="red"><i class="fa fa-check"></i></font><font color="blue">&nbsp;Status surat sudah jadi/dapat diambil</font><br>
                <font color="red"><i class="icon-question"></i></font><font color="blue">&nbsp;Status surat sedang dalam proses</font><br>
                <font color="red"><i class="fa fa-times"></i></font><font color="blue">&nbsp;Status surat tidak jadi/terjadi kesalahan/syarat kurang</font>
            </div>
        </div>
    </div>
</div>