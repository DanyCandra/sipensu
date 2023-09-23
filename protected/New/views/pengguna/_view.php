<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDPENGGUNA')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IDPENGGUNA), array('view', 'id'=>$data->IDPENGGUNA)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDGROUPS')); ?>:</b>
	<?php echo CHtml::encode($data->IDGROUPS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USERNAME')); ?>:</b>
	<?php echo CHtml::encode($data->USERNAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PASS')); ?>:</b>
	<?php echo CHtml::encode($data->PASS); ?>
	<br />


</div>