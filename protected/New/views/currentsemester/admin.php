<div class="portlet box yellow">
<div class="portlet-title">
  <div class="caption">
	<i class="fa fa-cogs"></i> Manage Tahun Akademik Semester  </div>
    <div class="actions">
        <?php //echo CHtml::link('<i class="fa fa-plus"></i> Tambah',array('create'),array('class'=>'btn btn-sm blue'));?>    </div>  
</div>

<div class="portlet-body">
<div class="table-responsive">

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'currentsemester-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
        'itemsCssClass' => 'table table-bordered table-striped table-advance table-hover',
	'columns'=>array(
		'IDTASEMESTER',
		'TAHUNAKADEMIK',
                'KETTAHUNAKADEMIK',
                'SEMESTER',
                'KETSEMESTER',
                'STATUSTASEMESTER',
		array(
                       
                        'header'=>'Action',
			'class'=>'CButtonColumn',
                        'template'=>'{view}{update}',
                        'deleteConfirmation'=>'Anda yakin akan menghapus data?',
                        'viewButtonImageUrl'=>false,
                        'deleteButtonImageUrl'=>false,
                        'updateButtonImageUrl'=>false,
                        'viewButtonOptions'=>array('class'=>'btn btn-sm blue  tooltips','data-placement'=>'top',
                            'data-original-title'=>'Lihat','title'=>'View','style'=>'margin-right:3px'),
                        'deleteButtonOptions'=>array('class'=>'btn btn-sm red tooltips','data-placement'=>'top',
                            'data-original-title'=>'Hapus','title'=>'Hapus','style'=>'margin-right:3px'),  
                        'updateButtonOptions'=>array('class'=>'btn btn-sm green tooltips','data-placement'=>'top',
                            'data-original-title'=>'Update','title'=>'Update','style'=>'margin-right:3px'),  
                            
                        'htmlOptions'=>array('style'=>'width:90px'),
                        'buttons'=>array(
                            
                            'view'=>array(
                                'label'=>' <i class="fa fa-search">  </i> ',
                                ),
                            'update'=>array(
                                'label'=>' <i class="fa fa-edit">  </i> ',
                            ),    
                            'delete'=>array(
                                'label'=>' <i class="fa fa-times fa fa-white"> </i> ',
                            )
                        )
                        
		),
	),
)); ?>
</div>
</div>
</div>