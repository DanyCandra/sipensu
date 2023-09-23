<?php
/* @var $this DetailsurtugmonitoringController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Detailsurtugmonitorings',
);

$this->menu=array(
	array('label'=>'Create Detailsurtugmonitoring', 'url'=>array('create')),
	array('label'=>'Manage Detailsurtugmonitoring', 'url'=>array('admin')),
);
?>

<h1>Detailsurtugmonitorings</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
