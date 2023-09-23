<?php
/* @var $this GroupsurmagController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Groupsurmags',
);

$this->menu=array(
	array('label'=>'Create Groupsurmag', 'url'=>array('create')),
	array('label'=>'Manage Groupsurmag', 'url'=>array('admin')),
);
?>

<h1>Groupsurmags</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
