<?php
/* @var $this DetailpermintaansurtugpnController */
/* @var $model Detailpermintaansurtugpn */

$this->breadcrumbs=array(
	'Detailpermintaansurtugpns'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Detailpermintaansurtugpn', 'url'=>array('index')),
	array('label'=>'Create Detailpermintaansurtugpn', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#detailpermintaansurtugpn-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Detailpermintaansurtugpns</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Pencarian','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'detailpermintaansurtugpn-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'IDDETAILPERMINTAANSURTUGPN',
		'IDPN',
		'IDGROUPPN',
		'IDGROUPINSTANSIPN',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
