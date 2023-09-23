<?php
/* @var $this CurrentsemesterController */
/* @var $data Currentsemester */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDSEMESTER')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IDSEMESTER), array('view', 'id'=>$data->IDSEMESTER)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SEMESTER')); ?>:</b>
	<?php echo CHtml::encode($data->SEMESTER); ?>
	<br />


</div>