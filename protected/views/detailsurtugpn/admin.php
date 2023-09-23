<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card mb-12">
            <div class="card-body">
                <h4 class="card-title">  Manage Acc. Surat Tugas Ijin Penelitian </h4>
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
                    $('#detailsurtugpn-grid').yiiGridView('update', {
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
                    'id'=>'detailsurtugpn-grid',
                    'dataProvider'=>$model->search(),
                    'filter'=>$model,
                    'itemsCssClass' => 'table table-bordered table-striped table-advance table-hover',
                    'columns'=>array(
                        //'IDDETAILSURTUGPN',
                        'iDPN.NOSURATPN',
                        array(
                            'header'=>'Instansi',
                            'type'=>'html',
                            'value' => '$data->listgroupinstansipn',
                        ),
                        array(
                            'header'=>'Group Dosen',
                            'type'=>'html',
                            'value' => '$data->listgroupdosenpn',
                        ),
                        //'iDPN.JUDULPN',
                        array(
                            'header'=>'Judul Penelitian',
                            'type'=>'html',
                            'value' => '$data->iDPN->JUDULPN',
                            'htmlOptions'=>array('width'=>'25%'),
                        ),
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