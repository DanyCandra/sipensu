<div class="portlet box yellow">
<div class="portlet-title">
  <div class="caption">
	<i class="fa fa-pencil-square-o"></i> View Pangkat & Golongan #<?php echo $model->IDPANGGOL; ?>  </div>
</div>

<div class="portlet-body">
    
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions' => array('class'=> 'table table-bordered table-striped table-advance table-hover'),
	'attributes'=>array(
		'IDPANGGOL',
		'PANGKAT',
		'GOL',
	),

)); 
echo CHtml::link('<i class="fa fa-plus"></i> Tambah Pangkat & Golongan',array('panggol/create','IDPANGGOL'=>$model->IDPANGGOL),array('class'=>'btn btn-sm yellow'));
echo CHtml::link('Manage Pangkat & Golongan',array('panggol/admin'),array('class'=>'btn btn-sm blue'));
?>
</div>