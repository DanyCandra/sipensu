<div class="portlet box yellow">
<div class="portlet-title">
  <div class="caption">
	<i class="fa fa-pencil-square-o"></i> View Pemberi Paraf #<?php echo $model->IDTTD; ?>  </div>
</div>

<div class="portlet-body">

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions' => array('class'=> 'table table-bordered table-striped table-advance table-hover'),
	'attributes'=>array(
		'IDTTD',
		'NIPTTD',
		'NAMATTD',
		'JABATANSTRUKTURALTTD',
	),
)); 
echo CHtml::link('<i class="fa fa-plus"></i> Tambah Pemberi Paraf',array('pemberiparaf/create','IDTTD'=>$model->IDTTD),array('class'=>'btn btn-sm yellow'));
echo CHtml::link('Manage Pemberi Paraf',array('pemberiparaf/admin'),array('class'=>'btn btn-sm blue'));
?>
</div>
