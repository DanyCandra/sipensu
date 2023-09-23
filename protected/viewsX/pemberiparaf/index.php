<div class="portlet box red">
<div class="portlet-title">
  <div class="caption">
	<i class="fa fa-cogs"></i>Data PPemberi Paraf </div>
	
        
</div>

<div class="portlet-body">
<div class="table-responsive">
<?php
/* @var $this MsdosController */
/* @var $dataProvider CActiveDataProvider */

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('pemberiparaf-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<?php $this->widget('zii.widgets.grid.CGridView', array(
         'id'=>'pemberiparaf-grid',
	'dataProvider'=>$dataProvider,
        'columns'=>array(
                'IDTTD',
		'NIPTTD',
		'NAMATTD',
		'JABATANSTRUKTURALTTD',
            
             array(
			'class'=>'CButtonColumn',
                        'template'=>'{view}',
                        'header'=>'Aksi',
                        
		)),
)); ?>
<div class="actions">
        <?php echo CHtml::link('<i class="fa fa-plus"></i> Tambah',array('create'),array('class'=>'btn btn-sm blue','enabled'=>true));?>
        <?php echo CHtml::link('Manage',array('admin'),array('class'=>'btn btn-sm blue'));?>
</div> 
    
</div>
</div>