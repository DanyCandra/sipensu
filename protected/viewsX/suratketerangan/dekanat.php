<div class="portlet box yellow">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-cogs"></i> Manage Permintaan Surat Keterangan</div>
        <div class="actions">
            <?php echo CHtml::link('<i class="fa fa-plus"></i> Tambah',array('create'),array('class'=>'btn btn-sm blue'));?>    </div>
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
	$('#suratketerangan-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
            ?>

            <?php echo CHtml::link('Pencarian','#',array('class'=>'search-button')); ?>
            <div class="search-form" style="display:none">
                <?php $this->renderPartial('_search',array(
                    'model'=>$model,
                )); ?>
            </div><!-- search-form -->
        </div>


        <div class="portlet-body">
            <div class="table-responsive">
                <?php $this->widget('zii.widgets.grid.CGridView', array(
                    'id'=>'suratketerangan-grid',
                    'dataProvider'=>$model->search(),
                    'filter'=>$model,
                    'itemsCssClass' => 'table table-bordered table-striped table-advance table-hover',
                    'columns'=>array(
                        array(

                            'header'=>'No.Surat',
                            'value' =>'$data->listbuatnosuratketerangan',
                            'htmlOptions'=>array('width'=>'15%'),
                        ),
                        array (
                            'name'=>'NIM',
                            'type'=>'raw',
                            'header'=>'NIM',
                            'value'=>'CHtml::encode(
				        $data->nIM->NIM)',
                            'htmlOptions'=>array('widht'=>''),

                        ),
                        array(
                            'name'=>'IDSURKET',
                            'type'=>'raw',
                            'header'=>'Nama Peminta/Pemohon',
                            'value'=>'$data->nIM->NAMA',
                            'filter'=>'',
                        ),
                        'nIM.iDPRODI.NAMAPRODI',
                        array(
                            'type'=>'raw',
                            'header'=>'Perihal',
                            'value' =>'$data->listperihalsuratketerangan',
                        ),
                        array(
                            'type'=>'html',
                            'header'=>'Cetak Srt. Keterangan',
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
                            'value'=>'CHtml::label($data->ACCDEKANAT,"",array("onClick"=>"tes2(\'$data->IDSURKET\',$row,\'$data->IDSURKET\')","id"=>"label_$row","class"=>"btn btn-sm green"));'
                        ),
                    ),
                )); ?>
            </div>
        </div>
    </div>
</div>
<!--membuat approve surat by admin-->
<?php
$url1 = CController::createUrl('/suratketerangan/AjaxTtd/');
$url2 = CController::createUrl('/suratketerangan/Ajaxsubkor/');
$url3 = CController::createUrl('/suratketerangan/Ajaxdekanat/');
$js = <<< JSCRIPT
 
function tes(IDSURKET,row,IDSURKET,IDGROUPS){
$('#editData').dialog('open');
var label = $('#label_'+row+'').text();
$('#ACCSURKET').val(label);
$('#IDSURKET').val(IDSURKET);
$('#IDSURKET').val(IDSURKET);
$('#row').val(row);
}

function tes1(IDSURKET,row,IDSURKET){
$('#editSubkor').dialog('open');
var label = $('#label_'+row+'').text();
$('#ACCSUBKOR').val(label);
$('#IDSURKET').val(IDSURKET);
$('#IDSURKET').val(IDSURKET);
$('#row').val(row);
 
}

function tes2(IDSURKET,row,IDSURKET){
$('#editDekanat').dialog('open');
var label = $('#label_'+row+'').text();
$('#ACCDEKANAT').val(label);
$('#IDSURKET').val(IDSURKET);
$('#IDSURKET').val(IDSURKET);
$('#row').val(row);
 
}
 
function update(){
var ACCSURKET  = $('#ACCSURKET').val();
var IDSURKET = $('#IDSURKET').val();
var IDSURKET = $('#IDSURKET').val();

var row = $('#row').val();
$('#editData').dialog('close');
$.post("${url1}", { ACCSURKET:ACCSURKET,IDSURKET:IDSURKET,IDSURKET:IDSURKET},
        function(data){
           $('#label_'+row+'').text(data.ACCSURKET);
           document.location.reload(true);
           alert('Permintaan surat telah diupdate menjadi '+data.ACCSURKET+' ');
        }, "json");
}

function update2(){
var ACCSUBKOR  = $('#ACCSUBKOR').val();
var IDSURKET = $('#IDSURKET').val();
var IDSURKET = $('#IDSURKET').val();
var row = $('#row').val();
$('#editSubkor').dialog('close');
$.post("${url2}", 
        
        { ACCSUBKOR:ACCSUBKOR,IDSURKET:IDSURKET,IDSURKET:IDSURKET},
        function(data){
           $('#label_'+row+'').text(data.ACCSUBKOR);
           document.location.reload(true);
           alert('Permintaan surat telah diupdate menjadi '+data.ACCSUBKOR+' ');
        }, "json");
 
}

function update3(){
var ACCDEKANAT  = $('#ACCDEKANAT').val();
var IDSURKET = $('#IDSURKET').val();
var IDSURKET = $('#IDSURKET').val();
var row = $('#row').val();
$('#editDekanat').dialog('close');
$.post("${url3}", 
        
        { ACCDEKANAT:ACCDEKANAT,IDSURKET:IDSURKET,IDSURKET:IDSURKET},
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
    echo CHtml::hiddenField('IDSURKET','');
    echo CHtml::hiddenField('IDSURKET','');
    echo CHtml::hiddenField('row','');
    echo '&nbsp;';
    echo CHtml::button('<< Simpan >>', array("onClick"=>"update3()",'class'=>'btn purple'));

    ?>
</div>

<?php
$this->endWidget('zii.widgets.jui.CJuiDialog');
// ----- End dialog Edit Data ----------------------
?>