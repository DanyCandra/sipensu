<?php
/* @var $this DetailpermintaansurtugpnController */
/* @var $model Detailpermintaansurtugpn */

$this->breadcrumbs=array(
	'Detailpermintaansurtugpns'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Detailpermintaansurtugpn', 'url'=>array('index')),
	array('label'=>'Manage Detailpermintaansurtugpn', 'url'=>array('admin')),
);
?>

<h1>Create Detailpermintaansurtugpn</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>