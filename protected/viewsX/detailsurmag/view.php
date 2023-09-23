<div class="portlet box yellow">
<div class="portlet-title">
  <div class="caption">
	<i class="fa fa-pencil-square-o"></i> View Acc. Surat Permohonan Magang #<?php echo $model->IDDETAILSURMAG; ?>  </div>
</div>

<div class="portlet-body">
    
<!--tampilkan penomeran dalam surat  --> 
<div align="left">
<b>
<h2>
Nomor :&nbsp;<?php echo $model->iDSURMAG->NOSURMAG;?>/<?php echo $model->iDSURMAG->iDJENISSURAT->iDJABATANSTRUKTURAL->IDJABATANSURAT; ?>/<?php echo $model->iDSURMAG->iDJENISSURAT->IDKLASIFIKASI;?>/<?php $tgl=date('Y');echo $tgl;?>    
</h2>
</b>
</div>      
    
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions' => array('class'=> 'table table-bordered table-striped table-advance table-hover'),
	'attributes'=>array(
		'IDDETAILSURMAG',
		//'IDSURMAG',
                'iDSURMAG.NOSURMAG',
                'iDSURMAG.INSTANSISURMAG',
                'iDSURMAG.ALAMATINSTANSISURMAG',
                'iDSURMAG.KOTAINSTANSISURMAG',
		'iDSURMAG.iDTASEMESTER.TAHUNAKADEMIK',
                'iDSURMAG.iDTASEMESTER.SEMESTER',
                'iDSURMAG.TGLMULAISURMAG',
                'iDSURMAG.TGLAKHIRSURMAG',
		'iDGROUPS.DIVISI',
                'iDSURMAG.TGLCETAKSURATSURMAG',
                'iDSURMAG.KETERANGANSURMAG',
		'TGLSUBMITDETAILSURMAG',
                'iDSURMAG.ACCSURMAG',
	),

)); 


?>
</div>
<div class="portlet-title">
<div class="caption">
	<i class="fa fa-envelope"></i> View Group/Personal Mahasiswa Permohonan Magang #<?php echo $model->IDDETAILSURMAG; ?>  </div>
</div>    
<div class="portlet-body">
<?php
//menampilkan list 
$listgroupmahasiswasurmag=new CActiveDataProvider('Groupsurmag',array('criteria'=>array('condition'=>'IDSURMAG='.$model->IDSURMAG)));
$this->widget('ext.GroupGridView', array(
	'id'=>'groupsurmag-grid',
	'dataProvider'=>$listgroupmahasiswasurmag,
	'itemsCssClass' => 'table table-bordered table-striped table-advance table-hover',
	'columns'=>array(
		//'IDSURMAG',
		//'IDGROUPPN',
                'NIM',
		'nIM.NAMA',
                'nIM.iDPRODI.NAMAPRODI',
		'NOURUTGROUPSURMAG',
	 
                
	),
	
)); 

?>
<?php
echo CHtml::link('Manage ',array('detailsurmag/admin'),array('class'=>'btn btn-sm blue'));
?>
</div></div>    
    <!--update preview notifikasi setelah action view dilakukan-->
<?php
$IDDETAILSURMAG = Yii::app()->request->getParam('id', 0);
$smod4el = Detailsurmag::model()->updateByPk
        ($IDDETAILSURMAG, array("PREVIEW" => 'Y'));
?> 