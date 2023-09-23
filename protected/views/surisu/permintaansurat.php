<meta http-equiv="refresh" content="290">
<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card mb-12">
            <div class="card-body">
                <h4 class="card-title">Data Permintaan Surat Permohonan Surat Ijin Survei </h4>
                <div class="actions">
                    <?php echo CHtml::link('<i data-feather="plus"></i> Buat Surat Permintaan',array('createbymahasiswa'),array('class'=>'btn btn-warning waves-effect waves-float waves-light'));?>
                </div>
                <?php $this->widget('zii.widgets.grid.CGridView', array(
                    'id'=>'surisu-grid',
                    'filter'=>$model,
                    'dataProvider'=>$model->search(),
                    'template' => "{summary}\n{items}\n{pager}",
                    'itemsCssClass' => 'table table-bordered table-striped table-hover',
                    'columns'=>array(
                        array(
                            'header'=>'No',
                            'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
                        ),
                        array(
                            'header'=>'No.Surat',
                            'value' =>'$data->NOISU',
                        ),
                        'INSTANSIISU',
                        'KOTAINSTANSIISU',
                        'iDTASEMESTER.TAHUNAKADEMIK',
                        'iDTASEMESTER.SEMESTER',
                        array(
                            'header'=>'Group Mahasiswa',
                            'value' => '$data->mahasiswasurisu',
                        ),
                        array(
                            'name'=>'Viewkirimsurat',
                            'filter'=>'',
                            'type'=>'raw',
                            'header'=>'Detail Surat',
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
                Permohonan/permintaan surat dapat diambil di Sub bagian Akademik & Kemahasiswaan (BAPENDIK) dengan ketentuan status surat sebagai berikut:<br>
                <font color="red"><i class="fa fa-check"></i></font><font color="red">&nbsp;Status surat sudah jadi/dapat diambil</font><br>
                <font color="red"><i class="icon-question"></i></font><font color="red">&nbsp;Status surat sedang dalam proses</font><br>
                <font color="red"><i class="fa fa-times"></i></font><font color="red">&nbsp;Status surat tidak jadi/terjadi kesalahan/syarat kurang</font>
                <font color="red"><h4>&nbsp;Jika Status Surat Belum Terkirim, Klik tomobol <b>Lihat</b> dan Klik tombol <b>Ajukan Permohonan/Permintaan Anda </b></font></h4>
            </div>
        </div>
    </div>
</div>