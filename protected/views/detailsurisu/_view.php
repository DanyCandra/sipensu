<?php
/* @var $this DetailsurisuController */
/* @var $data Detailsurisu */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDDETAILSURISU')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IDDETAILSURISU), array('view', 'id'=>$data->IDDETAILSURISU)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDISU')); ?>:</b>
	<?php echo CHtml::encode($data->IDISU); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDGROUPS')); ?>:</b>
	<?php echo CHtml::encode($data->IDGROUPS); ?>
	<br />



	<b><?php echo CHtml::encode($data->getAttributeLabel('TGLSUBMITDETAILSURISU')); ?>:</b>
	<?php echo CHtml::encode($data->TGLSUBMITDETAILSURISU); ?>
	<br />


</div>