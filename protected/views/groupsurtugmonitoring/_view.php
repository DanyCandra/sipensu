<?php
/* @var $this GroupsurtugmonitoringController */
/* @var $data Groupsurtugmonitoring */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDGROUPSURTUGMONITORING')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IDGROUPSURTUGMONITORING), array('view', 'id'=>$data->IDGROUPSURTUGMONITORING)); ?>
	<br />

	

	<b><?php echo CHtml::encode($data->getAttributeLabel('NIM')); ?>:</b>
	<?php echo CHtml::encode($data->NIM); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOURUTSURTUGMONITORING')); ?>:</b>
	<?php echo CHtml::encode($data->NOURUTSURTUGMONITORING); ?>
	<br />


</div>