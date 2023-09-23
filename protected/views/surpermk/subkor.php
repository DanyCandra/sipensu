<div class="portlet box yellow">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-cogs"></i> Manage Permintaan Surat Pernyataan Masih Kuliah</div>
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
	$('#surpermk-grid').yiiGridView('update', {
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
                <?php $this->widget('ext.EExcelView', array(
                    'id'=>'surpermk-grid',
                    'dataProvider'=>$model->search(),
                    'filter'=>$model,
                    'template' => "{summary}\n{items}\n{pager}",
                    'itemsCssClass' => 'table table-bordered table-striped table-advance table-hover',
                    'columns'=>array(
                        array(
                            'header'=>'No.Surat',
                            'value' =>'$data->listbuatnosuratmk',

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
                            'name'=>'IDMK',
                            'type'=>'raw',
                            'header'=>'Nama Peminta/Pemohon',
                            'value'=>'$data->nIM->NAMA',
                            'filter'=>'',
                            //'filter'=>Chtml::listData(Surpermk::model()->findAll(),'IDMK','nIM.NAMA')
                        ),
                        'nIM.iDPRODI.NAMAPRODI',
                        /*array(
                           'name'=>'NIM',
                           'type'=>'raw',
                           'header'=>'Jurusan/Prodi',
                           'value'=>'$data->nIM->iDPRODI->NAMAPRODI',
                           'filter'=>Chtml::listData(Prodi::model()->findAll(),'IDPRODI','NAMAPRODI')
                           ),*/

                        'iDTASEMESTER.TAHUNAKADEMIK',
                        array(
                            'header'=>'Cetak Surat',
                            'type'=>'raw',
                            'value'=>'$data->cetakbytgl',
                        ),
                        /*array(
                                        'header'=>'Action',
                            'class'=>'CButtonColumn',
                            'htmlOptions' => array(
                                        'style' => 'width:75px;text-align:center;'
                                    )
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
                            'name'=>'ACCSUBKOR',
                            'type'=>'raw',
                            'filter'=>'' ,
                            'header'=>'Acc Sub Kordinator',
                            'value'=>'CHtml::label($data->ACCSUBKOR,"",array("onClick"=>"tes1(\'$data->IDMK\',$row,\'$data->IDMK\')","id"=>"label_$row","class"=>"btn btn-sm red"));'
                        ),

                    ),
                )); ?>
            </div>
        </div>
    </div>

    <?php
    $url1 = CController::createUrl('/surpermk/AjaxTtd/');
    $url2 = CController::createUrl('/surpermk/Ajaxsubkor/');
    $url3 = CController::createUrl('/surpermk/Ajaxdekanat/');
    $js = <<< JSCRIPT
 
function tes(IDMK,row,IDMK,IDGROUPS){
 
$('#editData').dialog('open');
var label = $('#label_'+row+'').text();
$('#ACCSURPERMK').val(label);
$('#IDMK').val(IDMK);
$('#IDMK').val(IDMK);
$('#row').val(row);
 
}

function tes1(IDMK,row,IDMK,IDGROUPS){
 
$('#editSubkor').dialog('open');
var label = $('#label_'+row+'').text();
$('#ACCSUBKOR').val(label);
$('#IDMK').val(IDMK);
$('#IDMK').val(IDMK);
$('#row').val(row);
 
}

function tes2(IDMK,row,IDMK,IDGROUPS){
 
$('#editDekanat').dialog('open');
var label = $('#label_'+row+'').text();
$('#ACCDEKANAT').val(label);
$('#IDMK').val(IDMK);
$('#IDMK').val(IDMK);
$('#row').val(row);
 
}

function update(){
var ACCSURPERMK  = $('#ACCSURPERMK').val();
var IDMK = $('#IDMK').val();
var IDMK = $('#IDMK').val();
var row = $('#row').val();
$('#editData').dialog('close');
$.post("${url1}", 
        
        { ACCSURPERMK:ACCSURPERMK,IDMK:IDMK,IDMK:IDMK},
        function(data){
           $('#label_'+row+'').text(data.ACCSURPERMK);
           document.location.reload(true);
           alert('Permintaan surat telah diupdate menjadi '+data.ACCSURPERMK+' ');
        }, "json");
 
}

function update2(){
var ACCSUBKOR  = $('#ACCSUBKOR').val();
var IDMK = $('#IDMK').val();
var IDMK = $('#IDMK').val();
var row = $('#row').val();
$('#editSubkor').dialog('close');
$.post("${url2}", 
        
        { ACCSUBKOR:ACCSUBKOR,IDMK:IDMK,IDMK:IDMK},
        function(data){
           $('#label_'+row+'').text(data.ACCSUBKOR);
           document.location.reload(true);
           alert('Permintaan surat telah diupdate menjadi '+data.ACCSUBKOR+' ');
        }, "json");
 
}

function update3(){
var ACCDEKANAT  = $('#ACCDEKANAT').val();
var IDMK = $('#IDMK').val();
var IDMK = $('#IDMK').val();
var row = $('#row').val();
$('#editDekanat').dialog('close');
$.post("${url3}", 
        
        { ACCDEKANAT:ACCDEKANAT,IDMK:IDMK,IDMK:IDMK},
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
        echo CHtml::hiddenField('IDMK','');
        echo CHtml::hiddenField('IDMK','');
        echo CHtml::hiddenField('row','');
        echo '&nbsp;';
        echo CHtml::button('<< Simpan >>', array("onClick"=>"update2()",'class'=>'btn purple'));

        ?>
    </div>

    <?php
    $this->endWidget('zii.widgets.jui.CJuiDialog');
    // ----- End dialog Edit Data ----------------------
    ?>