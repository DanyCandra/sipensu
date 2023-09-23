<!-- BEGIN PAGE HEADER-->
<meta http-equiv="refresh" content="10" >
<div class="raw">
    <div class="col-md-12">
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title">
            Berita/Informasi <small>list berita/informasi </small>
        </h3>
        <ul class="page-breadcrumb breadcrumb">

            <li>
                <i class="fa fa-home"></i>
                <a href="<?php echo Yii::app()->createUrl('site/index'); ?>">Home</a>
                <i class="fa fa-angle-right"></i>
            </li>

        </ul>
        <!-- END PAGE TITLE & BREADCRUMB-->
    </div>
</div>
<!-- END PAGE HEADER-->
<div class="col-md-9 col-sm-9">
    <div class="portlet box blue">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-info"></i>  BERITA/INFORMASI LAYANAN MANDIRI SIPENSU 2015 </div>

        </div>

        <div class="portlet-body">

            <div class="block-content collapse in">

                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab1" data-toggle="tab">Peraturan <span class="badge badge-success">
                                1 </span></a></li>
                    <li><a href="#tab2" data-toggle="tab">Pengumuman <span class="badge badge-success">
                                2 </span> </a></li>
                    <li><a href="#tab3" data-toggle="tab">Prosedur <span class="badge badge-danger">
                                3 </span></a></li>
                    <li><a href="#tab4" data-toggle="tab">Berita/Informasi <span class="badge badge-danger">
                                4 </span></a></li>
                </ul>
                <div class="tab-content">

                    <div class="tab-pane fade in active" id="tab1">



                        <?php
                        $this->widget('zii.widgets.grid.CGridView', array(
                            'id' => 'berita-grid',
                            'dataProvider' => $model3,
                            'template' => "{summary}\n{items}\n{pager}",
                            'itemsCssClass' => 'table table-bordered table-striped table-hover',
                            'columns' => array(
                                //'IDBERITA',
                                'iDKATEGORI.NAMAKATEGORI',
                                'JUDUL',
                                //'ISI',
                                //'ISPUBLISH',
                                //'FILEIMAGE',
                                /*
                                  'HIT',
                                  'TGLSUBMIT',
                                  'SUMMARY',
                                 */
                                array(
                                    'header' => 'View',
                                    'type' => 'raw',
                                    'value' => 'CHtml::link("selengkapnya.. ",array("berita/detailberita","id"=>$data->primaryKey))',
                                )
                            ),
                        ));
                        ?>

                    </div>
                    <div class="tab-pane fade" id="tab2">



                        <?php
                        $this->widget('zii.widgets.grid.CGridView', array(
                            //'id' => 'berita-grid',
                            'dataProvider' => $model2,
                            'template' => "{summary}\n{items}\n{pager}",
                            'itemsCssClass' => 'table table-bordered table-striped table-hover',
                            'columns' => array(
                                //'IDBERITA',
                                'iDKATEGORI.NAMAKATEGORI',
                                'JUDUL',
                                //'ISI',
                                //'ISPUBLISH',
                                //'FILEIMAGE',
                                /*
                                  'HIT',
                                  'TGLSUBMIT',
                                  'SUMMARY',
                                 */
                                array(
                                    'header' => 'View',
                                    'type' => 'raw',
                                    'value' => 'CHtml::link("selengkapnya.. ",array("berita/detailberita","id"=>$data->primaryKey))',
                                )
                            ),
                        ));
                        ?>

                    </div>

                    <div class="tab-pane fade" id="tab3">



                        <?php
                        $this->widget('zii.widgets.grid.CGridView', array(
                            //'id' => 'berita-grid',
                            'dataProvider' => $model,
                            'template' => "{summary}\n{items}\n{pager}",
                            'itemsCssClass' => 'table table-bordered table-striped table-hover',
                            'columns' => array(
                                //'IDBERITA',
                                'iDKATEGORI.NAMAKATEGORI',
                                'JUDUL',
                                //'ISI',
                                //'ISPUBLISH',
                                //'FILEIMAGE',
                                /*
                                  'HIT',
                                  'TGLSUBMIT',
                                  'SUMMARY',
                                 */
                                array(
                                    'header' => 'View',
                                    'type' => 'raw',
                                    'value' => 'CHtml::link("selengkapnya.. ",array("berita/detailberita","id"=>$data->primaryKey))',
                                )
                            ),
                        ));
                        ?>
                    </div>
                    <div class="tab-pane fade" id="tab4">


                        <?php
                        $this->widget('zii.widgets.grid.CGridView', array(
                            //'id' => 'berita-grid',
                            'dataProvider' => $model4,
                            'template' => "{summary}\n{items}\n{pager}",
                            'itemsCssClass' => 'table table-bordered table-striped table-hover',
                            'columns' => array(
                                //'IDBERITA',
                                'iDKATEGORI.NAMAKATEGORI',
                                'JUDUL',
                                //'ISI',
                                //'ISPUBLISH',
                                //'FILEIMAGE',
                                /*
                                  'HIT',
                                  'TGLSUBMIT',
                                  'SUMMARY',
                                 */
                                array(
                                    'header' => 'View',
                                    'type' => 'raw',
                                    'value' => 'CHtml::link("selengkapnya.. ",array("berita/detailberita","id"=>$data->primaryKey))',
                                )
                            ),
                        ));
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-md-3 col-sm-3">
    <div class="portlet box green tasks-widget">
        <div class="portlet-title" >
            <div class="caption">
                <i class="fa fa-phone "></i>
                KONTAK
            
        </div>
    </div>
    <div class="news-blocks">
        <h3> </h3>
        <div class="news-block-tags"> </div>
        <p style="text-align: justify">
            <b>
                Kepala Bagian : 
                <br>
                <span style="color:blue">Akademik dan Kemahasiswaan</span>
                <span style="color:red">Fakultas Ekonomi dan Bisnis</span>
            </b>
            <br>
            <br>
            Universitas Jenderal Soedirman (UNSOED)
            <br>
            Jl. Prof. Dr. H.R. Boenyamin No.708 Grendeng Purwokerto, 53122
            <br>
            <br>
            Email :
            <br>
            ekonomi@unsoed.ac.id
            <br>
            <br>
            Telp:
            <br>
            0281-637970 
            <br>
            <br>
            Keterangan:
            <br>
        </p>
        <ul>
            <li>Untuk informasi lebih jelas hubungi BAPENDIK/PSI-FEB</li>
           
        </ul>
       
    </div>
</div>
</div>
  

