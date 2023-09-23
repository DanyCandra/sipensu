<div class="portlet box red">
<div class="portlet-title">
  <div class="caption">
	<i class="fa fa-cogs"></i>Data Detail Srt.Ijin Penelitian </div>
	
        
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
         'id'=>'detailsurtugns-grid',
	'dataProvider'=>$dataProvider,
        'columns'=>array(
            //'IDDETAILSURIJINPN',
		'iDIJINPN.NOSURATIJINPN',
                'iDIJINPN.nIM.NIM',
                'iDIJINPN.nIM.NAMA',
                'iDIJINPN.INSTANSIIJINPN',
                'iDIJINPN.ALAMATINSTANSIIJINPN',
                'iDIJINPN.KOTAINSTANSIIJINPN',
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
    
</div>
</div>
