<?php
/* @var $this PemberiparafController */
/* @var $data Pemberiparaf */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDTTD')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IDTTD), array('view', 'id'=>$data->IDTTD)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NIPTTD')); ?>:</b>
	<?php echo CHtml::encode($data->NIPTTD); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NAMATTD')); ?>:</b>
	<?php echo CHtml::encode($data->NAMATTD); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('JABATANSTRUKTURALTTD')); ?>:</b>
	<?php echo CHtml::encode($data->JABATANSTRUKTURALTTD); ?>
	<br />


</div>