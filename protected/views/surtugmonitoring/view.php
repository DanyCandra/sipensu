<div class="portlet box yellow">
<div class="portlet-title">
  <div class="caption">
      	<i class="fa fa-pencil-square-o"></i> View Surat Tugas Monitoring Praktik Kerja (Prodi D3) #<?php echo $model->IDSURTUGMONITORING; ?>  </div> 
        <div class="actions">
        <?php echo CHtml::link('<i class="fa fa-plus"></i> Tambah ',array('surtugmonitoring/create','IDSUBDETAILSURPELPK'=>$model->IDSUBDETAILSURPELPK),array('class'=>'btn btn-sm blue'));?>    </div> 
    
        
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
                    'value'=>  //CHtml::link('List Surat Pelaksanaan PK  <i class="fa fa-search"></i>' ,array('subdetailsurpelpk/admin'),array('class'=>'btn green')).''.
                               CHtml::link('List Surat Tugas Monitoring PK <i class="fa fa-search"></i>' ,array('surtugmonitoring/admin'),array('class'=>'btn blue')).''.
                               CHtml::link('Hapus  <i class="fa fa-times"></i>',array('surtugmonitoring/deletebyowner','id'=>$model->IDSURTUGMONITORING),array('class'=>'btn red','confirm'=>'Hapus data ?')).''.
                               CHtml::link('Edit  <i class="fa fa-edit"></i>',array('surtugmonitoring/update','id'=>$model->IDSURTUGMONITORING),array('class'=>'btn yellow ')),
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
                array(
                    'header'=>'Action',
                    'htmlOptions'=>array('style'=>'width:60px'),
                   'class' => 'CButtonColumn',
                   'template' => ' {update} {delete}',
                    'buttons' => array(
                    'view' => array(
                    //'label'=>'View',
                    //'url'=>'Yii::app()->createUrl("/groupsurtugmonitoring/view", array("id" => $data->IDGROUPSURTUGMONITORING))',
                        ), 

                    'update' => array(
                    'label' => 'Update',
                    'url' => 'Yii::app()->createUrl("/groupsurtugmonitoring/update", array("id" => $data->IDGROUPSURTUGMONITORING,"IDSURTUGMONITORING"=>$data->IDSURTUGMONITORING))',
                        ),
                    'delete' => array(
                    'label' => 'delete',
                    'url' => 'Yii::app()->createUrl("/groupsurtugmonitoring/delete", array("id" => $data->IDGROUPSURTUGMONITORING))',
                                    ),
                                        ),
                    ),
                
	),
	
)); 
?>    
 <?php 
         $a=$model->IDSURTUGMONITORING;
        $sql="select IDSURTUGMONITORING from detailsurtugmonitoring where IDSURTUGMONITORING='$a'";
        $b=  Yii::app()->db->createCommand($sql)->queryScalar();
        
       if($b==0){
        echo CHtml::link('Tambahkan Group Mahasiswa &nbsp<i class="fa fa-user"></i>',array('groupsurtugmonitoring/create','IDSURTUGMONITORING'=>$model->IDSURTUGMONITORING),array('class'=>'btn btn-default blue'));
 }
        else
        {
           echo "Group Mahasiswa sudah terkirim..";
        }
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
        <?php 
         $a=$model->IDSURTUGMONITORING;
        $sql="select IDSURTUGMONITORING from detailsurtugmonitoring where IDSURTUGMONITORING='$a'";
        $b=  Yii::app()->db->createCommand($sql)->queryScalar();
        
       if($b==0){
       
       echo CHtml::link('Ajukan permintaan/permohonan surat.... &nbsp<i class="fa fa-arrow-circle-right"></i>',array('detailsurtugmonitoring/create','IDSURTUGMONITORING'=>$model->IDSURTUGMONITORING),array('class'=>'btn btn purple'));
        
       }
        else
        {
           echo "Data sudah terkirim...";
        }
        ?>
        
</div>
</div>
</div>        
<!--update preview notifikasi setelah action view dilakukan-->
<?php
$IDSURTUGMONITORING = Yii::app()->request->getParam('id', 0);
$smod4el = Surtugmonitoring::model()->updateByPk
        ($IDSURTUGMONITORING, array("PREVIEW" => 'Y'));
?>
