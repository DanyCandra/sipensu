<div class="portlet box yellow">
<div class="portlet-title">
  <div class="caption">
	<i class="fa fa-pencil-square-o"></i> View Group Srt.Permohonan Praktik Kerja (Prodi D3) #<?php echo $model->IDGROUPSURPERPK; ?>  </div>
</div>

<div class="portlet-body">
    
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions' => array('class'=> 'table table-bordered table-striped table-advance table-hover'),
	'attributes'=>array(
		'IDGROUPSURPERPK',
		'IDPK',
		'NIM',
		'NOURUTSURPERPK',
	),

)); 

echo CHtml::link('Manage ',array('groupsurperpk/admin','IDGROUPSURPERPK'=>$model->IDGROUPSURPERPK),array('class'=>'btn btn-sm blue'));
?>
</div>