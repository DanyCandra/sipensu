<?php
/* @var $this ProdiController */
/* @var $model Prodi */


?>
<div class="portlet box yellow">
<div class="portlet-title">
  <div class="caption">
	<i class="fa fa-pencil-square-o"></i> View Prodi #<?php echo $model->IDPRODI; ?>  </div>
</div>

<div class="portlet-body">

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions' => array('class'=> 'table table-bordered table-striped table-advance table-hover'),
	'attributes'=>array(
		'IDPRODI',
                'KODEPRODI',
                'KODEPRODIUNSOED',
		//'IDJENJANG',
                'iDJENJANG.NAMAJENJANG',
		//'IDFAKULTAS',
		'iDFAKULTAS.FAKULTAS',
		'NAMAPRODI',
                'ISAKTIF',
                'KODEPRODILAMA',
	),
)); 
//echo CHtml::link('<i class="fa fa-plus"></i> Tambah Prodi',array('prodi/create','IDPRODI'=>$model->IDPRODI),array('class'=>'btn btn-sm yellow'));
echo CHtml::link('Manage Prodi',array('prodi/admin'),array('class'=>'btn btn-default blue'));
?>
</div>
