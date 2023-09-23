<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDJABATANSTRUKTURAL')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IDJABATANSTRUKTURAL), array('view', 'id'=>$data->IDJABATANSTRUKTURAL)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NIP')); ?>:</b>
	<?php echo CHtml::encode($data->NIP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NAMAJABATANSTRUKTURAL')); ?>:</b>
	<?php echo CHtml::encode($data->NAMAJABATANSTRUKTURAL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TAHUN')); ?>:</b>
	<?php echo CHtml::encode($data->TAHUN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOURUTJABATANSTRUKTURAL')); ?>:</b>
	<?php echo CHtml::encode($data->NOURUTJABATANSTRUKTURAL); ?>
	<br />


</div>