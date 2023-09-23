<div class="portlet box yellow">
<div class="portlet-title">
  <div class="caption">
      	<i class="fa fa-pencil-square-o"></i> View Surat Pelaksanaan Praktik Kerja (Prodi D3) #<?php echo $model->IDSUBDETAILSURPELPK; ?>  </div> 
        <div class="actions">
        <?php echo CHtml::link('<i class="fa fa-plus"></i> Tambah ',array('subdetailsurpelpk/create','IDPK'=>$model->IDPK),array('class'=>'btn btn-sm blue'));?>    </div> 
    
        
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
                    'value'=>  //CHtml::link('List Surat Permohonan PK  <i class="fa fa-search"></i>' ,array('surperpk/admin'),array('class'=>'btn green')).''.
                               CHtml::link('List Surat Pelaksanaan PK <i class="fa fa-search"></i>' ,array('subdetailsurpelpk/admin'),array('class'=>'btn blue')).''.
                               CHtml::link('Hapus  <i class="fa fa-times"></i>',array('subdetailsurpelpk/deletebyowner','id'=>$model->IDSUBDETAILSURPELPK),array('class'=>'btn red','confirm'=>'Hapus data ?')).''.
                               CHtml::link('Edit  <i class="fa fa-edit"></i>',array('subdetailsurpelpk/update','id'=>$model->IDSUBDETAILSURPELPK),array('class'=>'btn yellow ')),
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
                array(
                    'header'=>'Action',
                    'htmlOptions'=>array('style'=>'width:60px'),
                   'class' => 'CButtonColumn',
                   'template' => ' {update} {delete}',
                    'buttons' => array(
                    //'view' => array(
                    //'label'=>'View',
                    //'url'=>'Yii::app()->createUrl("/groupsurperpk/view", array("id" => $data->IDGROUPSURPERPK))',
                     //   ), 

                    'update' => array(
                    'label' => 'Update',
                    'url' => 'Yii::app()->createUrl("/groupsurpelpk/updatemhs", array("id" => $data->IDGROUPSURPELPK,"IDSUBDETAILSURPELPK"=>$data->IDSUBDETAILSURPELPK))',
                        ),
                    'delete' => array(
                    'label' => 'delete',
                    'url' => 'Yii::app()->createUrl("/groupsurpelpk/delete", array("id" => $data->IDGROUPSURPELPK))',
                                    ),
                                        ),
                    ),
                
	),
	
)); 
?>
<?php  //echo CHtml::link('Tambahkan Group Mahasiswa &nbsp<i class="fa fa-user"></i>',array('groupsurpelpk/create','IDSUBDETAILSURPELPK'=>$model->IDSUBDETAILSURPELPK),array('class'=>'btn btn-default blue'));   
 ?>
    
<?php 
        $a=$model->IDSUBDETAILSURPELPK;
        $sql="select IDSUBDETAILSURPELPK from detailsurpelpk where IDSUBDETAILSURPELPK='$a'";
        $b=  Yii::app()->db->createCommand($sql)->queryScalar();
        
        if($b==0){
       
       echo CHtml::link('Tambahkan Group Mahasiswa &nbsp<i class="fa fa-user"></i>',array('groupsurpelpk/create','IDSUBDETAILSURPELPK'=>$model->IDSUBDETAILSURPELPK),array('class'=>'btn btn-default blue'));
        
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
            'value'=>$model->getListsendsuratpelpk($model->IDSUBDETAILSURPELPK) ,
            );
       ?>
    </div>
</div>

<div class="portlet-title">
<div class="actions">
        <!--jika surat permohonan sudah diajukan tombol pengajuan hilang jika belum akan --> 
        <?php 
        $a=$model->IDSUBDETAILSURPELPK;
        $sql="select IDSUBDETAILSURPELPK from detailsurpelpk where IDSUBDETAILSURPELPK='$a'";
        $b=  Yii::app()->db->createCommand($sql)->queryScalar();
        
        if($b==0){
       
       echo CHtml::link('Ajukan permintaan/permohonan surat.... &nbsp<i class="fa fa-arrow-circle-right"></i>',array('detailsurpelpk/create','IDSUBDETAILSURPELPK'=>$model->IDSUBDETAILSURPELPK),array('class'=>'btn btn purple'));
        
       }
        else
        {
            echo "Data sudah terkirim sebagai rujukan permintaan no.surat...";
        }
        ?>
        
</div>
</div></div>    
<!--update preview notifikasi setelah action view dilakukan-->
<?php
$IDSUBDETAILSURPELPK = Yii::app()->request->getParam('id', 0);
$smod4el = Subdetailsurpelpk::model()->updateByPk
        ($IDSUBDETAILSURPELPK, array("PREVIEW" => 'Y'));
?>