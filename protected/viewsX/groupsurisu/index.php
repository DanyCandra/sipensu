<?php
/* @var $this GroupsurisuController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Groupsurisus',
);

$this->menu=array(
	array('label'=>'Create Groupsurisu', 'url'=>array('create')),
	array('label'=>'Manage Groupsurisu', 'url'=>array('admin')),
);
?>

<h1>Groupsurisus</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
