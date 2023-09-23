<div class="portlet box red">
<div class="portlet-title">
  <div class="caption">
	<i class="fa fa-cogs"></i>Data Jenis Kelamin </div>
	
        
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
	$.fn.yiiGridView.update('msdos-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<?php $this->widget('zii.widgets.grid.CGridView', array(
         'id'=>'jender-grid',
	'dataProvider'=>$dataProvider,
        'columns'=>array(
            'IDJENDER',
		'NAMAJENDER',
            array(
			'class'=>'CButtonColumn',
                        'template'=>'{view}',
                        'header'=>'Aksi',
                        
		)),
)); ?>
</div>
</div>