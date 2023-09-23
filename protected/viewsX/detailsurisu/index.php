<?php
/* @var $this DetailsurisuController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Detailsurisus',
);

$this->menu=array(
	array('label'=>'Create Detailsurisu', 'url'=>array('create')),
	array('label'=>'Manage Detailsurisu', 'url'=>array('admin')),
);
?>

<h1>Detailsurisus</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
