<?php
/* @var $this GroupsurperpkController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Groupsurperpks',
);

$this->menu=array(
	array('label'=>'Create Groupsurperpk', 'url'=>array('create')),
	array('label'=>'Manage Groupsurperpk', 'url'=>array('admin')),
);
?>

<h1>Groupsurperpks</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
