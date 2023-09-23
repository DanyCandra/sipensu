<div class="portlet box yellow">
<div class="portlet-title">
  <div class="caption">
	<i class="fa fa-pencil-square-o"></i> View Acc. Surat Tugas Pembicara/Narasumber/Lainnya #<?php echo $model->IDDETAILSURTUGNS; ?>  </div>
</div>

<div class="portlet-body">
    
<!--tampilkan penomeran dalam surat  --> 
<div align="left">
<b>
<h2>
Nomor :&nbsp;<?php echo $model->iDSURTUGNS->NOSURTUGNS;?>/<?php echo $model->iDSURTUGNS->iDJENISSURAT->iDJABATANSTRUKTURAL->IDJABATANSURAT; ?>/<?php echo $model->iDSURTUGNS->iDJENISSURAT->IDKLASIFIKASI;?>/<?php $tgl=date('Y');echo $tgl;?>    
</h2>
</b>
</div>      
    
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions' => array('class'=> 'table table-bordered table-striped table-advance table-hover'),
	'attributes'=>array(
		
                'IDDETAILSURTUGNS',
                //'IDSURTUGNS',
                'iDSURTUGNS.iDJENISSURAT.NAMAJENISSURAT',
		'iDSURTUGNS.NOSURTUGNS',
                'iDSURTUGNS.NIP',
                'iDSURTUGNS.nIP.NAMA2',
                'iDSURTUGNS.iDPANGGOL.PANGKAT',
                'iDSURTUGNS.iDPANGGOL.GOL',
		'iDSURTUGNS.iDJABATANAKADEMIK.NAMAJABATANAKADEMIK',
                'iDSURTUGNS.ISISURTUGNS1',
                'iDSURTUGNS.ISISURTUGNS',
		'iDSURTUGNS.INSTANSINS',
		'iDSURTUGNS.ALAMATINSTANSINS',
		'iDSURTUGNS.TGLACARANS',
                'iDGROUPS.DIVISI',
                'iDSURTUGNS.KETERANGANNS',
                'iDSURTUGNS.TGLCETAKSURATNS',
		'iDSURTUGNS.ACCSURTUGNS',
		'TGLSUBMITDETAILSURTUGNS',
	),

)); 

echo CHtml::link('Manage ',array('detailsurtugns/admin'),array('class'=>'btn btn-sm blue'));
?>
</div>
    <!--update preview notifikasi setelah action view dilakukan-->
<?php
$IDDETAILSURTUGNS = Yii::app()->request->getParam('id', 0);
$smod4el = Detailsurtugns::model()->updateByPk
        ($IDDETAILSURTUGNS, array("PREVIEW" => 'Y'));
?>    