<meta http-equiv="refresh" content="290">
<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card mb-12">
            <div class="card-body">
                <h4 class="card-title">Daftar Monitoring Praktik Kerja (Prodi D3)</h4>
                <div class="actions">
                    <?php echo CHtml::link('Daftar Permintaan Srt.Permohonan PK &nbsp<i class="fa fa-search"></i>', array('surperpk/permintaansurat'), array('class' => 'btn btn-warning')); ?>
                    <?php echo CHtml::link('Daftar Permintaan Srt.Pelaksanaan PK &nbsp<i class="fa fa-search"></i>', array('subdetailsurpelpk/permintaansurat'), array('class' => 'btn btn-primary')); ?>
                </div>
                <?php $this->widget('zii.widgets.grid.CGridView', array(
                    'id' => 'surtugmonitoring-grid',
                    'filter' => $model,
                    'dataProvider' => $model->search(),
                    'template' => "{summary}\n{items}\n{pager}",
                    'itemsCssClass' => 'table table-bordered table-striped table-hover',
                    'columns' => array(
                        array(
                            'header' => 'No',
                            'value' => '$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
                        ),
                        array(
                            'filter' => '',
                            'header' => 'No.Surat',
                            'value' => '$data->NOSURTUGMONITORING',
                        ),
                        'iDSUBDETAILSURPELPK.iDPK.INSTANSIPK',
                        'iDSUBDETAILSURPELPK.iDPK.KOTAINSTANSIPK',
                        'iDSUBDETAILSURPELPK.TGLMULAISURPELPK',
                        'iDSUBDETAILSURPELPK.TGLAKHIRSURPELPK',
                        array(
                            'name' => 'NIP',
                            'type' => 'raw',
                            'header' => 'Dosen Monitoring',
                            'value' => '$data->nIP->NAMA2',
                            'filter' => Chtml::listData(Msdos::model()->findAll(), 'NIP', 'NAMA2')
                        ),
                        array(
                            'header' => 'Group Mahasiswa',
                            'value' => '$data->mahasiswasurtugmonitoring',
                        ),
                        array(
                            'header' => 'Detail Surat',
                            'type' => 'raw',
                            'value' => 'CHtml::link("Lihat ",array("surtugmonitoring/isisurat","id"=>$data->primaryKey),array ("class"=>"btn btn-sm purple "))',
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
                    ),
                )); ?>
                <B><U>KETERANGAN</U></B><br>
                Permohonan/permintaan surat dapat diambil di Sub bagian Akademik & Kemahasiswaan (BAPENDIK) dengan
                ketentuan status surat sebagai berikut:<br>
                <font color="red"><i class="fa fa-check"></i></font><font color="blue">&nbsp;Status surat sudah
                    jadi/dapat diambil</font><br>
                <font color="red"><i class="icon-question"></i></font><font color="blue">&nbsp;Status surat sedang
                    dalam proses</font><br>
                <font color="red"><i class="fa fa-times"></i></font><font color="blue">&nbsp;Status surat tidak
                    jadi/terjadi kesalahan/syarat kurang</font>
            </div>
        </div>
    </div>
</div>