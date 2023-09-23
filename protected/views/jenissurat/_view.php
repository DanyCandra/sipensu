<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDJENISSURAT')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IDJENISSURAT), array('view', 'id'=>$data->IDJENISSURAT)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDJABATANSTRUKTURAL')); ?>:</b>
	<?php echo CHtml::encode($data->IDJABATANSTRUKTURAL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDKLASIFIKASI')); ?>:</b>
	<?php echo CHtml::encode($data->IDKLASIFIKASI); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NAMAJENISSURAT')); ?>:</b>
	<?php echo CHtml::encode($data->NAMAJENISSURAT); ?>
	<br />


</div>