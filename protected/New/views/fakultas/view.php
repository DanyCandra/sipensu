<div class="portlet box yellow">
<div class="portlet-title">
  <div class="caption">
	<i class="fa fa-pencil-square-o"></i> View Fakultas #<?php echo $model->IDFAKULTAS; ?>  </div>
</div>

<div class="portlet-body">
    
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions' => array('class'=> 'table table-bordered table-striped table-advance table-hover'),
	'attributes'=>array(
		'IDFAKULTAS',
		'FAKULTAS',
		'ALAMATFAKULTAS',
		'WEBSITE',
		'EMAIL',
		'TLPFAKULTAS',
                'UNIVERSITAS',
	),

)); 
//echo CHtml::link('<i class="fa fa-plus"></i> Tambah Fakultas',array('fakultas/create','IDFAKULTAS'=>$model->IDFAKULTAS),array('class'=>'btn btn-sm yellow'));
echo CHtml::link('Manage Fakultas',array('fakultas/admin'),array('class'=>'btn btn-default blue'));
?>
</div>
		