<?php
/* @var $this SurijincutiController */
/* @var $data Surijincuti */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDIJINCUTI')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IDIJINCUTI), array('view', 'id'=>$data->IDIJINCUTI)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDJENISSURAT')); ?>:</b>
	<?php echo CHtml::encode($data->IDJENISSURAT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOSURATIJINCUTI')); ?>:</b>
	<?php echo CHtml::encode($data->NOSURATIJINCUTI); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NIM')); ?>:</b>
	<?php echo CHtml::encode($data->NIM); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LAMAIJINCUTI')); ?>:</b>
	<?php echo CHtml::encode($data->LAMAIJINCUTI); ?>
	<br />

	

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('SKSCAPAI')); ?>:</b>
	<?php echo CHtml::encode($data->SKSCAPAI); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IPKCAPAI')); ?>:</b>
	<?php echo CHtml::encode($data->IPKCAPAI); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('KETERANGANIJINCUTI')); ?>:</b>
	<?php echo CHtml::encode($data->KETERANGANIJINCUTI); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('STATUSTERKINI')); ?>:</b>
	<?php echo CHtml::encode($data->STATUSTERKINI); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TGLSUBMITIJINCUTI')); ?>:</b>
	<?php echo CHtml::encode($data->TGLSUBMITIJINCUTI); ?>
	<br />

	*/ ?>

</div>