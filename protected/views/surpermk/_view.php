<?php
/* @var $this SurpermkController */
/* @var $data Surpermk */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDMK')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IDMK), array('view', 'id'=>$data->IDMK)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDJENISSURAT')); ?>:</b>
	<?php echo CHtml::encode($data->IDJENISSURAT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOSURATMK')); ?>:</b>
	<?php echo CHtml::encode($data->NOSURATMK); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NIM')); ?>:</b>
	<?php echo CHtml::encode($data->NIM); ?>
	<br />

	

	<b><?php echo CHtml::encode($data->getAttributeLabel('NAMAWALIMK')); ?>:</b>
	<?php echo CHtml::encode($data->NAMAWALIMK); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NIPWALIMK')); ?>:</b>
	<?php echo CHtml::encode($data->NIPWALIMK); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('IDPANGGOL')); ?>:</b>
	<?php echo CHtml::encode($data->IDPANGGOL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('INSTANSIWALIMK')); ?>:</b>
	<?php echo CHtml::encode($data->INSTANSIWALIMK); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TGLSUBMITMK')); ?>:</b>
	<?php echo CHtml::encode($data->TGLSUBMITMK); ?>
	<br />

	*/ ?>

</div>