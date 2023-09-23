<meta http-equiv="refresh" content="290">
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Daftar Permintaan Surat Tugas Pengabdian pada Masyarakat (PPM)</h4>
            </div>
            <div class="card-body">
                <?php echo CHtml::link('<i class="fa fa-plus"></i> Tambah', array('createdosen'), array('class' => 'btn btn-primary waves-effect waves-float waves-light')); ?>    </div>
        </div>
        <div class="portlet-body">
            <div class="table-responsive">
                <?php $this->widget('zii.widgets.grid.CGridView', array(
                    'id' => 'surtugpm-grid',
                    'filter' => $model,
                    'dataProvider' => $model->search(),
                    'template' => "{summary}\n{items}\n{pager}",
                    // 'itemsCssClass' => 'table table-bordered table-striped table-hover',
                    'columns' => array(
                        array(
                            'header' => 'No',
                            'value' => '$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
                        ),
                        //'IDPM',
                        //'NOSURATPM',
                        array(

                            'header' => 'No.Surat',
                            'value' => '$data->NOSURATPM',

                        ),
                        //'iDJENISSURAT.NAMAJENISSURAT',
                        //'nIP.NAMA2',
                        array(
                            'name' => 'NIP',
                            'type' => 'html',
                            'header' => 'Nama Peminta/Pemohon',
                            'value' => '$data->nIP->NAMA2', 'sortable' => true,
                            'filter' => Chtml::listData(Msdos::model()->findAll(), 'NIP', 'NAMA2'),
                        ),
                        //'iDPANGGOL.PANGKAT',
                        //'iDPANGGOL.GOL',
                        //'iDJABATANAKADEMIK.NAMAJABATANAKADEMIK',
                        'JUDULPM',
                        //'TGLDILAKSANAKANPM',
                        'INSTANSIPM',
                        'ALAMATINSTANSIPM',
                        //'KETERANGANPM',
                        //'TGLSUBMITPM',
                        array(
                            'header' => 'Detail Surat',
                            'type' => 'raw',
                            //'value'=>'CHtml::link("View ",array("surtugpm/isisurat","id"=>$data->primaryKey),array ("target"=>"_blank","class"=>"btn btn-sm purple "))',
                            'value' => 'CHtml::link("Lihat ",array("surtugpm/isisurat","id"=>$data->primaryKey),array ("class"=>"btn btn-sm purple "))',

                        ),
                        array(
                            'name' => 'Accsurat',
                            'filter' => '',
                            'type' => 'raw',
                            'header' => 'Status Surat',
                        ),
                        array(
                            'type' => 'html',
                            'header' => 'Cetak Srt.Tugas',
                            'value' => '$data->cetakbytgl',
                        ),

                        array(
                            'type' => 'html',
                            'header' => 'Cetak Srt.Peny.Makalah',
                            'value' => '$data->cetaksuratpenyusunanpmbytgl',
                        ),


                    ),
                )); ?>
                <B><U>KETERANGAN</U></B><br>
                Permohonan/permintaan surat dapat diambil di Sub bagian Akademik & Kemahasiswaan (BAPENDIK) dengan
                ketentuan status surat sebagai berikut:<br>
                <font color="red"><i class="fa fa-check"></i></font><font color="blue">&nbsp;Status surat sudah
                    jadi/dapat diambil</font><br>
                <font color="red"><i class="icon-question"></i></font><font color="blue">&nbsp;Status surat sedang dalam
                    proses</font><br>
                <font color="red"><i class="fa fa-times"></i></font><font color="blue">&nbsp;Status surat tidak
                    jadi/terjadi kesalahan/syarat kurang</font>
            </div>
        </div>
    </div>
</div>


