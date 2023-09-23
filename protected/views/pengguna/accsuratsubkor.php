<!-- <meta http-equiv="refresh" content="290" >-->
<div class="portlet box yellow">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-user"></i>Manage Surat by Dosen
        </div>
        <div class="tools">
            <a href="javascript:;" class="collapse">
            </a>
            <a href="#portlet-config" data-toggle="modal" class="config">
            </a>
            <a href="javascript:;" class="reload">
            </a>
            <a href="javascript:;" class="remove">
            </a>
        </div>
    </div>

    <div class="portlet-body" align="center">
        <h4>Manage Surat Permintaan/Permohonan by Dosen</h4>
        <hr>

        <a href="<?php echo Yii::app() ->createUrl('surtugpm/admin');?>" class="icon-btn">
            <i class="fa fa-weixin"></i>
            <div>
                Manage
            </div>
            <span class="badge badge-danger">
							PPM </span>
        </a>

        <a href="<?php echo Yii::app() ->createUrl('surtugpn/admin');?>" class="icon-btn">
            <i class="fa fa-user-md"></i>
            <div>
                Manage
            </div>
            <span class="badge badge-success">
							Penelitian </span>
        </a>

        <a href="<?php echo Yii::app() ->createUrl('surtugns/admin');?>" class="icon-btn">
            <i class="fa fa-bullhorn"></i>
            <div>
                Manage
                <span class="badge badge-info">
							Pembicara/Lainnya </span>
            </div>
        </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


        <br><br><br>


    </div>
</div>

<meta http-equiv="refresh" content="290" >
<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-mortar-board"></i>Manage Surat by Mahasiswa
        </div>
        <div class="tools">
            <a href="javascript:;" class="collapse">
            </a>
            <a href="javascript:;" class="reload">
            </a>
        </div>
    </div>
    <div class="portlet-body" align="center">
        <h4>Manage Permintaan/Permohonan Surat by Mahasiswa</h4>
        <hr>
        <a href="<?php echo Yii::app() ->createUrl('surpermk/admin');?>" class="icon-btn">
            <i class="fa fa-university"></i>
            <div>
                Manage
            </div>
            <span class="badge badge-danger">
							Masih Kuliah &nbsp<span class="badge badge-info"><span id="notifikasisurpermk"></span></span></span>
        </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

        <a href="<?php echo Yii::app() ->createUrl('surketnobeswa/admin');?>" class="icon-btn">
            <i class="fa fa-star-half-o"></i>
            <div>
                Manage
            </div>
            <span class="badge badge-success">
							NO.. Beasiswa &nbsp&nbsp&nbsp<span class="badge badge-danger"><span id="notifikasisurketnobeswa"></span></span></span>
        </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

        <a href="<?php echo Yii::app() ->createUrl('surmag/admin');?>" class="icon-btn">
            <i class="fa fa-suitcase"></i>
            <div>
                Manage
                <span class="badge badge-default">
							Magang Kerja &nbsp&nbsp&nbsp<span class="badge badge-danger"><span id="notifikasisurmag"></span></span></span>
            </div>
        </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

        <a href="<?php echo Yii::app() ->createUrl('surijincuti/admin');?>" class="icon-btn">
            <i class="fa fa-calendar"></i>
            <div>
                Manage
            </div>
            <span class="badge badge-success">
							Izin Cuti Akademik &nbsp&nbsp<span class="badge badge-danger"><span id="notifikasisurijincuti"></span></span></span>
        </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

        <a href="<?php echo Yii::app() ->createUrl('suraktifcuti/admin');?>" class="icon-btn">
            <i class="fa fa-calendar-o"></i>
            <div>
                Manage
            </div>
            <span class="badge badge-success">
							Aktif Kembali Cuti &nbsp&nbsp<span class="badge badge-danger"><span id="notifikasisuraktifcuti"></span></span></span>
        </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

        <a href="<?php echo Yii::app() ->createUrl('surijinpn/admin');?>" class="icon-btn">
            <i class="fa fa-stethoscope"></i>
            <div>
                Manage
                <span class="badge badge-primary">
							Izin Penelitian  &nbsp&nbsp&nbsp<span class="badge badge-danger"><span id="notifikasisurijinpn"></span></span></span>
            </div>
        </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <br><br><br><br><br><br>


        <div class="portlet-body" align="center">


            <a href="<?php echo Yii::app() ->createUrl('surisu/admin');?>" class="icon-btn">
                <i class="fa fa-building-o"></i>
                <div>
                    Manage
                </div>
                <span class="badge badge-danger">
							Izin Survei &nbsp&nbsp&nbsp<span class="badge badge-info"><span id="notifikasisurisu"></span></span></span>
            </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;



            <a href="<?php echo Yii::app() ->createUrl('surperpk/admin');?>" class="icon-btn">
                <i class="fa  fa-building"></i>
                <div>
                    Manage
                    <span class="badge badge-info">
							Per.Praktik Kerja-D3 &nbsp<span class="badge badge-danger"><span id="notifikasisurperpk"></span></span></span>
                </div>
            </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <a href="<?php echo Yii::app() ->createUrl('subdetailsurpelpk/admin');?>" class="icon-btn">
                <i class="fa  fa-building"></i>
                <div>
                    Manage
                    <span class="badge badge-info">
							Pel.Praktik Kerja-D3 &nbsp<span class="badge badge-danger"><span id="notifikasisubdetailsurpelpk"></span></span></span>
                </div>
            </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <a href="<?php echo Yii::app() ->createUrl('surtugmonitoring/admin');?>" class="icon-btn">
                <i class="fa  fa-user"></i>
                <div>
                    Manage
                    <span class="badge badge-info">
							Monitoring PK-D3 &nbsp<span class="badge badge-danger"><span id="notifikasisurtugmonitoring"></span></span></span>
                </div>
            </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <a href="<?php echo Yii::app() ->createUrl('suratketerangan/admin');?>" class="icon-btn">
                <i class="fa  fa-certificate"></i>
                <div>
                    Manage
                    <span class="badge badge-success">
							Surat Keterangan &nbsp&nbsp&nbsp<span class="badge badge-danger"><span id="notifikasisuratketerangan"></span></span></span>
                </div>
            </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <br><br><br><br><br><br>

        </div>
    </div>

    </span>
</div>
</div>
