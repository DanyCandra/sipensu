<?php
/* @var $this SurketnobeswaController */
/* @var $data Surketnobeswa */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDSURKETNOBESWA')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IDSURKETNOBESWA), array('view', 'id'=>$data->IDSURKETNOBESWA)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDJENISSURAT')); ?>:</b>
	<?php echo CHtml::encode($data->IDJENISSURAT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOSURKETNOBESWA')); ?>:</b>
	<?php echo CHtml::encode($data->NOSURKETNOBESWA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NIM')); ?>:</b>
	<?php echo CHtml::encode($data->NIM); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDTASEMESTER')); ?>:</b>
	<?php echo CHtml::encode($data->THAKADEMIKSURKETNOBESWA); ?>
	<br />

	

	<b><?php echo CHtml::encode($data->getAttributeLabel('KETERANGANSURKETNOBESWA')); ?>:</b>
	<?php echo CHtml::encode($data->KETERANGANSURKETNOBESWA); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('TGLSUBMITSURKETNOBESWA')); ?>:</b>
	<?php echo CHtml::encode($data->TGLSUBMITSURKETNOBESWA); ?>
	<br />

	*/ ?>

</div>