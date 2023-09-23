<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Manage Permintaan Surat Tugas Pengabdian pada Masyarakat (PPM)</h4>
        </div>
        <div class="card-body">
            <?php echo CHtml::link('<i class="fa fa-plus"></i> Tambah',array('create'),array('class'=>'btn btn-primary waves-effect waves-float waves-light'));?>    </div>
    </div>
    <div class="portlet-body">
        <div class="table-responsive">
            <?php $this->widget('zii.widgets.grid.CGridView', array(
                'id'=>'surtugpm-grid',
                'dataProvider'=>$model->search(),
                'filter'=>$model,
                'itemsCssClass' => 'table table-bordered table-striped table-advance table-hover',
                'columns'=>array(
                    array(

                        'header'=>'No.Surat',
                        'value' =>'$data->listbuatnosuratpm',

                    ),
                    array(
                        'name'=>'NIP',
                        'type'=>'html',
                        'header'=>'Nama Peminta/Pemohon',
                        'value'=>'$data->nIP->NAMA2','sortable'=>true,
                        'filter'=>Chtml::listData(Msdos::model()->findAll(),'NIP','NAMA2'),
                    ),
                    'INSTANSIPM',
                    array(

                        'header'=>'Judul Pengabdian',
                        'value' =>'$data->JUDULPM',
                        'type'=>'raw',

                    ),
                    array(
                        'type'=>'html',
                        'header'=>'Cetak Srt.Tugas',
                        'value'=>'$data->cetakbytgl',
                    ),

                    array(
                        'type'=>'html',
                        'header'=>'Cetak Srt.Peny.Makalah',
                        'value'=>'$data->cetaksuratpenyusunanpmbytgl',
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
                                'label'=>' <i class="fa fa-search">  </i> ',

                            ),
                            'update'=>array(

                                'label'=>' <i class="fa fa-edit">  </i> ',

                            ),     )
                    ),


                    array(
                        'name'=>'ACCSUBKOR',
                        'type'=>'raw',
                        'filter'=>'' ,
                        'header'=>'Acc Sub Kordinator',
                        'value'=>'CHtml::label($data->ACCSUBKOR,"",array("onClick"=>"tes1(\'$data->IDPM\',$row,\'$data->IDPM\')","id"=>"label_$row","class"=>"btn btn-sm red"));'

                        //'value'=>'CHtml::label($data->ACCSURTUGPM=="Approve"?$data->ACCSURTUGPM:"Not Approved","",array("onClick"=>"tes(\'$data->IDPM\',$row,\'$data->IDPM\')","id"=>"label_$row","class"=>"btn btn-sm blue"));'
                        //'value'=>'CHtml::label($data->ACCSURTUGPM=="Approve"?$data->ACCSURTUGPM="Not Approve"?$data->ACCSURTUGPM:"Pending",array("onClick"=>"tes(\'$data->IDPM\',$row,\'$data->IDPM\')","id"=>"label_$row","class"=>"btn btn-sm blue"));'
                    ),

                ),
            )); ?>
        </div>
    </div>
</div>

<?php
$url2 = CController::createUrl('/surtugpm/Ajaxsubkor/');
$js = <<< JSCRIPT
 
function tes1(IDPM,row,IDPM,IDGROUPS){
 
        $('#editSubkor').dialog('open');
        var label = $('#label_'+row+'').text();
        $('#ACCSUBKOR').val(label);
        $('#IDPM').val(IDPM);
        $('#IDPM').val(IDPM);
        
        $('#row').val(row);
         
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
JSCRIPT;
Yii::app()->clientScript->registerScript('disable_keluar', $js, CClientScript::POS_BEGIN);
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
    echo CHtml::label('Beri Acc Surat', 'ACCSUBKOR').'&nbsp;:&nbsp;';
    echo CHtml::dropDownList('ACCSUBKOR','',array('Approve'=>'Yes', 'Not Approved'=>'No'));
    echo CHtml::hiddenField('IDPM','');
    echo CHtml::hiddenField('IDPM','');

    echo CHtml::hiddenField('row','');
    echo '&nbsp;';
    echo CHtml::button('<< Simpan >>', array("onClick"=>"update2()",'class'=>'btn purple'));

    ?>
</div>

<?php
$this->endWidget('zii.widgets.jui.CJuiDialog');
// ----- End dialog Edit Data ----------------------
?>