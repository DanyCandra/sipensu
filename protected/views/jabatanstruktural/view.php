<div class="portlet box yellow">
<div class="portlet-title">
  <div class="caption">
	<i class="fa fa-pencil-square-o"></i> View Jabatan Struktural #<?php echo $model->IDJABATANSTRUKTURAL; ?>  </div>
</div>

<div class="portlet-body">
    
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions' => array('class'=> 'table table-bordered table-striped table-advance table-hover'),
	'attributes'=>array(
		'IDJABATANSTRUKTURAL',
                'IDJABATANSURAT',
		'NIP',
                'nIP.NAMA2',
		'NAMAJABATANSTRUKTURAL',
		'TAHUN',
                'iDPANGGOL.PANGKAT',
                'iDPANGGOL.GOL',
                'iDJABATANAKADEMIK.NAMAJABATANAKADEMIK',
		'NOURUTJABATANSTRUKTURAL',
	),

)); 
//echo CHtml::link('<i class="fa fa-plus"></i> Tambah Jabatan Struktural',array('jabatanstruktural/create','IDJABATANSTRUKTURAL'=>$model->IDJABATANSTRUKTURAL),array('class'=>'btn btn-sm yellow'));
echo CHtml::link('Manage Jabatan Struktural',array('jabatanstruktural/admin'),array('class'=>'btn btn-default blue'));
?>
</div>



