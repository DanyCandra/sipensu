<?php
/* @var $this SurtugmonitoringController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Surtugmonitorings',
);

$this->menu=array(
	array('label'=>'Create Surtugmonitoring', 'url'=>array('create')),
	array('label'=>'Manage Surtugmonitoring', 'url'=>array('admin')),
);
?>

<h1>Surtugmonitorings</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
