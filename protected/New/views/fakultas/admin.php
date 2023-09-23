<div class="portlet box yellow">
<div class="portlet-title">
  <div class="caption">
	<i class="fa fa-cogs"></i> Manage Fakultas  </div>
    <div class="actions">
        <?php //echo CHtml::link('<i class="fa fa-plus"></i> Tambah',array('create'),array('class'=>'btn btn-sm blue'));?>    </div>  
</div>

<div class="portlet-body">
<div class="table-responsive">
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'fakultas-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'itemsCssClass' => 'table table-bordered table-striped table-advance table-hover',
	'columns'=>array(
    
		'IDFAKULTAS',
		'FAKULTAS',
		'ALAMATFAKULTAS',
		'WEBSITE',
		'EMAIL',
		'TLPFAKULTAS',
            'UNIVERSITAS',
		array(
			'class'=>'CButtonColumn',
			'htmlOptions' => array(
                        'style' => 'width:75px;text-align:center;'
                    )
                    ),
	),
)); ?>
</div>
<?php  //echo CHtml::link('Tambah baru Jurusan',array('jurusan/create'),array('class'=>'btn btn-default '));
 ?> 
<?php  //echo CHtml::link('Manage Data Dosen',array('msdos/admin'),array('class'=>'btn btn-default '));
 ?>     
</div>    
</div>
