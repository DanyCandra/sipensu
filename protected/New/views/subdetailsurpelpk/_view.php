<?php
/* @var $this SubdetailsurpelpkController */
/* @var $data Subdetailsurpelpk */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDSUBDETAILSURPELPK')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IDSUBDETAILSURPELPK), array('view', 'id'=>$data->IDSUBDETAILSURPELPK)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDPK')); ?>:</b>
	<?php echo CHtml::encode($data->IDPK); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDJENISSURAT')); ?>:</b>
	<?php echo CHtml::encode($data->IDJENISSURAT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOSURPELPK')); ?>:</b>
	<?php echo CHtml::encode($data->NOSURPELPK); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TGLMULAISURPELPK')); ?>:</b>
	<?php echo CHtml::encode($data->TGLMULAISURPELPK); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TGLAKHIRSURPELPK')); ?>:</b>
	<?php echo CHtml::encode($data->TGLAKHIRSURPELPK); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('KETERANGANSUBDETAILSURPELPK')); ?>:</b>
	<?php echo CHtml::encode($data->KETERANGANSUBDETAILSURPELPK); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('TGLSUBMITSUBDETAILSURPELPK')); ?>:</b>
	<?php echo CHtml::encode($data->TGLSUBMITSUBDETAILSURPELPK); ?>
	<br />

	*/ ?>

</div>