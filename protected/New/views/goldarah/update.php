<?php
/* @var $this GoldarahController */
/* @var $model Goldarah */

?>

<div class="portlet box green ">
	<div class="portlet-title">
		<div class="caption">
			<i class="fa fa-reorder"></i> Update Golongan Darah #<?php echo $model->IDGOLDAR; ?>		</div>
		<div class="actions">
		</div>
	</div>
 <div class="portlet-body form">
    <?php echo $this->renderPartial('_form', array('model'=>$model)); ?></div>