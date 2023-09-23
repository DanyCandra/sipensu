<div class="portlet box yellow">
<div class="portlet-title">
  <div class="caption">
	<i class="fa fa-cogs"></i> Manage Group Srt.Permohonan Magang </div>
    <div class="actions">
        <?php echo CHtml::link('<i class="fa fa-plus"></i> Tambah',array('create'),array('class'=>'btn btn-sm blue'));?>    </div> 
    <div class="actions">
        <?php echo CHtml::link('<i class="fa fa-database"></i> Main Menu Manage Srt.Tugas By Mahasiswa',array('pengguna/menusuratmahasiswa'),array('class'=>'btn btn-sm purple'));?>    </div>
</div>

<div class="portlet-body">
<div class="table-responsive">
<?php $this->widget('ext.GroupGridView', array(
	'id'=>'groupsurmag-grid',
         'mergeColumns' => array('IDGROUPSURMAG'), 
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'itemsCssClass' => 'table table-bordered table-striped table-advance table-hover',
	'columns'=>array(

		'IDGROUPSURMAG',
		'IDSURMAG',
		'NIM',
		'NOURUTGROUPSURMAG',
		array(
			'class'=>'CButtonColumn',
			'htmlOptions' => array(
                        'style' => 'width:75px;text-align:center;'
                    )
                    ),
	),
)); ?>
</div>
</div>
</div>
