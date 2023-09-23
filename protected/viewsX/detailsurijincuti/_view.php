<?php
/* @var $this DetailsurijincutiController */
/* @var $data Detailsurijincuti */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDDETAILSURIJINCUTI')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IDDETAILSURIJINCUTI), array('view', 'id'=>$data->IDDETAILSURIJINCUTI)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDIJINCUTI')); ?>:</b>
	<?php echo CHtml::encode($data->IDIJINCUTI); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDGROUPS')); ?>:</b>
	<?php echo CHtml::encode($data->IDGROUPS); ?>
	<br />

	

	<b><?php echo CHtml::encode($data->getAttributeLabel('TGLSUBMITDETAILSURIJINCUTI')); ?>:</b>
	<?php echo CHtml::encode($data->TGLSUBMITDETAILSURIJINCUTI); ?>
	<br />


</div>