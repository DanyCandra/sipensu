<?php
/* @var $this SubdetailsurpelpkController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Subdetailsurpelpks',
);

$this->menu=array(
	array('label'=>'Create Subdetailsurpelpk', 'url'=>array('create')),
	array('label'=>'Manage Subdetailsurpelpk', 'url'=>array('admin')),
);
?>

<h1>Subdetailsurpelpks</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
