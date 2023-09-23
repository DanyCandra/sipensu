<?php
/* @var $this DetailsurperpkController */
/* @var $data Detailsurperpk */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDDETAILSURPERPK')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IDDETAILSURPERPK), array('view', 'id'=>$data->IDDETAILSURPERPK)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDPK')); ?>:</b>
	<?php echo CHtml::encode($data->IDPK); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDGROUPS')); ?>:</b>
	<?php echo CHtml::encode($data->IDGROUPS); ?>
	<br />

	

	<b><?php echo CHtml::encode($data->getAttributeLabel('TGLSUBMITDETAILSURPERPK')); ?>:</b>
	<?php echo CHtml::encode($data->TGLSUBMITDETAILSURPERPK); ?>
	<br />


</div>