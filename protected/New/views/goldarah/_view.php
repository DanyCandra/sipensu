<?php
/* @var $this GoldarahController */
/* @var $data Goldarah */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDGOLDAR')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IDGOLDAR), array('view', 'id'=>$data->IDGOLDAR)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NAMAGOLDAR')); ?>:</b>
	<?php echo CHtml::encode($data->NAMAGOLDAR); ?>
	<br />


</div>