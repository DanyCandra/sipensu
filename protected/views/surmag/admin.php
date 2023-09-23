<?php Yii::app()->clientScript->registerCoreScript('jquery2'); ?>
<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Manage Permintaan Surat Permohonan Magang</h4>
        </div>
        <div class="card-body">
            <?php echo CHtml::link('<i class="fa fa-plus"></i> Tambah', array('create'), array('class' => 'btn btn-primary waves-effect waves-float waves-light')); ?>    </div>
    </div>

    <div class="portlet-body">
        <div class="table-responsive">
            <?php $this->widget('zii.widgets.grid.CGridView', array(
                'id' => 'surmag-grid',
                'dataProvider' => $model->search(),
                'filter' => $model,
                //'itemsCssClass' => 'table table-bordered table-striped table-advance table-hover',
                'columns' => array(
                    array(
                        'header' => 'No.Surat',
                        'value' => '$data->listbuatnosurmag',
                    ),
                    'INSTANSISURMAG',
                    'KOTAINSTANSISURMAG',
                  //  'TGLMULAISURMAG',
                   // 'TGLAKHIRSURMAG',
                    array(
                        'header' => 'Group/Personal Mahasiswa',
                        'value' => '$data->listtambahmahasiswasurmag',
                    ),
                    array(
                        'header' => 'Cetak Surat',
                        'type' => 'raw',
                        'value' => '$data->cetakbytgl',
                    ),
                    array(
                        'header' => 'Action',
                        'type' => 'raw',
                        'value' => '$data->listactionnotifikasi',
                        'htmlOptions' => array('style' => 'width:9%'),
                    ),
                    array(
                        'name' => 'ACCSURMAG',
                        'filter' => '',
                        'type' => 'raw',
                        'header' => 'Status Surat',
                        'value' => 'CHtml::label($data->getStatussurat(),"",array("onClick"=>"tes(\'$data->IDSURMAG\',$row,\'$data->IDSURMAG\')","id"=>"label_$row","class"=>"btn btn-sm blue"));'
                        //'value'=>'CHtml::label($data->ACCSURMAG=="Approve"?$data->ACCSURMAG:"Pending","",array("onClick"=>"tes(\'$data->IDSURMAG\',$row,\'$data->IDSURMAG\')","id"=>"label_$row","class"=>"btn btn-sm blue"));'
                    ),
                    array(
                        'name' => 'ACCSUBKOR',
                        'type' => 'raw',
                        'filter' => '',
                        'header' => 'Acc Sub Kordinator',
                        'value' => 'CHtml::label($data->getAccsubkor(),"",array("onClick"=>"tes1(\'$data->IDSURMAG\',$row,\'$data->IDSURMAG\')","id"=>"label_$row","class"=>"btn btn-sm red"));'
                    ),
                    array(
                        'name' => 'ACCDEKANAT',
                        'type' => 'raw',
                        'filter' => '',
                        'header' => 'Acc Dekanat',
                        'value' => 'CHtml::label($data->getAccdekanat(),"",array("onClick"=>"tes2(\'$data->IDSURMAG\',$row,\'$data->IDSURMAG\')","id"=>"label_$row","class"=>"btn btn-sm green"));'
                    ),
                ),
            )); ?>
        </div>
    </div>
</div>

<?php
$url1 = CController::createUrl('/surmag/AjaxTtd/');
$url2 = CController::createUrl('/surmag/Ajaxsubkor/');
$url3 = CController::createUrl('/surmag/Ajaxdekanat/');
$js = <<< JSCRIPT
 
function tes(IDSURMAG,row,IDSURMAG){
 
$('#editData').dialog('open');
var label = $('#label_'+row+'').text();
$('#ACCSURMAG').val(label);
$('#IDSURMAG').val(IDSURMAG);
$('#row').val(row);
 
}

function tes1(IDSURMAG,row,IDSURMAG){
 
$('#editSubkor').dialog('open');
var label = $('#label_'+row+'').text();
$('#ACCSUBKOR').val(label);
$('#IDSURMAG').val(IDSURMAG);
$('#IDSURMAG').val(IDSURMAG);
$('#row').val(row);
 
}

function tes2(IDSURMAG,row,IDSURMAG){
 
$('#editDekanat').dialog('open');
var label = $('#label_'+row+'').text();
$('#ACCDEKANAT').val(label);
$('#IDSURMAG').val(IDSURMAG);
$('#IDSURMAG').val(IDSURMAG);
$('#row').val(row);
 
}
 
function update(){
var ACCSURMAG  = $('#ACCSURMAG').val();
var IDSURMAG = $('#IDSURMAG').val();
var row = $('#row').val();
$('#editData').dialog('close');
$.post("${url1}", { ACCSURMAG:ACCSURMAG,IDSURMAG:IDSURMAG,IDSURMAG:IDSURMAG},
        function(data){
           $('#label_'+row+'').text(data.ACCSURMAG);
           document.location.reload(true);
           alert('Permintaan surat telah diupdate menjadi '+data.ACCSURMAG+' ');
        }, "json");
 
}

function update2(){
var ACCSUBKOR  = $('#ACCSUBKOR').val();
var IDSURMAG = $('#IDSURMAG').val();
var IDSURMAG = $('#IDSURMAG').val();
var row = $('#row').val();
$('#editSubkor').dialog('close');
$.post("${url2}", 
        
        { ACCSUBKOR:ACCSUBKOR,IDSURMAG:IDSURMAG,IDSURMAG:IDSURMAG},
        function(data){
           $('#label_'+row+'').text(data.ACCSUBKOR);
           document.location.reload(true);
           alert('Permintaan surat telah diupdate menjadi '+data.ACCSUBKOR+' ');
        }, "json");
 
}

function update3(){
var ACCDEKANAT  = $('#ACCDEKANAT').val();
var IDSURMAG = $('#IDSURMAG').val();
var IDSURMAG = $('#IDSURMAG').val();
var row = $('#row').val();
$('#editDekanat').dialog('close');
$.post("${url3}", 
        
        { ACCDEKANAT:ACCDEKANAT,IDSURMAG:IDSURMAG,IDSURMAG:IDSURMAG},
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
        'id' => 'editData',
        'options' => array(
            'title' => '<<<< Acc Permintaan/Permohanan Surat >>>> ',
            'autoOpen' => false,
            'minWidth' => 400,
            'minHeight' => 100,
            'resizable' => false,
            'modal' => true,
            'show' => 'blind',
            'hide' => 'explode',
        ),
    )
);
?>
<div class="from-group">
    <?php
    echo CHtml::label('Beri Acc Surat', 'ACCSURMAG') . '&nbsp;:&nbsp;';
    echo CHtml::dropDownList('ACCSURMAG', '', array('Approve' => 'Yes', 'Not Approved' => 'No'));
    echo CHtml::hiddenField('IDSURMAG', '');
    echo CHtml::hiddenField('row', '');
    echo '&nbsp;';
    echo CHtml::button('<< Simpan >>', array("onClick" => "update()", 'class' => 'btn purple'));

    ?>
</div>

<?php
$this->endWidget('zii.widgets.jui.CJuiDialog');
// ----- End dialog Edit Data ----------------------
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
            'hide' => 'explode',
        ),
    )
);
?>
<div class="from-group">
    <?php
    echo CHtml::label('Beri Acc Surat', 'ACCSUBKOR') . '&nbsp;:&nbsp;';
    echo CHtml::dropDownList('ACCSUBKOR', '', array('Approve' => 'Yes', 'Not Approved' => 'No'));
    echo CHtml::hiddenField('IDSURMAG', '');
    echo CHtml::hiddenField('IDSURMAG', '');
    echo CHtml::hiddenField('row', '');
    echo '&nbsp;';
    echo CHtml::button('<< Simpan >>', array("onClick" => "update2()", 'class' => 'btn purple'));

    ?>
</div>

<?php
$this->endWidget('zii.widgets.jui.CJuiDialog');
// ----- End dialog Edit Data ----------------------
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
            'hide' => 'explode',
        ),
    )
);
?>
<div class="from-group">
    <?php
    echo CHtml::label('Beri Acc Surat', 'ACCDEKANAT') . '&nbsp;:&nbsp;';
    echo CHtml::dropDownList('ACCDEKANAT', '', array('Approve' => 'Yes', 'Not Approved' => 'No'));
    echo CHtml::hiddenField('IDSURMAG', '');
    echo CHtml::hiddenField('IDSURMAG', '');
    echo CHtml::hiddenField('row', '');
    echo '&nbsp;';
    echo CHtml::button('<< Simpan >>', array("onClick" => "update3()", 'class' => 'btn purple'));

    ?>
</div>

<?php
$this->endWidget('zii.widgets.jui.CJuiDialog');
// ----- End dialog Edit Data ----------------------
?>
