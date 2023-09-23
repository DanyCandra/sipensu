<div class="portlet box red">
<div class="portlet-title">
  <div class="caption">
	<i class="fa fa-cogs"></i>Data Permintaan Surat Ijin Penelitian</div>
	
        
</div>

<div class="portlet-body">
<div class="table-responsive">
<?php


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('mahasiswa-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<?php $this->widget('zii.widgets.grid.CGridView', array(
         'id'=>'surtugns-grid',
	'dataProvider'=>$dataProvider,
        'columns'=>array(
            //'IDIJINPN',
		//'IDJENISSURAT',
		
                'NIM',
                'nIM.NAMA',
		'NOSURATIJINPN',
		'INSTANSIIJINPN',
		'ALAMATINSTANSIIJINPN',
		'KOTAINSTANSIIJINPN',
		
		'iDTASEMESTER.TAHUNAKADEMIK',
                'iDTASEMESTER.SEMESTER',
                'JUDULSKRIPSIIJINPN',
		/*
                'KETERANGANIJINPN',
		'TGLSUBMITIJINPN',
		*/
                array(
			'class'=>'CButtonColumn',
                        'template'=>'{view}',
                        'header'=>'Aksi',
                        
		)),
)); ?>
<div class="actions">
        <?php echo CHtml::link('<i class="fa fa-plus"></i> Tambah',array('create'),array('class'=>'btn btn-sm blue','disabled'=>true));?>
        <?php echo CHtml::link('Manage',array('admin'),array('class'=>'btn btn-sm blue'));?>
</div> 