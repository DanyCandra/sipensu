<?php
/* @var $this DetailaktifcutiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Detailaktifcutis',
);

$this->menu=array(
	array('label'=>'Create Detailaktifcuti', 'url'=>array('create')),
	array('label'=>'Manage Detailaktifcuti', 'url'=>array('admin')),
);
?>

<h1>Detailaktifcutis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
