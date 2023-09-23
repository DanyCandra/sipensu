<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('NIP')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->NIP), array('view', 'id'=>$data->NIP)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDFAKULTAS')); ?>:</b>
	<?php echo CHtml::encode($data->IDFAKULTAS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDJURUSAN')); ?>:</b>
	<?php echo CHtml::encode($data->IDJURUSAN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDJENDER')); ?>:</b>
	<?php echo CHtml::encode($data->IDJENDER); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NIDN')); ?>:</b>
	<?php echo CHtml::encode($data->NIDN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NAMA2')); ?>:</b>
	<?php echo CHtml::encode($data->NAMA2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TEMPATLAHIR')); ?>:</b>
	<?php echo CHtml::encode($data->TEMPATLAHIR); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('TGLLAHIR2')); ?>:</b>
	<?php echo CHtml::encode($data->TGLLAHIR2); ?>
	<br />

	*/ ?>

</div>