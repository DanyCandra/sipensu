<?php
/* @var $this DetailsurmagController */
/* @var $data Detailsurmag */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDDETAILSURMAG')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IDDETAILSURMAG), array('view', 'id'=>$data->IDDETAILSURMAG)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDSURMAG')); ?>:</b>
	<?php echo CHtml::encode($data->IDSURMAG); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDGROUPS')); ?>:</b>
	<?php echo CHtml::encode($data->IDGROUPS); ?>
	<br />


	<b><?php echo CHtml::encode($data->getAttributeLabel('TGLSUBMITDETAILSURMAG')); ?>:</b>
	<?php echo CHtml::encode($data->TGLSUBMITDETAILSURMAG); ?>
	<br />


</div>