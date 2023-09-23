<?php
/* @var $this SuratketeranganController */
/* @var $data Suratketerangan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDSURKET')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IDSURKET), array('view', 'id'=>$data->IDSURKET)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDJENISSURAT')); ?>:</b>
	<?php echo CHtml::encode($data->IDJENISSURAT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDTASEMESTER')); ?>:</b>
	<?php echo CHtml::encode($data->IDTASEMESTER); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOSURKET')); ?>:</b>
	<?php echo CHtml::encode($data->NOSURKET); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NIM')); ?>:</b>
	<?php echo CHtml::encode($data->NIM); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PERIHAL1')); ?>:</b>
	<?php echo CHtml::encode($data->PERIHAL1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PERIHAL2')); ?>:</b>
	<?php echo CHtml::encode($data->PERIHAL2); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('KETERANGANSURKET')); ?>:</b>
	<?php echo CHtml::encode($data->KETERANGANSURKET); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TGLCETAKSURKET')); ?>:</b>
	<?php echo CHtml::encode($data->TGLCETAKSURKET); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TGLSUBMITSURKET')); ?>:</b>
	<?php echo CHtml::encode($data->TGLSUBMITSURKET); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ACCSURKET')); ?>:</b>
	<?php echo CHtml::encode($data->ACCSURKET); ?>
	<br />

	

	*/ ?>

</div>