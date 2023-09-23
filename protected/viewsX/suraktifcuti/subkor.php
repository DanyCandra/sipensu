<div class="portlet box yellow">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-cogs"></i> Manage Permintaan Surat Aktif Kembali Cuti </div>
        <div class="actions">
            <?php //echo CHtml::link('<i class="fa fa-plus"></i> Tambah',array('create'),array('class'=>'btn btn-sm blue'));?>    </div>
        <div class="actions">
            <?php //echo CHtml::link('<i class="fa fa-database"></i> Main Menu Manage Srt.Tugas By Mahasiswa',array('pengguna/menusuratmahasiswa'),array('class'=>'btn btn-sm purple'));?>    </div>
    </div>

    <div class="portlet-body">
        <div class="table-responsive">
            <?php

            Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#suraktifcuti-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
            ?>

            <?php //echo CHtml::link('Pencarian','#',array('class'=>'search-button')); ?>
            <div class="search-form" style="display:none">
                <?php //$this->renderPartial('_cari',array(
                //'model'=>$model,
                //)); ?>
            </div><!-- search-form -->
        </div>

        <div class="portlet-body">
            <div class="table-responsive">
                <?php if (!Yii::app()->user->isGuest && Yii::app()->user->IDGROUPS == 'F' || Yii::app()->user->IDGROUPS == '1'): ?>
                    <?php $this->widget('zii.widgets.grid.CGridView', array(
                        'id'=>'suraktifcuti-grid',
                        'dataProvider'=>$model->search(),
                        'filter'=>$model,
                        'itemsCssClass' => 'table table-bordered table-striped table-advance table-hover',
                        'columns'=>array(
                            array(
                                'filter'=>'',
                                'header'=>'No.Surat Aktif Kembali Cuti',
                                'value' => '$data->listbuatnosuraktifcuti',

                            ),
                            array(
                                'name'=>'IDIJINCUTI',
                                'type'=>'raw',
                                'header'=>'NIM Peminta/Pemohon',
                                'value'=>'$data->iDIJINCUTI->NIM','sortable'=>true,
                                'filter'=>Chtml::listData(Suraktifcuti::model()->findAll(),'IDIJINCUTI','iDIJINCUTI.NIM')
                            ),
                            array(
                                'name'=>'IDIJINCUTI',
                                'type'=>'raw',
                                'header'=>'Nama Peminta/Pemohon',
                                'value'=>'$data->iDIJINCUTI->nIM->NAMA','sortable'=>true,
                                'filter'=>'',
                                //'filter'=>Chtml::listData(Suraktifcuti::model()->findAll(),'IDIJINCUTI','iDIJINCUTI.nIM.NAMA')
                            ),
                            array(
                                'name'=>'IDIJINCUTI',
                                'type'=>'raw',
                                'header'=>'Jurusan/Prodi',
                                'value'=>'$data->iDIJINCUTI->nIM->iDPRODI->NAMAPRODI','sortable'=>true,
                                'filter'=>'',
                            ),
                            array(
                                'name'=>'Statusaktifcuti',
                                'filter'=>'' ,
                                'type'=>'raw',
                                'header'=>'Status Aktif Kembali Cuti',
                            ),
                            array(
                                'header'=>'Cetak Permohonan Aktif Kembali Cuti',
                                'type'=>'raw',

                                'value'=>'CHtml::link("Cetak ",array("cetak/surpermohonanaktifcuti","id"=>$data->primaryKey),array ("target"=>"_blank","class"=>"btn btn-sm purple"))',
                            ),
                            array(
                                'header'=>'Cetak Surat',
                                'type'=>'raw',

                                'value'=>'$data->cetakbytgl',
                            ),
                            array(
                                'header'=>'Action',
                                'type'=>'raw',
                                'value'=>'$data->listactionnotifikasi',
                                'htmlOptions'=>array('style'=>'width:12%'),
                            ),

                            array(
                                'name'=>'ACCSUBKOR',
                                'type'=>'raw',
                                'filter'=>'' ,
                                'header'=>'Acc Sub Kordinator',
                                'value'=>'CHtml::label($data->ACCSUBKOR,"",array("onClick"=>"tes1(\'$data->IDAKTIFCUTI\',$row,\'$data->IDAKTIFCUTI\')","id"=>"label_$row","class"=>"btn btn-sm red"));'
                            ),

                        ),
                    )); ?>
                <?php endif;?>
                <?php if (!Yii::app()->user->isGuest && Yii::app()->user->IDGROUPS == '3'): ?>
                    <?php $this->widget('zii.widgets.grid.CGridView', array(
                        'id'=>'suraktifcuti-grid',
                        'dataProvider'=>$model->search(),
                        'filter'=>$model,
                        'itemsCssClass' => 'table table-bordered table-striped table-advance table-hover',
                        'columns'=>array(
                            array(
                                'filter'=>'',
                                'header'=>'No.Surat Aktif Kembali Cuti',
                                'value' => '$data->listbuatnosuraktifcuti',

                            ),
                            array(
                                'name'=>'IDIJINCUTI',
                                'type'=>'raw',
                                'header'=>'NIM Peminta/Pemohon',
                                'value'=>'$data->iDIJINCUTI->NIM','sortable'=>true,
                                'filter'=>Chtml::listData(Suraktifcuti::model()->findAll(),'IDIJINCUTI','iDIJINCUTI.NIM')
                            ),
                            array(
                                'name'=>'IDIJINCUTI',
                                'type'=>'raw',
                                'header'=>'Nama Peminta/Pemohon',
                                'value'=>'$data->iDIJINCUTI->nIM->NAMA','sortable'=>true,
                                'filter'=>'',
                                //'filter'=>Chtml::listData(Suraktifcuti::model()->findAll(),'IDIJINCUTI','iDIJINCUTI.nIM.NAMA')
                            ),
                            array(
                                'name'=>'IDIJINCUTI',
                                'type'=>'raw',
                                'header'=>'Jurusan/Prodi',
                                'value'=>'$data->iDIJINCUTI->nIM->iDPRODI->NAMAPRODI','sortable'=>true,
                                'filter'=>'',
                            ),
                            array(
                                'name'=>'Statusaktifcuti',
                                'filter'=>'' ,
                                'type'=>'raw',
                                'header'=>'Status Aktif Kembali Cuti',
                            ),
                            array(
                                'header'=>'Cetak Permohonan Aktif Kembali Cuti',
                                'type'=>'raw',

                                'value'=>'CHtml::link("Cetak ",array("cetak/surpermohonanaktifcuti","id"=>$data->primaryKey),array ("target"=>"_blank","class"=>"btn btn-sm purple"))',
                            ),
                            array(
                                'header'=>'Cetak Surat',
                                'type'=>'raw',

                                'value'=>'$data->cetakbytgl',
                            ),
                            array(
                                'header'=>'Action',
                                'type'=>'raw',
                                'value'=>'$data->listactionnotifikasi',
                                'htmlOptions'=>array('style'=>'width:12%'),
                            ),
                            array(
                                'name'=>'Statussurat',
                                'filter'=>'',
                                'type'=>'raw',
                                'header'=>'Status Surat',
                            ),
                        ),
                    )); ?>
                <?php endif;?>
            </div>
            <?php  echo CHtml::link('<i class="fa fa-caret-left"></i> &nbsp;List Izin Cuti Akademik&nbsp',array('surijincuti/admin'),array('class'=>'btn btn-default green'));
            ?>
        </div>
    </div>

    <?php
    $url1 = CController::createUrl('/suraktifcuti/AjaxTtd/');
    $url2 = CController::createUrl('/suraktifcuti/Ajaxsubkor/');
    $url3 = CController::createUrl('/suraktifcuti/Ajaxdekanat/');
    $js = <<< JSCRIPT
 
function tes(IDAKTIFCUTI,row,IDAKTIFCUTI){
 
$('#editData').dialog('open');
var label = $('#label_'+row+'').text();
$('#ACCSURAKTIFCUTI').val(label);
$('#IDAKTIFCUTI').val(IDAKTIFCUTI);
$('#IDAKTIFCUTI').val(IDAKTIFCUTI);
$('#row').val(row);
 
}

function tes1(IDAKTIFCUTI,row,IDAKTIFCUTI){
 
$('#editSubkor').dialog('open');
var label = $('#label_'+row+'').text();
$('#ACCSUBKOR').val(label);
$('#IDAKTIFCUTI').val(IDAKTIFCUTI);
$('#IDAKTIFCUTI').val(IDAKTIFCUTI);
$('#row').val(row);
 
}

function tes2(IDAKTIFCUTI,row,IDAKTIFCUTI){
 
$('#editDekanat').dialog('open');
var label = $('#label_'+row+'').text();
$('#ACCDEKANAT').val(label);
$('#IDAKTIFCUTI').val(IDAKTIFCUTI);
$('#IDAKTIFCUTI').val(IDAKTIFCUTI);
$('#row').val(row);
 
}
 
function update(){
var ACCSURAKTIFCUTI  = $('#ACCSURAKTIFCUTI').val();
var IDAKTIFCUTI = $('#IDAKTIFCUTI').val();
var IDAKTIFCUTI = $('#IDAKTIFCUTI').val();
var row = $('#row').val();
$('#editData').dialog('close');
$.post("${url1}", { ACCSURAKTIFCUTI:ACCSURAKTIFCUTI,IDAKTIFCUTI:IDAKTIFCUTI,IDAKTIFCUTI:IDAKTIFCUTI},
        function(data){
           $('#label_'+row+'').text(data.ACCSURAKTIFCUTI);
           document.location.reload(true);
           alert('Permintaan surat telah diupdate menjadi '+data.ACCSURAKTIFCUTI+' ');
        }, "json");
 
}

function update2(){
var ACCSUBKOR  = $('#ACCSUBKOR').val();
var IDAKTIFCUTI = $('#IDAKTIFCUTI').val();
var IDAKTIFCUTI = $('#IDAKTIFCUTI').val();
var row = $('#row').val();
$('#editSubkor').dialog('close');
$.post("${url2}", 
        
        { ACCSUBKOR:ACCSUBKOR,IDAKTIFCUTI:IDAKTIFCUTI,IDAKTIFCUTI:IDAKTIFCUTI},
        function(data){
           $('#label_'+row+'').text(data.ACCSUBKOR);
           document.location.reload(true);
           alert('Permintaan surat telah diupdate menjadi '+data.ACCSUBKOR+' ');
        }, "json");
 
}

function update3(){
var ACCDEKANAT  = $('#ACCDEKANAT').val();
var IDAKTIFCUTI = $('#IDAKTIFCUTI').val();
var IDAKTIFCUTI = $('#IDAKTIFCUTI').val();
var row = $('#row').val();
$('#editDekanat').dialog('close');
$.post("${url3}", 
        
        { ACCDEKANAT:ACCDEKANAT,IDAKTIFCUTI:IDAKTIFCUTI,IDAKTIFCUTI:IDAKTIFCUTI},
        function(data){
           $('#label_'+row+'').text(data.ACCDEKANAT);
           document.location.reload(true);
           alert('Permintaan surat telah diupdate menjadi '+data.ACCDEKANAT+' ');
        }, "json");
 
}
 
JSCRIPT;
    Yii::app()->clientScript->registerScript('disable_keluar', $js, CClientScript::POS_BEGIN);
    ?>
    <?php
    // ----- Dialog EditData ----------------------
    $this->beginWidget('zii.widgets.jui.CJuiDialog', array(
            'id' => 'editSubkor',
            'options' => array(
                'title' => '<<<< Acc Subkor >>>> ',
                'autoOpen' => false,
                'minWidth' => 400,
                'minHeight' => 100,
                'resizable' => false,
                'modal' => true,
                'show' => 'blind',
                'hide'=>'explode',
            ),
        )
    );
    ?>
    <div class="from-group">
        <?php
        echo CHtml::label('Beri Acc Surat', 'ACCSUBKOR').'&nbsp;:&nbsp;';
        echo CHtml::dropDownList('ACCSUBKOR','',array('Approve'=>'Yes', 'Not Approved'=>'No'));
        echo CHtml::hiddenField('IDAKTIFCUTI','');
        echo CHtml::hiddenField('IDAKTIFCUTI','');
        echo CHtml::hiddenField('row','');
        echo '&nbsp;';
        echo CHtml::button('<< Simpan >>', array("onClick"=>"update2()",'class'=>'btn purple'));

        ?>
    </div>

    <?php
    $this->endWidget('zii.widgets.jui.CJuiDialog');
    // ----- End dialog Edit Data ----------------------
    ?>
