<div class="portlet box yellow">
<div class="portlet-title">
  <div class="caption">
	<i class="fa fa-pencil-square-o"></i> View Acc. Surat Pernyataan Masih Kuliah #<?php echo $model->IDDETAILSURPERMK; ?>  </div>
</div>

<div class="portlet-body">
    
<!--tampilkan penomeran dalam surat  --> 
<div align="left">
<b>
<h2>
Nomor :&nbsp;<?php echo $model->iDMK->NOSURATMK;?>/<?php echo $model->iDMK->iDJENISSURAT->iDJABATANSTRUKTURAL->IDJABATANSURAT; ?>/<?php echo $model->iDMK->iDJENISSURAT->IDKLASIFIKASI;?>/<?php $tgl=date('Y');echo $tgl;?>    
</h2>
</b>
</div>


    <?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions' => array('class'=> 'table table-bordered table-striped table-advance table-hover'),
	'attributes'=>array(
		'IDDETAILSURPERMK',
		//'IDMK',
                'iDMK.NOSURATMK',
                'iDMK.NIM',
                'iDMK.nIM.NAMA',
                'iDMK.nIM.iDPRODI.NAMAPRODI',
		'iDMK.iDTASEMESTER.TAHUNAKADEMIK',
                'iDMK.iDTASEMESTER.SEMESTER',
		'iDMK.NAMAWALIMK',
		'iDMK.NIPWALIMK',
		'iDMK.PANGGOL',
		'iDMK.INSTANSIWALIMK',
                'iDGROUPS.DIVISI',
                'iDMK.KETERANGANSURPERMK',
                'iDMK.TGLCETAKSURATMK',
		'TGLSUBMITDETAILSURPERMK',
                'iDMK.ACCSURPERMK',
	),

)); 

echo CHtml::link('Manage ',array('detailsurpermk/admin'),array('class'=>'btn btn-sm blue'));
?>
</div>
    <!--update preview notifikasi setelah action view dilakukan-->
<?php
$IDDETAILSURPERMK = Yii::app()->request->getParam('id', 0);
$smod4el = Detailsurpermk::model()->updateByPk
        ($IDDETAILSURPERMK, array("PREVIEW" => 'Y'));
?>  