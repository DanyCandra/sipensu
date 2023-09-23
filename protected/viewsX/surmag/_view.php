<?php
/* @var $this SurmagController */
/* @var $data Surmag */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDSURMAG')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IDSURMAG), array('view', 'id'=>$data->IDSURMAG)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDJENISSURAT')); ?>:</b>
	<?php echo CHtml::encode($data->IDJENISSURAT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOSURMAG')); ?>:</b>
	<?php echo CHtml::encode($data->NOSURMAG); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('INSTANSISURMAG')); ?>:</b>
	<?php echo CHtml::encode($data->INSTANSISURMAG); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ALAMATINSTANSISURMAG')); ?>:</b>
	<?php echo CHtml::encode($data->ALAMATINSTANSISURMAG); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SEMESTERSURMAG')); ?>:</b>
	<?php echo CHtml::encode($data->SEMESTERSURMAG); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('THAKADEMIKSURMAG')); ?>:</b>
	<?php echo CHtml::encode($data->THAKADEMIKSURMAG); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('KETERANGANSURMAG')); ?>:</b>
	<?php echo CHtml::encode($data->KETERANGANSURMAG); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TGLSUBMITSURMAG')); ?>:</b>
	<?php echo CHtml::encode($data->TGLSUBMITSURMAG); ?>
	<br />

	*/ ?>

</div>