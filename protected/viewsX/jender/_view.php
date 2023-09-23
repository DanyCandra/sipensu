<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDJENDER')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IDJENDER), array('view', 'id'=>$data->IDJENDER)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NAMAJENDER')); ?>:</b>
	<?php echo CHtml::encode($data->NAMAJENDER); ?>
	<br />


</div>