<?php
/* @var $this GroupsurmagController */
/* @var $data Groupsurmag */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDGROUPSURMAG')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IDGROUPSURMAG), array('view', 'id'=>$data->IDGROUPSURMAG)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDSURMAG')); ?>:</b>
	<?php echo CHtml::encode($data->IDSURMAG); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NIM')); ?>:</b>
	<?php echo CHtml::encode($data->NIM); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOURUTGROUPSURMAG')); ?>:</b>
	<?php echo CHtml::encode($data->NOURUTGROUPSURMAG); ?>
	<br />


</div>