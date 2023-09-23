<meta http-equiv="refresh" content="290">
<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card mb-12">
            <div class="card-body">
                <h4 class="card-title">Data Permintaan Surat Aktif Kembali Cuti</h4>
                <div class="actions">
                    <?php echo CHtml::link('List Daftar Permintaan Izin Cuti Akademik &nbsp<i class="fa fa-search"></i>',array('surijincuti/permintaansurat'),array('class'=>'btn btn-gradient-info'));?>
                </div>
                <?php $this->widget('zii.widgets.grid.CGridView', array(
                    'id'=>'suraktifcuti-grid',
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
                            'value' =>'$data->NOSURATIJINAKTIFCUTI',
                        ),
                        array(
                            'name'=>'IDIJINCUTI',
                            'type'=>'raw',
                            'header'=>'NIM Peminta/Pemohon',
                            'value'=>'$data->iDIJINCUTI->NIM','sortable'=>true,
                            'filter'=>Chtml::listData(Suraktifcuti::model()->findAll(),'IDIJINCUTI','iDIJINCUTI.NIM')
                        ),
                        array(
                            'name'=>'IDIJINCUTI',
                            'type'=>'raw',
                            'header'=>'Nama Peminta/Pemohon',
                            'value'=>'$data->iDIJINCUTI->nIM->NAMA','sortable'=>true,
                            //'filter'=>Chtml::listData(Suraktifcuti::model()->findAll(),'IDIJINCUTI','iDIJINCUTI.nIM.NAMA')
                            'filter'=>'',
                        ),
                        array(
                            'name'=>'IDIJINCUTI',
                            'type'=>'raw',
                            'header'=>'Jurusan/Prodi',
                            'value'=>'$data->iDIJINCUTI->nIM->iDPRODI->NAMAPRODI','sortable'=>true,
                            'filter'=>'',
                        ),
                        array(
                            'name'=>'THAKADEMIKAKTIFCUTI',
                            'filter'=>'' ,
                            'type'=>'raw',
                            'header'=>'Thn. Akademik Aktif Cuti',
                        ),
                        array(
                            'name'=>'SEMESTERAKTIFCUTI',
                            'filter'=>'' ,
                            'type'=>'raw',
                            'header'=>'Semester Aktif Cuti',
                        ),
                        array(
                            'name'=>'Statuskirimsurat',
                            'filter'=>'',
                            'type'=>'raw',
                            'header'=>'Status Kirim Surat',
                        ),
                        array(
                            'header'=>'Cetak Permohonan Aktif Kembali Cuti',
                            'type'=>'raw',
                            'value'=>'CHtml::link("Cetak ",array("cetak/surpermohonanaktifcuti","id"=>$data->primaryKey),array ("target"=>"_blank","class"=>"btn btn-sm yellow"))',
                        ),
                        array(
                            'header'=>'Detail Surat',
                            'type'=>'raw',
                            'value'=>'CHtml::link("View ",array("suraktifcuti/isisurat","id"=>$data->primaryKey),array ("class"=>"btn btn-sm purple "))',
                        ),
                        array(
                            'name'=>'Statussurat',
                            'filter'=>'',
                            'type'=>'raw',
                            'header'=>'Status Surat',
                        ),
                    ),
                )); ?>
                <B><U>KETERANGAN</U></B><br>
                Permohonan/permintaan surat dapat diambil di Sub bagian Akademik & Kemahasiswaan (BAPENDIK) dengan ketentuan status surat sebagai berikut:<br>
                <font color="red"><i class="fa fa-check"></i></font><font color="blue">&nbsp;Status surat sudah jadi/dapat diambil</font><br>
                <font color="red"><i class="icon-question"></i></font><font color="blue">&nbsp;Status surat sedang dalam proses</font><br>
                <font color="red"><i class="fa fa-times"></i></font><font color="blue">&nbsp;Status surat tidak jadi/terjadi kesalahan/syarat kurang</font>
                <br>
                <br>
                <div class="actions">
                    <?php //echo CHtml::link('<i class="fa fa-plus"></i> Buat Surat Permintaan Izin Cuti Akademik',array('createbymahasiswa'),array('class'=>'btn btn-default blue'));?>
                    <?php //echo CHtml::link('List Daftar Permintaan Aktif Kembali Cuti Akademik &nbsp<i class="fa fa-search"></i>',array('suraktifcuti/permintaansurat'),array('class'=>'btn btn-default green'));?>
                </div>
            </div>
        </div>
    </div>
</div>