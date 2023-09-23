<div class="portlet box yellow">
<div class="portlet-title">
  <div class="caption">
	<i class="fa fa-pencil-square-o"></i> View Group Srt.Permohonan Ijin Survei  #<?php echo $model->IDGROUPSURISU; ?>  </div>
</div>

<div class="portlet-body">
    
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions' => array('class'=> 'table table-bordered table-striped table-advance table-hover'),
	'attributes'=>array(
		'IDGROUPSURISU',
		'IDISU',
		'NIM',
		'NOURUTGROUPSURISU',
	),

)); 

echo CHtml::link('Manage ',array('groupsurisu/admin','IDGROUPSURISU'=>$model->IDGROUPSURISU),array('class'=>'btn btn-sm blue'));
?>
</div>