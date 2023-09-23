<div class="portlet box yellow">
<div class="portlet-title">
  <div class="caption">
	<i class="fa fa-pencil-square-o"></i> View Jabatan Akademik #<?php echo $model->IDJABATANAKADEMIK; ?>  </div>
</div>

<div class="portlet-body">
    
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions' => array('class'=> 'table table-bordered table-striped table-advance table-hover'),
	'attributes'=>array(
		'IDJABATANAKADEMIK',
		'NAMAJABATANAKADEMIK',
	),

)); 
//echo CHtml::link('<i class="fa fa-plus"></i> Tambah Jabatan Akademik',array('jabatanakademik/create','IDJABATANAKADEMIK'=>$model->IDJABATANAKADEMIK),array('class'=>'btn btn-sm yellow'));
echo CHtml::link('Manage Jabatan Akademik',array('jabatanakademik/admin'),array('class'=>'btn btn-default blue'));
?>
</div>
	