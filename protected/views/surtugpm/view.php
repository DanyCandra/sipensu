<div class="portlet box yellow">
<div class="portlet-title">
  <div class="caption">
	<i class="fa fa-pencil-square-o"></i> View Permintaan Surat Tugas Pengabdian pada Masyarakat (PPM) #<?php echo $model->IDPM; ?>  </div>
</div>

<div class="portlet-body">
    
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions' => array('class'=> 'table table-bordered table-striped table-advance table-hover'),
	'attributes'=>array(
		'IDPM',
		'iDJENISSURAT.NAMAJENISSURAT',
                'NOSURATPM',
		'NIP',
                'nIP.NAMA2',
		'iDPANGGOL.PANGKAT',
                'iDPANGGOL.GOL',
		'iDJABATANAKADEMIK.NAMAJABATANAKADEMIK',
		'JUDULPM',
		//'TGLDILAKSANAKANPM',
                array(
                    'filter'=>'',
                    'label'=>'Tgl. Dilaksanakan',
                    'value' =>  IDDate::getDate($model->TGLDILAKSANAKANPM),
                    
                ),
		'INSTANSIPM',
		'ALAMATINSTANSIPM',
                'TGLCETAKSURAT',
		'KETERANGANPM',
		'TGLSUBMITPM',
                'ACCSURTUGPM',
                
array(
                    'type'=>'raw',
                    'value'=>  CHtml::link('List Permintaan Srt.Tugas  <i class="fa fa-search"></i>' ,array('surtugpm/admin'),array('class'=>'btn btn-outline-info round waves-effect')).''.
                               CHtml::link('Hapus  <i class="fa fa-times"></i>',array('surtugpm/deletebyowner','id'=>$model->IDPM),array('class'=>'btn btn-outline-danger round waves-effect','confirm'=>'Hapus data ?')).''.
                               CHtml::link('Edit  <i class="fa fa-edit"></i>',array('surtugpm/update','id'=>$model->IDPM),array('class'=>'btn btn-outline-warning round waves-effect ')),
                )
	),
)); ?>
</div>

<!--membuat menu untuk mengirim permintaan srt.tugas ke divisi umum & perlengkapan -->


<div class="portlet-title">
<div class="caption">
	<i class="fa fa-envelope"></i> Kirim Permintaan Surat Tugas Pengabdian pada Masyarakat (PPM) #<?php echo $model->IDPM; ?>  </div>
        <div class="actions">
        <?php 
        $a=$model->IDPM;
        //jika surat permohonan sudah diajukan tombol pengajuan hilang jika belum akan 
       // if (($model->detailsurtugpms)==0) 
        $sql="select IDPM from detailsurtugpm where IDPM='$a'";
        $b=  Yii::app()->db->createCommand($sql)->queryScalar();
        
        if($b==0){
        echo CHtml::link('Ajukan permintaan/permohonan surat.... <i data-feather="arrow-rigth-circle"></i>',array('detailsurtugpm/create','IDPM'=>$model->IDPM),array('class'=>'btn btn-outline-warning round waves-effect'));
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
         

            <button class="btn btn-outline-warning round waves-effect" tabindex="-1" type="button">NOTE :</button>
            <?php array(      
            'value'=>$model->getListsendsuratpm($model->IDPM) ,
            );

         ?>
</div> 
</div> 
</div> 


  
  
