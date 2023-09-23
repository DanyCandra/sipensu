<?php
/* @var $this DetailsurpermkController */
/* @var $data Detailsurpermk */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDDETAILSURPERMK')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IDDETAILSURPERMK), array('view', 'id'=>$data->IDDETAILSURPERMK)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDMK')); ?>:</b>
	<?php echo CHtml::encode($data->IDMK); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDGROUPS')); ?>:</b>
	<?php echo CHtml::encode($data->IDGROUPS); ?>
	<br />

	
	<b><?php echo CHtml::encode($data->getAttributeLabel('KETERANGANSURPERMK')); ?>:</b>
	<?php echo CHtml::encode($data->KETERANGANSURPERMK); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TGLSUBMITDETAILSURPERMK')); ?>:</b>
	<?php echo CHtml::encode($data->TGLSUBMITDETAILSURPERMK); ?>
	<br />


</div>