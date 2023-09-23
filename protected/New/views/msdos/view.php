<div class="portlet box yellow">
<div class="portlet-title">
  <div class="caption">
	<i class="fa fa-pencil-square-o"></i> View Data Dosen #<?php echo $model->NIP; ?>  </div>
</div>

<div class="portlet-body">
    
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions' => array('class'=> 'table table-bordered table-striped table-advance table-hover'),
	'attributes'=>array(
		'NIP',
                'NAMA2',
                'iDJENDER.NAMAJENDER',
                'TEMPATLAHIR',
		'TGLLAHIR2',
                'NIDN',
		'iDFAKULTAS.FAKULTAS',
		'iDJURUSAN.NAMAJURUSAN',
		
		
		
		
	),
)); 
//echo CHtml::link('<i class="fa fa-plus"></i> Tambah Data Dosen',array('msdos/create','NIP'=>$model->NIP),array('class'=>'btn btn-sm yellow'));
echo CHtml::link('Manage Data Dosen',array('msdos/admin'),array('class'=>'btn btn-default blue'));
?>
</div>