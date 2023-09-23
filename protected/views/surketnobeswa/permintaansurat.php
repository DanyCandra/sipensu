<meta http-equiv="refresh" content="290" >
<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card mb-12">
            <div class="card-body">
                <h4 class="card-title">Data Permintaan Surat Keterangan Tidak Menerima Beasiswa</h4>
                <div class="actions">
                    <?php echo CHtml::link('Buat Surat Permintaan',array('createbymahasiswa'),array('class'=>'btn btn-primary waves-effect waves-float waves-light'));?>
                </div>
                <?php $this->widget('zii.widgets.grid.CGridView', array(
                    'id'=>'surketnobeswa-grid',
                    'filter'=>$model,
                    'dataProvider'=>$model->search(),
                    'template' => "{summary}\n{items}\n{pager}",
                    'itemsCssClass' => 'table table-bordered table-striped table-hover',
                    'columns'=>array(
                        array(
                            'header'=>'No',
                            'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
                        ),
                        //'IDSURKETNOBESWA',
                        //'IDJENISSURAT',
                        //'NOSURKETNOBESWA',
                        array (
                            'name'=>'NOSURKETNOBESWA',
                            'type'=>'raw',
                            'header'=>'No. Surat',
                            'value'=>'CHtml::encode(
				            $data->NOSURKETNOBESWA)',
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
                            'type'=>'html',
                            'header'=>'Jurusan/Prodi',
                            'value'=>'$data->nIM->iDPRODI->NAMAPRODI',
                            'filter'=>'',
                            //'filter'=>Chtml::listData(Prodi::model()->findAll(),'IDPRODI','NAMAPRODI'),
                            //'htmlOptions'=>array('widht'=>'5%'),
                        ),
                        'nIM.ALAMATASAL',
                        array(

                            'header'=>'Keperluan Surat',
                            'type'=>'raw',
                            'value' =>'$data->KEPERLUANSURKETNOBESWA',
                        ),
                        array(
                            'header'=>'Detail Surat',
                            'type'=>'raw',
                            'value'=>'CHtml::link("Lihat ",array("surketnobeswa/isisurat","id"=>$data->primaryKey),array ("class"=>"btn btn-sm purple "))',
                        ),
                        array(
                            'name'=>'Statuskirimsurat',
                            'filter'=>'',
                            'type'=>'raw',
                            'header'=>'Status Kirim Surat',
                        ),
                        array(
                            'name'=>'Statussurat',
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
                Permohonan/permintaan surat dapat diambil di Sub bagian Akademik & Kemahasiswaan (BAPENDIK) dengan ketentuan status surat sebagai berikut :<br>
                <font color="red"><i class="fa fa-check"></i></font><font color="blue">&nbsp;Status surat sudah jadi/dapat diambil</font><br>
                <font color="red"><i class="icon-question"></i></font><font color="blue">&nbsp;Status surat sedang dalam proses</font><br>
                <font color="red"><i class="fa fa-times"></i></font><font color="blue">&nbsp;Status surat tidak jadi/terjadi kesalahan/syarat kurang</font>
                <font color="red"><h4>&nbsp;Jika Status Surat Belum Terkirim, Klik tomobol <b>Lihat</b> dan Klik tombol <b>Ajukan Permohonan/Permintaan Anda </b></font></h4>
                <font color="red"><h4>Jika terdapat kesalahan pada biodata anda (nama,tempat lahir,tgl.lahir, alamat asal) dsb, mohon untuk segera komfirmasi ke Sub Bagian Akademik dan Kemahasiswaan / BAPENDIK.  </b></font></h4>
            </div>
        </div>
    </div>
</div>
