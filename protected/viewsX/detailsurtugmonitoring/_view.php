<?php
/* @var $this DetailsurtugmonitoringController */
/* @var $data Detailsurtugmonitoring */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDDETAILSURTUGMONITORING')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IDDETAILSURTUGMONITORING), array('view', 'id'=>$data->IDDETAILSURTUGMONITORING)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDSUBDETALSURPELPK')); ?>:</b>
	<?php echo CHtml::encode($data->IDSUBDETALSURPELPK); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDGROUPS')); ?>:</b>
	<?php echo CHtml::encode($data->IDGROUPS); ?>
	<br />


	<b><?php echo CHtml::encode($data->getAttributeLabel('TGLSUBMITSURTUGMONITORING')); ?>:</b>
	<?php echo CHtml::encode($data->TGLSUBMITSURTUGMONITORING); ?>
	<br />


</div>