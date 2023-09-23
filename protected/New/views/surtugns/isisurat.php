<div class="portlet box yellow">
<div class="portlet-title">
  <div class="caption">
	<i class="fa fa-pencil-square-o"></i> View Permintaan Surat Tugas Lainnya #<?php echo $model->IDSURTUGNS; ?>  </div>
</div>

<div class="portlet-body">
    
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions' => array('class'=> 'table table-bordered table-striped table-advance table-hover'),
	'attributes'=>array(
		'IDSURTUGNS',
                'iDJENISSURAT.NAMAJENISSURAT',
                'NOSURTUGNS',
		'NIP',
                'nIP.NAMA2',
                'iDPANGGOL.PANGKAT',
                'iDPANGGOL.GOL',
		'iDJABATANAKADEMIK.NAMAJABATANAKADEMIK',
		'ISISURTUGNS1',
		'ISISURTUGNS',
		'INSTANSINS',
		'ALAMATINSTANSINS',
		'TGLACARANS',
                /* array(
                    'filter'=>'',
                    'label'=>'Tgl. Acara',
                    'value' =>  IDDate::getDate($model->TGLACARANS),
                    
                ),*/
		'KETERANGANNS',
		'TGLSUBMITNS',
                'ACCSURTUGNS',
	array(
                    'type'=>'raw',
                    'value'=>  CHtml::link('List Permintaan Srt.Tugas  <i class="fa fa-search"></i>' ,array('surtugns/permintaansurat'),array('class'=>'btn green')),
                               )
	),
)); ?>
</div>
<!--membuat menu untuk mengirim permintaan srt.tugas ke divisi umum & perlengkapan -->


<div class="portlet-title">
<div class="caption">
	<i class="fa fa-envelope"></i> Kirim Permintaan Surat Tugas Lainnya #<?php echo $model->IDSURTUGNS; ?>  </div>
        <div class="actions">
            
        <!--jika surat permohonan sudah diajukan tombol pengajuan hilang jika belum akan --> 
       
        
        </div>
</div>
    
<div class="portlet-body">
<div class="portlet-title"><br>
         
            <button class="btn red" tabindex="-1" type="button">NOTE :</button>
            <?php array(      
            'value'=>$model->getListsendsuratns($model->IDSURTUGNS) ,
            );
            ?>
        
</div> 
</div> 
</div> 
  
