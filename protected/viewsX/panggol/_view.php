<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDPANGGOL')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IDPANGGOL), array('view', 'id'=>$data->IDPANGGOL)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PANGKAT')); ?>:</b>
	<?php echo CHtml::encode($data->PANGKAT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('GOL')); ?>:</b>
	<?php echo CHtml::encode($data->GOL); ?>
	<br />


</div>