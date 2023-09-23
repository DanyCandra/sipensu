<?php
/* @var $this KategoriberitaController */
/* @var $data Kategoriberita */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDKATEGORI')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IDKATEGORI), array('view', 'id'=>$data->IDKATEGORI)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NAMAKATEGORI')); ?>:</b>
	<?php echo CHtml::encode($data->NAMAKATEGORI); ?>
	<br />


</div>