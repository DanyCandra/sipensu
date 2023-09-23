<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card mb-12">
            <div class="card-body">
                <h4 class="card-title"> Manage Acc. Surat Tugas Pengabdian pada Masyarakat (PPM) </h4>
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
                </div>
                <?php $this->widget('zii.widgets.grid.CGridView', array(
                    'id'=>'detailsurtugpm-grid',
                    'dataProvider'=>$model->search(),
                    'filter'=>$model,
                    'itemsCssClass' => 'table table-bordered table-striped table-advance table-hover',
                    'columns'=>array(
                        'iDPM.NOSURATPM',
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
                        'iDPM.TGLCETAKSURAT',
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
</div>
