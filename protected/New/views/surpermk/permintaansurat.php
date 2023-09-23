<!--halaman refres otomatis-->
<meta http-equiv="refresh" content="290" >
<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card mb-12">
            <div class="card-body">
                <h4 class="card-title">Daftar Permintaan Surat Pernyataan Masih Kuliah</h4>
                <?php echo CHtml::link('Buat Surat Permintaan',array('createbymahasiswa'),array('class'=>'btn btn-outline-danger waves-effect'));?>
                <?php $this->widget('ext.EExcelView', array(
                    'id'=>'surpermk-grid',
                    'filter'=>$model,
                    'dataProvider'=>$model->search(),
                    'template' => "{summary}\n{items}\n{pager}",
                    'itemsCssClass' => 'table table-bordered table-striped table-hover',
                    'columns'=>array(
                        array(
                            'header'=>'No',
                            'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
                        ),
                        array (
                            'name'=>'NOSURATMK',
                            'type'=>'raw',
                            'header'=>'No.Surat',
                            'value'=>'CHtml::encode(
				$data->NOSURATMK)',
                            'htmlOptions'=>array('widht'=>''),
                            'filter'=>'',
                        ),
                        //'NIM',
                        array (
                            'name'=>'NIM',
                            'type'=>'raw',
                            'header'=>'NIM',
                            'value'=>'CHtml::encode(
				$data->nIM->NIM)',
                            'htmlOptions'=>array('widht'=>''),

                        ),
                        'nIM.NAMA',
                        //'nIM.iDPRODI.NAMAPRODI',
                        array(
                            'name'=>'NIM',
                            'type'=>'raw',
                            'header'=>'Jurusan/Prodi',
                            'value'=>'$data->nIM->iDPRODI->NAMAPRODI',
                            'htmlOptions'=>array('widht'=>'5%'),
                            'filter'=>'',
                            //'filter'=>Chtml::listData(Prodi::model()->findAll(),'IDPRODI','NAMAPRODI'),

                        ),
                        'NAMAWALIMK',
                        /*
                        'NIPWALIMK',
                        'PANGGOL',
                        'INSTANSIWALIMK',
                        'TGLSUBMITMK',
                        */
                        array(
                            'header'=>'Detail Surat',
                            'type'=>'raw',
                            'value'=>'CHtml::link("Lihat ",array("surpermk/isisurat","id"=>$data->primaryKey),array ("class"=>"btn btn-sm purple "))',
                        ),
                        array(
                            'name'=>'Statuskirimsurat',
                            'filter'=>'',
                            'type'=>'raw',
                            'header'=>'Status Kirim Surat',
                        ),
                        array(
                            'name'=>'Accsurat',
                            'filter'=>'',
                            'type'=>'raw',
                            'header'=>'Status Surat',
                        ),
                        array(
                            'header'=>'Cetak Surat',
                            'type'=>'raw',
                            'value'=>'$data->cetakbytgl',
                        ),
                    ),
                )); ?>
                <br>
                <B><U>KETERANGAN</U></B><br>
                Permohonan/permintaan surat dapat diambil di Subbagian Akademik & Kemahasiswaan (BAPENDIK) dengan ketentuan status surat sebagai berikut :<br>
                <font color="red"><i class="fa fa-check"></i></font><font color="blue">&nbsp;Status surat sudah jadi/dapat diambil</font><br>
                <font color="red"><i class="icon-question"></i></font><font color="blue">&nbsp;Status surat sedang dalam proses</font><br>
                <font color="red"><i class="fa fa-times"></i></font><font color="blue">&nbsp;Status surat tidak jadi/terjadi kesalahan/syarat kurang/data entrian kurang lengkap (Hubungi staf BAPENDIK)</font><br>
                <font color="red"><h4>&nbsp;Jika Status Surat Belum Terkirim, Klik tombol <b>Lihat</b> dan Klik tombol <b>Ajukan Permohonan/Permintaan Anda </b></font></h4>
                <br>
            </div>
        </div>
    </div>
</div>