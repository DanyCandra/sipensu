<?php
/* @var $this GroupsurisuController */
/* @var $data Groupsurisu */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDGROUPSURISU')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IDGROUPSURISU), array('view', 'id'=>$data->IDGROUPSURISU)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDISU')); ?>:</b>
	<?php echo CHtml::encode($data->IDISU); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NIM')); ?>:</b>
	<?php echo CHtml::encode($data->NIM); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOURUTGROUPSURISU')); ?>:</b>
	<?php echo CHtml::encode($data->NOURUTGROUPSURISU); ?>
	<br />


</div>