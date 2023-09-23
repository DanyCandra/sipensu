<?php
/* @var $this CurrentsemesterController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Currentsemesters',
);

$this->menu=array(
	array('label'=>'Create Currentsemester', 'url'=>array('create')),
	array('label'=>'Manage Currentsemester', 'url'=>array('admin')),
);
?>

<h1>Currentsemesters</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
