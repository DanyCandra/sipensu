<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDPN')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IDPN), array('view', 'id'=>$data->IDPN)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDJENISSURAT')); ?>:</b>
	<?php echo CHtml::encode($data->IDJENISSURAT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOSURATPN')); ?>:</b>
	<?php echo CHtml::encode($data->NOSURATPN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('JUDULPN')); ?>:</b>
	<?php echo CHtml::encode($data->JUDULPN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('WAKTUDATAPN')); ?>:</b>
	<?php echo CHtml::encode($data->WAKTUDATAPN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TGLSUBMITPN')); ?>:</b>
	<?php echo CHtml::encode($data->TGLSUBMITPN); ?>
	<br />


</div>