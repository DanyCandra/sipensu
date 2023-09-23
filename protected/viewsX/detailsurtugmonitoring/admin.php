<div class="portlet box yellow">
<div class="portlet-title">
  <div class="caption">
	<i class="fa fa-cogs"></i> Manage Acc. Surat Tugas Monitoring Praktik Kerja (Prodi D3) </div>
    <div class="actions">
        <?php //echo CHtml::link('<i class="fa fa-plus"></i> Tambah',array('create'),array('class'=>'btn btn-sm blue'));?>    </div>
     <div class="actions">
        <?php //echo CHtml::link('<i class="fa fa-database"></i> Main Menu Manage Acc. Surat',array('pengguna/menuaccsurat'),array('class'=>'btn btn-sm purple'));?>    </div>
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
	$('#detailsurtugmonitoring-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<?php echo CHtml::link('Pencarian','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
</div>    

<div class="portlet-body">
<div class="table-responsive">
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'detailsurtugmonitoring-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'itemsCssClass' => 'table table-bordered table-striped table-advance table-hover',
	'columns'=>array(
                array(  
                  'type'=>'html',
                  'header'=>'No. Surat ',
                     'value'=>'$data->iDSURTUGMONITORING->NOSURTUGMONITORING',
                ),
                 array(  
                    'type'=>'html',
                    'header'=>'Instansi/Perusahaan',
                     'value'=>'$data->iDSURTUGMONITORING->iDSUBDETAILSURPELPK->iDPK->INSTANSIPK',
                ),
                array(  
                    'type'=>'html',
                    'header'=>'Alamat Instansi/Perusahaan',
                     'value'=>'$data->iDSURTUGMONITORING->iDSUBDETAILSURPELPK->iDPK->ALAMATINSTANSIPK',
                ),
                //array(  
                //    'type'=>'html',
                //    'header'=>'Kota Instansi/Perusahaan',
                //     'value'=>'$data->iDSURTUGMONITORING->iDSUBDETAILSURPELPK->iDPK->KOTAINSTANSIPK',
                //),
                array(  
                    'type'=>'html',
                    'header'=>'Tgl. Mulai Pelaksanaan',
                     'value'=>'$data->iDSURTUGMONITORING->iDSUBDETAILSURPELPK->TGLMULAISURPELPK',
                ),
                 array(  
                    'type'=>'html',
                    'header'=>'Tgl. Akhir Pelaksanaan',
                     'value'=>'$data->iDSURTUGMONITORING->iDSUBDETAILSURPELPK->TGLAKHIRSURPELPK',
                ),
                array(  
                    'type'=>'html',
                    'header'=>'Dosen Supervisi/Monitoring',
                     'value'=>'$data->iDSURTUGMONITORING->nIP->NAMA2',
                ),
		 array(
                    
                    'header'=>'Group Pemohon Surat',
                    'type'=>'html',
                    'value' => '$data->listgroupmahasiswasurtugmonitoring',
                 ),
		/*array(  
                    'type'=>'html',
                    'header'=>'Divisi Pemberi No.Surat',
                     'value'=>'$data->iDGROUPS->DIVISI',
                ),*/
                'iDSURTUGMONITORING.TGLCETAKSURATMONITORING',
                //array(  
                //    'type'=>'html',
                //    'header'=>'Keterangan',
                //     'value'=>'$data->iDSURTUGMONITORING->KETERANGANSURTUGMONITORING',
                //),
               array(
                  'header'=>'Action',
                    'type'=>'raw',
                    'value'=>'$data->listactionnotifikasi',
                     'htmlOptions'=>array('style'=>'width:9%'),
                ),
		/*array(
                       
                        'header'=>'Action',
			'class'=>'CButtonColumn',
                        'template'=>'{view}{update}',
                        'deleteConfirmation'=>'Anda yakin akan menghapus data?',
                        'viewButtonImageUrl'=>false,
                        'deleteButtonImageUrl'=>false,
                        'updateButtonImageUrl'=>false,
                        'viewButtonOptions'=>array('class'=>'btn btn-sm blue  tooltips','data-placement'=>'top',
                            'data-original-title'=>'Lihat','title'=>'View','style'=>'margin-right:3px'),
                        'deleteButtonOptions'=>array('class'=>'btn btn-sm red tooltips','data-placement'=>'top',
                            'data-original-title'=>'Hapus','title'=>'Hapus','style'=>'margin-right:3px'),  
                        'updateButtonOptions'=>array('class'=>'btn btn-sm green tooltips','data-placement'=>'top',
                            'data-original-title'=>'Update','title'=>'Buat No.Surat & Tgl. Surat/Cetak','style'=>'margin-right:3px'),  
                            
                        'htmlOptions'=>array('style'=>'width:89px'),
                        'buttons'=>array(
                            
                            'view'=>array(
                                'label'=>' <i class="fa fa-search">  </i> ',
                                
                                ),
                            'update'=>array(
                                
                                'label'=>' <i class="fa fa-edit">  </i> ',
                                'url'=>'Yii::app()->createUrl("surtugmonitoring/updatenosurtugmonitoringoperator",array("id"=>$data->IDSURTUGMONITORING))',
                                
                            ),    
                            'delete'=>array(
                                'label'=>' <i class="fa fa-times fa fa-white"> </i> ',
                            )
                        )
                        
		),*/
		
	),
)); ?>
</div>
</div>
</div>

