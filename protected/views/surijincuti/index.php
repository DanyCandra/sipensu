<?php
/* @var $this SurijincutiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Surijincutis',
);

$this->menu=array(
	array('label'=>'Create Surijincuti', 'url'=>array('create')),
	array('label'=>'Manage Surijincuti', 'url'=>array('admin')),
);
?>

<h1>Surijincutis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
