<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<div class="portlet box red">
<div class="portlet-title">
  <div class="caption">
	<i class="fa fa-cogs"></i> Manage <?php echo $this->pluralize($this->class2name($this->modelClass)); ?>
  </div>
    <div class="actions">
        <?php echo "<?php echo CHtml::link('<i class=\"fa fa-plus\"></i> Tambah',array('create'),array('class'=>'btn btn-sm blue'));?>"  ;?>
    </div>  
</div>

<div class="portlet-body">
<div class="table-responsive">
<?php echo "<?php"; ?> $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'<?php echo $this->class2id($this->modelClass); ?>-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'itemsCssClass' => 'table table-bordered table-striped table-advance table-hover',
	'columns'=>array(
<?php
$count=0;
foreach($this->tableSchema->columns as $column)
{
	if(++$count==7)
		echo "\t\t/*\n";
	echo "\t\t'".$column->name."',\n";
}
if($count>=7)
	echo "\t\t*/\n";
?>
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