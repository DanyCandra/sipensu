<?php
/* @var $this DetailaktifcutiController */
/* @var $data Detailaktifcuti */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDDETAILSURAKTIFCUTI')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IDDETAILSURAKTIFCUTI), array('view', 'id'=>$data->IDDETAILSURAKTIFCUTI)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDAKTIFCUTI')); ?>:</b>
	<?php echo CHtml::encode($data->IDAKTIFCUTI); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDGROUPS')); ?>:</b>
	<?php echo CHtml::encode($data->IDGROUPS); ?>
	<br />

	

	<b><?php echo CHtml::encode($data->getAttributeLabel('TGLSUBMITDETAILSURAKTIFCUTI')); ?>:</b>
	<?php echo CHtml::encode($data->TGLSUBMITDETAILSURAKTIFCUTI); ?>
	<br />


</div>