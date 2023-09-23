<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card mb-12">
            <div class="card-body">
                <h4 class="card-title"> Manage Acc. Surat Tugas Pembicara/Narasumber/Lainnya </h4>
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
                    $('#detailsurtugns-grid').yiiGridView('update', {
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
                    'id'=>'detailsurtugns-grid',
                    'dataProvider'=>$model->search(),
                    'filter'=>$model,
                    'itemsCssClass' => 'table table-bordered table-striped table-advance table-hover',
                    'columns'=>array(
                        'iDSURTUGNS.NOSURTUGNS',
                        array(
                            'name'=>'IDDETAILSURTUGNS',
                            'type'=>'html',
                            'header'=>'Nama Peminta/Pemohon',
                            'value'=>'$data->iDSURTUGNS->nIP->NAMA2','sortable'=>true,
                            'filter'=>Chtml::listData(Detailsurtugns::model()->findAll(),'IDDETAILSURTUGNS','iDSURTUGNS.nIP.NAMA2')
                        ),
                        'iDSURTUGNS.INSTANSINS',
                        'iDSURTUGNS.ALAMATINSTANSINS',
                        'iDSURTUGNS.TGLACARANS',
                        'iDSURTUGNS.TGLCETAKSURATNS',
                        array(
                            'header'=>'Action',
                            'type'=>'raw',
                            'value'=>'$data->listactionnotifikasi',
                            'htmlOptions'=>array('style'=>'width:9%'),
                        ),
                    ),
                )); ?>
            </div>
        </div>
    </div>
</div>