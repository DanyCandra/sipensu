<div class="portlet box yellow">
<div class="portlet-title">
  <div class="caption">
	<i class="fa fa-pencil-square-o"></i> View Group Srt.Permohonan Magang #<?php echo $model->IDGROUPSURMAG; ?>  </div>
</div>

<div class="portlet-body">
    
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions' => array('class'=> 'table table-bordered table-striped table-advance table-hover'),
	'attributes'=>array(
		'IDGROUPSURMAG',
		'IDSURMAG',
		'NIM',
		'NOURUTGROUPSURMAG',
	),

)); 

echo CHtml::link('Manage ',array('groupsurmag/admin','IDGROUPSURMAG'=>$model->IDGROUPSURMAG),array('class'=>'btn btn-sm blue'));
?>
</div>