<?php
/* @var $this MahasiswaController */
/* @var $model Mahasiswa */

?>
<div class="portlet box yellow">
<div class="portlet-title">
  <div class="caption">
	<i class="fa fa-pencil-square-o"></i> View Mahasiswa #<?php echo $model->NIM; ?>  </div>
</div>

<div class="portlet-body">
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions' => array('class'=> 'table table-bordered table-striped table-advance table-hover'),
	'attributes'=>array(
		'NIM',
		'NAMA',
		'TEMPATLAHIR',
		'TGLLAHIR',
		'NOHP',
		'EMAIL',
		'ALAMATASAL',
		'NAMAAYAH',
		'NAMAIBU',
		'PENGHASILANAYAH',
		'PENGHASILANIBU',
		'JMLTANGGUNGAN',
		'NAMAKABUPATEN',
		'NAMAPROPINSI',
		'TAHUNANGKATAN',
		'iDAGAMA.NAMAAGAMA',
		'iDPRODI.NAMAPRODI',
		'iDGOLDAR.NAMAGOLDAR',
		'iDJENDER.NAMAJENDER',
           array(
                    'type'=>'raw',
                    'value'=>  
                               CHtml::link('List Permintaan Surat  <i class="fa fa-search"></i>',array('surketnobeswa/admin'),array('class'=>'btn green ')),
                              
                              )
	),
)); ?>
</div>
