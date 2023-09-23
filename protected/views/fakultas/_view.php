<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDFAKULTAS')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IDFAKULTAS), array('view', 'id'=>$data->IDFAKULTAS)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FAKULTAS')); ?>:</b>
	<?php echo CHtml::encode($data->FAKULTAS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ALAMATFAKULTAS')); ?>:</b>
	<?php echo CHtml::encode($data->ALAMATFAKULTAS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('WEBSITE')); ?>:</b>
	<?php echo CHtml::encode($data->WEBSITE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EMAIL')); ?>:</b>
	<?php echo CHtml::encode($data->EMAIL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TLPFAKULTAS')); ?>:</b>
	<?php echo CHtml::encode($data->TLPFAKULTAS); ?>
	<br />


</div>