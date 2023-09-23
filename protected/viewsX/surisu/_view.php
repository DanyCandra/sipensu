<?php
/* @var $this SurisuController */
/* @var $data Surisu */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDISU')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IDISU), array('view', 'id'=>$data->IDISU)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDJENISSURAT')); ?>:</b>
	<?php echo CHtml::encode($data->IDJENISSURAT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOISU')); ?>:</b>
	<?php echo CHtml::encode($data->NOISU); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('INSTANSIISU')); ?>:</b>
	<?php echo CHtml::encode($data->INSTANSIISU); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ALAMATINSTANSIISU')); ?>:</b>
	<?php echo CHtml::encode($data->ALAMATINSTANSIISU); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('KOTAINSTANSIISU')); ?>:</b>
	<?php echo CHtml::encode($data->KOTAINSTANSIISU); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDTASEMESTER')); ?>:</b>
	<?php echo CHtml::encode($data->IDTASEMESTERISU); ?>
	<br />

	<?php /*
	

	<b><?php echo CHtml::encode($data->getAttributeLabel('KETERANGANISU')); ?>:</b>
	<?php echo CHtml::encode($data->KETERANGANISU); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TGLSUBMITISU')); ?>:</b>
	<?php echo CHtml::encode($data->TGLSUBMITISU); ?>
	<br />

	*/ ?>

</div>