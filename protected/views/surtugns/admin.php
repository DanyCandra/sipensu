<?php Yii::app()->clientScript->registerCoreScript('jquery2'); ?>
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Manage Permintaan Surat Tugas Lainnya</h4>
        </div>
        <div class="card-body">
            <?php echo CHtml::link('<i class="fa fa-plus"></i> Tambah', array('create'), array('class' => 'btn btn-primary waves-effect waves-float waves-light')); ?>    </div>
    </div>

<div class="portlet-body">
<div class="table-responsive">
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'surtugns-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'itemsCssClass' => 'table table-bordered table-striped table-advance table-hover',
	'columns'=>array(
		//'IDSURTUGNS',
                //'NOSURTUGNS',
                array(
                    
                    'header'=>'No.Surat',
                    'value' =>'$data->listbuatnosuratns',
                    
                ),
                //'iDJENISSURAT.NAMAJENISSURAT',
		//'nIP.NAMA2',
                 array(
                    'name'=>'NIP',
                    'type'=>'html',
                    'header'=>'Nama Peminta/Pemohon',
                    'value'=>'$data->nIP->NAMA2','sortable'=>true,
                    'filter'=>Chtml::listData(Msdos::model()->findAll(),'NIP','NAMA2')
					),
		//'iDJABATANAKADEMIK.NAMAJABATANAKADEMIK',
		//'iDPANGGOL.GOL',
		//'ISISURTUGNS1',
        //'ISISURTUGNS',
				
		'INSTANSINS',
		//'ALAMATINSTANSINS',
		'TGLACARANS',
		//'KETERANGANNS',
		//'TGLSUBMITNS',
		/*array(
                    'header'=>'Cetak Surat',
                    'type'=>'raw',
                    
                    'value'=>'CHtml::link("Cetak",array("cetak/surtugns","id"=>$data->primaryKey),array ("target"=>"_blank","class"=>"btn btn-small yellow"))',
                ),*/
                array(  
                    'type'=>'html',
                    'header'=>'Cetak Surat',
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
                                'label'=>' <i data-feather="search"></i> ',

                            ),
                            'update'=>array(

                                'label'=>' <i data-feather="edit"></i> ',

                            ),        )
		),

        array(
            'name'=>'ACCSUBKOR',
            'type'=>'raw',
            'filter'=>'' ,
            'header'=>'SUBKOR',
            'value'=>'CHtml::label($data->getAccsubkor(),"",array("onClick"=>"tes1(\'$data->IDSURTUGNS\',$row,\'$data->IDSURTUGNS\')"));'
        ),
        array(
            'name'=>'ACCDEKANAT',
            'type'=>'raw',
            'filter'=>'' ,
            'header'=>'DEKANAT',
            'value'=>'CHtml::label($data->getAccdekanat(),"",array("onClick"=>"tes2(\'$data->IDSURTUGNS\',$row,\'$data->IDSURTUGNS\')"));'
          ),
        array(
            'name'=>'ACCSURTUGNS',
            'filter'=>'' ,
            'type'=>'raw',
            'header'=>'ACC SURAT',
            'value'=>'CHtml::label($data->getAccsurat(),"",array("onClick"=>"tes(\'$data->IDSURTUGNS\',$row,\'$data->IDSURTUGNS\')"));'
        ),
	),
)); ?>
</div>
</div>
</div>

<?php
$url1 = CController::createUrl('/surtugns/AjaxTtd/');
$url2 = CController::createUrl('/surtugns/Ajaxsubkor/');
$url3 = CController::createUrl('/surtugns/Ajaxdekanat/');
$js = <<< JSCRIPT
 
function tes(IDSURTUGNS,row,IDSURTUGNS){

$('#editData').dialog('open');
var label = $('#label_'+row+'').text();
$('#ACCSURTUGNS').val(label);
$('#IDSURTUGNS').val(IDSURTUGNS);
$('#IDSURTUGNS').val(IDSURTUGNS);
$('#row').val(row);
 
}

function tes1(IDSURTUGNS,row,IDSURTUGNS){
 
$('#editSubkor').dialog('open');
var label = $('#label_'+row+'').text();
$('#ACCSURTUGNS').val(label);
$('#IDSURTUGNS').val(IDSURTUGNS);
$('#IDSURTUGNS').val(IDSURTUGNS);
$('#row').val(row);
 
}

function tes2(IDSURTUGNS,row,IDSURTUGNS){
 
$('#editDekanat').dialog('open');
var label = $('#label_'+row+'').text();
$('#ACCSURTUGNS').val(label);
$('#IDSURTUGNS').val(IDSURTUGNS);
$('#IDSURTUGNS').val(IDSURTUGNS);
$('#row').val(row);
 
}
 
function update(){
var ACCSURTUGNS  = $('#ACCSURTUGNS').val();
var IDSURTUGNS = $('#IDSURTUGNS').val();
var IDSURTUGNS = $('#IDSURTUGNS').val();
var row = $('#row').val();
$('#editData').dialog('close');
$.post("${url1}", { ACCSURTUGNS:ACCSURTUGNS,IDSURTUGNS:IDSURTUGNS,IDSURTUGNS:IDSURTUGNS},
        function(data){
           $('#label_'+row+'').text(data.ACCSURTUGNS);
           document.location.reload(true);
           alert('Permintaan surat telah diupdate menjadi '+data.ACCSURTUGNS+' ');
        }, "json");
 
}

function update2(){
var ACCSURTUGNS  = $('#ACCSURTUGNS').val();
var IDSURTUGNS = $('#IDSURTUGNS').val();
var IDSURTUGNS = $('#IDSURTUGNS').val();
var row = $('#row').val();
$('#editSubkor').dialog('close');
$.post("${url2}", { ACCSURTUGNS:ACCSURTUGNS,IDSURTUGNS:IDSURTUGNS,IDSURTUGNS:IDSURTUGNS},
        function(data){
           $('#label_'+row+'').text(data.ACCSURTUGNS);
           document.location.reload(true);
           alert('Permintaan surat telah diupdate menjadi '+data.ACCSURTUGNS+' ');
        }, "json");
 
}

function update3(){
var ACCSURTUGNS  = $('#ACCSURTUGNS').val();
var IDSURTUGNS = $('#IDSURTUGNS').val();
var IDSURTUGNS = $('#IDSURTUGNS').val();
var row = $('#row').val();
$('#editDekanat').dialog('close');
$.post("${url3}", { ACCSURTUGNS:ACCSURTUGNS,IDSURTUGNS:IDSURTUGNS,IDSURTUGNS:IDSURTUGNS},
        function(data){
           $('#label_'+row+'').text(data.ACCSURTUGNS);
           document.location.reload(true);
           alert('Permintaan surat telah diupdate menjadi '+data.ACCSURTUGNS+' ');
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
                'hide'=>'explode',
        ),
        )
);
?>
<div class="from-group">
<?php
echo CHtml::label('Beri Acc Surat', 'ACCSURTUGNS').'&nbsp;:&nbsp;';
echo CHtml::dropDownList('ACCSURTUGNS','',array('Approve'=>'Yes', 'Not Approved'=>'No')); 
echo CHtml::hiddenField('IDSURTUGNS','');
echo CHtml::hiddenField('IDSURTUGNS','');
echo CHtml::hiddenField('row','');
echo '&nbsp;';
echo CHtml::button('<< Simpan >>', array("onClick"=>"update()",'class'=>'btn purple'));

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
            'hide'=>'explode',
        ),
    )
);
?>
<div class="from-group">
    <?php
    echo CHtml::label('Beri Acc Surat', 'ACCSURTUGNS').'&nbsp;:&nbsp;';
    echo CHtml::dropDownList('ACCSURTUGNS','',array('Approve'=>'Yes', 'Not Approved'=>'No'));
    echo CHtml::hiddenField('IDSURTUGNS','');
    echo CHtml::hiddenField('IDSURTUGNS','');
    echo CHtml::hiddenField('row','');
    echo '&nbsp;';
    echo CHtml::button('<< Simpan >>', array("onClick"=>"update2()",'class'=>'btn purple'));

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
            'hide'=>'explode',
        ),
    )
);
?>
<div class="from-group">
    <?php
    echo CHtml::label('Beri Acc Surat', 'ACCDEKANAT').'&nbsp;:&nbsp;';
    echo CHtml::dropDownList('ACCDEKANAT','',array('Approve'=>'Yes', 'Not Approved'=>'No'));
    echo CHtml::hiddenField('IDPM','');
    echo CHtml::hiddenField('IDPM','');

    echo CHtml::hiddenField('row','');
    echo '&nbsp;';
    echo CHtml::button('<< Simpan >>', array("onClick"=>"update3()",'class'=>'btn purple'));

    ?>
</div>

<?php
$this->endWidget('zii.widgets.jui.CJuiDialog');
// ----- End dialog Edit Data ----------------------
