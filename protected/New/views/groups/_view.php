<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDGROUPS')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IDGROUPS), array('view', 'id'=>$data->IDGROUPS)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NAMAGROUPS')); ?>:</b>
	<?php echo CHtml::encode($data->NAMAGROUPS); ?>
	<br />


</div>