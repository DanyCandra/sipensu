<div class="portlet box yellow">
<div class="portlet-title">
  <div class="caption">
	<i class="fa fa-pencil-square-o"></i> View Acc. Surat Tugas Monitoring Praktik Kerja (Prodi D3) #<?php echo $model->IDDETAILSURTUGMONITORING; ?>  </div>
</div>

<div class="portlet-body">
    
<!--tampilkan penomeran dalam surat  --> 
<div align="left">
<b>
<h2>
Nomor :&nbsp;<?php echo $model->iDSURTUGMONITORING->NOSURTUGMONITORING;?>/<?php echo $model->iDSURTUGMONITORING->iDJENISSURAT->iDJABATANSTRUKTURAL->IDJABATANSURAT; ?>/<?php echo $model->iDSURTUGMONITORING->iDJENISSURAT->IDKLASIFIKASI;?>/<?php $tgl=date('Y');echo $tgl;?>    
</h2>
</b>
</div>      
    
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions' => array('class'=> 'table table-bordered table-striped table-advance table-hover'),
	'attributes'=>array(
		'IDDETAILSURTUGMONITORING',
                'iDSURTUGMONITORING.NOSURTUGMONITORING',
		'iDSURTUGMONITORING.iDSUBDETAILSURPELPK.iDPK.INSTANSIPK',
                'iDSURTUGMONITORING.iDSUBDETAILSURPELPK.iDPK.ALAMATINSTANSIPK',
                'iDSURTUGMONITORING.iDSUBDETAILSURPELPK.iDPK.KOTAINSTANSIPK',
                'iDSURTUGMONITORING.iDSUBDETAILSURPELPK.iDPK.iDTASEMESTER.TAHUNAKADEMIK',
                'iDSURTUGMONITORING.iDSUBDETAILSURPELPK.iDPK.iDTASEMESTER.SEMESTER',
                'iDSURTUGMONITORING.iDSUBDETAILSURPELPK.TGLMULAISURPELPK',
                'iDSURTUGMONITORING.iDSUBDETAILSURPELPK.TGLAKHIRSURPELPK',
                'iDSURTUGMONITORING.NIP',
                'iDSURTUGMONITORING.nIP.NAMA2',
		'iDGROUPS.DIVISI',
                'iDSURTUGMONITORING.TGLCETAKSURATMONITORING',
                'iDSURTUGMONITORING.KETERANGANSURTUGMONITORING',
		'TGLSUBMITSURTUGMONITORING',
                'iDSURTUGMONITORING.ACCSURTUGMONITORING',
	),
)); ?>
</div>
<div class="portlet-body">
<div class="portlet-title">
    
<div class="portlet box yellow">
<div class="portlet-title">
<div class="caption">
	<i class="fa fa-cogs"></i> Group Mahasiswa Pemohon Surat   
</div>
</div>
  
<div class="portlet-body">
<?php
//menampilkan list 
$listgroupmahasiswasurtugmonitoring=new CActiveDataProvider('Groupsurtugmonitoring',array('criteria'=>array('condition'=>'IDSURTUGMONITORING='.$model->IDSURTUGMONITORING)));
$this->widget('ext.GroupGridView', array(
	'id'=>'groupsurtugmonitoring-grid',
	'dataProvider'=>$listgroupmahasiswasurtugmonitoring,
	'itemsCssClass' => 'table table-bordered table-striped table-advance table-hover',
	'columns'=>array(
		//'IDGROUPSURTUGMONITORING',
		
                'NIM',
		'nIM.NAMA',
                'nIM.iDPRODI.NAMAPRODI',
		'NOURUTSURTUGMONITORING',
	 
                
	),
	
)); 

?>

</div></div>
<?php
echo CHtml::link('Manage ',array('detailsurtugmonitoring/admin'),array('class'=>'btn btn-sm blue'));
?></div></div></div>    
    <!--update preview notifikasi setelah action view dilakukan-->
<?php
$IDDETAILSURTUGMONITORING = Yii::app()->request->getParam('id', 0);
$smod4el = Detailsurtugmonitoring::model()->updateByPk
        ($IDDETAILSURTUGMONITORING, array("PREVIEW" => 'Y'));
?> 