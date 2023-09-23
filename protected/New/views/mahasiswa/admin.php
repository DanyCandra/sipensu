<div class="portlet box yellow">
<div class="portlet-title">
  <div class="caption">
	<i class="fa fa-cogs"></i> Manage Mahasiswa  </div>
    <div class="actions">
        <?php echo CHtml::link('<i class="fa fa-plus"></i> Tambah',array('create'),array('class'=>'btn btn-sm blue'));?>    </div>  
</div>

<div class="portlet-body">
<div class="table-responsive">
<?php
/* @var $this MahasiswaController */
/* @var $model Mahasiswa */
Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#mahasiswa-grid').yiiGridView('update', {
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
</div>
<div class="portlet-body">
<div class="table-responsive">
<?php $this->widget('ext.EExcelView', array(
	'id'=>'mahasiswa-grid',
	'dataProvider'=>$model->search(),
        'template' => "{summary}\n{items}\n{exportbuttons}\n{pager}",
        'summaryText'=>'Jumlah Data Mahasiswa: {count}',
	'filter'=>$model,
	'itemsCssClass' => 'table table-bordered table-striped table-advance table-hover',
	'columns'=>array(
		'NIM',
		'NAMA',
		'IDPRODI',
        'iDPRODI.NAMAPRODI',
		'TAHUNANGKATAN',
		'TEMPATLAHIR',
		'TGLLAHIR',
		'NOHP',
		'EMAIL',
                array(
                    
                    'header'=>'File Foto',
                    'value' => '$data->fileuploadfoto',
                    
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
		
		'IDGOLDAR',
		'IDJENDER',
		*/
                
		array(
			'class'=>'CButtonColumn',
			'htmlOptions' => array(
                        'style' => 'width:75px;text-align:center;'
                    )
                    ),
	),
)); ?>
</div>
</div>
</div>
