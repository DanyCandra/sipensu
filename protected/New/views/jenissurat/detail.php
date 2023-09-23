<div class="portlet box red">
<div class="portlet-title">
  <div class="caption">
	<i class="fa fa-pencil-square-o"></i> Detail Jenis Surat #<?php echo $model->IDJENISSURAT; ?>  </div>
</div>

<div class="portlet-body">
    
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions' => array('class'=> 'table table-bordered table-striped table-advance table-hover'),
	'attributes'=>array(
		'IDJENISSURAT',
                'NAMAJENISSURAT',
                'IDKLASIFIKASI',
                'iDKLASIFIKASI.NAMAKLASIFIKASI',
                'iDJABATANSTRUKTURAL.IDJABATANSURAT',
                'iDJABATANSTRUKTURAL.NAMAJABATANSTRUKTURAL',
                'iDJABATANSTRUKTURAL.NIP',
                'iDJABATANSTRUKTURAL.nIP.NAMA2',
                'iDTTD.NAMATTD',
                'iDTTD.NIPTTD',
                'iDTTD.JABATANSTRUKTURALTTD',
		
		
	),

)); 
//echo CHtml::link('<i class="fa fa-plus"></i> Tambah Jenis Surat',array('jenissurat/create','IDJENISSURAT'=>$model->IDJENISSURAT),array('class'=>'btn btn-sm yellow'));
//echo CHtml::link('Manage Jenis Surat',array('jenissurat/admin'),array('class'=>'btn btn-default blue'));
?>
</div>
