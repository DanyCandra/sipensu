<div class="portlet box yellow">
<div class="portlet-title">
  <div class="caption">
	<i class="fa fa-cogs"></i> Manage Detail Group Srt.Tugas Ijin Penelitian </div>
    <div class="actions">
        <?php echo CHtml::link('<i class="fa fa-plus"></i> Tambah',array('create'),array('class'=>'btn btn-sm blue'));?>    </div> 
    <div class="actions">
        <?php echo CHtml::link('<i class="fa fa-database"></i> Main Menu Manage Srt.Tugas By Dosen',array('pengguna/menusuratdosen'),array('class'=>'btn btn-sm purple'));?>    </div>
</div>

<div class="portlet-body">
<div class="table-responsive">
<?php $this->widget('ext.GroupGridView', array(
	'id'=>'groupsurtugpn-grid',
         'mergeColumns' => array('iDPN.JUDULPN','iDPN.NOSURATPN'), 
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'itemsCssClass' => 'table table-bordered table-striped table-advance table-hover',
	'columns'=>array(
		//'IDGROUPPN',
                'iDPN.NOSURATPN',
                'iDPN.JUDULPN',
                'nIP.NAMA2',
		'iDPANGGOL.PANGKAT',
                'iDPANGGOL.GOL',
		'iDJABATANAKADEMIK.NAMAJABATANAKADEMIK',
		
		//'IDPN',
		'NOURUTGROUPPN',
                
                'iDPN.ACCDETAILSURTUGPN',
                
                 
		/*
		
		*/
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
