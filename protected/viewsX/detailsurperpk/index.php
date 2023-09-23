<?php
/* @var $this DetailsurperpkController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Detailsurperpks',
);

$this->menu=array(
	array('label'=>'Create Detailsurperpk', 'url'=>array('create')),
	array('label'=>'Manage Detailsurperpk', 'url'=>array('admin')),
);
?>

<h1>Detailsurperpks</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
