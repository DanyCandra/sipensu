<div class="portlet box yellow">
<div class="portlet-title">
  <div class="caption">
	<i class="fa fa-cogs"></i> Manage Acc. Surat Tugas Pengabdian pada Masyarakat (PPM) </div>
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
	$('#detailsurtugpm-grid').yiiGridView('update', {
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
	'id'=>'detailsurtugpm-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'itemsCssClass' => 'table table-bordered table-striped table-advance table-hover',
	'columns'=>array(
		
                //'IDDETAILSURTUGPM',
		//'IDPM',
                'iDPM.NOSURATPM',   
               
               
                //'iDPM.nIP.NAMA2',
                 array(
                    'name'=>'IDDETAILSURTUGPM',
                    'type'=>'html',
                    'header'=>'Nama Peminta/Pemohon',
                    'value'=>'$data->iDPM->nIP->NAMA2','sortable'=>true,
                    'filter'=>Chtml::listData(Detailsurtugpm::model()->findAll(),'IDDETAILSURTUGPM','iDPM.nIP.NAMA2')
                ),
                 'iDPM.INSTANSIPM',
                array(  
                    'type'=>'html',
                    'header'=>'Judul Pengabdian',
                     'value'=>'$data->iDPM->JUDULPM',
                    'filter'=>'',
                ),
                
                'iDPM.TGLDILAKSANAKANPM',
                 
                 /*array(  
                    'type'=>'html',
                    'header'=>'Divisi Pemberi No.Surat',
                     'value'=>'$data->iDGROUPS->DIVISI',
                ),
                */
		
                //array(  
                //    'name'=>'TGLSUBMITDETAILSURTUGPM',
                //    'filter'=>'' ,
                //    'header'=>'Tgl. Submit',
                //),
               
                 'iDPM.TGLCETAKSURAT',
                /*array(
                    'header'=>'Cetak Surat',
                    'type'=>'raw',
                    'value'=>'CHtml::link("Cetak",array("cetak/surtugpm","id"=>$data->IDPM),array ("target"=>"_blank","class"=>"btn btn-sm yellow"))',
                ),
                 
                          
                array(  
                    'type'=>'html',
                    'header'=>'Cetak Srt.Peny.Makalah',
                     'value'=>'$data->cetaksuratpenyusunanpmbytgl',
                ),
                
                /*array(
                    'header'=>'Cetak Lampiran',
                    'type'=>'raw',
                    'value'=>'CHtml::link("Lampiran",array("cetak/lampsurtugpm","id"=>$data->IDPM),array ("target"=>"_blank","class"=>"btn btn-sm purple"))',
                ),*/
                
                  array(
                  'header'=>'Action',
                    'type'=>'raw',
                    'value'=>'$data->listactionnotifikasi',
                     'htmlOptions'=>array('style'=>'width:9%'),
                ),  
		/* array(
                       
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
                            'data-original-title'=>'Update','title'=>'Buat No.Surat & Tgl.Srt/Cetak','style'=>'margin-right:3px'),  
                            
                        'htmlOptions'=>array('style'=>'width:90px'),
                        'buttons'=>array(
                            
                            'view'=>array(
                                'label'=>' <i class="fa fa-search">  </i> ',
                                
                                ),
                            'update'=>array(
                                
                                'label'=>' <i class="fa fa-edit">  </i> ',
                                'url'=>'Yii::app()->createUrl("surtugpm/updatenosurtugpmoperator",array("id"=>$data->IDPM))',
                                
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


 