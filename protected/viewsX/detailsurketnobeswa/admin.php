<div class="portlet box yellow">
<div class="portlet-title">
  <div class="caption">
	<i class="fa fa-cogs"></i> Manage Acc. Surat Keterangan Tidak Menerima Beasiswa </div>
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
	$('#detailsurketnobeswa-grid').yiiGridView('update', {
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
	'id'=>'detailsurketnobeswa-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'itemsCssClass' => 'table table-bordered table-striped table-advance table-hover',
	'columns'=>array(

		//'IDDETAILSURKETNOBESWA',
		'iDSURKETNOBESWA.NOSURKETNOBESWA',
		//'iDSURKETNOBESWA.nIM.NAMA',
                 array (
                    'name'=>'IDDETAILSURKETNOBESWA',
                     'type'=>'html',
                    'header'=>'Nama ',
                    'value'=>'$data->iDSURKETNOBESWA->nIM->NAMA',
                     'filter'=>Chtml::listData(Detailsurketnobeswa::model()->findAll(),'IDDETAILSURKETNOBESWA','iDSURKETNOBESWA.nIM.NAMA')
                ),
                //'iDSURKETNOBESWA.NIM',
                array (
                    'name'=>'IDSURKETNOBESWA',
                     'type'=>'html',
                    'header'=>'NIM ',
                    'value'=>'$data->iDSURKETNOBESWA->NIM',
                    'filter'=>'',
                     //'filter'=>Chtml::listData(Surketnobeswa::model()->findAll(),'IDSURKETNOBESWA','NIM')
                ),
                'iDSURKETNOBESWA.nIM.iDPRODI.NAMAPRODI',
                array(
                    
                    'header'=>'Thn. Akademik',
                    'type'=>'raw',
                    'value' =>'$data->iDSURKETNOBESWA->iDTASEMESTER->TAHUNAKADEMIK',
                    
                ),
                array(
                    
                    'header'=>'Semester',
                    'type'=>'raw',
                    'value' =>'$data->iDSURKETNOBESWA->iDTASEMESTER->SEMESTER',
                   
                    
                ),
                'iDSURKETNOBESWA.KEPERLUANSURKETNOBESWA',
		/*array(  
                    'type'=>'html',
                    'header'=>'Divisi Pemberi No.Surat',
                     'value'=>'$data->iDGROUPS->DIVISI',
                ),*/
		//'TGLSUBMITDETAILSURKETNOBESWA',
                //array(  
                //    'name'=>'TGLSUBMITDETAILSURKETNOBESWA',
                //    'filter'=>'' ,
                //    'header'=>'Tgl. Submit',
                //),
                
                'iDSURKETNOBESWA.TGLCETAKSURATNOBESWA',
                /*array(
                    'header'=>'Cetak Surat',
                    'type'=>'raw',
                    
                    'value'=>'$data->cetakbytgl',
                    ),
                //Cetak tanpa menggunakan fungsi di model
                array(
                    'header'=>'Cetak Surat',
                    'type'=>'raw',
                    
                    'value'=>'CHtml::link("Cetak",array("cetak/surketnobeswa","id"=>$data->IDSURKETNOBESWA),array ("target"=>"_blank","class"=>"btn btn-sm yellow"))',
                ),*/
		//array(      
                //    'name'=>'Accnobeswa',
                //    'filter'=>'' ,
                //    'type'=>'raw',
                 //   'header'=>'Tanda Acc',
                //), 
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
                            'data-original-title'=>'Update','title'=>'Buat No.Surat & Tgl.Surat/Cetak','style'=>'margin-right:3px'),  
                            
                        'htmlOptions'=>array('style'=>'width:90px'),
                        'buttons'=>array(
                            
                            'view'=>array(
                                'label'=>' <i class="fa fa-search">  </i> ',
                                
                                ),
                            'update'=>array(
                                
                                'label'=>' <i class="fa fa-edit">  </i> ',
                                'url'=>'Yii::app()->createUrl("surketnobeswa/updatenosurketnobeswaoperator",array("id"=>$data->IDSURKETNOBESWA))',
                                
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

