<?php
/* @var $this FileuploadfotoController */
/* @var $data Fileuploadfoto */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDFILEFOTO')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IDFILEFOTO), array('view', 'id'=>$data->IDFILEFOTO)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NIM')); ?>:</b>
	<?php echo CHtml::encode($data->NIM); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FILEFOTO')); ?>:</b>
	<?php echo CHtml::encode($data->FILEFOTO); ?>
	<br />


</div>