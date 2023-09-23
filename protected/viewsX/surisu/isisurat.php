<div class="portlet box yellow">
<div class="portlet-title">
  <div class="caption">
	<i class="fa fa-pencil-square-o"></i> View Permintaan Surat Ijin Survei  #<?php echo $model->IDISU; ?>  </div>
</div>

<div class="portlet-body">
    
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions' => array('class'=> 'table table-bordered table-striped table-advance table-hover'),
	'attributes'=>array(
		'IDISU',
		'iDJENISSURAT.NAMAJENISSURAT',
		'NOISU',
		'INSTANSIISU',
		'ALAMATINSTANSIISU',
		'KOTAINSTANSIISU',
		'iDTASEMESTER.TAHUNAKADEMIK',
                'iDTASEMESTER.SEMESTER',
                'iDMATAKULIAHISU.NAMAMATAKULIAHISU',
		'KETERANGANISU',
		'TGLSUBMITISU',
                'ACCSURISU',
	/*array(
                    'type'=>'raw',
                    'value'=>  CHtml::link('List Permintaan Surat  <i class="fa fa-search"></i>' ,array('surisu/admin'),array('class'=>'btn green')).''.
                               CHtml::link('Hapus  <i class="fa fa-times"></i>',array('surisu/deletebyowner','id'=>$model->IDISU),array('class'=>'btn red','confirm'=>'Hapus data ?')).''.
                               CHtml::link('Edit  <i class="fa fa-edit"></i>',array('surisu/update','id'=>$model->IDISU),array('class'=>'btn yellow ')),
                )*/
	),
)); ?>

<div class="form-actions  left">
     <div class="">
                   
		 <?php echo CHtml::link('Lihat Daftar Permintaan Surat  <i class="fa fa-search"></i>' ,array('surisu/permintaansurat'),array('class'=>'btn green'));?> 
                 <?php 
                    $a=$model->IDISU;
                    $sql="select IDISU from detailsurisu where IDISU='$a'";
                    $b=  Yii::app()->db->createCommand($sql)->queryScalar();
        
                    if($b==0){    
                    echo CHtml::link('Edit  <i class="fa fa-edit"></i>',array('surisu/updatebymahasiswa','id'=>$model->IDISU),array('class'=>'btn blue '));
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
	<i class="fa fa-envelope"></i> View Group Mahasiswa Ijin Survei  #<?php echo $model->IDISU; ?>  </div>
</div>
    
<div class="portlet-body">
<div class="portlet-title"><br>
           
<div class="portlet box purple">
<div class="portlet-title">
<div class="caption">
	<i class="fa fa-cogs"></i> Group Mahasiswa Peminta/Pemohon Srt.Ijin Survei    
</div>
</div>
  
<div class="portlet-body">
<?php
//menampilkan list 
$listgroupmahasiswasurisu=new CActiveDataProvider('Groupsurisu',array('criteria'=>array('condition'=>'IDISU='.$model->IDISU)));
$this->widget('ext.GroupGridView', array(
	'id'=>'groupsurisu-grid',
	'dataProvider'=>$listgroupmahasiswasurisu,
	'itemsCssClass' => 'table table-bordered table-striped table-advance table-hover',
	'columns'=>array(
		//'IDISU',
		//'IDGROUPSURISU',
                'NIM',
		'nIM.NAMA',
		'nIM.iDPRODI.NAMAPRODI',
		'NOURUTGROUPSURISU',
                array(
                    'header'=>'Action',
                    'htmlOptions'=>array('style'=>'width:60px'),
                   'class' => 'CButtonColumn',
                   'template' => ' {update} {delete}',
                    'buttons' => array(
                    'view' => array(
                    //'label'=>'View',
                    //'url'=>'Yii::app()->createUrl("/groupsurisu/view", array("id" => $data->IDGROUPSURISU))',
                        ), 

                    'update' => array(
                    'label' => 'Update',
                    'url' => 'Yii::app()->createUrl("/groupsurisu/updatemhs", array("id" => $data->IDGROUPSURISU))',
                        ),
                    'delete' => array(
                    'label' => 'delete',
                    'url' => 'Yii::app()->createUrl("/groupsurisu/deletemhs", array("id" => $data->IDGROUPSURISU))',
                                    ),
                                        ),
                    ),
	 
                
	),
	
)); 

?>
    <?php 
        $a=$model->IDISU;
        $sql="select IDISU from detailsurisu where IDISU='$a'";
        $b=  Yii::app()->db->createCommand($sql)->queryScalar();
        
        if($b==0){
       
       echo CHtml::link('Create Mahasiswa &nbsp<i class="fa fa-user"></i>',array('groupsurisu/createmhs','IDISU'=>$model->IDISU),array('class'=>'btn btn-default blue'));
 
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
            'value'=>$model->getListsendsurisu($model->IDISU) ,
            );
       ?>
    </div>
</div>
<div class="portlet-title">
<div class="actions">
        <!--jika surat permohonan sudah diajukan tombol pengajuan hilang jika belum akan --> 
        <?php 
        $a=$model->IDISU;
        $sql="select IDISU from detailsurisu where IDISU='$a'";
        $b=  Yii::app()->db->createCommand($sql)->queryScalar();
        
        if($b==0){
       
       echo CHtml::link('Ajukan permintaan/permohonan surat.... &nbsp<i class="fa fa-arrow-circle-right"></i>',array('detailsurisu/createbymahasiswa','IDISU'=>$model->IDISU),array('class'=>'btn btn purple'));
        
       }
        else
        {
            echo "Data sudah terkirim...";
        }
        ?>
        
  </div>
</div></div>