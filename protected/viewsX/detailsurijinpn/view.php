<div class="portlet box yellow">
<div class="portlet-title">
  <div class="caption">
	<i class="fa fa-pencil-square-o"></i> View Acc. Surat Ijin Penelitian #<?php echo $model->IDDETAILSURIJINPN; ?>  </div>
</div>

<div class="portlet-body">
    
<!--tampilkan penomeran dalam surat  --> 
<div align="left">
<b>
<h2>
Nomor :&nbsp;<?php echo $model->iDIJINPN->NOSURATIJINPN;?>/<?php echo $model->iDIJINPN->iDJENISSURAT->iDJABATANSTRUKTURAL->IDJABATANSURAT; ?>/<?php echo $model->iDIJINPN->iDJENISSURAT->IDKLASIFIKASI;?>/<?php $tgl=date('Y');echo $tgl;?>    
</h2>
</b>
</div>        
    
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions' => array('class'=> 'table table-bordered table-striped table-advance table-hover'),
	'attributes'=>array(
		'IDDETAILSURIJINPN',
                //'IDIJINPN',
                'iDIJINPN.NOSURATIJINPN',
                'iDIJINPN.iDJENISSURAT.NAMAJENISSURAT',
                'iDIJINPN.nIM.NIM',
                'iDIJINPN.nIM.NAMA',
                'iDIJINPN.INSTANSIIJINPN',
                'iDIJINPN.ALAMATINSTANSIIJINPN',
                'iDIJINPN.KOTAINSTANSIIJINPN',
                'iDIJINPN.iDTASEMESTER.TAHUNAKADEMIK',
		'iDIJINPN.iDTASEMESTER.SEMESTER',
                'iDIJINPN.JUDULSKRIPSIIJINPN',
		'iDGROUPS.DIVISI',
                'iDIJINPN.TGLCETAKSURATIJINPN',
                'iDIJINPN.KETERANGANIJINPN',
		'TGLSUBMITDETAILSURIJINPN',
                'iDIJINPN.ACCSURIJINPN',
	),

)); 

echo CHtml::link('Manage ',array('detailsurijinpn/admin'),array('class'=>'btn btn-sm blue'));
?>
</div>
 <!--update preview notifikasi setelah action view dilakukan-->
<?php
$IDDETAILSURIJINPN = Yii::app()->request->getParam('id', 0);
$smod4el = Detailsurijinpn::model()->updateByPk
        ($IDDETAILSURIJINPN, array("PREVIEW" => 'Y'));
?>     