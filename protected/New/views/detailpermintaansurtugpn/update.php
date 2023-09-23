<?php
/* @var $this DetailpermintaansurtugpnController */
/* @var $model Detailpermintaansurtugpn */

$this->breadcrumbs=array(
	'Detailpermintaansurtugpns'=>array('index'),
	$model->IDDETAILPERMINTAANSURTUGPN=>array('view','id'=>$model->IDDETAILPERMINTAANSURTUGPN),
	'Update',
);

$this->menu=array(
	array('label'=>'List Detailpermintaansurtugpn', 'url'=>array('index')),
	array('label'=>'Create Detailpermintaansurtugpn', 'url'=>array('create')),
	array('label'=>'View Detailpermintaansurtugpn', 'url'=>array('view', 'id'=>$model->IDDETAILPERMINTAANSURTUGPN)),
	array('label'=>'Manage Detailpermintaansurtugpn', 'url'=>array('admin')),
);
?>

<h1>Update Detailpermintaansurtugpn <?php echo $model->IDDETAILPERMINTAANSURTUGPN; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>