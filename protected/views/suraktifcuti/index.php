<?php
/* @var $this SuraktifcutiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Suraktifcutis',
);

$this->menu=array(
	array('label'=>'Create Suraktifcuti', 'url'=>array('create')),
	array('label'=>'Manage Suraktifcuti', 'url'=>array('admin')),
);
?>

<h1>Suraktifcutis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
