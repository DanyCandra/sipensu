<?php
/* @var $this JenjangController */
/* @var $model Jenjang */


?>
<div class="portlet box yellow">
<div class="portlet-title">
  <div class="caption">
	<i class="fa fa-pencil-square-o"></i> View Jenjang #<?php echo $model->IDJENJANG; ?>  </div>
</div>

<div class="portlet-body">
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions' => array('class'=> 'table table-bordered table-striped table-advance table-hover'),
	'attributes'=>array(
		'IDJENJANG',
		'NAMAJENJANG',
	),
)); 
//echo CHtml::link('<i class="fa fa-plus"></i> Tambah Jenjang',array('jenjang/create','IDJENJANG'=>$model->IDJENJANG),array('class'=>'btn btn-sm yellow'));
echo CHtml::link('Manage Jenjang',array('jenjang/admin'),array('class'=>'btn btn-default blue'));
?>
</div>