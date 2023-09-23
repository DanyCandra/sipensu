<div class="portlet box red">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-cogs"></i> Ekstrak Data Monitoring Praktik Kerja (Prodi D3) </div>
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
	$('#groupsurtugmonitoring-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
            ?>

            <?php echo CHtml::link('Pencarian', '#', array('class' => 'search-button')); ?>
            <div class="search-form" style="display:none">
            <?php
            $this->renderPartial('_cari', array(
                'model' => $model,
            ));
            ?>
            </div> 
        </div>   

        <!--QUERY CARI TAHUN AKADEMIK YANG ADA DI TABEL SURPERPK--> 
        <?php
        $qry = "select  surperpk.IDTASEMESTER,KETSEMESTER from surperpk inner join currentsemester on surperpk.IDTASEMESTER=currentsemester.IDTASEMESTER
                group by surperpk.IDTASEMESTER,KETSEMESTER";
        $listth = Yii::app()->db->createCommand($qry)->queryAll();
        ?>



        <?php
        $this->widget('ext.EExcelView', array(
            'id' => 'groupsurtugmonitoring-grid',
            'dataProvider' => $model->search(),
            'filter' => $model,
            /* 'mergeColumns' => array('iDSURTUGMONITORING.iDSUBDETAILSURPELPK.iDPK.SEMESTERPK','iDSURTUGMONITORING.iDSUBDETAILSURPELPK.iDPK.TAHUNAKADEMIKPK','iDSURTUGMONITORING.NOSURTUGMONITORING',  'iDSURTUGMONITORING.iDSUBDETAILSURPELPK.iDPK.INSTANSIPK',
              'iDSURTUGMONITORING.iDSUBDETAILSURPELPK.iDPK.ALAMATINSTANSIPK',
              //'iDSURTUGMONITORING.iDSUBDETAILSURPELPK.iDPK.KOTAINSTANSIPK',
              'iDSURTUGMONITORING.iDSUBDETAILSURPELPK.TGLMULAISURPELPK',
              'iDSURTUGMONITORING.iDSUBDETAILSURPELPK.TGLAKHIRSURPELPK',
              'iDSURTUGMONITORING.nIP.NIP'), */
            'template' => "{summary}\n{items}\n{exportbuttons}\n{pager}",
            'itemsCssClass' => 'table table-bordered table-striped table-hover',
            'columns' => array(
                //'IDGROUPSURTUGMONITORING',
                array(
                    'name' => 'carith',
                    'header' => 'Th Akademik',
                    'value' => '$data->iDSURTUGMONITORING->iDSUBDETAILSURPELPK->iDPK->iDTASEMESTER->KETTAHUNAKADEMIK',
                    'type' => 'raw',
                    'filter'=>'',
                ),
                array(
                    'name' => 'carismstr',
                    'header' => 'Semester',
                    'value' => '$data->iDSURTUGMONITORING->iDSUBDETAILSURPELPK->iDPK->iDTASEMESTER->KETSEMESTER',
                    //'filter' => CHtml::listData($listth, 'IDTASEMESTER', 'KETTAHUNAKADEMIK'),
                   // 'filter' => CHtml::listData($listth, 'IDTASEMESTER', 'KETSEMESTER'),
                    'filter'=>'',
                    'type' => 'raw',
                ),
                //'iDSURTUGMONITORING.iDSUBDETAILSURPELPK.iDPK.iDTASEMESTER.TAHUNAKADEMIK',
                //'iDSURTUGMONITORING.iDSUBDETAILSURPELPK.iDPK.iDTASEMESTER.SEMESTER',
                'iDSURTUGMONITORING.NOSURTUGMONITORING',
                'iDSURTUGMONITORING.iDSUBDETAILSURPELPK.iDPK.INSTANSIPK',
                'iDSURTUGMONITORING.iDSUBDETAILSURPELPK.iDPK.ALAMATINSTANSIPK',
                'iDSURTUGMONITORING.iDSUBDETAILSURPELPK.iDPK.KOTAINSTANSIPK',
                'iDSURTUGMONITORING.iDSUBDETAILSURPELPK.TGLMULAISURPELPK',
                'iDSURTUGMONITORING.iDSUBDETAILSURPELPK.TGLAKHIRSURPELPK',
                'iDSURTUGMONITORING.nIP.NIP',
                'iDSURTUGMONITORING.nIP.NAMA2',
                //'IDSURTUGMONITORING',
                //'NIM',
               array (
                        'name'=>'NIM',
                        'type'=>'raw',
                        'header'=>'NIM',
                        'value'=>'CHtml::encode(
				$data->nIM->NIM)',
                        'htmlOptions'=>array('widht'=>''),
                   'filter'=>'',
                                                   
                ),
                'nIM.NAMA',
                'nIM.iDPRODI.NAMAPRODI',
            //'NOURUTSURTUGMONITORING',
            ),
        ));
        ?>
    </div>
</div>   
