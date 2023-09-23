<?php
/* @var $this DetailsurketnobeswaController */
/* @var $data Detailsurketnobeswa */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDDETAILSURKETNOBESWA')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IDDETAILSURKETNOBESWA), array('view', 'id'=>$data->IDDETAILSURKETNOBESWA)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDSURKETNOBESWA')); ?>:</b>
	<?php echo CHtml::encode($data->IDSURKETNOBESWA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDGROUPS')); ?>:</b>
	<?php echo CHtml::encode($data->IDGROUPS); ?>
	<br />


	<b><?php echo CHtml::encode($data->getAttributeLabel('TGLSUBMITDETAILSURKETNOBESWA')); ?>:</b>
	<?php echo CHtml::encode($data->TGLSUBMITDETAILSURKETNOBESWA); ?>
	<br />


</div>