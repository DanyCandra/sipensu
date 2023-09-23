<?php
/* @var $this TembusansurtugnsController */
/* @var $data Tembusansurtugns */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDTEMBUSAN')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IDTEMBUSAN), array('view', 'id'=>$data->IDTEMBUSAN)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDSURTUGNS')); ?>:</b>
	<?php echo CHtml::encode($data->IDSURTUGNS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TUJUANTEMBUSAN')); ?>:</b>
	<?php echo CHtml::encode($data->TUJUANTEMBUSAN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TGLSUBMITTEMBUSAN')); ?>:</b>
	<?php echo CHtml::encode($data->TGLSUBMITTEMBUSAN); ?>
	<br />


</div>