<?php
/* @var $this AgamaController */
/* @var $model Agama */


?>
<div class="portlet box yellow">
<div class="portlet-title">
  <div class="caption">
	<i class="fa fa-pencil-square-o"></i> View Agama #<?php echo $model->IDAGAMA; ?>  </div>
</div>

<div class="portlet-body">

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions' => array('class'=> 'table table-bordered table-striped table-advance table-hover'),
	'attributes'=>array(
		'IDAGAMA',
		'NAMAAGAMA',
	),
)); 
//echo CHtml::link('<i class="fa fa-plus"></i> Tambah Agama',array('agama/create','IDAGAMA'=>$model->IDAGAMA),array('class'=>'btn btn-sm yellow'));
echo CHtml::link('Manage Agama',array('agama/admin'),array('class'=>'btn btn-default blue'));
?>
</div>
