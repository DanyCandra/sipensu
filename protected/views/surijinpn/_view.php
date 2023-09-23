<?php
/* @var $this SurijinpnController */
/* @var $data Surijinpn */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDIJINPN')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IDIJINPN), array('view', 'id'=>$data->IDIJINPN)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDJENISSURAT')); ?>:</b>
	<?php echo CHtml::encode($data->IDJENISSURAT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NIM')); ?>:</b>
	<?php echo CHtml::encode($data->NIM); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOSURATIJINPN')); ?>:</b>
	<?php echo CHtml::encode($data->NOSURATIJINPN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('INSTANSIIJINPN')); ?>:</b>
	<?php echo CHtml::encode($data->INSTANSIIJINPN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ALAMATINSTANSIIJINPN')); ?>:</b>
	<?php echo CHtml::encode($data->ALAMATINSTANSIIJINPN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('KOTAINSTANSIIJINPN')); ?>:</b>
	<?php echo CHtml::encode($data->KOTAINSTANSIIJINPN); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('IDTASEMESTER')); ?>:</b>
	<?php echo CHtml::encode($data->SEMESTER); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('KETERANGANIJINPN')); ?>:</b>
	<?php echo CHtml::encode($data->KETERANGANIJINPN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TGLSUBMITIJINPN')); ?>:</b>
	<?php echo CHtml::encode($data->TGLSUBMITIJINPN); ?>
	<br />

	*/ ?>

</div>