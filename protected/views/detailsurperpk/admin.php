<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card mb-12">
            <div class="card-body">
                <h4 class="card-title"> Manage Acc. Surat Permohonan Praktik Kerja (Prodi D3)</h4>
                <div class="actions">
                    <?php //echo CHtml::link('<i class="fa fa-plus"></i> Tambah',array('create'),array('class'=>'btn btn-sm blue'));?>
                </div>
                <div class="actions">
                    <?php //echo CHtml::link('<i class="fa fa-database"></i> Main Menu Manage Acc. Surat',array('pengguna/menuaccsurat'),array('class'=>'btn btn-sm purple'));?>
                </div>
                <?php
                Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#detailsurperpk-grid').yiiGridView('update', {
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
                <?php $this->widget('zii.widgets.grid.CGridView', array(
                    'id'=>'detailsurperpk-grid',
                    'dataProvider'=>$model->search(),
                    'filter'=>$model,
                    'itemsCssClass' => 'table table-bordered table-striped table-advance table-hover',
                    'columns'=>array(

                        //'IDDETAILSURPERPK',
                        array(
                            'type'=>'html',
                            'header'=>'No. Surat',
                            'value'=>'$data->iDPK->NOSURATPK',

                        ),

                        array(
                            'type'=>'html',
                            'header'=>'Instansi/Sub.Bagian',
                            'value'=>'$data->iDPK->INSTANSIPK',
                        ),
                        array(
                            'type'=>'html',
                            'header'=>'Alamat Instansi/Sub.Bagian',
                            'value'=>'$data->iDPK->ALAMATINSTANSIPK',
                        ),
                        array(
                            'type'=>'html',
                            'header'=>'Kota',
                            'value'=>'$data->iDPK->KOTAINSTANSIPK',
                        ),

                        array(

                            'header'=>'Group Pemohon Surat',
                            'type'=>'html',
                            'value' => '$data->listgroupmahasiswasurperpk',
                        ),

                        //array(

                        //   'header'=>'Persetujuan Surat',
                        //   'type'=>'raw',
                        //   'value' => '$data->iDPK->ACCPERPK',
                        //   ),

                        //'IDPK',
                        /*array(
                                    'type'=>'html',
                                    'header'=>'Divisi Pemberi No.Surat',
                                     'value'=>'$data->iDGROUPS->DIVISI',
                                ),*/
                        //'iDPK.KETERANGANPK',
                        'iDPK.TGLCETAKSURATPK',
                        //'TGLSUBMITDETAILSURPERPK',
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
                                    'data-original-title'=>'Update','title'=>'Buat No.Surat & Tgl.Surat/Cetak','style'=>'margin-right:3px'),

                                'htmlOptions'=>array('style'=>'width:90px'),
                                'buttons'=>array(

                                    'view'=>array(
                                        'label'=>' <i class="fa fa-search">  </i> ',

                                        ),
                                    'update'=>array(

                                        'label'=>' <i class="fa fa-edit">  </i> ',
                                        'url'=>'Yii::app()->createUrl("surperpk/updatenosurperpkoperator",array("id"=>$data->IDPK))',

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
</div>