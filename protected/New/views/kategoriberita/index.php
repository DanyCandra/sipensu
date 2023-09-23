<?php
/* @var $this KategoriberitaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Kategoriberitas',
);

$this->menu=array(
	array('label'=>'Create Kategoriberita', 'url'=>array('create')),
	array('label'=>'Manage Kategoriberita', 'url'=>array('admin')),
);
?>

<h1>Kategoriberitas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
