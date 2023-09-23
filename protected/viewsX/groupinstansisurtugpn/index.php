<?php
/* @var $this GroupinstansisurtugpnController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Groupinstansisurtugpns',
);

$this->menu=array(
	array('label'=>'Create Groupinstansisurtugpn', 'url'=>array('create')),
	array('label'=>'Manage Groupinstansisurtugpn', 'url'=>array('admin')),
);
?>

<h1>Groupinstansisurtugpns</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
