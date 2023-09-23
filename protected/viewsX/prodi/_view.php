<?php
/* @var $this ProdiController */
/* @var $data Prodi */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDPRODI')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IDPRODI), array('view', 'id'=>$data->IDPRODI)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDJENJANG')); ?>:</b>
	<?php echo CHtml::encode($data->IDJENJANG); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDFAKULTAS')); ?>:</b>
	<?php echo CHtml::encode($data->IDFAKULTAS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NAMAPRODI')); ?>:</b>
	<?php echo CHtml::encode($data->NAMAPRODI); ?>
	<br />


</div>