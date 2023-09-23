<?php
/* @var $this DetailsuratketeranganController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Detailsuratketerangans',
);

$this->menu=array(
	array('label'=>'Create Detailsuratketerangan', 'url'=>array('create')),
	array('label'=>'Manage Detailsuratketerangan', 'url'=>array('admin')),
);
?>

<h1>Detailsuratketerangans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
