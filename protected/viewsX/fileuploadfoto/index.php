<div class="portlet box red">
<div class="portlet-title">
  <div class="caption">
	<i class="fa fa-cogs"></i>Data Foto Mahasiswa</div>
	
        
</div>

<div class="portlet-body">
<div class="table-responsive">
<?php
/* @var $this FileuploadfotoController */
/* @var $dataProvider CActiveDataProvider */

?>
 <?php
    $this->widget('zii.widgets.grid.CGridView', array(
        'id' => 'fileuploadfoto-grid',
        'dataProvider' => $dataProvider,
        'columns' => array(
            'IDFILEFOTO',
		'NIM',
		'FILEFOTO',
            array(
                'class' => 'CButtonColumn',
                'template' => '{view}',
                'header' => 'Aksi',
        )),
    ));
    ?>
<div class="actions">
        <?php echo CHtml::link('<i class="fa fa-plus"></i> Tambah',array('create'),array('class'=>'btn btn-sm blue','disabled'=>true));?>
        <?php echo CHtml::link('Manage',array('admin'),array('class'=>'btn btn-sm blue'));?>
</div> 
    
</div>
</div>
