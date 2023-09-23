<?php
/* @var $this MahasiswaController */
/* @var $model Mahasiswa */


?>
<div class="portlet box green ">
	<div class="portlet-title">
		<div class="caption">
			<i class="fa fa-reorder"></i> Update Mahasiswa #<?php echo $model->NIM; ?>		</div>
		<div class="actions">
		</div>
	</div>
 <div class="portlet-body form">
    <?php echo $this->renderPartial('_formmhs', array('model'=>$model,'id'=>$id)); ?></div>