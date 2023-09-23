<div class="portlet box yellow">
<div class="portlet-title">
  <div class="caption">
	<i class="fa fa-pencil-square-o"></i> View Permintaan Surat Ijin Penelitian #<?php echo $model->IDIJINPN; ?>  </div>
</div>

<div class="portlet-body">
    
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions' => array('class'=> 'table table-bordered table-striped table-advance table-hover'),
	'attributes'=>array(
		'IDIJINPN',
		'iDJENISSURAT.NAMAJENISSURAT',
                'NOSURATIJINPN',
		'NIM',
                'nIM.NAMA',
                'nIM.iDPRODI.NAMAPRODI', 
		'INSTANSIIJINPN',
		'ALAMATINSTANSIIJINPN',
		'KOTAINSTANSIIJINPN',
		'iDTASEMESTER.TAHUNAKADEMIK',
                'iDTASEMESTER.SEMESTER',
                'JUDULSKRIPSIIJINPN',
		'KETERANGANIJINPN',
		'TGLSUBMITIJINPN',
                'ACCSURIJINPN',
	array(
                    'type'=>'raw',
                    'value'=>  CHtml::link('List Permintaan Surat  <i class="fa fa-search"></i>' ,array('surijinpn/admin'),array('class'=>'btn green')).''.
                               CHtml::link('Hapus  <i class="fa fa-times"></i>',array('surijinpn/deletebyowner','id'=>$model->IDIJINPN),array('class'=>'btn red','confirm'=>'Hapus data ?')).''.
                               CHtml::link('Edit  <i class="fa fa-edit"></i>',array('surijinpn/update','id'=>$model->IDIJINPN),array('class'=>'btn yellow ')),
                )
	),
)); ?>
</div>
<!--membuat menu untuk mengirim permintaan srt.tugas ke divisi umum & perlengkapan -->


<div class="portlet-title">
<div class="caption">
	<i class="fa fa-envelope"></i> Kirim Permintaan Surat Ijin Penelitian #<?php echo $model->IDIJINPN; ?>  </div>
        <div class="actions">
            
        <!--jika surat permohonan sudah diajukan tombol pengajuan hilang jika belum akan --> 
        <?php 
        $a=$model->IDIJINPN;
        $sql="select IDIJINPN from detailsurijinpn where IDIJINPN='$a'";
        $b=  Yii::app()->db->createCommand($sql)->queryScalar();
        
        if($b==0){    
        echo CHtml::link('Ajukan permintaan/permohonan surat.... <i class="fa fa-arrow-circle-right"></i>',array('detailsurijinpn/create','IDIJINPN'=>$model->IDIJINPN),array('class'=>'btn btn purple'));
         }
        else
        {
            echo "Data sudah terkirim...";
        }
        ?>
        
        </div>
</div>
    
<div class="portlet-body">
<div class="portlet-title"><br>
         
            <button class="btn red" tabindex="-1" type="button">NOTE :</button>
            <?php array(      
            'value'=>$model->getListsendsurijinpn($model->IDIJINPN) ,
            );
            ?>
        
</div> 
</div> 
</div> 
<!--update preview notifikasi setelah action view dilakukan-->
<?php
$IDIJINPN = Yii::app()->request->getParam('id', 0);
$smod4el = Surijinpn::model()->updateByPk
        ($IDIJINPN, array("PREVIEW" => 'Y'));
?>
  
