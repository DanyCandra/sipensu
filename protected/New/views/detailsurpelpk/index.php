<?php
/* @var $this DetailsurpelpkController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Detailsurpelpks',
);

$this->menu=array(
	array('label'=>'Create Detailsurpelpk', 'url'=>array('create')),
	array('label'=>'Manage Detailsurpelpk', 'url'=>array('admin')),
);
?>

<h1>Detailsurpelpks</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
