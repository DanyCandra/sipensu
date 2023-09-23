<div class="portlet box yellow">
<div class="portlet-title">
  <div class="caption">
	<i class="fa fa-cogs"></i> Manage Foto Mahasiswa  </div>
    <div class="actions">
        <?php echo CHtml::link('<i class="fa fa-plus"></i> Tambah',array('create'),array('class'=>'btn btn-sm blue'));?>    </div>  
</div>
<div class="portlet-body">
<div class="table-responsive">
<?php
/* @var $this FileuploadfotoController */
/* @var $model Fileuploadfoto */
Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#fileuploadfoto-grid').yiiGridView('update', {
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
	'id'=>'fileuploadfoto-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'itemsCssClass' => 'table table-bordered table-striped table-advance table-hover',
	'columns'=>array(
		'IDFILEFOTO',
		'NIM',
                'nIM.NAMA',
		//'FILEFOTO',
                  array (
                        'name'=>'FILEFOTO',
                        'type'=>'raw',
                        'header'=>'Nama File Foto',
                        'value'=>'CHtml::encode($data->FILEFOTO)',
                        'htmlOptions'=>array('width'=>'30%'),
                ),
                  array(
                        'header'=>'File',
                        'type'=>'raw',
                        'value'=>'CHtml::link("Unduh",array("fileuploadfoto/unduh","id"=>$data->IDFILEFOTO),array("class"=>"btn btn-sm yellow"))',  
                ),
		array(
			'class'=>'CButtonColumn',
			'htmlOptions' => array(
                        'style' => 'width:75px;text-align:center;'
                    )
                    ),
	),
)); ?>
</div>
</div>
</div>