<div class="portlet box yellow">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-cogs"></i> Manage Surat Pelaksanaan Praktik Kerja (Prodi D3) </div>
        <div class="actions">
            <?php //echo CHtml::link('<i class="fa fa-plus"></i> Tambah',array('create'),array('class'=>'btn btn-sm blue'));?>    </div>
        <div class="actions">
            <?php //echo CHtml::link('<i class="fa fa-database"></i> Main Menu Manage Srt.Tugas By Mahasiswa',array('pengguna/menusuratmahasiswa'),array('class'=>'btn btn-sm purple'));?>    </div>
    </div>

    <div class="portlet-body">
        <div class="table-responsive">
            <?php $this->widget('zii.widgets.grid.CGridView', array(
                'id'=>'subdetailsurpelpk-grid',
                'dataProvider'=>$model->search(),
                'filter'=>$model,
                'itemsCssClass' => 'table table-bordered table-striped table-advance table-hover',
                'columns'=>array(
                    array(
                        'filter'=>'',
                        'header'=>'No.Surat Pelaksanaan',
                        'value' => '$data->listbuatnosuratpelpk',

                    ),
                    array(
                        'name'=>'IDPK',
                        'type'=>'raw',
                        'header'=>'Instansi Praktik Kerja',
                        'value'=>'$data->iDPK->INSTANSIPK','sortable'=>true,
                        // 'filter'=>'',
                        'filter'=>Chtml::listData(Surperpk::model()->findAll(),'IDPK','INSTANSIPK')
                    ),
                    'iDPK.KOTAINSTANSIPK',
                    'TGLMULAISURPELPK',
                    'TGLAKHIRSURPELPK',
                    array(
                        'header'=>'Group Mahasiswa',
                        'value' => '$data->listtambahmahasiswasurpelpk',
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
                        'htmlOptions'=>array('style'=>'width:9%'),
                    ),

                    array(
                        'name'=>'ACCDEKANAT',
                        'type'=>'raw',
                        'filter'=>'' ,
                        'header'=>'Acc Dekanat',
                        'value'=>'CHtml::label($data->ACCDEKANAT,"",array("onClick"=>"tes2(\'$data->IDSUBDETAILSURPELPK\',$row,\'$data->IDSUBDETAILSURPELPK\')","id"=>"label_$row","class"=>"btn btn-sm green"));'
                    ),
                    /*array(
                        'header'=>'Cetak Surat',
                        'type'=>'raw',
                    'value'=>'CHtml::link("Cetak",array("cetak/subdetailsurpelpk","id"=>$data->IDSUBDETAILSURPELPK),array ("target"=>"_blank","class"=>"btn btn-sm yellow"))',
                    ),*/
                    array(
                        'type' => 'raw',
                        'header' => 'Generate Monitoring ',
                        'value' => '$data->generatemonitoring',
                    ),

                ),
            )); ?>
        </div>
        <?php  echo CHtml::link('<i class="fa fa-caret-left"></i> &nbsp; Kembali ke Daftar Srt. Permohonan PK ',array('surperpk/admin'),array('class'=>'btn btn-default blue'));
        ?>
        <?php  echo CHtml::link('Lihat Daftar Srt. Monitoring PK &nbsp <i class="fa fa-caret-right"></i>',array('surtugmonitoring/admin'),array('class'=>'btn btn-default dark'));
        ?>
    </div>

    <?php
    $url1 = CController::createUrl('/subdetailsurpelpk/AjaxTtd/');
    $url2 = CController::createUrl('/subdetailsurpelpk/AjaxSubkor/');
    $url3 = CController::createUrl('/subdetailsurpelpk/AjaxDekanat/');
    $js = <<< JSCRIPT
 
function tes(IDSUBDETAILSURPELPK,row,IDSUBDETAILSURPELPK){
 
$('#editData').dialog('open');
var label = $('#label_'+row+'').text();
$('#ACCSURPELPK').val(label);
$('#IDSUBDETAILSURPELPK').val(IDSUBDETAILSURPELPK);
$('#IDSUBDETAILSURPELPK').val(IDSUBDETAILSURPELPK);
$('#row').val(row);
 
}

function tes1(IDSUBDETAILSURPELPK,row,IDSUBDETAILSURPELPK){
 
$('#editSubkor').dialog('open');
var label = $('#label_'+row+'').text();
$('#ACCSUBKOR').val(label);
$('#IDSUBDETAILSURPELPK').val(IDSUBDETAILSURPELPK);
$('#IDSUBDETAILSURPELPK').val(IDSUBDETAILSURPELPK);
$('#row').val(row);
 
}

function tes2(IDSUBDETAILSURPELPK,row,IDSUBDETAILSURPELPK){
 
$('#editDekanat').dialog('open');
var label = $('#label_'+row+'').text();
$('#ACCDEKANAT').val(label);
$('#IDSUBDETAILSURPELPK').val(IDSUBDETAILSURPELPK);
$('#IDSUBDETAILSURPELPK').val(IDSUBDETAILSURPELPK);
$('#row').val(row);
 
}
 
function update(){
var ACCSURPELPK  = $('#ACCSURPELPK').val();
var IDSUBDETAILSURPELPK = $('#IDSUBDETAILSURPELPK').val();
var IDSUBDETAILSURPELPK = $('#IDSUBDETAILSURPELPK').val();
var row = $('#row').val();
$('#editData').dialog('close');
$.post("${url1}", { ACCSURPELPK:ACCSURPELPK,IDSUBDETAILSURPELPK:IDSUBDETAILSURPELPK,IDSUBDETAILSURPELPK:IDSUBDETAILSURPELPK},
        function(data){
           $('#label_'+row+'').text(data.ACCSURPELPK);
           alert('Permintaan surat telah diupdate menjadi '+data.ACCSURPELPK+' ');
        }, "json");
 
}

function update2(){
var ACCSUBKOR  = $('#ACCSUBKOR').val();
var IDSUBDETAILSURPELPK = $('#IDSUBDETAILSURPELPK').val();
var IDSUBDETAILSURPELPK = $('#IDSUBDETAILSURPELPK').val();
var row = $('#row').val();
$('#editSubkor').dialog('close');
$.post("${url2}", 
        
        { ACCSUBKOR:ACCSUBKOR,IDSUBDETAILSURPELPK:IDSUBDETAILSURPELPK,IDSUBDETAILSURPELPK:IDSUBDETAILSURPELPK},
        function(data){
           $('#label_'+row+'').text(data.ACCSUBKOR);
           document.location.reload(true);
           alert('Permintaan surat telah diupdate menjadi '+data.ACCSUBKOR+' ');
        }, "json");
 
}

function update3(){
var ACCDEKANAT  = $('#ACCDEKANAT').val();
var IDSUBDETAILSURPELPK = $('#IDSUBDETAILSURPELPK').val();
var IDSUBDETAILSURPELPK = $('#IDSUBDETAILSURPELPK').val();
var row = $('#row').val();
$('#editDekanat').dialog('close');
$.post("${url3}", 
        
        { ACCDEKANAT:ACCDEKANAT,IDSUBDETAILSURPELPK:IDSUBDETAILSURPELPK,IDSUBDETAILSURPELPK:IDSUBDETAILSURPELPK},
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
            'id' => 'editDekanat',
            'options' => array(
                'title' => '<<<< Acc Dekanat >>>> ',
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
        echo CHtml::label('Beri Acc Surat', 'ACCDEKANAT').'&nbsp;:&nbsp;';
        echo CHtml::dropDownList('ACCDEKANAT','',array('Approve'=>'Yes', 'Not Approved'=>'No'));
        echo CHtml::hiddenField('IDSUBDETAILSURPELPK','');
        echo CHtml::hiddenField('IDSUBDETAILSURPELPK','');
        echo CHtml::hiddenField('row','');
        echo '&nbsp;';
        echo CHtml::button('<< Simpan >>', array("onClick"=>"update3()",'class'=>'btn purple'));

        ?>
    </div>

    <?php
    $this->endWidget('zii.widgets.jui.CJuiDialog');
    // ----- End dialog Edit Data ----------------------
    ?>
