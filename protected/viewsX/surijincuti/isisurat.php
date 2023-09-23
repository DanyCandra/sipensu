<div class="portlet box yellow">
<div class="portlet-title">
  <div class="caption">
	<i class="fa fa-pencil-square-o"></i> View Permintaan Surat Izin Cuti Akademik  #<?php echo $model->IDIJINCUTI; ?>  </div>
</div>

<div class="portlet-body">
    
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions' => array('class'=> 'table table-bordered table-striped table-advance table-hover'),
	'attributes'=>array(
		'IDIJINCUTI',
		'IDJENISSURAT',
                'iDJENISSURAT.NAMAJENISSURAT',
                'iDTASEMESTER.TAHUNAKADEMIK',
		'iDTASEMESTER.SEMESTER',
		'NOSURATIJINCUTI',
		'NIM',
                'nIM.NAMA',
                'nIM.TAHUNANGKATAN',
                'nIM.iDPRODI.NAMAPRODI',
                'nIM.iDPRODI.iDFAKULTAS.FAKULTAS',
                'nIM.ALAMATASAL',
		'LAMAIJINCUTI',
                'THAKADEMIKCUTI',
                'SEMESTERCUTI',
		'SKSCAPAI',
		'IPKCAPAI',
		'KETERANGANIJINCUTI',
		'STATUSTERKINI',
                'NIP',
                'nIP.NAMA2',
                'KETERANGAN',
		'TGLSUBMITIJINCUTI',
            
	/*array(
                    'type'=>'raw',
                    'value'=>  CHtml::link('List Permintaan Surat  <i class="fa fa-search"></i>' ,array('surijincuti/admin'),array('class'=>'btn green')).''.
                               CHtml::link('Hapus  <i class="fa fa-times"></i>',array('surijincuti/deletebyowner','id'=>$model->IDIJINCUTI),array('class'=>'btn red','confirm'=>'Hapus data ?')).''.
                               CHtml::link('Edit  <i class="fa fa-edit"></i>',array('surijincuti/update','id'=>$model->IDIJINCUTI),array('class'=>'btn yellow ')),
                )*/
	),
)); ?>
<div class="form-actions  left">
     <div class="">
                   
		 <?php echo CHtml::link('Lihat Daftar Permintaan Surat  <i class="fa fa-search"></i>' ,array('surijincuti/permintaansurat'),array('class'=>'btn green'));?> 
                 <?php 
                    $a=$model->IDIJINCUTI;
                    $sql="select IDIJINCUTI from detailsurijincuti where IDIJINCUTI='$a'";
                    $b=  Yii::app()->db->createCommand($sql)->queryScalar();
        
                    if($b==0){    
                    echo CHtml::link('Edit  <i class="fa fa-edit"></i>',array('surijincuti/updatebymahasiswa','id'=>$model->IDIJINCUTI),array('class'=>'btn blue '));
                    }
                    else
                    {
                       echo "";
                     }
                    ?>  
		</div>
                </div>
</div>
<!--membuat menu untuk mengirim permintaan srt.tugas ke divisi umum & perlengkapan -->


<div class="portlet-title">
<div class="caption">
	<i class="fa fa-envelope"></i> Kirim Permintaan Surat Izin Cuti Akademik #<?php echo $model->IDIJINCUTI; ?>  </div>
        <div class="actions">
         <!--jika surat permohonan sudah diajukan tombol pengajuan hilang jika belum akan --> 
        <?php 
        $a=$model->IDIJINCUTI;
        $sql="select IDIJINCUTI from detailsurijincuti where IDIJINCUTI='$a'";
        $b=  Yii::app()->db->createCommand($sql)->queryScalar();
        
        if($b==0){    
        echo CHtml::link('Ajukan permintaan/permohonan surat.... <i class="fa fa-arrow-circle-right"></i>',array('detailsurijincuti/createbymahasiswa','IDIJINCUTI'=>$model->IDIJINCUTI),array('class'=>'btn btn purple'));
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
            'value'=>$model->getListsendsuratijincuti($model->IDIJINCUTI) ,
            );
            ?>
    
</div> 
</div>     
