<meta http-equiv="refresh" content="290" >
<div class="portlet box red">
<div class="portlet-title">
  <div class="caption">
	<i class="fa fa-cogs"></i>Data Permintaan Surat Aktif Kembali Cuti </div>
         <div class="actions">
         <?php echo CHtml::link('List Daftar Permintaan Izin Cuti Akademik &nbsp<i class="fa fa-search"></i>',array('surijincuti/permintaansurat'),array('class'=>'btn btn-sm blue'));?>
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
	$('#suraktifcuti-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>


<?php //echo CHtml::link('Pencarian','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php //$this->renderPartial('_cari',array(
	//'model'=>$model,
//)); ?>
</div><!-- search-form -->
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
               //'IDAKTIFCUTI',
		//'IDIJINCUTI',
                //'IDJENISSURAT',
		//'NOSURATIJINAKTIFCUTI',
                 array(
                    
                    'header'=>'No.Surat',
                    'value' =>'$data->NOSURATIJINAKTIFCUTI',
                  
                ),
                //'iDIJINCUTI.NIM',
               array(
                    'name'=>'IDIJINCUTI',
                    'type'=>'raw',
                    'header'=>'NIM Peminta/Pemohon',
                    'value'=>'$data->iDIJINCUTI->NIM','sortable'=>true,
                    'filter'=>Chtml::listData(Suraktifcuti::model()->findAll(),'IDIJINCUTI','iDIJINCUTI.NIM')
                	),
                //'iDIJINCUTI.nIM.NAMA',
                array(
                    'name'=>'IDIJINCUTI',
                    'type'=>'raw',
                    'header'=>'Nama Peminta/Pemohon',
                    'value'=>'$data->iDIJINCUTI->nIM->NAMA','sortable'=>true,
                    //'filter'=>Chtml::listData(Suraktifcuti::model()->findAll(),'IDIJINCUTI','iDIJINCUTI.nIM.NAMA')
					'filter'=>'',
                	),
                //'iDIJINCUTI.nIM.iDPRODI.NAMAPRODI',
                array(
                    'name'=>'IDIJINCUTI',
                    'type'=>'raw',
                    'header'=>'Jurusan/Prodi',
                    'value'=>'$data->iDIJINCUTI->nIM->iDPRODI->NAMAPRODI','sortable'=>true,
                    'filter'=>'',
                	), 
		//'iDTASEMESTER.TAHUNAKADEMIK',
                //'iDTASEMESTER.SEMESTER',
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
               
                //'STATUS',
                
		//'KETERANGANAKTIFCUTI',
                //'NIP',
                //'nIP.NAMA2',
		//'STATUS',
		//'TGLSUBMITAKTIFCUTI',
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