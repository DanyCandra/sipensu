<div class="portlet box yellow">
<div class="portlet-title">
  <div class="caption">
      	<i class="fa fa-pencil-square-o"></i> View Permintaan Surat Tugas Ijin Penelitian #<?php echo $model->IDPN; ?>  </div> 
       
        
</div>

<div class="portlet-body">
    
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions' => array('class'=> 'table table-bordered table-striped table-advance table-hover'),
	'attributes'=>array(
		'IDPN',
                'NOSURATPN',
		//'IDJENISSURAT',
                //'iDJENISSURAT.NAMAJENISSURAT',
                'JUDULPN',
               
		'WAKTUDATAPN',
                'KETERANGANSURTUGPN',
		'TGLSUBMITPN',
                'ACCSURTUGPN',
	array(
                    'type'=>'raw',
                    'value'=>  CHtml::link('List Permintaan Srt.Tugas  <i class="fa fa-search"></i>' ,array('surtugpn/permintaansurat'),array('class'=>'btn green')),
                              )
	),
)); ?>
</div>

<!--membuat menu untuk mengirim permintaan srt.tugas ke divisi umum & perlengkapan -->    
<div class="portlet-body">
<div class="portlet-title"><br>
           
<div class="portlet box purple">
<div class="portlet-title">
<div class="caption">
	<i class="fa fa-cogs"></i> Group Dosen Peminta/Pemohon Srt.Tugas Ijin Penelitian    
</div>

</div>
  
<div class="portlet-body">
<?php

//menampilkan list 
$listgroupdosen=new CActiveDataProvider('Groupsurtugpn',array('criteria'=>array('condition'=>'IDPN='.$model->IDPN)));
$this->widget('ext.GroupGridView', array(
	'id'=>'groupsurtugpn-grid',
	'dataProvider'=>$listgroupdosen,
	'itemsCssClass' => 'table table-bordered table-striped table-advance table-hover',
	'columns'=>array(
		//'IDPN',
		//'IDGROUPPN',
               
           
                'NIP',
		'nIP.NAMA2',
		'iDPANGGOL.PANGKAT',
                'iDPANGGOL.GOL',
		'iDJABATANAKADEMIK.NAMAJABATANAKADEMIK',
		'NOURUTGROUPPN',
		//'KETERANGANPN', 
                 array(
                    
                    'header'=>'Instansi Penelitian',
                    'value' => '$data->listgroupinstansipn',
                    ),
                
               
    ),
	
)); 

?>

</div>
</div>
<button class="btn red" tabindex="-1" type="button">NOTE :</button>
<?php
       array(      
            'value'=>$model->getListsendsuratpn($model->IDPN) ,
            );
       ?>
    </div>
</div>
<div class="portlet-title">
<div class="actions">
        <!--jika surat permohonan sudah diajukan tombol pengajuan hilang jika belum akan --> 
        
        
  </div>
</div></div>