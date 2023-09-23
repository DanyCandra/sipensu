<?php
/* @var $this JenjangController */
/* @var $data Jenjang */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDJENJANG')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IDJENJANG), array('view', 'id'=>$data->IDJENJANG)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NAMAJENJANG')); ?>:</b>
	<?php echo CHtml::encode($data->NAMAJENJANG); ?>
	<br />


</div>