<?php
/* @var $this BeritaController */
/* @var $model Berita */

?>
<div class="portlet box blue">
<div class="portlet-title">
  <div class="caption">
	<i class="fa fa-pencil-square-o"></i> View Berita/Informasi #<?php echo $model->IDBERITA; ?>  </div>
</div>

<div class="portlet-body">

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions' => array('class'=> 'table table-bordered table-striped table-advance table-hover'),
	'attributes'=>array(
		'IDBERITA',
		'IDKATEGORI',
		'JUDUL',
		'ISI',
		'ISPUBLISH',
		'FILEIMAGE',
		'HIT',
		'TGLSUBMIT',
		'SUMMARY',
	),
)); 

//echo CHtml::link('Manage ',array('berita/admin'),array('class'=>'btn btn-default blue'));
?>
</div>