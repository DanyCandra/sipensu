<div class="portlet box red">
<div class="portlet-title">
  <div class="caption">
	<i class="fa fa-cogs"></i>Data Mahasiswa</div>
	
        
</div>

<div class="portlet-body">
<div class="table-responsive">
<?php
/* @var $this MahasiswaController */
/* @var $dataProvider CActiveDataProvider */
Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('mahasiswa-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
    <?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
 
<?php $this->widget('zii.widgets.grid.CGridView', array(
        'id' => 'mahasiswa-grid',
        'filter'=>$model,
        'dataProvider'=>$model->search(),
       // 'dataProvider' => $dataProvider,
        'itemsCssClass' => 'table table-bordered table-striped table-hover',
        'columns' => array(
                //'NIM',
                 array (
                        'name'=>'NIM',
                        'type'=>'raw',
                        'header'=>'NIM',
                        'value'=>'CHtml::encode($data->NIM)',
                        'htmlOptions'=>array('width'=>'5%'),
                ),
		'NAMA',
                'iDPRODI.NAMAPRODI',
		//'TEMPATLAHIR',
                array (
                        'name'=>'TEMPATLAHIR',
                        'type'=>'raw',
                        'header'=>'Tempat Lahir',
                        'value'=>'CHtml::encode($data->TEMPATLAHIR)',
                        'htmlOptions'=>array('width'=>'5%'),
                        'filter'=>'',
                ),
		//'TGLLAHIR',
                array (
                        'name'=>'TGLLAHIR',
                        'type'=>'raw',
                        'header'=>'Tgl. Lahir',
                        'value'=>'CHtml::encode($data->TGLLAHIR)',
                        'htmlOptions'=>array('width'=>'10%'),
                        'filter'=>'',
                ),
		//'NOHP',
                array (
                        'name'=>'NOHP',
                        'type'=>'raw',
                        'header'=>'No. HP',
                        'value'=>'CHtml::encode($data->NOHP)',
                        'htmlOptions'=>array('width'=>'5%'),
                        'filter'=>'',
                ),
		//'EMAIL',
                array (
                        'name'=>'EMAIL',
                        'type'=>'raw',
                        'header'=>'Email',
                        'value'=>'CHtml::encode($data->EMAIL)',
                        'htmlOptions'=>array('width'=>'5%'),
                        'filter'=>'',
                ),
		/*
		'ALAMATASAL',
		'NAMAAYAH',
		'NAMAIBU',
		'PENGHASILANAYAH',
		'PENGHASILANIBU',
		'JMLTANGGUNGAN',
		'NAMAKABUPATEN',
		'NAMAPROPINSI',
		'TAHUNANGKATAN',
		'IDAGAMA',
		'IDPRODI',
		'IDGOLDAR',
		'IDJENDER',
                 */
                  array(
                'class' => 'CButtonColumn',
                'template' => '{view}',
                'header' => 'Aksi',
        )),
    ));
    ?>
<div class="actions">
        <?php //echo CHtml::link('<i class="fa fa-plus"></i> Tambah',array('create'),array('class'=>'btn btn-sm blue','disabled'=>true));?>
        <?php //echo CHtml::link('Manage',array('admin'),array('class'=>'btn btn-sm blue'));?>
</div> 
    
</div>
</div>