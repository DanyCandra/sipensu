<div class="portlet box yellow">
<div class="portlet-title">
  <div class="caption">
      	<i class="fa fa-pencil-square-o"></i> View Permintaan Surat Tugas Ijin Penelitian #<?php echo $model->IDPN; ?>  </div> 
        <div class="actions">
        <?php //echo CHtml::link('<i class="fa fa-plus"></i> Tambah Srt.Tugas Ijin Penelitian',array('create'),array('class'=>'btn btn-sm blue'));?>
        </div>
        
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
		'TGLCETAKSURATPN',
                'KETERANGANSURTUGPN',
                'TGLSUBMITPN',
                'ACCSURTUGPN',
	array(
                    'type'=>'raw',
                    'value'=>  CHtml::link('List Permintaan Srt.Tugas  <i class="fa fa-search"></i>' ,array('surtugpn/admin'),array('class'=>'btn btn-outline-info round waves-effect')).''.
                               CHtml::link('Hapus  <i class="fa fa-times"></i>',array('surtugpn/deletebyowner','id'=>$model->IDPN),array('class'=>'btn btn-outline-danger round waves-effect','confirm'=>'Hapus data ?')).''.
                               CHtml::link('Edit  <i class="fa fa-edit"></i>',array('surtugpn/update','id'=>$model->IDPN),array('class'=>'btn btn-outline-warning round waves-effect ')),
                )
	),
)); ?>
</div>

<!--membuat menu untuk mengirim permintaan srt.tugas ke divisi umum & perlengkapan -->


<div class="portlet-title">
<div class="caption">
	<i class="fa fa-envelope"></i> View Instansi dan Group Dosen Ijin Penelitian  #<?php echo $model->IDPN; ?>  </div>
        
</div>
    
<div class="portlet-body">
<div class="portlet-title"><br>
           
<div class="portlet box purple">
<div class="portlet-title">
<div class="caption">
	<i class="fa fa-cogs"></i> Peminta/Pemohon Srt.Tugas Ijin Penelitian    
</div>
    <div class="actions">
        <?php //echo CHtml::link('<i class="fa fa-plus"></i> Tambah baru Dosen &nbsp',array('msdos/create'),array('class'=>'btn btn-sm blue','title'=>'Jika nama Dosen tidak ada'));
        ?>
        <?php
        echo CHtml::link('<i class="fa fa-plus"> Tambah Instansi Penelitian</i>',array('groupinstansisurtugpn/create','IDPN'=>$model->IDPN),array('class'=>'btn btn-outline-danger round waves-effect'));
        ?>
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
                    'header'=>'Action',
                    'htmlOptions'=>array('style'=>'width:60px'),
                   'class' => 'CButtonColumn',
                   'template' => ' {update} {delete}',
                    'buttons' => array(
                    'view' => array(
                    //'label'=>'View',
                    //'url'=>'Yii::app()->createUrl("/groupsurtugpn/view", array("id" => $data->IDGROUPPN))',
                        ), 

                    'update' => array(
                    'label' => 'Update',
                    'url' => 'Yii::app()->createUrl("/groupsurtugpn/update", array("id" => $data->IDGROUPPN))',
                        ),
                    'delete' => array(
                    'label' => 'delete',
                    'url' => 'Yii::app()->createUrl("/groupsurtugpn/delete", array("id" => $data->IDGROUPPN))',
                                    ),
                                        ),
                    ),
                array(
                    
                    'header'=>'Instansi Penelitian',
                    'value' => '$data->listinstansipn',
                    ),
    ),
	
)); 

?>
<?php 
        $a=$model->IDPN;
        $sql="select IDPN from detailsurtugpn where IDPN='$a'";
        $b=  Yii::app()->db->createCommand($sql)->queryScalar();
        
        if($b==0){
            echo CHtml::link('Tambahkan Group Dosen &nbsp<i data-feather="user"></i>',array('groupsurtugpn/create','IDPN'=>$model->IDPN),array('class'=>'btn btn-outline-info round waves-effect'));
}
        else
        {
           echo "Group Dosen sudah terkirim..";
        }
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
        <?php 
        $a=$model->IDPN;
        $sql="select IDPN from detailsurtugpn where IDPN='$a'";
        $b=  Yii::app()->db->createCommand($sql)->queryScalar();
        
        if($b==0){
       
       echo CHtml::link('Ajukan permintaan/permohonan surat.... &nbsp<i data-feather="arrow-right-circle"></i>',array('detailsurtugpn/create','IDPN'=>$model->IDPN),array('class'=>'btn btn-outline-warning round waves-effect'));
        
       }
        else
        {
            echo "Data sudah terkirim...";
        }
        ?>
        
  </div>
</div></div>