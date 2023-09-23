<div class="portlet box yellow">
<div class="portlet-title">
  <div class="caption">
	<i class="fa fa-pencil-square-o"></i> View Permintaan Surat Keterangan  #<?php echo $model->IDSURKET; ?>  
  </div>
</div>

<div class="portlet-body">


<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
        'htmlOptions' => array('class'=> 'table table-bordered table-striped table-advance table-hover'),
	'attributes'=>array(
		'IDSURKET',
		//'IDJENISSURAT',
                'iDJENISSURAT.NAMAJENISSURAT',
                'NOSURKET',
		//'IDTASEMESTER',
		'iDTASEMESTER.TAHUNAKADEMIK',
		'iDTASEMESTER.SEMESTER',
		'NIM',
                'nIM.NAMA',
                'nIM.TEMPATLAHIR',
                'nIM.TGLLAHIR',
                'nIM.ALAMATASAL',
                'nIM.iDPRODI.NAMAPRODI',
		//'PERIHAL1',
		//'PERIHAL2',
                  array(
                    'label'=>'Perihal',
                    //'type'=>'raw',
                    'value'=>$model->getStatusperihalsuratketerangan(),
                ),
		'KETERANGANSURKET',
		'TGLCETAKSURKET',
		'TGLSUBMITSURKET',
		'ACCSURKET',
		
	/*array(
                    'type'=>'raw',
                    'value'=>  CHtml::link('List Permintaan Surat Keterangan <i class="fa fa-search"></i>' ,array('suratketerangan/permintaansuratketerangan'),array('class'=>'btn green')),
                               
                )*/
	),
)); ?>
    
<div class="form-actions  left">
     <div class="">
                   
		 <?php echo CHtml::link('Lihat Daftar Permintaan Surat  <i class="fa fa-search"></i>' ,array('suratketerangan/permintaansuratketerangan'),array('class'=>'btn green'));?> 
                 <?php 
                    $a=$model->IDSURKET;
                    $sql="select IDSURKET from detailsuratketerangan where IDSURKET='$a'";
                    $b=  Yii::app()->db->createCommand($sql)->queryScalar();
        
                    if($b==0){    
                    echo CHtml::link('Edit  <i class="fa fa-edit"></i>',array('suratketerangan/updatebymhs','id'=>$model->IDSURKET),array('class'=>'btn blue '));
                    }
                    else
                    {
                       echo "";
                     }
                    ?>  
		</div>
                </div>    
</div>

<!--membuat menu untuk mengirim permintaan srt.keterangan ke divisi umum & perlengkapan -->


<div class="portlet-title">
<div class="caption">
	<i class="fa fa-envelope"></i> Kirim Permintaan Surat Keterangan #<?php echo $model->IDSURKET; ?>  </div>
        <div class="actions">
         <!--jika surat permohonan sudah diajukan tombol pengajuan hilang jika belum akan --> 
        <?php 
        $a=$model->IDSURKET;
        $sql="select IDSURKET from detailsuratketerangan where IDSURKET='$a'";
        $b=  Yii::app()->db->createCommand($sql)->queryScalar();
        
        if($b==0){    
        echo CHtml::link('Ajukan permintaan/permohonan surat.... <i class="fa fa-arrow-circle-right"></i>',array('detailsuratketerangan/createbymhs','IDSURKET'=>$model->IDSURKET),array('class'=>'btn btn purple'));
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
            'value'=>$model->getListsendsuratketerangan($model->IDSURKET) ,
            );
            ?>
    
</div> 
</div> 
</div>   
