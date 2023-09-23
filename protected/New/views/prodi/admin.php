
<div class="portlet box yellow">
<div class="portlet-title">
  <div class="caption">
	<i class="fa fa-cogs"></i> Manage Prodi  </div>
    <div class="actions">
        <?php echo CHtml::link('<i class="fa fa-plus"></i> Tambah',array('create'),array('class'=>'btn btn-sm blue'));?>    </div>  
</div>
<div class="portlet-body">
<div class="table-responsive">
<?php
/* @var $this ProdiController */
/* @var $model Prodi */
Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#prodi-grid').yiiGridView('update', {
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

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'prodi-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'itemsCssClass' => 'table table-bordered table-striped table-advance table-hover',
	'columns'=>array(
		'IDPRODI',
                'KODEPRODI',
                //'KODEPRODIUNSOED',
                'iDJENJANG.NAMAJENJANG',
		'iDFAKULTAS.FAKULTAS',
		'NAMAPRODI',
                'ISAKTIF',
                //'KODEPRODILAMA',
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
