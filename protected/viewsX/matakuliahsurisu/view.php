<div class="portlet box yellow">
<div class="portlet-title">
  <div class="caption">
	<i class="fa fa-pencil-square-o"></i> View Syarat Mata  Kuliah Ijin Survei #<?php echo $model->IDMATAKULIAHISU; ?>  </div>
</div>

<div class="portlet-body">
    
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions' => array('class'=> 'table table-bordered table-striped table-advance table-hover'),
	'attributes'=>array(
		'IDMATAKULIAHISU',
		'NAMAMATAKULIAHISU',
                 array(
                    'filter'=>'',
                    'label'=>'NIP Pengampu MK',
                    'value' =>($model->NIP),
                    
                ),
                array(
                    'filter'=>'',
                    'label'=>'Dosen Pengampu MK',
                    'value' =>($model->nIP->NAMA2),
                    
                ),
                array(
                    'filter'=>'',
                    'label'=>'Kode Penanggung Jawab Survei',
                    'value' =>($model->IDTTD),
                    
                ),
		//'IDTTD',
                array(
                    'filter'=>'',
                    'label'=>'Penanggung Jawab Survei',
                    'value' =>($model->iDTTD->NAMATTD),
                    
                ),
            
                 'iDTTD.NIPTTD',
                 'iDTTD.JABATANSTRUKTURALTTD',
	),
));

//echo CHtml::link('<i class="fa fa-plus"></i> Tambah Mata Kuliah',array('matakuliahsurisu/create','IDMATAKULIAHISU'=>$model->IDMATAKULIAHISU),array('class'=>'btn btn-sm yellow'));
echo CHtml::link('Manage Mata Kuliah',array('matakuliahsurisu/admin'),array('class'=>'btn btn-default blue'));
?>
</div>
