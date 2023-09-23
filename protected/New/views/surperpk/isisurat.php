<div class="portlet box yellow">
<div class="portlet-title">
  <div class="caption">
      	<i class="fa fa-pencil-square-o"></i> View Surat Permohonan Praktik Kerja (Prodi D3) #<?php echo $model->IDPK; ?>  </div> 
        
        
</div>

<div class="portlet-body">
    
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions' => array('class'=> 'table table-bordered table-striped table-advance table-hover'),
	'attributes'=>array(
		'IDPK',
		'iDJENISSURAT.NAMAJENISSURAT',
		'NOSURATPK',
		'INSTANSIPK',
		'ALAMATINSTANSIPK',
		'KOTAINSTANSIPK',
                'iDTASEMESTER.TAHUNAKADEMIK',
                'iDTASEMESTER.SEMESTER',
                'ACCPERPK',
		'KETERANGANPK',
		'TGLSUBMITPK',
                'ACCSURPERPK',
	array(
                    'type'=>'raw',
                    'value'=>  CHtml::link('List Permintaan Surat  <i class="fa fa-search"></i>' ,array('surperpk/permintaansurat'),array('class'=>'btn green')),
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
	<i class="fa fa-cogs"></i> Group Mahasiswa Pemohon Surat   
</div>
</div>
  
<div class="portlet-body">
<?php
//menampilkan list 
$listgroupmahasiswasurmag=new CActiveDataProvider('Groupsurperpk',array('criteria'=>array('condition'=>'IDPK='.$model->IDPK)));
$this->widget('ext.GroupGridView', array(
	'id'=>'groupsurperpk-grid',
	'dataProvider'=>$listgroupmahasiswasurmag,
	'itemsCssClass' => 'table table-bordered table-striped table-advance table-hover',
	'columns'=>array(
		//'IDPK',
		//'IDGROUPSURPERPK',
                'NIM',
		'nIM.NAMA',
		'nIM.iDPRODI.NAMAPRODI',
		'NOURUTSURPERPK',
                
                
	),
	
)); 

?>
   

</div>
</div>
<button class="btn red" tabindex="-1" type="button">NOTE :</button>
<?php
       array(      
            'value'=>$model->getListsendsuratpk($model->IDPK) ,
            );
       ?>
    </div>
</div>
<div class="portlet-title">
<div class="actions">
        
        
  </div>
</div></div>    