<div class="portlet box yellow">
<div class="portlet-title">
  <div class="caption">
	<i class="fa fa-pencil-square-o"></i> View Tahun Akademik Semester #<?php echo $model->IDTASEMESTER; ?>  </div>
</div>

<div class="portlet-body">
    
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
        'htmlOptions' => array('class'=> 'table table-bordered table-striped table-advance table-hover'),
	'attributes'=>array(
		'IDTASEMESTER',
		'TAHUNAKADEMIK',
                'KETTAHUNAKADEMIK',
                'SEMESTER',
                'KETSEMESTER',
                'STATUSTASEMESTER',
	),
)); 
//echo CHtml::link('<i class="fa fa-plus"></i> Tambah ',array('currentsemester/create','IDTASEMESTER'=>$model->IDTASEMESTER),array('class'=>'btn btn-default yellow'));
echo CHtml::link('Manage ',array('currentsemester/admin'),array('class'=>'btn btn-default blue'));
?>
</div>