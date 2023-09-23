<div class="portlet box yellow">
<div class="portlet-title">
  <div class="caption">
	<i class="fa fa-pencil-square-o"></i> View Acc. Surat Keterangan #<?php echo $model->IDDETAILSURKET; ?>  </div>
</div>

<div class="portlet-body">

<!--tampilkan penomeran dalam surat  --> 
<div align="left">
<b>
<h2>
 Nomor :&nbsp;<?php echo $model->iDSURKET->NOSURKET;?>/<?php echo $model->iDSURKET->iDJENISSURAT->iDJABATANSTRUKTURAL->IDJABATANSURAT; ?>/<?php echo $model->iDSURKET->iDJENISSURAT->IDKLASIFIKASI;?>/<?php $tgl=date('Y');echo $tgl;?>    
</h2>
</b>
</div>      
    
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions' => array('class'=> 'table table-bordered table-striped table-advance table-hover'),
	'attributes'=>array(
		            
		//'IDDETAILSURKET',
		'IDSURKET',
                'iDSURKET.iDJENISSURAT.NAMAJENISSURAT',
                'iDSURKET.NOSURKET',
                'iDSURKET.NIM',
                'iDSURKET.nIM.NAMA',
                'iDSURKET.nIM.iDPRODI.NAMAPRODI',
                'iDSURKET.nIM.TEMPATLAHIR',
                'iDSURKET.nIM.TGLLAHIR',
                'iDSURKET.nIM.ALAMATASAL',
                //'iDSURKET.PERIHAL1',
                //'iDSURKET.PERIHAL2',
                array(
                    'label'=>'Perihal',
                    'type'=>'raw',
                    'value'=>$model->statusperihalsuratketerangan,
                    
                ),
                'iDGROUPS.DIVISI',
                'iDSURKET.KETERANGANSURKET',
                'iDSURKET.TGLCETAKSURKET',
		'iDSURKET.ACCSURKET',
                'TGLSUBMITDETAILSURKET',
		
                
	),

)); 

echo CHtml::link('Manage ',array('detailsuratketerangan/admin'),array('class'=>'btn btn-sm blue'));
?>
</div>
</div>
    <!--update preview notifikasi setelah action view dilakukan-->
<?php
$IDDETAILSURKET = Yii::app()->request->getParam('id', 0);
$smod4el = Detailsuratketerangan::model()->updateByPk
        ($IDDETAILSURKET, array("PREVIEW" => 'Y'));
?> 
