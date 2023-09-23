<div class="portlet box yellow">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-cogs"></i> Manage Permintaan Surat Permohonan Magang</div>
        <div class="actions">
            <?php echo CHtml::link('<i class="fa fa-plus"></i> Tambah',array('create'),array('class'=>'btn btn-sm blue'));?>    </div>
        <div class="actions">
            <?php //echo CHtml::link('<i class="fa fa-database"></i> Main Menu Manage Srt.Tugas By Mahasiswa',array('pengguna/menusuratmahasiswa'),array('class'=>'btn btn-sm purple'));?>    </div>
    </div>

    <div class="portlet-body">
        <div class="table-responsive">
            <?php $this->widget('zii.widgets.grid.CGridView', array(
                'id'=>'surmag-grid',
                'dataProvider'=>$model->search(),
                'filter'=>$model,
                'itemsCssClass' => 'table table-bordered table-striped table-advance table-hover',
                'columns'=>array(

                    //'IDSURMAG',
                    //'IDJENISSURAT',
                    //'NOSURMAG',
                    array(

                        'header'=>'No.Surat',
                        'value' =>'$data->listbuatnosurmag',

                    ),
                    'INSTANSISURMAG',
                    //'ALAMATINSTANSISURMAG',
                    'KOTAINSTANSISURMAG',
                    //'iDTASEMESTER.TAHUNAKADEMIK',
                    //'iDTASEMESTER.SEMESTER',

                    'TGLMULAISURMAG',
                    'TGLAKHIRSURMAG',
                    /*
                            'KETERANGANSURMAG',
                    'TGLSUBMITSURMAG',
                    */
                    array(

                        'header'=>'Group/Personal Mahasiswa',
                        'value' => '$data->listtambahmahasiswasurmag',
                    ),
                    array(
                        'header'=>'Cetak Surat',
                        'type'=>'raw',
                        'value'=>'$data->cetakbytgl',

                    ),
                    /*array(
                                'header'=>'Cetak Surat',
                                'type'=>'raw',

                                'value'=>'CHtml::link("Cetak",array("cetak/surmag","id"=>$data->primaryKey),array ("target"=>"_blank","class"=>"btn btn-small yellow"))',
                            ),*/
                    array(
                        'header'=>'Action',
                        'type'=>'raw',
                        'value'=>'$data->listactionnotifikasi',
                        'htmlOptions'=>array('style'=>'width:9%'),
                    ),
                    /*array(
                                     'header'=>'Action',
                        'class'=>'CButtonColumn',
                                    'template'=>'{view}{update}',
                                    'deleteConfirmation'=>'Anda yakin akan menghapus data?',
                                    'viewButtonImageUrl'=>false,
                                    //'deleteButtonImageUrl'=>false,
                                    'updateButtonImageUrl'=>false,

                                      'viewButtonOptions'=>array('class'=>'btn btn-sm blue  tooltips','data-placement'=>'top',
                                        'data-original-title'=>'Lihat ','title'=>'Lihat ','style'=>'margin-right:3px'),
                                       'updateButtonOptions'=>array('class'=>'btn btn-sm green tooltips','data-placement'=>'top',
                                        'data-original-title'=>'Update','title'=>'Edit','style'=>'margin-right:3px'),
                                      'htmlOptions'=>array('style'=>'width:90px'),
                                    'buttons'=>array(

                                        'view'=>array(
                                            'label'=>' <i class="fa fa-search">  </i> ',

                                            ),
                                        'update'=>array(

                                            'label'=>' <i class="fa fa-edit">  </i> ',

                                        ),     )
                    ),*/

                    array(
                        'name'=>'ACCDEKANAT',
                        'type'=>'raw',
                        'filter'=>'' ,
                        'header'=>'Acc Dekanat',
                        'value'=>'CHtml::label($data->ACCDEKANAT,"",array("onClick"=>"tes2(\'$data->IDSURMAG\',$row,\'$data->IDSURMAG\')","id"=>"label_$row","class"=>"btn btn-sm green"));'
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
    echo CHtml::hiddenField('IDSURMAG','');
    echo CHtml::hiddenField('IDSURMAG','');
    echo CHtml::hiddenField('row','');
    echo '&nbsp;';
    echo CHtml::button('<< Simpan >>', array("onClick"=>"update3()",'class'=>'btn purple'));

    ?>
</div>

<?php
$this->endWidget('zii.widgets.jui.CJuiDialog');
// ----- End dialog Edit Data ----------------------
?>
