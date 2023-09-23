<?php
/* @var $this ProdiController */
/* @var $model Prodi */


?>

<div class="portlet box green ">
	<div class="portlet-title">
		<div class="caption">
			<i class="fa fa-reorder"></i> Update Prodi #<?php echo $model->IDPRODI; ?>		</div>
		<div class="actions">
		</div>
	</div>
 <div class="portlet-body form">
    <?php echo $this->renderPartial('_form', array('model'=>$model)); ?></div>