<?php
/* @var $this DetailsuratketeranganController */
/* @var $data Detailsuratketerangan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDDETAILSURKET')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IDDETAILSURKET), array('view', 'id'=>$data->IDDETAILSURKET)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDSURKET')); ?>:</b>
	<?php echo CHtml::encode($data->IDSURKET); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDGROUPS')); ?>:</b>
	<?php echo CHtml::encode($data->IDGROUPS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TGLSUBMITDETAILSURKET')); ?>:</b>
	<?php echo CHtml::encode($data->TGLSUBMITDETAILSURKET); ?>
	<br />


</div>