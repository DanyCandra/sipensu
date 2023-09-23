<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDKLASIFIKASI')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IDKLASIFIKASI), array('view', 'id'=>$data->IDKLASIFIKASI)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NAMAKLASIFIKASI')); ?>:</b>
	<?php echo CHtml::encode($data->NAMAKLASIFIKASI); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('KETERANGANKLASIFIKASISURAT')); ?>:</b>
	<?php echo CHtml::encode($data->KETERANGANKLASIFIKASISURAT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOURUTKLASIFIKASISURAT')); ?>:</b>
	<?php echo CHtml::encode($data->NOURUTKLASIFIKASISURAT); ?>
	<br />


</div>