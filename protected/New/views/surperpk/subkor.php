<div class="portlet box yellow">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-cogs"></i> Manage Surat Permohonan Praktik Kerja (Prodi D3) </div>
        <div class="actions">
            <?php echo CHtml::link('<i class="fa fa-plus"></i> Tambah/Buat Surat',array('create'),array('class'=>'btn btn-sm blue'));?>    </div>
        <div class="actions">
            <?php //echo CHtml::link('<i class="fa fa-database"></i> Main Menu Manage Srt.Tugas By Mahasiswa',array('pengguna/menusuratmahasiswa'),array('class'=>'btn btn-sm purple'));?>    </div>
    </div>

    <div class="portlet-body">
        <div class="table-responsive">
            <?php $this->widget('zii.widgets.grid.CGridView', array(
                'id'=>'surperpk-grid',
                'dataProvider'=>$model->search(),
                'filter'=>$model,
                'itemsCssClass' => 'table table-bordered table-striped table-advance table-hover',
                'columns'=>array(
                    array(
                        'type'=>'raw',
                        'header'=>'No.Surat Permohonan ',
                        'value' => '$data->listbuatnosuratpk',

                    ),
                    'iDTASEMESTER.TAHUNAKADEMIK',
                    'iDTASEMESTER.KETSEMESTER',
                    'TUJUANPK',
                    'INSTANSIPK',
                    'ALAMATINSTANSIPK',
                    array(

                        'header'=>'Group Mahasiswa',
                        'type'=>'html',
                        'value' => '$data->listtambahmahasiswasurperpk',

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
                        'name'=>'ACCSURPERPK',
                        'filter'=>'' ,
                        'type'=>'raw',
                        'header'=>'Status Surat',
                        'value'=>'CHtml::label($data->ACCSURPERPK,"",array("onClick"=>"tes(\'$data->IDPK\',$row,\'$data->IDPK\')","id"=>"label_$row","class"=>"btn btn-sm blue"));'
                        //'value'=>'CHtml::label($data->ACCSURPERPK=="Approve"?$data->ACCSURPERPK:"Pending","",array("onClick"=>"tes(\'$data->IDPK\',$row,\'$data->IDPK\')","id"=>"label_$row","class"=>"btn btn-sm blue"));'

                    ),

                    array(
                        'name'=>'ACCSUBKOR',
                        'type'=>'raw',
                        'filter'=>'' ,
                        'header'=>'Acc Sub Kordinator',
                        'value'=>'CHtml::label($data->ACCSUBKOR,"",array("onClick"=>"tes1(\'$data->IDPK\',$row,\'$data->IDPK\')","id"=>"label_$row","class"=>"btn btn-sm red"));'
                    ),
                ),
            )); ?>
        </div>
        <?php  echo CHtml::link('Lihat Daftar Srt.Pelaksanaan PK &nbsp <i class="fa fa-caret-right"></i></i>',array('subdetailsurpelpk/admin'),array('class'=>'btn btn-default yellow'));
        ?>
        <?php  echo CHtml::link('Lihat Daftar Srt. Monitoring PK &nbsp <i class="fa fa-caret-right"></i>',array('surtugmonitoring/admin'),array('class'=>'btn btn-default red'));
        ?>
    </div>
</div>

<?php
$url1 = CController::createUrl('/surperpk/AjaxTtd/');
$url2 = CController::createUrl('/surperpk/AjaxSubkor/');
$url3 = CController::createUrl('/surperpk/AjaxDekanat/');
$js = <<< JSCRIPT
 
function tes(IDPK,row,IDPK,IDGROUPS){
 
$('#editData').dialog('open');
var label = $('#label_'+row+'').text();
$('#ACCSURPERPK').val(label);
$('#IDPK').val(IDPK);
$('#IDPK').val(IDPK);
$('#row').val(row);
 
}

function tes1(IDPK,row,IDPK){
 
$('#editSubkor').dialog('open');
var label = $('#label_'+row+'').text();
$('#ACCSUBKOR').val(label);
$('#IDPK').val(IDPK);
$('#IDPK').val(IDPK);
$('#row').val(row);
 
}

function tes2(IDPK,row,IDPK){
 
$('#editDekanat').dialog('open');
var label = $('#label_'+row+'').text();
$('#ACCDEKANAT').val(label);
$('#IDPK').val(IDPK);
$('#IDPK').val(IDPK);
$('#row').val(row);
 
}
 
function update(){
var ACCSURPERPK  = $('#ACCSURPERPK').val();
var IDPK = $('#IDPK').val();
var IDPK = $('#IDPK').val();
var row = $('#row').val();
$('#editData').dialog('close');
$.post("${url1}", { ACCSURPERPK:ACCSURPERPK,IDPK:IDPK,IDPK:IDPK},
        function(data){
           $('#label_'+row+'').text(data.ACCSURPERPK);
           document.location.reload(true);
           alert('Permintaan surat telah diupdate menjadi '+data.ACCSURPERPK+' ');
        }, "json");
 
}

function update2(){
var ACCSUBKOR  = $('#ACCSUBKOR').val();
var IDPK = $('#IDPK').val();
var IDPK = $('#IDPK').val();
var row = $('#row').val();
$('#editSubkor').dialog('close');
$.post("${url2}", 
        
        { ACCSUBKOR:ACCSUBKOR,IDPK:IDPK,IDPK:IDPK},
        function(data){
           $('#label_'+row+'').text(data.ACCSUBKOR);
           document.location.reload(true);
           alert('Permintaan surat telah diupdate menjadi '+data.ACCSUBKOR+' ');
        }, "json");
 
}

function update3(){
var ACCDEKANAT  = $('#ACCDEKANAT').val();
var IDPK = $('#IDPK').val();
var IDPK = $('#IDPK').val();
var row = $('#row').val();
$('#editDekanat').dialog('close');
$.post("${url3}", 
        
        { ACCDEKANAT:ACCDEKANAT,IDPK:IDPK,IDPK:IDPK},
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
    echo CHtml::hiddenField('IDPK','');
    echo CHtml::hiddenField('IDPK','');
    echo CHtml::hiddenField('row','');
    echo '&nbsp;';
    echo CHtml::button('<< Simpan >>', array("onClick"=>"update2()",'class'=>'btn purple'));

    ?>
</div>

<?php
$this->endWidget('zii.widgets.jui.CJuiDialog');
// ----- End dialog Edit Data ----------------------
?>