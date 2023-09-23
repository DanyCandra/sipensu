<?php
/* @var $this DetailpermintaansurtugpnController */
/* @var $model Detailpermintaansurtugpn */

$this->breadcrumbs=array(
	'Detailpermintaansurtugpns'=>array('index'),
	$model->IDDETAILPERMINTAANSURTUGPN,
);

$this->menu=array(
	array('label'=>'List Detailpermintaansurtugpn', 'url'=>array('index')),
	array('label'=>'Create Detailpermintaansurtugpn', 'url'=>array('create')),
	array('label'=>'Update Detailpermintaansurtugpn', 'url'=>array('update', 'id'=>$model->IDDETAILPERMINTAANSURTUGPN)),
	array('label'=>'Delete Detailpermintaansurtugpn', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->IDDETAILPERMINTAANSURTUGPN),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Detailpermintaansurtugpn', 'url'=>array('admin')),
);
?>

<h1>View Detailpermintaansurtugpn #<?php echo $model->IDDETAILPERMINTAANSURTUGPN; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'IDDETAILPERMINTAANSURTUGPN',
		'IDPN',
		'IDGROUPPN',
		'IDGROUPINSTANSIPN',
	),
)); ?>
