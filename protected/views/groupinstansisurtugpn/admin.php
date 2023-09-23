<?php
/* @var $this GroupinstansisurtugpnController */
/* @var $model Groupinstansisurtugpn */

$this->breadcrumbs=array(
	'Groupinstansisurtugpns'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Groupinstansisurtugpn', 'url'=>array('index')),
	array('label'=>'Create Groupinstansisurtugpn', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#groupinstansisurtugpn-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Groupinstansisurtugpns</h1>



<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'groupinstansisurtugpn-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'IDGROUPINSTANSIPN',
		'INSTANSIPN',
		'ALAMATINSTANSIPN',
		'KOTAINSTANSIPN',
		'NOURUTINSTANSIPN',
		'IDPN',
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
