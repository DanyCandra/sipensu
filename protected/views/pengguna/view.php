<div class="portlet box yellow">
<div class="portlet-title">
  <div class="caption">
	<i class="fa fa-pencil-square-o"></i> View User Pengguna #<?php echo $model->IDPENGGUNA; ?>  </div>
</div>

<div class="portlet-body">
    
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions' => array('class'=> 'table table-bordered table-striped table-advance table-hover'),
	'attributes'=>array(
		'IDPENGGUNA',
		'IDGROUPS',
                'iDGROUPS.DIVISI',
		'USERNAME',
                
		'PASS',
	),

)); 
//echo CHtml::link('<i class="fa fa-plus"></i> Tambah User',array('pengguna/create','IDPENGGUNA'=>$model->IDPENGGUNA),array('class'=>'btn btn-sm yellow'));
echo CHtml::link('Manage User',array('pengguna/admin'),array('class'=>'btn btn-default blue'));
?>
</div>
		