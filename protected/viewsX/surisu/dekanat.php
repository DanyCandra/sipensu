<div class="portlet box yellow">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-cogs"></i> Manage Permintaan Surat Ijin Survei </div>
        <div class="actions">
            <?php echo CHtml::link('<i class="fa fa-plus"></i> Tambah',array('create'),array('class'=>'btn btn-sm blue'));?>    </div>
        <div class="actions">
            <?php //echo CHtml::link('<i class="fa fa-database"></i> Main Menu Manage Srt.Tugas By Mahasiswa',array('pengguna/menusuratmahasiswa'),array('class'=>'btn btn-sm purple'));?>    </div>
    </div>

    <div class="portlet-body">
        <div class="table-responsive">
            <?php $this->widget('zii.widgets.grid.CGridView', array(
                'id'=>'surisu-grid',
                'dataProvider'=>$model->search(),
                'filter'=>$model,
                'itemsCssClass' => 'table table-bordered table-striped table-advance table-hover',
                'columns'=>array(
                    array(
                        'header'=>'No.Surat',
                        'value' =>'$data->listbuatnosurisu',
                        'type'=>'raw',
                    ),
                    'INSTANSIISU',
                    'ALAMATINSTANSIISU',
                    'KOTAINSTANSIISU',
                    array(
                        'header'=>'Group Mahasiswa',
                        'value' => '$data->listtambahmahasiswasurisu',
                        'type'=>'raw',
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
                        'value'=>'CHtml::label($data->ACCDEKANAT,"",array("onClick"=>"tes2(\'$data->IDISU\',$row,\'$data->IDISU\')","id"=>"label_$row","class"=>"btn btn-sm green"));'
                    ),
                ),
            )); ?>
        </div>
    </div>
</div>

<?php
$url1 = CController::createUrl('/surisu/AjaxTtd/');
$url2 = CController::createUrl('/surisu/AjaxSubkor/');
$url3 = CController::createUrl('/surisu/AjaxDekanat/');
$js = <<< JSCRIPT
 
function tes(IDISU,row,IDISU){
 
$('#editData').dialog('open');
var label = $('#label_'+row+'').text();
$('#ACCSURISU').val(label);
$('#IDISU').val(IDISU);
$('#IDISU').val(IDISU);
$('#row').val(row);
 
}

function tes1(IDISU,row,IDISU){
 
$('#editSubkor').dialog('open');
var label = $('#label_'+row+'').text();
$('#ACCSUBKOR').val(label);
$('#IDISU').val(IDISU);
$('#IDISU').val(IDISU);
$('#row').val(row);
 
}

function tes2(IDISU,row,IDISU){
 
$('#editDekanat').dialog('open');
var label = $('#label_'+row+'').text();
$('#ACCDEKANAT').val(label);
$('#IDISU').val(IDISU);
$('#IDISU').val(IDISU);
$('#row').val(row);
 
}
 
function update(){
var ACCSURISU  = $('#ACCSURISU').val();
var IDISU = $('#IDISU').val();
var IDISU = $('#IDISU').val();
var row = $('#row').val();
$('#editData').dialog('close');
$.post("${url1}", { ACCSURISU:ACCSURISU,IDISU:IDISU,IDISU:IDISU},
        function(data){
           $('#label_'+row+'').text(data.ACCSURISU);
           document.location.reload(true);
           alert('Permintaan surat telah diupdate menjadi '+data.ACCSURISU+' ');
        }, "json");
 
}

function update2(){
var ACCSUBKOR  = $('#ACCSUBKOR').val();
var IDISU = $('#IDISU').val();
var IDISU = $('#IDISU').val();
var row = $('#row').val();
$('#editSubkor').dialog('close');
$.post("${url2}", 
        
        { ACCSUBKOR:ACCSUBKOR,IDISU:IDISU,IDISU:IDISU},
        function(data){
           $('#label_'+row+'').text(data.ACCSUBKOR);
           document.location.reload(true);
           alert('Permintaan surat telah diupdate menjadi '+data.ACCSUBKOR+' ');
        }, "json");
 
}

function update3(){
var ACCDEKANAT  = $('#ACCDEKANAT').val();
var IDISU = $('#IDISU').val();
var IDISU = $('#IDISU').val();
var row = $('#row').val();
$('#editDekanat').dialog('close');
$.post("${url3}", 
        
        { ACCDEKANAT:ACCDEKANAT,IDISU:IDISU,IDISU:IDISU},
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
    echo CHtml::hiddenField('IDISU','');
    echo CHtml::hiddenField('IDISU','');
    echo CHtml::hiddenField('row','');
    echo '&nbsp;';
    echo CHtml::button('<< Simpan >>', array("onClick"=>"update3()",'class'=>'btn purple'));

    ?>
</div>

<?php
$this->endWidget('zii.widgets.jui.CJuiDialog');
// ----- End dialog Edit Data ----------------------
?>