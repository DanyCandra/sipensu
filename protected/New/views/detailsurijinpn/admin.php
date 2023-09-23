<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card mb-12">
            <div class="card-body">
                <h4 class="card-title">  Manage Acc. Surat Ijin Penelitian </h4>
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
	$('#detailsurijinpn-grid').yiiGridView('update', {
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
                    'id'=>'detailsurijinpn-grid',
                    'dataProvider'=>$model->search(),
                    'filter'=>$model,
                    'itemsCssClass' => 'table table-bordered table-striped table-advance table-hover',
                    'columns'=>array(

                        //'IDDETAILSURIJINPN',
                        'iDIJINPN.NOSURATIJINPN',
                        //'iDIJINPN.nIM.NIM',
                        array (
                            'name'=>'IDIJINPN',
                            'type'=>'html',
                            'header'=>'NIM ',
                            'value'=>'$data->iDIJINPN->NIM',
                            'filter'=>'',
                            //'filter'=>Chtml::listData(Surijinpn::model()->findAll(),'IDIJINPN','NIM')
                        ),
                        // 'iDIJINPN.nIM.NAMA',
                        array (
                            'name'=>'IDDETAILSURIJINPN',
                            'type'=>'html',
                            'header'=>'Nama ',
                            'value'=>'$data->iDIJINPN->nIM->NAMA',
                            'filter'=>'',
                            //'filter'=>Chtml::listData(Detailsurijinpn::model()->findAll(),'IDDETAILSURIJINPN','iDIJINPN.nIM.NAMA')
                        ),
                        'iDIJINPN.INSTANSIIJINPN',
                        'iDIJINPN.ALAMATINSTANSIIJINPN',
                        //'iDIJINPN.KOTAINSTANSIIJINPN',
                        'iDIJINPN.JUDULSKRIPSIIJINPN',
                        /*array(
                                   'type'=>'html',
                                   'header'=>'Divisi Pemberi No.Surat',
                                    'value'=>'$data->iDGROUPS->DIVISI',
                               ),*/

                        'iDIJINPN.TGLCETAKSURATIJINPN',
                        //'ACCDETAILSURIJINPN',

                        //'TGLSUBMITDETAILSURIJINPN',

                        /*array(
                            'header'=>'Cetak Surat',
                            'type'=>'raw',

                            'value'=>'CHtml::link("Cetak",array("cetak/surijinpn","id"=>$data->IDIJINPN),array ("target"=>"_blank","class"=>"btn btn-sm yellow"))',
                        ),*/
                        //array(
                        //   'name'=>'Accijinpn',
                        //   'filter'=>'' ,
                        //   'type'=>'raw',
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
                                            'data-original-title'=>'Update','title'=>'Buat No.Surat & Tgl. Surat/Cetak','style'=>'margin-right:3px'),

                                        'htmlOptions'=>array('style'=>'width:90px'),
                                        'buttons'=>array(

                                            'view'=>array(
                                                'label'=>' <i class="fa fa-search">  </i> ',

                                                ),
                                            'update'=>array(

                                                'label'=>' <i class="fa fa-edit">  </i> ',
                                                'url'=>'Yii::app()->createUrl("surijinpn/updatenosurijinpnoperator",array("id"=>$data->IDIJINPN))',

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