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
                
		'KETERANGANPM',
		'TGLSUBMITPM',
                'ACCSURTUGPM',
array(
                    'type'=>'raw',
                    'value'=>  CHtml::link('List Permintaan Srt.Tugas PPM  <i class="fa fa-search"></i>' ,array('surtugpm/permintaansurat'),array('class'=>'btn green')),
                               )
	),
)); ?>
</div>

<!--membuat menu untuk mengirim permintaan srt.tugas ke divisi umum & perlengkapan -->


<div class="portlet-title">
<div class="caption">
	<i class="fa fa-envelope"></i> Kirim Permintaan Surat Tugas Pengabdian pada Masyarakat (PPM) #<?php echo $model->IDPM; ?>  </div>
        <div class="actions">
        
            
         </div>
</div>
    
<div class="portlet-body">
<div class="portlet-title"><br>
         

            <button class="btn red" tabindex="-1" type="button">NOTE :</button>
            <?php array(      
            'value'=>$model->getListsendsuratpm($model->IDPM) ,
            );

         ?>
</div> 
</div> 
</div> 


  
  
