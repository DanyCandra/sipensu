<?php
/* @var $this SurtugmonitoringController */
/* @var $data Surtugmonitoring */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDSURTUGMONITORING')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IDSURTUGMONITORING), array('view', 'id'=>$data->IDSURTUGMONITORING)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDSUBDETAILSURPELPK')); ?>:</b>
	<?php echo CHtml::encode($data->IDSUBDETAILSURPELPK); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDJENISSURAT')); ?>:</b>
	<?php echo CHtml::encode($data->IDJENISSURAT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOSURTUGMONITORING')); ?>:</b>
	<?php echo CHtml::encode($data->NOSURTUGMONITORING); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('KETERANGANSURTUGMONITORING')); ?>:</b>
	<?php echo CHtml::encode($data->KETERANGANSURTUGMONITORING); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TGLSUBMITSURTUGMONITORING')); ?>:</b>
	<?php echo CHtml::encode($data->TGLSUBMITSURTUGMONITORING); ?>
	<br />


</div>