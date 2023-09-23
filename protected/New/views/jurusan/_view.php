<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDJURUSAN')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IDJURUSAN), array('view', 'id'=>$data->IDJURUSAN)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NAMAJURUSAN')); ?>:</b>
	<?php echo CHtml::encode($data->NAMAJURUSAN); ?>
	<br />


</div>