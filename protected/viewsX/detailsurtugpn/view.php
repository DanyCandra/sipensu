<div class="portlet box yellow">
<div class="portlet-title">
  <div class="caption">
	<i class="fa fa-pencil-square-o"></i> View Acc. Surat Tugas Ijin Penelitian #<?php echo $model->IDDETAILSURTUGPN; ?>  </div>
</div>

<div class="portlet-body">
    
<!--tampilkan penomeran dalam surat  --> 
<div align="left">
<b>
<h2>
Nomor :&nbsp;<?php echo $model->iDPN->NOSURATPN;?>/<?php echo $model->iDPN->iDJENISSURAT->iDJABATANSTRUKTURAL->IDJABATANSURAT; ?>/<?php echo $model->iDPN->iDJENISSURAT->IDKLASIFIKASI;?>/<?php $tgl=date('Y');echo $tgl;?>    
</h2>
</b>
</div>      
    
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions' => array('class'=> 'table table-bordered table-striped table-advance table-hover'),
	'attributes'=>array(
		'IDDETAILSURTUGPN',
                'iDPN.iDJENISSURAT.NAMAJENISSURAT',
                'iDPN.NOSURATPN',
		'iDPN.JUDULPN',
		'iDPN.WAKTUDATAPN',
                'iDGROUPS.DIVISI',
                'iDPN.KETERANGANSURTUGPN',
                'iDPN.TGLCETAKSURATPN',
		'iDPN.ACCSURTUGPN',
		'TGLSUBMITDETAILSURTUGPN',
            
            
                
	),

)); 
?>
</div>
<div class="portlet-title">
<div class="caption">
	<i class="fa fa-envelope"></i> View Instansi dan Group Dosen Pemohon Ijin Penelitian  #<?php echo $model->IDPN; ?>  </div>
</div>    
<div class="portlet-body">
<?php
//menampilkan list 
$listgroupdosen=new CActiveDataProvider('Groupsurtugpn',array('criteria'=>array('condition'=>'IDPN='.$model->IDPN)));
$this->widget('ext.GroupGridView', array(
	'id'=>'groupsurtugpn-grid',
	'dataProvider'=>$listgroupdosen,
	'itemsCssClass' => 'table table-bordered table-striped table-advance table-hover',
	'columns'=>array(
		//'IDPN',
		//'IDGROUPPN',
                'NIP',
		'nIP.NAMA2',
		'iDPANGGOL.PANGKAT',
                'iDPANGGOL.GOL',
		'iDJABATANAKADEMIK.NAMAJABATANAKADEMIK',
		//'NOURUTGROUPPN',
		//'KETERANGANPN',    
                array(
                    
                    'header'=>'Instansi Penelitian',
                    'value' => '$data->listgroupinstansipn',
                    ),
                
	),
	
)); 

?>
<?php
echo CHtml::link('Manage ',array('detailsurtugpn/admin'),array('class'=>'btn btn-sm blue'));
?>
</div></div>
<!--update preview notifikasi setelah action view dilakukan-->
<?php
$IDDETAILSURTUGPN = Yii::app()->request->getParam('id', 0);
$smod4el = Detailsurtugpn::model()->updateByPk
        ($IDDETAILSURTUGPN, array("PREVIEW" => 'Y'));
?>   