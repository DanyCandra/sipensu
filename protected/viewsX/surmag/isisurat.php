<div class="portlet box yellow">
<div class="portlet-title">
  <div class="caption">
	<i class="fa fa-pencil-square-o"></i> View Permintaan Surat Permohonan Magang #<?php echo $model->IDSURMAG; ?>  </div>
</div>

<div class="portlet-body">
    
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions' => array('class'=> 'table table-bordered table-striped table-advance table-hover'),
	'attributes'=>array(
		'IDSURMAG',
		'iDJENISSURAT.NAMAJENISSURAT',
		'NOSURMAG',
		'INSTANSISURMAG',
		'ALAMATINSTANSISURMAG',
                'KOTAINSTANSISURMAG',
                'iDTASEMESTER.TAHUNAKADEMIK',
                'iDTASEMESTER.SEMESTER',
                'TGLMULAISURMAG',
             /*array(
                    'filter'=>'',
                    'label'=>'Tgl. Mulai Magang',
                    'value' =>  IDDate::getDate($model->TGLMULAISURMAG),
                    
                ),*/
                'TGLAKHIRSURMAG',
              /*array(
                    'filter'=>'',
                    'label'=>'Tgl. Akhir Magang',
                    'value' =>  IDDate::getDate($model->TGLAKHIRSURMAG),
                    
                ),*/
		'KETERANGANSURMAG',
		'TGLSUBMITSURMAG',
                'ACCSURMAG',
	/*array(
                    'type'=>'raw',
                    'value'=>  CHtml::link('List Permintaan Surat  <i class="fa fa-search"></i>' ,array('surmag/admin'),array('class'=>'btn green')).''.
                               CHtml::link('Edit  <i class="fa fa-edit"></i>',array('surmag/update','id'=>$model->IDSURMAG),array('class'=>'btn yellow ')),
                )*/
	),
)); ?>

    
<div class="form-actions  left">
     <div class="">
                   
		 <?php echo CHtml::link('Lihat Daftar Permintaan Surat  <i class="fa fa-search"></i>' ,array('surmag/permintaansurat'),array('class'=>'btn green'));?> 
                 <?php 
                    $a=$model->IDSURMAG;
                    $sql="select IDSURMAG from detailsurmag where IDSURMAG='$a'";
                    $b=  Yii::app()->db->createCommand($sql)->queryScalar();
        
                    if($b==0){    
                    echo CHtml::link('Edit  <i class="fa fa-edit"></i>',array('surmag/updatebymahasiswa','id'=>$model->IDSURMAG),array('class'=>'btn blue '));
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
	<i class="fa fa-envelope"></i> View Group/Personal Mahasiswa Permohonan Magang  #<?php echo $model->IDSURMAG; ?>  </div>
</div>
    
<div class="portlet-body">
<div class="portlet-title"><br>
           
<div class="portlet box purple">
<div class="portlet-title">
<div class="caption">
	<i class="fa fa-cogs"></i> Group/Personal Mahasiswa Peminta/Pemohon Srt.Magang    
</div>
</div>
  
<div class="portlet-body">
<?php
//menampilkan list 
$listgroupmahasiswasurmag=new CActiveDataProvider('Groupsurmag',array('criteria'=>array('condition'=>'IDSURMAG='.$model->IDSURMAG)));
$this->widget('ext.GroupGridView', array(
	'id'=>'groupsurmag-grid',
	'dataProvider'=>$listgroupmahasiswasurmag,
	'itemsCssClass' => 'table table-bordered table-striped table-advance table-hover',
	'columns'=>array(
		//'IDSURMAG',
		
                'NIM',
		'nIM.NAMA',
		'nIM.iDPRODI.NAMAPRODI',
		'NOURUTGROUPSURMAG',
                
                array(
                    'header'=>'Action',
                    'htmlOptions'=>array('style'=>'width:20px'),
                   'class' => 'CButtonColumn',
                   'template' => '{update} {delete}',
                    'buttons' => array( 
                      
                    'update' => array(
                    'label' => 'Update',
                    'url' => 'Yii::app()->createUrl("/groupsurmag/updatemhs", array("id" => $data->IDGROUPSURMAG))',
                        ),
                    'delete' => array(
                    'label' => 'delete',
                    'url' => 'Yii::app()->createUrl("/groupsurmag/deletemhs", array("id" => $data->IDGROUPSURMAG))',
                                    ),
                                        ),
                    ),
	 
                
	),
	
)); 

?>
 <?php 
        $a=$model->IDSURMAG;
        $sql="select IDSURMAG from detailsurmag where IDSURMAG='$a'";
        $b=  Yii::app()->db->createCommand($sql)->queryScalar();
        
        if($b==0){
       
       echo CHtml::link('Create Mahasiswa &nbsp<i class="fa fa-user"></i>',array('groupsurmag/createmhs','IDSURMAG'=>$model->IDSURMAG),array('class'=>'btn btn-default blue'));
   
       }
        else
        {
            echo "Group Mahasiswa sudah terkirim..";
        }
        ?>    
</div>
</div>
<button class="btn red" tabindex="-1" type="button">NOTE :</button>
<?php
       array(      
            'value'=>$model->getListsendsurmag($model->IDSURMAG) ,
            );
       ?>
    </div>
</div>
<div class="portlet-title">
<div class="actions">
        <!--jika surat permohonan sudah diajukan tombol pengajuan hilang jika belum akan --> 
        <?php 
        $a=$model->IDSURMAG;
        $sql="select IDSURMAG from detailsurmag where IDSURMAG='$a'";
        $b=  Yii::app()->db->createCommand($sql)->queryScalar();
        
        if($b==0){
       
       echo CHtml::link('Ajukan permintaan/permohonan surat.... &nbsp<i class="fa fa-arrow-circle-right"></i>',array('detailsurmag/createbymahasiswa','IDSURMAG'=>$model->IDSURMAG),array('class'=>'btn btn purple'));
        
       }
        else
        {
            echo "Data sudah terkirim...";
        }
        ?>
        
  </div>
</div></div></div>