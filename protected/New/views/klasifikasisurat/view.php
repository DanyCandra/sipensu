<div class="portlet box yellow">
<div class="portlet-title">
  <div class="caption">
	<i class="fa fa-pencil-square-o"></i> View Jenis Surat #<?php echo $model->IDKLASIFIKASI; ?>  </div>
</div>

<div class="portlet-body">
    
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions' => array('class'=> 'table table-bordered table-striped table-advance table-hover'),
	'attributes'=>array(
		'IDKLASIFIKASI',
		'NAMAKLASIFIKASI',
		'KETERANGANKLASIFIKASISURAT',
		'NOURUTKLASIFIKASISURAT',
	),

)); 
//echo CHtml::link('<i class="fa fa-plus"></i> Tambah Klasifikasi Surat Tugas',array('kasifikasisurat/create','IDKLASIFIKASI'=>$model->IDKLASIFIKASI),array('class'=>'btn btn-sm yellow'));
echo CHtml::link('Manage Klasifikasi Surat Tugas',array('klasifikasisurat/admin'),array('class'=>'btn btn-default blue'));
?>
</div>