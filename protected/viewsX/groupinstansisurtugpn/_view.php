<?php
/* @var $this GroupinstansisurtugpnController */
/* @var $data Groupinstansisurtugpn */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDGROUPINSTANSIPN')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IDGROUPINSTANSIPN), array('view', 'id'=>$data->IDGROUPINSTANSIPN)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('INSTANSIPN')); ?>:</b>
	<?php echo CHtml::encode($data->INSTANSIPN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ALAMATINSTANSIPN')); ?>:</b>
	<?php echo CHtml::encode($data->ALAMATINSTANSIPN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('KOTAINSTANSIPN')); ?>:</b>
	<?php echo CHtml::encode($data->KOTAINSTANSIPN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOURUTINSTANSIPN')); ?>:</b>
	<?php echo CHtml::encode($data->NOURUTINSTANSIPN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDPN')); ?>:</b>
	<?php echo CHtml::encode($data->IDPN); ?>
	<br />

	


</div>