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
               /*  array(
                    'filter'=>'',
                    'label'=>'Tgl. Acara',
                    'value' =>  IDDate::getDate($model->TGLACARANS),
                    
                ),*/
                'TGLCETAKSURATNS',
                'KETERANGANNS',
		'TGLSUBMITNS',
                'ACCSURTUGNS',
	array(
                    'type'=>'raw',
                    'value'=>  CHtml::link('List Permintaan Srt.Tugas  <i class="fa fa-search"></i>' ,array('surtugns/admin'),array('class'=>'btn btn-outline-warning round waves-effect')).''.
                               CHtml::link('Hapus  <i class="fa fa-times"></i>',array('surtugns/deletebyowner','id'=>$model->IDSURTUGNS),array('class'=>'btn btn-outline-info round waves-effect','confirm'=>'Hapus data ?')).''.
                               CHtml::link('Edit  <i class="fa fa-edit"></i>',array('surtugns/update','id'=>$model->IDSURTUGNS),array('class'=>'btn btn-outline-danger round waves-effect')),
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
        <?php 
        $a=$model->IDSURTUGNS;
        $sql="select IDSURTUGNS from detailsurtugns where IDSURTUGNS='$a'";
        $b=  Yii::app()->db->createCommand($sql)->queryScalar();
        
        if($b==0){    
        echo CHtml::link('Ajukan permintaan/permohonan surat.... <i data-feather="arrow-circle-right"></i>',array('detailsurtugns/create','IDSURTUGNS'=>$model->IDSURTUGNS),array('class'=>'btn btn-outline-warning round waves-effect'));
         }
        else
        {
            echo "Data sudah terkirim...";
        }
        ?>
        
        </div>
</div>

<!--list tembusan suat-->
<div class="portlet-body">
<div class="portlet-title"><br>
           
<div class="portlet box purple">
<div class="portlet-title">
<div class="caption">
	<i class="fa fa-cogs"></i> Tembusan Surat Tugas  #<?php echo $model->IDSURTUGNS; ?>  
</div>
</div>
  
<div class="portlet-body">
<?php
//menampilkan list 
$listtembusan=new CActiveDataProvider('Tembusansurtugns',array('criteria'=>array('condition'=>'IDSURTUGNS='.$model->IDSURTUGNS)));
$this->widget('ext.GroupGridView', array(
	'id'=>'tembusansurtugns-grid',
	'dataProvider'=>$listtembusan,
	'itemsCssClass' => 'table table-bordered table-striped table-advance table-hover',
	'columns'=>array(
		//'IDTEMBUSAN',
                //'IDSURTUGNS',
		'TUJUANTEMBUSAN',
               
                array(
                    'header'=>'Action',
                    'htmlOptions'=>array('style'=>'width:60px'),
                   'class' => 'CButtonColumn',
                   'template' => ' {update} {delete}',
                    'buttons' => array(
                    'view' => array(
                    //'label'=>'View',
                    //'url'=>'Yii::app()->createUrl("/tembusansurtugns/view", array("id" => $data->IDTEMBUSAN))',
                        ), 

                    'update' => array(
                    'label' => 'Update',
                    'url' => 'Yii::app()->createUrl("/tembusansurtugns/update", array("id" => $data->IDTEMBUSAN))',
                        ),
                    'delete' => array(
                    'label' => 'delete',
                    'url' => 'Yii::app()->createUrl("/tembusansurtugns/delete", array("id" => $data->IDTEMBUSAN))',
                                    ),
                                        ),
                    ),
	 
                
	),
	
)); 

?>
 <?php 
        $a=$model->IDSURTUGNS;
        $sql="select IDSURTUGNS from detailsurtugns where IDSURTUGNS='$a'";
        $b=  Yii::app()->db->createCommand($sql)->queryScalar();
        
        if($b==0){
       
       echo CHtml::link('Tambah Tembusan &nbsp<i data-feather="user"></i>',array('tembusansurtugns/create','IDSURTUGNS'=>$model->IDSURTUGNS),array('class'=>'btn btn-outline-info round waves-effect'));
   
       }
        else
        {
            echo "Tembusan sudah terkirim..";
        }
        ?>    
</div>
</div>
<!--batas tembusan-->
    
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
  
