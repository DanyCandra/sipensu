<?php
/* @var $this DetailpermintaansurtugpnController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Detailpermintaansurtugpns',
);

$this->menu=array(
	array('label'=>'Create Detailpermintaansurtugpn', 'url'=>array('create')),
	array('label'=>'Manage Detailpermintaansurtugpn', 'url'=>array('admin')),
);
?>

<h1>Detailpermintaansurtugpns</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
