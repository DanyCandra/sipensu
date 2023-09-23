<div class="portlet box yellow">
<div class="portlet-title">
  <div class="caption">
	<i class="fa fa-pencil-square-o"></i> View Permintaan Surat Pernyataan Masih Kuliah #<?php echo $model->IDMK; ?>  </div>
        
</div>

<div class="portlet-body">
    
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions' => array('class'=> 'table table-bordered table-striped table-advance table-hover'),
	'attributes'=>array(
		'IDMK',
		'iDJENISSURAT.NAMAJENISSURAT',
		'NOSURATMK',
		'NIM',
                'nIM.NAMA',
                'nIM.iDPRODI.NAMAPRODI',
                'iDTASEMESTER.TAHUNAKADEMIK',
                'iDTASEMESTER.SEMESTER',
		'NAMAWALIMK',
		'NIPWALIMK',
		'PANGGOL',
		'INSTANSIWALIMK',
                'KETERANGANSURPERMK',
		'TGLSUBMITMK',
                'ACCSURPERMK',
	/*/*array(
                   
                   // 'type'=>'raw',
                    //'value'=>CHtml::link('Edit  <i class="fa fa-edit"></i>',array('surpermk/update','id'=>$model->IDMK),array('class'=>'btn blue ')),
               )*/
	),
)); ?>
    
 <div class="form-actions  left">
     <div class="">
                   
		 <?php echo CHtml::link('Lihat Daftar Permintaan Surat  <i class="fa fa-search"></i>' ,array('surpermk/permintaansurat'),array('class'=>'btn green'));?> 
                 <?php 
                    $a=$model->IDMK;
                    $sql="select IDMK from detailsurpermk where IDMK='$a'";
                    $b=  Yii::app()->db->createCommand($sql)->queryScalar();
        
                    if($b==0){    
                    echo CHtml::link('Edit  <i class="fa fa-edit"></i>',array('surpermk/updatebymahasiswa','id'=>$model->IDMK),array('class'=>'btn blue '));
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
	<i class="fa fa-envelope"></i> Kirim Permintaan Surat Pernyataan Masih Kuliah #<?php echo $model->IDMK; ?>  </div>
        <div class="actions">
         <!--jika surat permohonan sudah diajukan tombol pengajuan hilang jika belum akan --> 
        <?php 
        $a=$model->IDMK;
        $sql="select IDMK from detailsurpermk where IDMK='$a'";
        $b=  Yii::app()->db->createCommand($sql)->queryScalar();
        
        if($b==0){    
        echo CHtml::link('Ajukan permintaan/permohonan surat.... <i class="fa fa-arrow-circle-right"></i>',array('detailsurpermk/createbymahasiswa','IDMK'=>$model->IDMK),array('class'=>'btn btn purple'));
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
            'value'=>$model->getListsendsuratmk($model->IDMK) ,
            );
            ?>
    
</div> 
</div> 
</div> 
