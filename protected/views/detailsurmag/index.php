<?php
/* @var $this DetailsurmagController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Detailsurmags',
);

$this->menu=array(
	array('label'=>'Create Detailsurmag', 'url'=>array('create')),
	array('label'=>'Manage Detailsurmag', 'url'=>array('admin')),
);
?>

<h1>Detailsurmags</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
