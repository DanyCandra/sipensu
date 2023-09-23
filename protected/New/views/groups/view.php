<div class="portlet box yellow">
<div class="portlet-title">
  <div class="caption">
	<i class="fa fa-pencil-square-o"></i> View Group User #<?php echo $model->IDGROUPS; ?>  </div>
</div>

<div class="portlet-body">
    
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions' => array('class'=> 'table table-bordered table-striped table-advance table-hover'),
	'attributes'=>array(
		'IDGROUPS',
		'NAMAGROUPS',
                'DIVISI'
	),

)); 
//echo CHtml::link('<i class="fa fa-plus"></i> Tambah Group User',array('groups/create','IDGROUPS'=>$model->IDGROUPS),array('class'=>'btn btn-sm yellow'));
echo CHtml::link('Manage Group User',array('groups/admin'),array('class'=>'btn btn-default blue'));
?>
</div>