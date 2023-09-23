<?php
/* @var $this MatakuliahsurisuController */
/* @var $data Matakuliahsurisu */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDMATAKULIAHISU')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IDMATAKULIAHISU), array('view', 'id'=>$data->IDMATAKULIAHISU)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NAMAMATAKULIAHISU')); ?>:</b>
	<?php echo CHtml::encode($data->NAMAMATAKULIAHISU); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NIP')); ?>:</b>
	<?php echo CHtml::encode($data->NIP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDTTD')); ?>:</b>
	<?php echo CHtml::encode($data->IDTTD); ?>
	<br />


</div>