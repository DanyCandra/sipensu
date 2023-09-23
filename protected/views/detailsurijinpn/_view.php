<?php
/* @var $this DetailsurijinpnController */
/* @var $data Detailsurijinpn */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDDETAILSURIJINPN')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IDDETAILSURIJINPN), array('view', 'id'=>$data->IDDETAILSURIJINPN)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDIJINPN')); ?>:</b>
	<?php echo CHtml::encode($data->IDIJINPN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDGROUPS')); ?>:</b>
	<?php echo CHtml::encode($data->IDGROUPS); ?>
	<br />

	

	<b><?php echo CHtml::encode($data->getAttributeLabel('TGLSUBMITDETAILSURIJINPN')); ?>:</b>
	<?php echo CHtml::encode($data->TGLSUBMITDETAILSURIJINPN); ?>
	<br />


</div>