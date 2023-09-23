<div class="portlet box yellow">
<div class="portlet-title">
  <div class="caption">
	<i class="fa fa-pencil-square-o"></i> View Detail Srt.Tugas Ijin Penelitian #<?php echo $model->IDGROUPPN; ?>  </div>
</div>

<div class="portlet-body">
    
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions' => array('class'=> 'table table-bordered table-striped table-advance table-hover'),
	'attributes'=>array(
                'IDPN',
		
            
                'IDGROUPPN',
                'iDPN.NOSURATPN',
                'iDPN.JUDULPN',
                 
		'iDPANGGOL.PANGKAT',
                'iDPANGGOL.GOL',
		'iDJABATANAKADEMIK.NAMAJABATANAKADEMIK',
		'nIP.NAMA2',
		//'IDPN',
		'NOURUTGROUPPN',
                'iDPN.ACCDETAILSURTUGPN',
                
		/*
		
		*/
	),

)); 

echo CHtml::link('Manage ',array('groupsurtugpn/admin','IDGROUPPN'=>$model->IDGROUPPN),array('class'=>'btn btn-sm blue'));
?>
</div>
