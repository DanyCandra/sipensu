<?php
/* @var $this GroupsurtugmonitoringController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Groupsurtugmonitorings',
);

$this->menu=array(
	array('label'=>'Create Groupsurtugmonitoring', 'url'=>array('create')),
	array('label'=>'Manage Groupsurtugmonitoring', 'url'=>array('admin')),
);
?>

<h1>Groupsurtugmonitorings</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
