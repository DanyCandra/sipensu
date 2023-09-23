

<div class="portlet box red">
<div class="portlet-title">
  <div class="caption">
	<i class="fa fa-cogs"></i>Data Berita/Informasi</div>
	
        
</div>

<div class="portlet-body">
<div class="table-responsive">
<?php
/* @var $this BeritaController */
/* @var $dataProvider CActiveDataProvider */

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('agama-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
        <?php
    $this->widget('zii.widgets.grid.CGridView', array(
        'id' => 'berita-grid',
        'dataProvider' => $dataProvider,
        'columns' => array(
            'IDBERITA',
		'iDKATEGORI.NAMAKATEGORI',
		'JUDUL',
		'ISI',
		'ISPUBLISH',
		//'FILEIMAGE',
		/*
		'HIT',
		'TGLSUBMIT',
		'SUMMARY',
		*/
            array(
                    'header'=>'Detail',
                    'type'=>'raw',
                    'value'=>'CHtml::link("View ",array("berita/detailberita","id"=>$data->primaryKey),array ("class"=>"btn btn-sm purple "))',
		)
         ),
    ));
    ?>
<div class="actions">
        <?php //echo CHtml::link('<i class="fa fa-plus"></i> Tambah',array('create'),array('class'=>'btn btn-sm blue'));?>
        <?php //echo CHtml::link('Manage',array('admin'),array('class'=>'btn btn-sm blue'));?>
</div> 
    
</div>
</div>