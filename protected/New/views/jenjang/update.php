<?php
/* @var $this JenjangController */
/* @var $model Jenjang */


?>
<div class="portlet box green ">
	<div class="portlet-title">
		<div class="caption">
			<i class="fa fa-reorder"></i> Update Jenjang #<?php echo $model->IDJENJANG; ?>		</div>
		<div class="actions">
		</div>
	</div>
 <div class="portlet-body form">
    <?php echo $this->renderPartial('_form', array('model'=>$model)); ?></div>