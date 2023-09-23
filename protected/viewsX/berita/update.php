<?php
/* @var $this BeritaController */
/* @var $model Berita */

?>


<div class="portlet box green ">
	<div class="portlet-title">
		<div class="caption">
			<i class="fa fa-reorder"></i> Update Berita/Informasi #<?php echo $model->IDBERITA; ?>		</div>
		<div class="actions">
		</div>
	</div>
 <div class="portlet-body form">
    <?php echo $this->renderPartial('_form', array('model'=>$model)); ?></div>
</div>
