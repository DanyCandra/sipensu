<?php Yii::app()->clientScript->registerCoreScript('jquery2'); ?>
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Manage Permintaan Surat Tugas Pengabdian pada Masyarakat (PPM)</h4>
            </div>
            <div class="card-body">
                <?php echo CHtml::link('<i class="fa fa-plus"></i> Tambah', array('create'), array('class' => 'btn btn-primary waves-effect waves-float waves-light')); ?>
            </div>
        </div>
        <div class="portlet-body">
            <div class="table-responsive">
                <?php $this->widget('zii.widgets.grid.CGridView', array(
                    'id' => 'DataTables_Table_0',
                    'dataProvider' => $model->search(),
                    'filter' => $model,
                    //'itemsCssClass' => 'table table-sm',
                    'columns' => array(
                        array(
                            'header' => 'No.Surat',
                            'value' => '$data->listbuatnosuratpm',
                        ),
                        array(
                            'name' => 'NIP',
                            'type' => 'html',
                            'header' => 'Nama Peminta/Pemohon',
                            'value' => '$data->nIP->NAMA2', 'sortable' => true,
                            'filter' => Chtml::listData(Msdos::model()->findAll(), 'NIP', 'NAMA2'),
                        ),
                        'INSTANSIPM',
                        array(
                            'header' => 'Judul Pengabdian',
                            'value' => '$data->JUDULPM',
                            'type' => 'raw',
                        ),
                        array(
                            'type' => 'html',
                            'header' => 'Srt.Tugas',
                            'value' => '$data->cetakbytgl',
                        ),
                        array(
                            'type' => 'html',
                            'header' => 'Srt.Peny.Makalah',
                            'value' => '$data->cetaksuratpenyusunanpmbytgl',
                        ),
                        array(
                            'header' => 'Action',
                            'class' => 'CButtonColumn',
                            'template' => '{view}{update}',
                            'deleteConfirmation' => 'Anda yakin akan menghapus data?',
                            'viewButtonImageUrl' => false,
                            //'deleteButtonImageUrl'=>false,
                            'updateButtonImageUrl' => false,
                            'viewButtonOptions' => array('class' => 'btn btn-sm blue  tooltips', 'data-placement' => 'top', 'data-original-title' => 'Lihat ', 'title' => 'Lihat ', 'style' => 'margin-right:3px'),
                            'updateButtonOptions' => array('class' => 'btn btn-sm green tooltips', 'data-placement' => 'top', 'data-original-title' => 'Update', 'title' => 'Edit', 'style' => 'margin-right:3px'),
                            'htmlOptions' => array('style' => 'width:90px'),
                            'buttons' => array(

                                'view' => array(
                                    'label' => ' <i data-feather="zoom-in"></i>',
                                ),
                                'update' => array(
                                    'label' => '<i data-feather="edit"></i>',
                                ),)
                        ),
                        array(
                            'name' => 'ACCSUBKOR',
                            'type' => 'raw',
                            'filter' => '',
                            //'header' => 'Acc Sub Kordinator',
                            'value' => 'CHtml::label($data->getAccsubkor(),"",array("onClick"=>"tes1(\'$data->IDPM\',$row,\'$data->IDPM\')","id"=>"label_$row"));'
                            //'value' =>
                        ),
                        array(
                            'name' => 'ACCDEKANAT',
                            'type' => 'raw',
                            'filter' => '',
                           // 'header' => 'Acc Dekanat',
                            'value' => 'CHtml::label($data->getAccdekanat(),"",array("onClick"=>"tes2(\'$data->IDPM\',$row,\'$data->IDPM\')","id"=>"label_$row"));'
                        ),
                        array(
                            'name' => 'ACCSURTUGPM',
                            'type' => 'raw',
                            'filter' => '',
                          //  'header' => 'Status Surat',
                            'value' => 'CHtml::label($data->getAccsurat(),"",array("onClick"=>"tes(\'$data->IDPM\',$row,\'$data->IDPM\')","id"=>"label_$row"));'
                        ),
                    ),
                )); ?>
            </div>
        </div>
    </div>

<?php
$url = CController::createUrl('/surtugpm/AjaxTtd/');
$url2 = CController::createUrl('/surtugpm/Ajaxsubkor/');
$url3 = CController::createUrl('/surtugpm/Ajaxdekanat/');
$js = <<< JSCRIPT
function tes(IDPM,row,IDPM,IDGROUPS){
 
$('#editData').dialog('open');
var label = $('#label_'+row+'').text();
$('#ACCSURTUGPM').val(label);
$('#IDPM').val(IDPM);
$('#IDPM').val(IDPM);
$('#row').val(row);
}

function tes1(IDPM,row,IDPM,IDGROUPS){
        $('#editSubkor').dialog('open');
        var label = $('#label_'+row+'').text();
        $('#ACCSUBKOR').val(label);
        $('#IDPM').val(IDPM);
        $('#IDPM').val(IDPM);
        $('#row').val(row);        
        }

        function tes2(IDPM,row,IDPM,IDGROUPS){
                $('#editDekanat').dialog('open');
                var label = $('#label_'+row+'').text();
                $('#ACCDEKANAT').val(label);
                $('#IDPM').val(IDPM);
                $('#IDPM').val(IDPM);                
                $('#row').val(row);                 
                }
 
function update(){
var ACCSURTUGPM  = $('#ACCSURTUGPM').val();
var IDPM = $('#IDPM').val();
var IDPM = $('#IDPM').val();
var row = $('#row').val();
$('#editData').dialog('close');
$.post("${url}", { ACCSURTUGPM:ACCSURTUGPM,IDPM:IDPM,IDPM:IDPM},
        function(data){
           $('#label_'+row+'').text(data.ACCSURTUGPM);
           document.location.reload(true);
           alert('Permintaan surat telah diupdate menjadi '+data.ACCSURTUGPM+' ');
        }, "json");
}

function update2(){
        var ACCSUBKOR  = $('#ACCSUBKOR').val();
        var IDPM = $('#IDPM').val();
        var IDPM = $('#IDPM').val();        
        var row = $('#row').val();
        $('#editSubkor').dialog('close');
        $.post("${url2}", { ACCSUBKOR:ACCSUBKOR,IDPM:IDPM,IDPM:IDPM},
                function(data){
                   $('#label_'+row+'').text(data.ACCSUBKOR);
                   document.location.reload(true);
                   alert('Permintaan surat telah diupdate menjadi '+data.ACCSUBKOR+' ');
                }, "json");         
        }

        function update3(){
                var ACCDEKANAT  = $('#ACCDEKANAT').val();
                var IDPM = $('#IDPM').val();
                var IDPM = $('#IDPM').val();                
                var row = $('#row').val();
                $('#editDekanat').dialog('close');
                $.post("${url3}", { ACCDEKANAT:ACCDEKANAT,IDPM:IDPM,IDPM:IDPM},
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
        echo CHtml::label('Beri Acc Surat', 'ACCSURTUGPM') . '&nbsp;:&nbsp;';
        echo CHtml::dropDownList('ACCSURTUGPM', '', array('Approve' => 'Yes', 'Not Approved' => 'No'));
        echo CHtml::hiddenField('IDPM', '');
        echo CHtml::hiddenField('IDPM', '');
        echo CHtml::hiddenField('row', '');
        echo '&nbsp;';
        echo CHtml::button('<< Simpan >>', array("onClick" => "update()", 'class' => 'btn btn-outline-primary waves-effect'));

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
            'title' => '<<<< Paraf Sub Kordinator >>>> ',
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
        echo CHtml::hiddenField('IDPM', '');
        echo CHtml::hiddenField('IDPM', '');
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
            'title' => '<<<< Paraf Dekanat >>>> ',
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
        echo CHtml::hiddenField('IDPM', '');
        echo CHtml::hiddenField('IDPM', '');
        echo CHtml::hiddenField('row', '');
        echo '&nbsp;';
        echo CHtml::button('<< Simpan >>', array("onClick" => "update3()", 'class' => 'btn purple'));
        ?>
    </div>

<?php
$this->endWidget('zii.widgets.jui.CJuiDialog');
// ----- End dialog Edit Data ----------------------
?>