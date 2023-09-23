<div class="portlet box yellow">
<div class="portlet-title">
  <div class="caption">
      	<i class="fa fa-pencil-square-o"></i> View Surat Tugas Monitoring Praktik Kerja (Prodi D3) #<?php echo $model->IDSURTUGMONITORING; ?>  </div> 
        
</div>

<div class="portlet-body">
    
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions' => array('class'=> 'table table-bordered table-striped table-advance table-hover'),
	'attributes'=>array(

		'IDSURTUGMONITORING',
                'iDJENISSURAT.NAMAJENISSURAT',
                'NOSURTUGMONITORING',
		'iDSUBDETAILSURPELPK.iDPK.INSTANSIPK',
		'iDSUBDETAILSURPELPK.iDPK.ALAMATINSTANSIPK',
                'iDSUBDETAILSURPELPK.iDPK.KOTAINSTANSIPK',
                 'iDSUBDETAILSURPELPK.iDPK.iDTASEMESTER.TAHUNAKADEMIK',
                'iDSUBDETAILSURPELPK.iDPK.iDTASEMESTER.SEMESTER',
                'iDSUBDETAILSURPELPK.TGLMULAISURPELPK',
                'iDSUBDETAILSURPELPK.TGLAKHIRSURPELPK',
             /*array(
                    'filter'=>'',
                    'label'=>'Tgl. Mulai PK',
                    'value' =>  IDDate::getDate($model->iDSUBDETAILSURPELPK->TGLMULAISURPELPK),
                    
                ),
                
            array(
                    'filter'=>'',
                    'label'=>'Tgl. Akhir PK',
                    'value' =>  IDDate::getDate($model->iDSUBDETAILSURPELPK->TGLAKHIRSURPELPK),
                    
                ),*/
                'NIP',
                'nIP.NAMA2',
		'KETERANGANSURTUGMONITORING',
		'TGLSUBMITSURTUGMONITORING',
                'ACCSURTUGMONITORING',
	array(
                    'type'=>'raw',
                    'value'=>  CHtml::link('List Monitoring PK  <i class="fa fa-search"></i>' ,array('surtugmonitoring/permintaansurat'),array('class'=>'btn green')),
                               
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
	<i class="fa fa-cogs"></i> Group Mahasiswa Monitoring Praktik Kerja
</div>
</div>
  
<div class="portlet-body">
<?php
//menampilkan list 
$listgroupmahasiswasurtugmonitoring=new CActiveDataProvider('Groupsurtugmonitoring',array('criteria'=>array('condition'=>'IDSURTUGMONITORING='.$model->IDSURTUGMONITORING)));
$this->widget('ext.GroupGridView', array(
	'id'=>'groupsurtugmonitoring-grid',
	'dataProvider'=>$listgroupmahasiswasurtugmonitoring,
	'itemsCssClass' => 'table table-bordered table-striped table-advance table-hover',
	'columns'=>array(
		//'IDSUBDETAILSURPELPK',
		//'IDSURTUGMONITORING',
                'NIM',
		'nIM.NAMA',
		'nIM.iDPRODI.NAMAPRODI',
		'NOURUTSURTUGMONITORING',
               
                
	),
	
)); 
?>    

</div>
</div>
<!--membuat perintah untuk mengirim surat pelaksanaan PK ke sub.umum untuk diberi no.surat-->
<button class="btn red" tabindex="-1" type="button">NOTE :</button>
<?php
       array(      
            'value'=>$model->getListsendsurtugmonitoring($model->IDSURTUGMONITORING) ,
            );
       ?>
    </div>
</div>

<div class="portlet-title">
<div class="actions">
        <!--jika surat permohonan sudah diajukan tombol pengajuan hilang jika belum akan --> 
        
        
</div>
</div>
</div>        
