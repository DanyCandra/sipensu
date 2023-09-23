<div class="portlet box yellow">
<div class="portlet-title">
  <div class="caption">
	<i class="fa fa-pencil-square-o"></i> View Acc. Surat Keterangan Tidak Menerima Beasiswa #<?php echo $model->IDDETAILSURKETNOBESWA; ?>  </div>
</div>

<div class="portlet-body">
    
<!--tampilkan penomeran dalam surat  --> 
<div align="left">
<b>
<h2>
Nomor :&nbsp;<?php echo $model->iDSURKETNOBESWA->NOSURKETNOBESWA;?>/<?php echo $model->iDSURKETNOBESWA->iDJENISSURAT->iDJABATANSTRUKTURAL->IDJABATANSURAT; ?>/<?php echo $model->iDSURKETNOBESWA->iDJENISSURAT->IDKLASIFIKASI;?>/<?php $tgl=date('Y');echo $tgl;?>    
</h2>
</b>
</div>    
    
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions' => array('class'=> 'table table-bordered table-striped table-advance table-hover'),
	'attributes'=>array(

		'IDDETAILSURKETNOBESWA',
		//'IDSURKETNOBESWA',
                'iDSURKETNOBESWA.NOSURKETNOBESWA',
                'iDSURKETNOBESWA.nIM.NAMA',
                'iDSURKETNOBESWA.NIM',
                'iDSURKETNOBESWA.nIM.TAHUNANGKATAN',
                'iDSURKETNOBESWA.nIM.iDPRODI.NAMAPRODI',
                'iDSURKETNOBESWA.nIM.iDPRODI.iDJENJANG.NAMAJENJANG',
		'iDSURKETNOBESWA.iDTASEMESTER.TAHUNAKADEMIK',
		'iDSURKETNOBESWA.iDTASEMESTER.SEMESTER',
                'iDSURKETNOBESWA.nIM.ALAMATASAL',
                'iDSURKETNOBESWA.KEPERLUANSURKETNOBESWA',
                'iDGROUPS.DIVISI',
                'iDSURKETNOBESWA.TGLCETAKSURATNOBESWA',
                'iDSURKETNOBESWA.KETERANGANSURKETNOBESWA',
		'TGLSUBMITDETAILSURKETNOBESWA',
                'iDSURKETNOBESWA.ACCSURKETNOBESWA',
	),

)); 

echo CHtml::link('Manage ',array('detailsurketnobeswa/admin'),array('class'=>'btn btn-sm blue'));
?>
</div>
    <!--update preview notifikasi setelah action view dilakukan-->
<?php
$IDDETAILSURKETNOBESWA = Yii::app()->request->getParam('id', 0);
$smod4el = Detailsurketnobeswa::model()->updateByPk
        ($IDDETAILSURKETNOBESWA, array("PREVIEW" => 'Y'));
?>       