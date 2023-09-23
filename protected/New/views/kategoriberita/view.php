<div class="portlet box yellow">
<div class="portlet-title">
  <div class="caption">
	<i class="fa fa-pencil-square-o"></i> View Kategori Berita #<?php echo $model->IDKATEGORI; ?>  </div>
</div>

<div class="portlet-body">
    
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions' => array('class'=> 'table table-bordered table-striped table-advance table-hover'),
	'attributes'=>array(
		'IDKATEGORI',
		'NAMAKATEGORI',
	),
));


echo CHtml::link('Manage Kategori Berita',array('kategoriberita/admin'),array('class'=>'btn btn-default blue'));
?>
</div>
