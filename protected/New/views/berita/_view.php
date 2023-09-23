<?php
/* @var $this BeritaController */
/* @var $data Berita */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDBERITA')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IDBERITA), array('view', 'id'=>$data->IDBERITA)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDKATEGORI')); ?>:</b>
	<?php echo CHtml::encode($data->IDKATEGORI); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('JUDUL')); ?>:</b>
	<?php echo CHtml::encode($data->JUDUL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ISI')); ?>:</b>
	<?php echo CHtml::encode($data->ISI); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ISPUBLISH')); ?>:</b>
	<?php echo CHtml::encode($data->ISPUBLISH); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FILEIMAGE')); ?>:</b>
	<?php echo CHtml::encode($data->FILEIMAGE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HIT')); ?>:</b>
	<?php echo CHtml::encode($data->HIT); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('TGLSUBMIT')); ?>:</b>
	<?php echo CHtml::encode($data->TGLSUBMIT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SUMMARY')); ?>:</b>
	<?php echo CHtml::encode($data->SUMMARY); ?>
	<br />

	*/ ?>

</div>