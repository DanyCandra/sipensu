<?php
/* @var $this MahasiswaController */
/* @var $data Mahasiswa */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('NIM')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->NIM), array('view', 'id'=>$data->NIM)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NAMA')); ?>:</b>
	<?php echo CHtml::encode($data->NAMA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TEMPATLAHIR')); ?>:</b>
	<?php echo CHtml::encode($data->TEMPATLAHIR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TGLLAHIR')); ?>:</b>
	<?php echo CHtml::encode($data->TGLLAHIR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOHP')); ?>:</b>
	<?php echo CHtml::encode($data->NOHP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EMAIL')); ?>:</b>
	<?php echo CHtml::encode($data->EMAIL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ALAMATASAL')); ?>:</b>
	<?php echo CHtml::encode($data->ALAMATASAL); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('NAMAAYAH')); ?>:</b>
	<?php echo CHtml::encode($data->NAMAAYAH); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NAMAIBU')); ?>:</b>
	<?php echo CHtml::encode($data->NAMAIBU); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PENGHASILANAYAH')); ?>:</b>
	<?php echo CHtml::encode($data->PENGHASILANAYAH); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PENGHASILANIBU')); ?>:</b>
	<?php echo CHtml::encode($data->PENGHASILANIBU); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('JMLTANGGUNGAN')); ?>:</b>
	<?php echo CHtml::encode($data->JMLTANGGUNGAN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NAMAKABUPATEN')); ?>:</b>
	<?php echo CHtml::encode($data->NAMAKABUPATEN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NAMAPROPINSI')); ?>:</b>
	<?php echo CHtml::encode($data->NAMAPROPINSI); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TAHUNANGKATAN')); ?>:</b>
	<?php echo CHtml::encode($data->TAHUNANGKATAN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDAGAMA')); ?>:</b>
	<?php echo CHtml::encode($data->IDAGAMA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDPRODI')); ?>:</b>
	<?php echo CHtml::encode($data->IDPRODI); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDGOLDAR')); ?>:</b>
	<?php echo CHtml::encode($data->IDGOLDAR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDJENDER')); ?>:</b>
	<?php echo CHtml::encode($data->IDJENDER); ?>
	<br />

	*/ ?>

</div>