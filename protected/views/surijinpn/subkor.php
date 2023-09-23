<div class="portlet box yellow">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-cogs"></i> Manage Permintaan Surat Ijin Penelitian</div>
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
	$('#surijinpn-grid').yiiGridView('update', {
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
                    'id'=>'surijinpn-grid',
                    'dataProvider'=>$model->search(),
                    'filter'=>$model,
                    'itemsCssClass' => 'table table-bordered table-striped table-advance table-hover',
                    'columns'=>array(
                        array(

                            'header'=>'No.Surat',
                            'value' =>'$data->listbuatnosurijinpn',

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
                            'name'=>'IDIJINPN',
                            'type'=>'raw',
                            'header'=>'Nama Peminta/Pemohon',
                            'value'=>'$data->nIM->NAMA','sortable'=>true,
                            'filter'=>'',
                            //'filter'=>Chtml::listData(Surijinpn::model()->findAll(),'IDIJINPN','nIM.NAMA')
                        ),

                        'INSTANSIIJINPN',
                        'ALAMATINSTANSIIJINPN',
                        'KOTAINSTANSIIJINPN',
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
                            'name'=>'ACCSUBKOR',
                            'type'=>'raw',
                            'filter'=>'' ,
                            'header'=>'Acc Sub Kordinator',
                            'value'=>'CHtml::label($data->ACCSUBKOR,"",array("onClick"=>"tes1(\'$data->IDIJINPN\',$row,\'$data->IDIJINPN\')","id"=>"label_$row","class"=>"btn btn-sm red"));'
                        ),
                    ),
                )); ?>
            </div>
        </div>
    </div>

    <?php
    $url1 = CController::createUrl('/surijinpn/AjaxTtd/');
    $url2 = CController::createUrl('/surijinpn/AjaxSubkor/');
    $url3 = CController::createUrl('/surijinpn/AjaxDekanat/');
    $js = <<< JSCRIPT
 
function tes(IDIJINPN,row,IDIJINPN){
 
$('#editData').dialog('open');
var label = $('#label_'+row+'').text();
$('#ACCSURIJINPN').val(label);
$('#IDIJINPN').val(IDIJINPN);
$('#IDIJINPN').val(IDIJINPN);
$('#row').val(row);
 
}

function tes1(IDIJINPN,row,IDIJINPN){
 
$('#editSubkor').dialog('open');
var label = $('#label_'+row+'').text();
$('#ACCSUBKOR').val(label);
$('#IDIJINPN').val(IDIJINPN);
$('#IDIJINPN').val(IDIJINPN);
$('#row').val(row);
 
}

function tes2(IDIJINPN,row,IDIJINPN){
 
$('#editDekanat').dialog('open');
var label = $('#label_'+row+'').text();
$('#ACCDEKANAT').val(label);
$('#IDIJINPN').val(IDIJINPN);
$('#IDIJINPN').val(IDIJINPN);
$('#row').val(row);
 
}
 
function update(){
var ACCSURIJINPN  = $('#ACCSURIJINPN').val();
var IDIJINPN = $('#IDIJINPN').val();
var IDIJINPN = $('#IDIJINPN').val();
var row = $('#row').val();
$('#editData').dialog('close');
$.post("${url1}", { ACCSURIJINPN:ACCSURIJINPN,IDIJINPN:IDIJINPN,IDIJINPN:IDIJINPN},
        function(data){
           $('#label_'+row+'').text(data.ACCSURIJINPN);
           document.location.reload(true);
           alert('Permintaan surat telah diupdate menjadi '+data.ACCSURIJINPN+' ');
        }, "json");
 
}

function update2(){
var ACCSUBKOR  = $('#ACCSUBKOR').val();
var IDIJINPN = $('#IDIJINPN').val();
var IDIJINPN = $('#IDIJINPN').val();
var row = $('#row').val();
$('#editSubkor').dialog('close');
$.post("${url2}", 
        
        { ACCSUBKOR:ACCSUBKOR,IDIJINPN:IDIJINPN,IDIJINPN:IDIJINPN},
        function(data){
           $('#label_'+row+'').text(data.ACCSUBKOR);
           document.location.reload(true);
           alert('Permintaan surat telah diupdate menjadi '+data.ACCSUBKOR+' ');
        }, "json");
 
}

function update3(){
var ACCDEKANAT  = $('#ACCDEKANAT').val();
var IDIJINPN = $('#IDIJINPN').val();
var IDIJINPN = $('#IDIJINPN').val();
var row = $('#row').val();
$('#editDekanat').dialog('close');
$.post("${url3}", 
        
        { ACCDEKANAT:ACCDEKANAT,IDIJINPN:IDIJINPN,IDIJINPN:IDIJINPN},
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
        echo CHtml::hiddenField('IDIJINPN','');
        echo CHtml::hiddenField('IDIJINPN','');
        echo CHtml::hiddenField('row','');
        echo '&nbsp;';
        echo CHtml::button('<< Simpan >>', array("onClick"=>"update2()",'class'=>'btn purple'));

        ?>
    </div>

    <?php
    $this->endWidget('zii.widgets.jui.CJuiDialog');
    // ----- End dialog Edit Data ----------------------
    ?>