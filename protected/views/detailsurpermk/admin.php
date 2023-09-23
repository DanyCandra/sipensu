<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card mb-12">
            <div class="card-body">
                <h4 class="card-title">Manage Acc. Surat Pernyataan Masih Kuliah</h4>
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
	$('#detailsurpermk-grid').yiiGridView('update', {
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
                </div>
                <?php $this->widget('zii.widgets.grid.CGridView', array(
                    'id'=>'detailsurpermk-grid',
                    'dataProvider'=>$model->search(),
                    'filter'=>$model,
                    'itemsCssClass' => 'table table-bordered table-striped table-advance table-hover',
                    'columns'=>array(
                        //'IDDETAILSURPERMK',
                        //'iDMK.NOSURATMK',
                        array (
                            'name'=>'IDDETAILSURPERMK',
                            'header'=>'No. Surat',
                            'value'=>'$data->iDMK->NOSURATMK',
                            //'filter'=>Chtml::listData(Detailsurpermk::model()->findAll(),'IDDETAILSURPERMK','iDMK.NOSURATMK')
                            'filter'=>'',
                        ),
                        array (
                            'name'=>'IDDETAILSURPERMK',
                            'header'=>'Nama Peminta/Pemohon',
                            'value'=>'$data->iDMK->nIM->NAMA',
                            'filter'=>'',
                            //'filter'=>Chtml::listData(Detailsurpermk::model()->findAll(),'IDDETAILSURPERMK','iDMK.nIM.NAMA')
                        ),
                        //'iDMK.NIM',
                        array (
                            'name'=>'IDMK',
                            'header'=>'NIM ',
                            'value'=>'$data->iDMK->NIM',
                            'filter'=>'',
                            // 'filter'=>Chtml::listData(Surpermk::model()->findAll(),'IDMK','NIM')
                        ),
                        //'iDMK.nIM.iDPRODI.NAMAPRODI',
                        array (
                            'name'=>'IDMK',
                            'header'=>'Jurusan/Prodi ',
                            'value'=>'$data->iDMK->nIM->iDPRODI->NAMAPRODI',
                            'filter'=>'',
                        ),
                        //'IDGROUPS',
                        /*array(
                            'type'=>'html',
                            'header'=>'Divisi Pemberi No.Surat',
                             'value'=>'$data->iDGROUPS->DIVISI',
                        ),*/


                        //array(
                        //    'name'=>'TGLSUBMITDETAILSURPERMK',
                        //    'filter'=>'' ,
                        //    'header'=>'Tgl. Submit',
                        //),
                        //'iDMK.KETERANGANSURPERMK',
                        'iDMK.iDTASEMESTER.TAHUNAKADEMIK',
                        'iDMK.NAMAWALIMK',
                        'iDMK.TGLCETAKSURATMK',
                        /* array(
                             'header'=>'Cetak Surat',
                             'type'=>'raw',

                             'value'=>'CHtml::link("Cetak",array("cetak/surpermk","id"=>$data->IDMK),array ("target"=>"_blank","class"=>"btn btn-sm yellow"))',
                         ),*/
                        array(
                            'header'=>'Action',
                            'type'=>'raw',
                            'value'=>'$data->listactionnotifikasi',
                            'htmlOptions'=>array('style'=>'width:9%'),
                        ),
                        /*
                                array(

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
                                                'url'=>'Yii::app()->createUrl("surpermk/updatenosurpermkoperator",array("id"=>$data->IDMK))',

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