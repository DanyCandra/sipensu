<div class="portlet box yellow">
<div class="portlet-title">
  <div class="caption">
	<i class="fa fa-pencil-square-o"></i> View Acc. Surat Tugas Pengabdian pada Masyarakat (PPM) #<?php echo $model->IDDETAILSURTUGPM; ?>  </div>
</div>

<div class="portlet-body">

<!--tampilkan penomeran dalam surat  --> 
<div align="left">
<b>
<h2>
Nomor :&nbsp;<?php echo $model->iDPM->NOSURATPM;?>/<?php echo $model->iDPM->iDJENISSURAT->iDJABATANSTRUKTURAL->IDJABATANSURAT; ?>/<?php echo $model->iDPM->iDJENISSURAT->IDKLASIFIKASI;?>/<?php $tgl=date('Y');echo $tgl;?>    
</h2>
</b>
</div>      
    
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions' => array('class'=> 'table table-bordered table-striped table-advance table-hover'),
	'attributes'=>array(
		            
                //'IDDETAILSURTUGPM',
		'IDPM',
                'iDPM.iDJENISSURAT.NAMAJENISSURAT',
                'iDPM.NOSURATPM',
                'iDPM.NIP',
                'iDPM.nIP.NAMA2',
                'iDPM.iDPANGGOL.PANGKAT',
                'iDPM.iDPANGGOL.GOL',
		'iDPM.iDJABATANAKADEMIK.NAMAJABATANAKADEMIK',
                'iDPM.JUDULPM',
                'iDPM.TGLDILAKSANAKANPM',
                'iDPM.INSTANSIPM',
		'iDPM.ALAMATINSTANSIPM',
                'iDGROUPS.DIVISI',
                'iDPM.KETERANGANPM',
                'iDPM.TGLCETAKSURAT',
		'iDPM.ACCSURTUGPM',
                'TGLSUBMITDETAILSURTUGPM',
               
                
                
	),

)); 

echo CHtml::link('Manage ',array('detailsurtugpm/admin'),array('class'=>'btn btn-sm blue'));
?>
</div>
<!--update preview notifikasi setelah action view dilakukan-->
<?php
$IDDETAILSURTUGPM = Yii::app()->request->getParam('id', 0);
$smod4el = Detailsurtugpm::model()->updateByPk
        ($IDDETAILSURTUGPM, array("PREVIEW" => 'Y'));
?>    