<?php
/* @var $this FileuploadfotoController */
/* @var $model Fileuploadfoto */

?>

<div class="portlet box green ">
	<div class="portlet-title">
		<div class="caption">
			<i class="fa fa-reorder"></i> Update Foto <?php echo $model->IDFILEFOTO; ?>		</div>
		<div class="actions">
		</div>
	</div>
 <div class="portlet-body form">
    <?php echo $this->renderPartial('_form', array('model'=>$model)); ?></div>