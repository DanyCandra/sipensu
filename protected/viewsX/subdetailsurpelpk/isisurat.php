<div class="portlet box yellow">
<div class="portlet-title">
  <div class="caption">
      	<i class="fa fa-pencil-square-o"></i> View Surat Pelaksanaan Praktik Kerja (Prodi D3) #<?php echo $model->IDSUBDETAILSURPELPK; ?>  </div> 
       
       
</div>

<div class="portlet-body">
    
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions' => array('class'=> 'table table-bordered table-striped table-advance table-hover'),
	'attributes'=>array(
                
		'IDSUBDETAILSURPELPK',
                'iDJENISSURAT.NAMAJENISSURAT',
                'NOSURPELPK',
		'iDPK.INSTANSIPK',
                'iDPK.ALAMATINSTANSIPK',
                'iDPK.KOTAINSTANSIPK',
                'iDPK.iDTASEMESTER.TAHUNAKADEMIK',
                'iDPK.iDTASEMESTER.SEMESTER',
		'TGLMULAISURPELPK',
                'TGLAKHIRSURPELPK',
             /*array(
                    'filter'=>'',
                    'label'=>'Tgl. Mulai',
                    'value' =>  IDDate::getDate($model->TGLMULAISURPELPK),
                    
                ),
		
             array(
                    'filter'=>'',
                    'label'=>'Tgl. Akhir',
                    'value' =>  IDDate::getDate($model->TGLAKHIRSURPELPK),
                    
                ),*/
		'KETERANGANSUBDETAILSURPELPK',
		'TGLSUBMITSUBDETAILSURPELPK',
                'ACCSURPELPK',
            array(
                    'type'=>'raw',
                    'value'=>  CHtml::link('List Permintaan Surat Pelaksanaan PK  <i class="fa fa-search"></i>' ,array('surperpk/permintaansurat'),array('class'=>'btn green')),

                )
	),
)); ?>
</div>
<!--menampilkan group mahasiswa pelaksanaan praktik kerja berdasarkan group permohonan praktik kerja-->
<div class="portlet-body">
<div class="portlet-title">
    
<div class="portlet box purple">
<div class="portlet-title">
<div class="caption">
	<i class="fa fa-cogs"></i> Group Mahasiswa Pemohon Surat   
</div>
</div>
  
<div class="portlet-body">
<?php
//menampilkan list 
$listgroupmahasiswasurpelpk=new CActiveDataProvider('Groupsurpelpk',array('criteria'=>array('condition'=>'IDSUBDETAILSURPELPK='.$model->IDSUBDETAILSURPELPK)));
$this->widget('ext.GroupGridView', array(
	'id'=>'groupsurpelpk-grid',
	'dataProvider'=>$listgroupmahasiswasurpelpk,
	'itemsCssClass' => 'table table-bordered table-striped table-advance table-hover',
	'columns'=>array(
                //'IDGROUPSURPELPK',
		//'IDSUBDETAILSURPELPK',
		
                'NIM',
		'nIM.NAMA',
		'nIM.iDPRODI.NAMAPRODI',
		'NOURUTSURPELPK',
                
                
	),
	
)); 
?>


</div>
</div>
<!--membuat perintah untuk mengirim surat pelaksanaan PK ke sub.umum untuk diberi no.surat-->
<button class="btn red" tabindex="-1" type="button">NOTE :</button>
<?php
       array(      
            'value'=>$model->getListsendsuratpelpk($model->IDSUBDETAILSURPELPK) ,
            );
       ?>
    </div>
</div>

<div class="portlet-title">
<div class="actions">
       
        
</div>
</div></div>    