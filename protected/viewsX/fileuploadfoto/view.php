<?php
/* @var $this FileuploadfotoController */
/* @var $model Fileuploadfoto */

?>
<div class="portlet box yellow">
<div class="portlet-title">
  <div class="caption">
	<i class="fa fa-pencil-square-o"></i> View Foto Mahasiswa #<?php echo $model->IDFILEFOTO; ?>  </div>
</div>

<div class="portlet-body">
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions' => array('class'=> 'table table-bordered table-striped table-advance table-hover'),
	'attributes'=>array(
		'IDFILEFOTO',
                'NIM',
		'nIM.NAMA',
		'FILEFOTO',
	),
)); 
//echo CHtml::link('<i class="fa fa-plus"></i> Tambah Foto',array('fileuploadfoto/create','IDFILEFOTO'=>$model->IDFILEFOTO),array('class'=>'btn btn-sm yellow'));
echo CHtml::link('Manage Foto',array('fileuploadfoto/admin'),array('class'=>'btn btn-default blue'));
echo CHtml::link('Manage Mahasiswa',array('mahasiswa/admin'),array('class'=>'btn btn-default purple'));
?>
</div>
