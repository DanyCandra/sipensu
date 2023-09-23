<?php
/* @var $this GroupsurperpkController */
/* @var $data Groupsurperpk */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDGROUPSURPERPK')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IDGROUPSURPERPK), array('view', 'id'=>$data->IDGROUPSURPERPK)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDPK')); ?>:</b>
	<?php echo CHtml::encode($data->IDPK); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NIM')); ?>:</b>
	<?php echo CHtml::encode($data->NIM); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOURUTSURPERPK')); ?>:</b>
	<?php echo CHtml::encode($data->NOURUTSURPERPK); ?>
	<br />


</div>