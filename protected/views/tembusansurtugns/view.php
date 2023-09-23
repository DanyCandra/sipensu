<?php
/* @var $this TembusansurtugnsController */
/* @var $model Tembusansurtugns */

?>
<div class="portlet box yellow">
<div class="portlet-title">
  <div class="caption">
	<i class="fa fa-pencil-square-o"></i> View Tembusan Surat Tugas Pembicara/Narasumer #<?php echo $model->IDTEMBUSAN; ?>  </div>
</div>

<div class="portlet-body">

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
        'htmlOptions' => array('class'=> 'table table-bordered table-striped table-advance table-hover'),
	'attributes'=>array(
		'IDTEMBUSAN',
		'IDSURTUGNS',
                'iDSURTUGNS.INSTANSINS',
                'iDSURTUGNS.ALAMATINSTANSINS',
                'iDSURTUGNS.nIP.NAMA2',
                'iDSURTUGNS.TGLACARANS',
		'TUJUANTEMBUSAN',
		'TGLSUBMITTEMBUSAN',
	),
)); 
//echo CHtml::link('<i class="fa fa-plus"></i> Tambah Tembusan',array('tembusansurtugns/create','IDTEMBUSAN'=>$model->IDTEMBUSAN),array('class'=>'btn btn-sm yellow'));
echo CHtml::link('Manage Tembusan',array('tembusansurtugns/admin'),array('class'=>'btn btn-default blue'));
?>
</div>