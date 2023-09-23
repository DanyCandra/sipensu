<?php
/* @var $this SuraktifcutiController */
/* @var $data Suraktifcuti */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDAKTIFCUTI')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IDAKTIFCUTI), array('view', 'id'=>$data->IDAKTIFCUTI)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDIJINCUTI')); ?>:</b>
	<?php echo CHtml::encode($data->IDIJINCUTI); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOSURATIJINAKTIFCUTI')); ?>:</b>
	<?php echo CHtml::encode($data->NOSURATIJINAKTIFCUTI); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SEMESTER')); ?>:</b>
	<?php echo CHtml::encode($data->SEMESTERAKTIFCUTI); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TAHUNAKADEMIK')); ?>:</b>
	<?php echo CHtml::encode($data->THAKADEMIKAKTIFCUTI); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('KETERANGANAKTIFCUTI')); ?>:</b>
	<?php echo CHtml::encode($data->KETERANGANAKTIFCUTI); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('STATUS')); ?>:</b>
	<?php echo CHtml::encode($data->STATUS); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('NIP')); ?>:</b>
	<?php echo CHtml::encode($data->NIP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TGLSUBMITAKTIFCUTI')); ?>:</b>
	<?php echo CHtml::encode($data->TGLSUBMITAKTIFCUTI); ?>
	<br />

	*/ ?>

</div>