<?php
/* @var $this GroupsurpelpkController */
/* @var $data Groupsurpelpk */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDGROUPSURPELPK')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IDGROUPSURPELPK), array('view', 'id'=>$data->IDGROUPSURPELPK)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDPK')); ?>:</b>
	<?php echo CHtml::encode($data->IDPK); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NIM')); ?>:</b>
	<?php echo CHtml::encode($data->NIM); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOURUTSURPELPK')); ?>:</b>
	<?php echo CHtml::encode($data->NOURUTSURPELPK); ?>
	<br />


</div>