<div class="portlet box yellow">
<div class="portlet-title">
  <div class="caption">
	<i class="fa fa-pencil-square-o"></i> View Permintaan Surat Keterangan Tidak Menerima Beasiswa #<?php echo $model->IDSURKETNOBESWA; ?>  </div>
</div>

<div class="portlet-body">
    
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions' => array('class'=> 'table table-bordered table-striped table-advance table-hover'),
	'attributes'=>array(
		'IDSURKETNOBESWA',
		'iDJENISSURAT.NAMAJENISSURAT',
		'NOSURKETNOBESWA',
		'NIM',
                'nIM.NAMA',
                'nIM.TEMPATLAHIR',
                //'nIM.TGLLAHIR',
             array(
                    'filter'=>'',
                    'label'=>'Tgl. Lahir',
                    'value' =>  IDDate::getDate($model->nIM->TGLLAHIR),
                    
                ),
                'nIM.TAHUNANGKATAN',
                'nIM.iDPRODI.NAMAPRODI',
                'nIM.iDPRODI.iDJENJANG.NAMAJENJANG',
		'iDTASEMESTER.TAHUNAKADEMIK',
		'iDTASEMESTER.SEMESTER',
                'nIM.ALAMATASAL',
                'KEPERLUANSURKETNOBESWA',
		'KETERANGANSURKETNOBESWA',
		'TGLSUBMITSURKETNOBESWA',
                'ACCSURKETNOBESWA',
	array(
                    'type'=>'raw',
                    'value'=>  CHtml::link('List Permintaan Surat  <i class="fa fa-search"></i>' ,array('surketnobeswa/admin'),array('class'=>'btn green')).''.
                               CHtml::link('Hapus  <i class="fa fa-times"></i>',array('surketnobeswa/deletebyowner','id'=>$model->IDSURKETNOBESWA),array('class'=>'btn red','confirm'=>'Hapus data ?')).''.
                               CHtml::link('Edit  <i class="fa fa-edit"></i>',array('surketnobeswa/update','id'=>$model->IDSURKETNOBESWA),array('class'=>'btn yellow ')).''.
                               CHtml::link('Update Biodata  <i class="fa fa-edit"></i>',array('mahasiswa/updatemhs','nim'=>$model->NIM,'id'=>$model->IDSURKETNOBESWA),array('class'=>'btn dark ')),
                )
	),
)); ?>
</div>

<!--membuat menu untuk mengirim permintaan srt.tugas ke divisi umum & perlengkapan -->


<div class="portlet-title">
<div class="caption">
	<i class="fa fa-envelope"></i> Kirim Permintaan Surat Keterangan Tidak Menerima Beasiswa #<?php echo $model->IDSURKETNOBESWA; ?>  </div>
        <div class="actions">
         <!--jika surat permohonan sudah diajukan tombol pengajuan hilang jika belum akan --> 
        <?php 
        $a=$model->IDSURKETNOBESWA;
        $sql="select IDSURKETNOBESWA from detailsurketnobeswa where IDSURKETNOBESWA='$a'";
        $b=  Yii::app()->db->createCommand($sql)->queryScalar();
        
        if($b==0){    
        echo CHtml::link('Ajukan permintaan/permohonan surat.... <i class="fa fa-arrow-circle-right"></i>',array('detailsurketnobeswa/create','IDSURKETNOBESWA'=>$model->IDSURKETNOBESWA),array('class'=>'btn btn purple'));
         }
        else
        {
            echo "Data sudah terkirim...";
        }
        ?>
            
            
            
</div>
</div>
    
<div class="portlet-body">
<div class="portlet-title"><br>
    
            <button class="btn red" tabindex="-1" type="button">NOTE :</button>
            <?php array(      
            'value'=>$model->getListsendsurketnobeswa($model->IDSURKETNOBESWA) ,
            );
            ?>
    
</div> 
</div> 
<!--update preview notifikasi setelah action view dilakukan-->
<?php
$IDSURKETNOBESWA = Yii::app()->request->getParam('id', 0);
$smod4el = Surketnobeswa::model()->updateByPk
        ($IDSURKETNOBESWA, array("PREVIEW" => 'Y'));
?>