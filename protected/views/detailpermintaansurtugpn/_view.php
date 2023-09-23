<?php
/* @var $this DetailpermintaansurtugpnController */
/* @var $data Detailpermintaansurtugpn */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDDETAILPERMINTAANSURTUGPN')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IDDETAILPERMINTAANSURTUGPN), array('view', 'id'=>$data->IDDETAILPERMINTAANSURTUGPN)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDPN')); ?>:</b>
	<?php echo CHtml::encode($data->IDPN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDGROUPPN')); ?>:</b>
	<?php echo CHtml::encode($data->IDGROUPPN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDGROUPINSTANSIPN')); ?>:</b>
	<?php echo CHtml::encode($data->IDGROUPINSTANSIPN); ?>
	<br />


</div>