<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card mb-12">
            <div class="card-body">
                <h4 class="card-title"> Manage Acc. Surat Aktif Kembali Cuti</h4>
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
	$('#detailaktifcuti-grid').yiiGridView('update', {
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
                    'id'=>'detailaktifcuti-grid',
                    'dataProvider'=>$model->search(),
                    'itemsCssClass' => 'table table-bordered table-striped table-advance table-hover',
                    'filter'=>$model,
                    'columns'=>array(
                        //'IDDETAILSURAKTIFCUTI',
                        //'IDAKTIFCUTI',
                        'iDAKTIFCUTI.NOSURATIJINAKTIFCUTI',
                        //'iDAKTIFCUTI.iDIJINCUTI.NIM',
                        //'iDAKTIFCUTI.iDIJINCUTI.nIM.NAMA',
                        array (
                            'name'=>'IDAKTIFCUTI',
                            'type'=>'html',
                            'header'=>'NIM ',
                            'value'=>'$data->iDAKTIFCUTI->iDIJINCUTI->NIM',
                            'filter'=>'',
                            //'filter'=>Chtml::listData(Suraktifcuti::model()->findAll(),'IDAKTIFCUTI','iDIJINCUTI.NIM')
                        ),
                        array (
                            'name'=>'IDDETAILSURAKTIFCUTI',
                            'type'=>'html',
                            'header'=>'Nama ',
                            'value'=>'$data->iDAKTIFCUTI->iDIJINCUTI->nIM->NAMA',
                            'filter'=>'',
                            //'filter'=>Chtml::listData(Detailaktifcuti::model()->findAll(),'IDDETAILSURAKTIFCUTI','iDAKTIFCUTI.iDIJINCUTI.nIM.NAMA')
                        ),
                        'iDAKTIFCUTI.iDIJINCUTI.nIM.iDPRODI.NAMAPRODI',
                        'iDAKTIFCUTI.iDIJINCUTI.nIM.ALAMATASAL',
                        'iDAKTIFCUTI.iDTASEMESTER.TAHUNAKADEMIK',
                        'iDAKTIFCUTI.iDTASEMESTER.SEMESTER',
                        //'iDAKTIFCUTI.KETERANGANAKTIFCUTI',
                        /*array(
                                    'type'=>'html',
                                    'header'=>'Divisi Pemberi No.Surat',
                                     'value'=>'$data->iDGROUPS->DIVISI',
                                ),*/
                        //'ACCDETAILSURAKTIFCUTI',
                        //'TGLSUBMITDETAILSURAKTIFCUTI',
                        'iDAKTIFCUTI.TGLCETAKSURATAKTIFCUTI',

                        /*array(
                            'header'=>'Cetak Aktif Kembali Cuti by Dekan',
                            'type'=>'raw',

                            'value'=>'CHtml::link("Cetak",array("cetak/suraktifcuti","id"=>$data->IDDETAILSURAKTIFCUTI),array ("target"=>"_blank","class"=>"btn btn-sm yellow"))',
                        ),*/

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
                                                'url'=>'Yii::app()->createUrl("suraktifcuti/updatenosuraktifcutioperator",array("id"=>$data->IDAKTIFCUTI))',

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