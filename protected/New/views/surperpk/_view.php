<?php
/* @var $this SurperpkController */
/* @var $data Surperpk */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDPK')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IDPK), array('view', 'id'=>$data->IDPK)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDJENISSURAT')); ?>:</b>
	<?php echo CHtml::encode($data->IDJENISSURAT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOSURATPK')); ?>:</b>
	<?php echo CHtml::encode($data->NOSURATPK); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('INSTANSIPK')); ?>:</b>
	<?php echo CHtml::encode($data->INSTANSIPK); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ALAMATINSTANSIPK')); ?>:</b>
	<?php echo CHtml::encode($data->ALAMATINSTANSIPK); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('KOTAINSTANSIPK')); ?>:</b>
	<?php echo CHtml::encode($data->KOTAINSTANSIPK); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('KETERANGANPK')); ?>:</b>
	<?php echo CHtml::encode($data->KETERANGANPK); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('TGLSUBMITPK')); ?>:</b>
	<?php echo CHtml::encode($data->TGLSUBMITPK); ?>
	<br />

	*/ ?>

</div>