<?php
/* @var $this GroupsurtugmonitoringController */
/* @var $model Groupsurtugmonitoring */

$this->breadcrumbs=array(
	'Groupsurtugmonitorings'=>array('index'),
	$model->IDGROUPSURTUGMONITORING,
);

$this->menu=array(
	array('label'=>'List Groupsurtugmonitoring', 'url'=>array('index')),
	array('label'=>'Create Groupsurtugmonitoring', 'url'=>array('create')),
	array('label'=>'Update Groupsurtugmonitoring', 'url'=>array('update', 'id'=>$model->IDGROUPSURTUGMONITORING)),
	array('label'=>'Delete Groupsurtugmonitoring', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->IDGROUPSURTUGMONITORING),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Groupsurtugmonitoring', 'url'=>array('admin')),
);
?>

<h1>View Groupsurtugmonitoring #<?php echo $model->IDGROUPSURTUGMONITORING; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'IDGROUPSURTUGMONITORING',
		'IDSUBDETAILSURPELPK',
		'NIM',
		'NOURUTSURTUGMONITORING',
	),
)); ?>
