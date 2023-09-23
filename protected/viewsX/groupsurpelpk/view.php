<?php
/* @var $this GroupsurpelpkController */
/* @var $model Groupsurpelpk */

$this->breadcrumbs=array(
	'Groupsurpelpks'=>array('index'),
	$model->IDGROUPSURPELPK,
);

$this->menu=array(
	array('label'=>'List Groupsurpelpk', 'url'=>array('index')),
	array('label'=>'Create Groupsurpelpk', 'url'=>array('create')),
	array('label'=>'Update Groupsurpelpk', 'url'=>array('update', 'id'=>$model->IDGROUPSURPELPK)),
	array('label'=>'Delete Groupsurpelpk', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->IDGROUPSURPELPK),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Groupsurpelpk', 'url'=>array('admin')),
);
?>

<h1>View Groupsurpelpk #<?php echo $model->IDGROUPSURPELPK; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'IDGROUPSURPELPK',
		'IDPK',
		'NIM',
		'NOURUTSURPELPK',
	),
)); ?>
