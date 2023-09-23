<?php
/* @var $this DetailsurijincutiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Detailsurijincutis',
);

$this->menu=array(
	array('label'=>'Create Detailsurijincuti', 'url'=>array('create')),
	array('label'=>'Manage Detailsurijincuti', 'url'=>array('admin')),
);
?>

<h1>Detailsurijincutis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
