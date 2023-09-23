<?php
/* @var $this AgamaController */
/* @var $data Agama */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDAGAMA')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IDAGAMA), array('view', 'id'=>$data->IDAGAMA)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NAMAAGAMA')); ?>:</b>
	<?php echo CHtml::encode($data->NAMAAGAMA); ?>
	<br />


</div>