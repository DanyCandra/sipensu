<?php
/* @var $this DetailsurpelpkController */
/* @var $data Detailsurpelpk */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDDETAILSURPELPK')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IDDETAILSURPELPK), array('view', 'id'=>$data->IDDETAILSURPELPK)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDPK')); ?>:</b>
	<?php echo CHtml::encode($data->IDPK); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDGROUPS')); ?>:</b>
	<?php echo CHtml::encode($data->IDGROUPS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ACCDETAILSURPELPK')); ?>:</b>
	<?php echo CHtml::encode($data->ACCDETAILSURPELPK); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TGLSUBMITDETAILSURPELPK')); ?>:</b>
	<?php echo CHtml::encode($data->TGLSUBMITDETAILSURPELPK); ?>
	<br />


</div>