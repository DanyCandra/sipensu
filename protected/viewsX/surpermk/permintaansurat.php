<!--halaman refres otomatis-->
<meta http-equiv="refresh" content="290" >
<div class="portlet box red">
<div class="portlet-title">
  <div class="caption">
	<i class="fa fa-cogs"></i>Daftar Permintaan Surat Pernyataan Masih Kuliah</div>
	
        
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
	$('#surpermk-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<?php echo CHtml::link('Pencarian','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_cari',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
</div> 

<div class="portlet-body">
<div class="table-responsive">
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
                //'IDMK',
		//'IDJENISSURAT',
		//'NOSURATMK',
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
<div class="actions">
        <?php echo CHtml::link('<i class="fa fa-plus"></i> Buat Surat Permintaan',array('createbymahasiswa'),array('class'=>'btn btn-relief-info'));?>
</div> 
<br>
<B><U>KETERANGAN</U></B><br>
Permohonan/permintaan surat dapat diambil di Subbagian Akademik & Kemahasiswaan (BAPENDIK) dengan ketentuan status surat sebagai berikut :<br>
<font color="red"><i class="fa fa-check"></i></font><font color="blue">&nbsp;Status surat sudah jadi/dapat diambil</font><br>
<font color="red"><i class="icon-question"></i></font><font color="blue">&nbsp;Status surat sedang dalam proses</font><br>
<font color="red"><i class="fa fa-times"></i></font><font color="blue">&nbsp;Status surat tidak jadi/terjadi kesalahan/syarat kurang/data entrian kurang lengkap (Hubungi staf BAPENDIK)</font><br>
<font color="red"><h4>&nbsp;Jika Status Surat Belum Terkirim, Klik tomobol <b>Lihat</b> dan Klik tombol <b>Ajukan Permohonan/Permintaan Anda </b></font></h4>
<br>

    
</div>
</div>
</div>