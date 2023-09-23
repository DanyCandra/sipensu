<div class="portlet box red">
<div class="portlet-title">
  <div class="caption">
	<i class="fa fa-cogs"></i> Mata Kuliah Syarat Ijin Survei  </div>
	
        
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
	$.fn.yiiGridView.update('matakuliahsurisu-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<?php $this->widget('zii.widgets.grid.CGridView', array(
         'id'=>'matakuliahsurisu-grid',
	'dataProvider'=>$dataProvider,
        'columns'=>array(
            'IDMATAKULIAHISU',
		'NAMAMATAKULIAHISU',
		//'NIP',
                 array(
                    'header'=>'Pengampu Mata Kuliah',
                    'type'=>'raw',
                    'value'=>'$data->nIP->NAMA2',
                        ),
		//'IDTTD',
                array(
                    'header'=>'Penanggung Jawab Ijin Survei',
                    'type'=>'raw',
                    'value'=>'$data->iDTTD->NAMATTD',
                        ),
                
		
            array(
			'class'=>'CButtonColumn',
                        'template'=>'{view}',
                        'header'=>'Aksi',
                        
		)),
)); ?>
<div class="actions">
        <?php //echo CHtml::link('<i class="fa fa-plus"></i> Tambah',array('create'),array('class'=>'btn btn-sm blue'));?>
        <?php //echo CHtml::link('Manage',array('admin'),array('class'=>'btn btn-sm blue'));?>
</div> 
    
</div>
</div>