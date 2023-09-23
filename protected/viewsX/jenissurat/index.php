<div class="portlet box red">
<div class="portlet-title">
  <div class="caption">
	<i class="fa fa-cogs"></i>Data Klasifikasi & Jenis Surat</div>
	
        
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
	$('#jenissurat-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
</div> 
    

<div class="portlet-body">
<div class="table-responsive">
<?php $this->widget('zii.widgets.grid.CGridView', array(
         'id'=>'jenissurat-grid',
	
        'dataProvider'=>$model->search(),
        'itemsCssClass' => 'table table-bordered table-striped table-hover',
        'columns'=>array(
               'NAMAJENISSURAT',
                 'IDKLASIFIKASI',
                //'iDKLASIFIKASI.NAMAKLASIFIKASI',
                array(
                    'htmlOptions'=>array('width'=>'10%'),
                    'header'=>'Nama Klasifikasi',
                    'value' =>'$data->iDKLASIFIKASI->NAMAKLASIFIKASI',
                    
                ),
                'iDJABATANSTRUKTURAL.IDJABATANSURAT',
		//'iDJABATANSTRUKTURAL.NAMAJABATANSTRUKTURAL',
		array(
                    
                    'header'=>'Pejabat Terkait',
                    'value' =>'$data->iDJABATANSTRUKTURAL->NAMAJABATANSTRUKTURAL',
                    
                ),
                array(
                    
                    'header'=>'Pemberi Paraf',
                    'value' =>'$data->iDTTD->NAMATTD',
                ),
		array(
                    'header'=>'Detail Surat',
                    'type'=>'raw',
                    'value'=>'CHtml::link("View ",array("jenissurat/detail","id"=>$data->primaryKey),array ("class"=>"btn btn-sm purple "))',
                
                        
		),
             ),
)); ?>
<div class="actions">
        <?php //echo CHtml::link('<i class="fa fa-plus"></i> Tambah',array('create'),array('class'=>'btn btn-sm blue','disabled'=>true));?>
        <?php //echo CHtml::link('Manage',array('admin'),array('class'=>'btn btn-sm blue'));?>
</div> 
    
</div>
</div>
    </div>