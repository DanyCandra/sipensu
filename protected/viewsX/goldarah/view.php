<?php
/* @var $this GoldarahController */
/* @var $model Goldarah */


?>
<div class="portlet box yellow">
<div class="portlet-title">
  <div class="caption">
	<i class="fa fa-pencil-square-o"></i> View Golongan Darah #<?php echo $model->IDGOLDAR; ?>  </div>
</div>

<div class="portlet-body">
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions' => array('class'=> 'table table-bordered table-striped table-advance table-hover'),
	'attributes'=>array(
		'IDGOLDAR',
		'NAMAGOLDAR',
	),
)); 
//echo CHtml::link('<i class="fa fa-plus"></i> Tambah Golongan Darah',array('goldarah/create','IDGOLDAR'=>$model->IDGOLDAR),array('class'=>'btn btn-sm yellow'));
echo CHtml::link('Manage Golongan Darah',array('goldarah/admin'),array('class'=>'btn btn-default blue'));
?>
</div>
