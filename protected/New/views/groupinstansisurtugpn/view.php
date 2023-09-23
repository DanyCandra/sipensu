<?php
/* @var $this GroupinstansisurtugpnController */
/* @var $model Groupinstansisurtugpn */

$this->breadcrumbs=array(
	'Groupinstansisurtugpns'=>array('index'),
	$model->IDGROUPINSTANSIPN,
);

$this->menu=array(
	array('label'=>'List Groupinstansisurtugpn', 'url'=>array('index')),
	array('label'=>'Create Groupinstansisurtugpn', 'url'=>array('create')),
	array('label'=>'Update Groupinstansisurtugpn', 'url'=>array('update', 'id'=>$model->IDGROUPINSTANSIPN)),
	array('label'=>'Delete Groupinstansisurtugpn', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->IDGROUPINSTANSIPN),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Groupinstansisurtugpn', 'url'=>array('admin')),
);
?>

<h1>View Groupinstansisurtugpn #<?php echo $model->IDGROUPINSTANSIPN; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'IDGROUPINSTANSIPN',
		'INSTANSIPN',
		'ALAMATINSTANSIPN',
		'KOTAINSTANSIPN',
		'NOURUTINSTANSIPN',
		'IDPN',
		
	),
)); ?>
