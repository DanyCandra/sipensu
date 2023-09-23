<?php
/* @var $this GroupsurpelpkController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Groupsurpelpks',
);

$this->menu=array(
	array('label'=>'Create Groupsurpelpk', 'url'=>array('create')),
	array('label'=>'Manage Groupsurpelpk', 'url'=>array('admin')),
);
?>

<h1>Groupsurpelpks</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
