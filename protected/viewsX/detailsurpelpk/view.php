<div class="portlet box yellow">
<div class="portlet-title">
  <div class="caption">
	<i class="fa fa-pencil-square-o"></i> View Acc. Surat Pelaksanaan Praktik Kerja (Prodi D3) #<?php echo $model->IDDETAILSURPELPK; ?>  </div>
</div>

<div class="portlet-body">
    
<!--tampilkan penomeran dalam surat  --> 
<div align="left">
<b>
<h2>
Nomor :&nbsp;<?php echo $model->iDSUBDETAILSURPELPK->NOSURPELPK;?>/<?php echo $model->iDSUBDETAILSURPELPK->iDJENISSURAT->iDJABATANSTRUKTURAL->IDJABATANSURAT; ?>/<?php echo $model->iDSUBDETAILSURPELPK->iDJENISSURAT->IDKLASIFIKASI;?>/<?php $tgl=date('Y');echo $tgl;?>    
</h2>
</b>
</div>           
    
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions' => array('class'=> 'table table-bordered table-striped table-advance table-hover'),
	'attributes'=>array(
		'IDDETAILSURPELPK',
		//'IDSUBDETAILSURPELPK',
                'iDSUBDETAILSURPELPK.NOSURPELPK',
                'iDSUBDETAILSURPELPK.iDPK.INSTANSIPK',
                'iDSUBDETAILSURPELPK.iDPK.ALAMATINSTANSIPK',
                'iDSUBDETAILSURPELPK.iDPK.KOTAINSTANSIPK',
                'iDSUBDETAILSURPELPK.iDPK.iDTASEMESTER.TAHUNAKADEMIK',
                'iDSUBDETAILSURPELPK.iDPK.iDTASEMESTER.SEMESTER',
                'iDSUBDETAILSURPELPK.TGLMULAISURPELPK',
		'iDSUBDETAILSURPELPK.TGLAKHIRSURPELPK',
		'iDGROUPS.DIVISI',
                'iDSUBDETAILSURPELPK.TGLCETAKSURATSURPELPK',
                'iDSUBDETAILSURPELPK.KETERANGANSUBDETAILSURPELPK',
		'TGLSUBMITDETAILSURPELPK',
                'iDSUBDETAILSURPELPK.ACCSURPELPK',
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
$listgroupmahasiswasurpelpk=new CActiveDataProvider('Groupsurpelpk',array('criteria'=>array('condition'=>'IDSUBDETAILSURPELPK='.$model->IDSUBDETAILSURPELPK)));
$this->widget('ext.GroupGridView', array(
	'id'=>'groupsurpelpk-grid',
	'dataProvider'=>$listgroupmahasiswasurpelpk,
	'itemsCssClass' => 'table table-bordered table-striped table-advance table-hover',
	'columns'=>array(
		//'IDSUBDETAILSURPELPK',
		
                'NIM',
		'nIM.NAMA',
                'nIM.iDPRODI.NAMAPRODI',
		'NOURUTSURPELPK',
	 
                
	),
	
)); 

?>

</div></div>
<?php
echo CHtml::link('Manage ',array('detailsurpelpk/admin'),array('class'=>'btn btn-sm blue'));
?></div></div></div>    
    <!--update preview notifikasi setelah action view dilakukan-->
<?php
$IDSUBDETAILSURPELPK = Yii::app()->request->getParam('id', 0);
$smod4el = Detailsurpelpk::model()->updateByPk
        ($IDSUBDETAILSURPELPK, array("PREVIEW" => 'Y'));
?> 