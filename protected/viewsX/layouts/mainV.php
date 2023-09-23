<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8"/>
    <title>Sistem Permintaan Surat </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta content="Sistem Permintaan Surat " name="description"/>
    <meta content="Pungkas" name="author"/>
    <meta name="MobileOptimized" content="320">


    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <!--<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>-->
    <link href="<?php echo Yii::app()->getBaseUrl() ?>/metronic/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo Yii::app()->getBaseUrl() ?>/metronic/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo Yii::app()->getBaseUrl() ?>/metronic/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo Yii::app()->getBaseUrl() ?>/metronic/assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
    <link href="<?php //echo Yii::app()->getBaseUrl() ?>/metronic/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->

    <!--tambahan coba-->
    <!--BEGIN PLUGINS USED BY X-EDITABLE -->
    <link href="<?php //echo Yii::app()->getBaseUrl() ?>/metronic/assets/global/plugins/select2/select2.css"/>
    <link href="<?php echo Yii::app()->getBaseUrl() ?>/metronic/assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css"/>
    <link href="<?php echo Yii::app()->getBaseUrl() ?>/metronic/assets/global/plugins/bootstrap-datepicker/css/datepicker.css"/>
    <link href="<?php echo Yii::app()->getBaseUrl() ?>/metronic/assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css"/>
    <link href="<?php echo Yii::app()->getBaseUrl() ?>/metronic/assets/global/plugins/bootstrap-datetimepicker/css/datetimepicker.css"/>
    <link href="<?php //echo Yii::app()->getBaseUrl() ?>/metronic/assets/global/plugins/bootstrap-editable/bootstrap-editable/css/bootstrap-editable.css"/>
    <link href="<?php //echo Yii::app()->getBaseUrl() ?>/metronic/assets/global/plugins/bootstrap-editable/inputs-ext/address/address.css"/>
    <!-- END PLUGINS USED BY X-EDITABLE -->

    <!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
    <link href="<?php //echo Yii::app()->getBaseUrl() ?>/metronic/assets/global/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo Yii::app()->getBaseUrl() ?>/metronic/assets/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo Yii::app()->getBaseUrl() ?>/metronic/assets/global/plugins/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css"/>
    <!--<link href="<?php //echo Yii::app()->getBaseUrl() ?>/metronic/assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css"/>-->
    <!-- END PAGE LEVEL PLUGIN STYLES -->

    <!-- BEGIN PAGE STYLES -->
    <link href="<?php //echo Yii::app()->getBaseUrl() ?>/metronic/assets/admin/pages/css/tasks.css" rel="stylesheet" type="text/css"/>
    <!-- END PAGE STYLES -->

    <!-- BEGIN THEME STYLES -->
    <link href="<?php //echo Yii::app()->getBaseUrl() ?>/metronic/assets/global/css/components.css" rel="stylesheet" type="text/css"/>
    <link href="<?php //echo Yii::app()->getBaseUrl() ?>/metronic/assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo Yii::app()->getBaseUrl() ?>/metronic/assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo Yii::app()->getBaseUrl() ?>/metronic/assets/admin/layout/css/themes/light.css" rel="stylesheet" type="text/css" />

    <!--Notifikasi new message-->
    <script>
        var x = 1;
        function cek() {
            $.ajax({
                url: "<?php echo Yii::app()->createUrl('surpermk/notifikasi');
                    ?>",
                cache: false,
                success: function (msg) {
                    $("#notifikasisurpermk").html(msg);

                }
            });
            $.ajax({
                url: "<?php echo Yii::app()->createUrl('surketnobeswa/notifikasi');
                    ?>",
                cache: false,
                success: function (msg) {
                    $("#notifikasisurketnobeswa").html(msg);

                }
            });
            $.ajax({
                url: "<?php echo Yii::app()->createUrl('surmag/notifikasi');
                    ?>",
                cache: false,
                success: function (msg) {
                    $("#notifikasisurmag").html(msg)
                }
            });
            $.ajax({
                url: "<?php echo Yii::app()->createUrl('surijinpn/notifikasi');
                    ?>",
                cache: false,
                success: function (msg) {
                    $("#notifikasisurijinpn").html(msg)
                }
            });
            $.ajax({
                url: "<?php echo Yii::app()->createUrl('surisu/notifikasi');
                    ?>",
                cache: false,
                success: function (msg) {
                    $("#notifikasisurisu").html(msg)
                }
            });
            $.ajax({
                url: "<?php echo Yii::app()->createUrl('surijincuti/notifikasi');
                    ?>",
                cache: false,
                success: function (msg) {
                    $("#notifikasisurijincuti").html(msg)
                }
            });
            $.ajax({
                url: "<?php echo Yii::app()->createUrl('suraktifcuti/notifikasi');
                    ?>",
                cache: false,
                success: function (msg) {
                    $("#notifikasisuraktifcuti").html(msg)
                }
            });
            $.ajax({
                url: "<?php echo Yii::app()->createUrl('suratketerangan/notifikasi');
                    ?>",
                cache: false,
                success: function (msg) {
                    $("#notifikasisuratketerangan").html(msg)
                }
            });
            $.ajax({
                url: "<?php echo Yii::app()->createUrl('surperpk/notifikasi');
                    ?>",
                cache: false,
                success: function (msg) {
                    $("#notifikasisurperpk").html(msg)
                }
            });
            $.ajax({
                url: "<?php echo Yii::app()->createUrl('subdetailsurpelpk/notifikasi');
                    ?>",
                cache: false,
                success: function (msg) {
                    $("#notifikasisubdetailsurpelpk").html(msg)
                }
            });
            $.ajax({
                url: "<?php echo Yii::app()->createUrl('surtugmonitoring/notifikasi');
                    ?>",
                cache: false,
                success: function (msg) {
                    $("#notifikasisurtugmonitoring").html(msg)
                }
            });
            $.ajax({
                url: "<?php echo Yii::app()->createUrl('detailsurtugpm/notifikasi');
                    ?>",
                cache: false,
                success: function (msg) {
                    $("#notifikasidetailsurtugpm").html(msg)
                }
            });
            $.ajax({
                url: "<?php echo Yii::app()->createUrl('detailsurtugpn/notifikasi');
                    ?>",
                cache: false,
                success: function (msg) {
                    $("#notifikasidetailsurtugpn").html(msg)
                }
            });
            $.ajax({
                url: "<?php echo Yii::app()->createUrl('detailsurtugns/notifikasi');
                    ?>",
                cache: false,
                success: function (msg) {
                    $("#notifikasidetailsurtugns").html(msg)
                }
            });
            $.ajax({
                url: "<?php echo Yii::app()->createUrl('detailsurpermk/notifikasi');
                    ?>",
                cache: false,
                success: function (msg) {
                    $("#notifikasidetailsurpermk").html(msg)
                }
            });
            $.ajax({
                url: "<?php echo Yii::app()->createUrl('detailsurketnobeswa/notifikasi');
                    ?>",
                cache: false,
                success: function (msg) {
                    $("#notifikasidetailsurketnobeswa").html(msg)
                }
            });
            $.ajax({
                url: "<?php echo Yii::app()->createUrl('detailsurmag/notifikasi');
                    ?>",
                cache: false,
                success: function (msg) {
                    $("#notifikasidetailsurmag").html(msg)
                }
            });
            $.ajax({
                url: "<?php echo Yii::app()->createUrl('detailsurijincuti/notifikasi');
                    ?>",
                cache: false,
                success: function (msg) {
                    $("#notifikasidetailsurijincuti").html(msg)
                }
            });
            $.ajax({
                url: "<?php echo Yii::app()->createUrl('detailaktifcuti/notifikasi');
                    ?>",
                cache: false,
                success: function (msg) {
                    $("#notifikasidetailaktifcuti").html(msg)
                }
            });
            $.ajax({
                url: "<?php echo Yii::app()->createUrl('detailsurijinpn/notifikasi');
                    ?>",
                cache: false,
                success: function (msg) {
                    $("#notifikasidetailsurijinpn").html(msg)
                }
            });
            $.ajax({
                url: "<?php echo Yii::app()->createUrl('detailsurisu/notifikasi');
                    ?>",
                cache: false,
                success: function (msg) {
                    $("#notifikasidetailsurisu").html(msg)
                }
            });
            $.ajax({
                url: "<?php echo Yii::app()->createUrl('detailsurperpk/notifikasi');
                    ?>",
                cache: false,
                success: function (msg) {
                    $("#notifikasidetailsurperpk").html(msg)
                }
            });
            $.ajax({
                url: "<?php echo Yii::app()->createUrl('detailsurpelpk/notifikasi');
                    ?>",
                cache: false,
                success: function (msg) {
                    $("#notifikasidetailsurpelpk").html(msg)
                }
            });
            $.ajax({
                url: "<?php echo Yii::app()->createUrl('detailsurtugmonitoring/notifikasi');
                    ?>",
                cache: false,
                success: function (msg) {
                    $("#notifikasidetailsurtugmonitoring").html(msg)
                }
            });
            $.ajax({
                url: "<?php echo Yii::app()->createUrl('detailsuratketerangan/notifikasi');
                    ?>",
                cache: false,
                success: function (msg) {
                    $("#notifikasidetailsuratketerangan").html(msg)
                }
            });
            var waktu = setTimeout("cek()", 30000);
        }

        $(document).ready(function () {
            cek();
            $("#pesan").click(function () {
                $("#loading").show();
                if (x == 1) {
                    $("#pesan");
                    x = 0;
                } else {
                    $("#pesan");
                    x = 1;
                }
                $("#info").toggle();


            });
            $("#content").click(function () {
                $("#info").hide();
                $("#pesan").css("background-color", "#4B59a9");
                x = 1;
            });
        });
    </script>

    <!--cek theme style dengan yang di bawah ini-->
    <link href="<?php echo Yii::app()->getBaseUrl() ?>/metronic/assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo Yii::app()->getBaseUrl() ?>/metronic/assets/css/style.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->getBaseUrl() ?>/metronic/assets/plugins/select2/select2_metro.css"/>
    <link href="<?php echo Yii::app()->getBaseUrl() ?>/metronic/assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo Yii::app()->getBaseUrl() ?>/metronic/assets/css/plugins.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo Yii::app()->getBaseUrl() ?>/metronic/assets/css/themes/light.css" rel="stylesheet" type="text/css" id="style_color"/>
    <link href="<?php echo Yii::app()->getBaseUrl() ?>/metronic/assets/css/pages/news.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo Yii::app()->getBaseUrl() ?>/metronic/assets/css/custom.css" rel="stylesheet" type="text/css"/>
    <link rel="shortcut icon" href="<?php echo Yii::app()->getBaseUrl() ?>/metronic/assets/img/favicon.ico"/>
    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
    <!--<a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <img src="<?php //echo Yii::app()->getBaseUrl() ?>/metronic/assets/img/menu-toggler.png" alt="" />
    </a>-->
    <!-- END RESPONSIVE MENU TOGGLER -->

    <!-- END THEME STYLES -->

</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
<body class="page-header-fixed page-quick-sidebar-over-content">
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">

    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner">

        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="<?php echo Yii::app()->createUrl('site/index'); ?>">

                <img src="<?php echo Yii::app()->getBaseUrl() ?>/metronic/assets/admin/layout/img/logo_sipensu.png" alt="logo" />
            </a>

            <div class="menu-toggler sidebar-toggler hide">

                <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
            </div>
        </div>

        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
        </a>

        <!-- END RESPONSIVE MENU TOGGLER -->
        <!-- BEGIN TOP NAVIGATION MENU -->
        <div class="top-menu">
            <ul class="nav navbar-nav pull-right">
                <br>
                <?php
                if (Yii::app()->user->isGuest) {
                    echo '';
                } else {
                    echo '<p style="color:white">User : ';
                    echo Yii::app()->user->nama . '<br></p>';
                }
                ?>

            </ul>
        </div>
        <!-- END TOP NAVIGATION MENU -->
    </div>
    <!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">

</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar-wrapper">
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <div class="page-sidebar navbar-collapse collapse">

            <!-- BEGIN SIDEBAR MENU -->
            <ul class="page-sidebar-menu" data-auto-scroll="true" data-slide-speed="200"><br>

                <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                <li class="sidebar-toggler-wrapper">

                    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                    <div class="sidebar-toggler">

                    </div>
                    <!-- END SIDEBAR TOGGLER BUTTON -->
                </li>

                <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
                <li class="sidebar-search-wrapper hidden-xs"><br>
                    <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                    <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
                    <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
                    <!--<form class="sidebar-search" action="extra_search.html" method="POST">
                            <a href="javascript:;" class="remove">
                            <i class="icon-close"></i>
                            </a>
                            <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                    <a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
                                    </span>
                            </div>
                    </form>-->
                    <!-- END RESPONSIVE QUICK SEARCH FORM -->
                </li>


                <li class="start active ">
                    <a href="<?php echo Yii::app()->createUrl('site/index'); ?>">
                        <i class="icon-home"></i>
                        <span class="title">Dashboard</span>
                        <span class="selected"></span>
                    </a>
                </li>


                <?php if (!Yii::app()->user->isGuest && Yii::app()->user->IDGROUPS == '9'): ?>
                    <li class="heading ">
                        <a href="<?php echo Yii::app()->createUrl('site/index'); ?>">

                            <span class="title">Menu</span>
                            <span class="selected"></span>
                        </a>
                    </li>

                    <!--Dosen-->
                    <!--Menu Mahasiswa-->
                    <li>
                        <a href="javascript:;">
                            <i class="icon-graduation"></i>
                            <span class="title">Mahasiswa</span>
                            <span class="arrow "></span>
                        </a>

                        <ul class="sub-menu">
                            <li>
                                <a href="<?php echo Yii::app()->createUrl('surpermk/permintaansurat'); ?>">
                                    <i class="icon-envelope"></i>
                                    Srt. Masih Kuliah </a>
                            </li>

                            <li>
                                <a href="<?php echo Yii::app()->createUrl('surketnobeswa/permintaansurat'); ?>">
                                    <i class="icon-envelope"></i>
                                    Srt. NO Beasiswa </a>
                            </li>
                            <li>
                                <a href="<?php echo Yii::app()->createUrl('surmag/permintaansurat'); ?>">
                                    <i class="icon-envelope"></i>
                                    Srt. Magang </a>
                            </li>
                            <li>
                                <a href="<?php echo Yii::app()->createUrl('surijinpn/permintaansurat'); ?>">
                                    <i class="icon-envelope"></i>
                                    Srt. Izin Penelitian </a>
                            </li>
                            <!--<li>
                                    <a href="<?php //echo Yii::app() ->createUrl(''); ?>">
                                    <i class="icon-envelope"></i>
                                    Srt. Ujian Akhir </a>
                                </li>-->
                            <li>
                                <a href="<?php echo Yii::app()->createUrl('surisu/permintaansurat'); ?>">
                                    <i class="icon-envelope"></i>
                                    Srt. Izin Survei </a>
                            </li>
                            <li>
                                <a href="<?php echo Yii::app()->createUrl('surijincuti/permintaansurat'); ?>">
                                    <i class="icon-envelope"></i>
                                    Srt. Izin & Aktif Cuti</a>
                            </li>
                            <li>
                                <a href="<?php echo Yii::app()->createUrl('surperpk/permintaansurat'); ?>">
                                    <i class="icon-envelope"></i>
                                    Srt. Izin Praktik Kerja</a>
                            </li>
                            <li>
                                <a href="<?php echo Yii::app()->createUrl('suratketerangan/permintaansuratketerangan'); ?>">
                                    <i class="icon-envelope"></i>
                                    Srt. Keterangan</a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="icon-question"></i>
                            <span class="title">Informasi</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="<?php echo Yii::app()->createUrl('berita/index'); ?>">
                                    <i class="icon-tag"></i>
                                    Berita/Informasi</a>
                            </li>

                        </ul>
                    </li>
                <?php endif; ?>



                <!--menu manage by Administrator-->
                <?php if (!Yii::app()->user->isGuest && Yii::app()->user->IDGROUPS == '1'): ?>
                    <li class="heading ">
                        <a href="<?php echo Yii::app()->createUrl('site/index'); ?>">
                            <span class="title">Administrator</span>
                            <span class="selected"></span>
                        </a>
                    </li>

                    <li>
                        <a href="javascript:;">
                            <i class="icon-question"></i>
                            <span class="title">Informasi</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="<?php echo Yii::app()->createUrl('berita/informasi'); ?>">
                                    <i class="icon-tag"></i>
                                    Berita/Informasi</a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="icon-layers "></i>
                            <span class="title">Manage Surat</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">
                            <li  class="tooltips" data-container="body" data-placement="right" data-html="true" data-original-title="Manage Permintaan/Permohonan Surat Dosen">
                                <a href="<?php echo Yii::app()->createUrl('pengguna/menusuratdosen'); ?>">

                                    <i class="icon-user-following"></i> Surat by Dosen</a>
                            </li>
                            <li class="tooltips" data-container="body" data-placement="right" data-html="true" data-original-title="Manage Permintaan/Permohonan Surat Mahasiswa">
                                <a href="<?php echo Yii::app()->createUrl('pengguna/menusuratmahasiswa'); ?>">

                                    <i class="icon-graduation"></i> Surat by Mahasiswa</a>
                            </li>
                            <li class="tooltips" data-container="body" data-placement="right" data-html="true" data-original-title="Manage Acc. Surat by Dosen & Mahasiswa">
                                <a href="<?php echo Yii::app()->createUrl('pengguna/menuaccsurat'); ?>">

                                    <i class="icon-note"></i> Manage Acc Surat</a>
                            </li>

                        </ul>
                    </li>
                <?php endif; ?>
                <?php if (!Yii::app()->user->isGuest && Yii::app()->user->IDGROUPS == '1'): ?>
                    <li class="heading ">
                        <a href="<?php echo Yii::app()->createUrl('site/index'); ?>">
                            <span class="title">Settings</span>
                            <span class="selected"></span>
                        </a>
                    </li>

                    <li>
                        <a href="javascript:;">
                            <i class="icon-wrench"></i>
                            <span class="title">Master</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">

                            <li>
                                <a href="<?php echo Yii::app()->createUrl('fakultas/admin'); ?>">
                                    <i class="icon-home"></i>
                                    Fakultas</a>
                            </li>
                            <li>
                                <a href="<?php echo Yii::app()->createUrl('jurusan/admin'); ?>">
                                    <i class="icon-badge "></i>
                                    Jurusan</a>
                            </li>
                            <li>
                                <a href="<?php echo Yii::app()->createUrl('msdos/admin'); ?>">
                                    <i class="icon-user-following "></i>
                                    Data Dosen</a>
                            </li>
                            <li>
                                <a href="<?php echo Yii::app()->createUrl('panggol/admin'); ?>">
                                    <i class="icon-badge"></i>
                                    Pangkat & Golongan</a>
                            </li>
                            <li>
                                <a href="<?php echo Yii::app()->createUrl('jabatanstruktural/admin'); ?>">
                                    <i class="icon-star "></i>
                                    Jabatan Struktural</a>
                            </li>
                            <li>
                                <a href="<?php echo Yii::app()->createUrl('jabatanakademik/admin'); ?>">
                                    <i class="icon-shield "></i>
                                    Jabatan Akademik</a>
                            </li>
                            <li>
                                <a href="<?php echo Yii::app()->createUrl('mahasiswa/admin'); ?>">
                                    <i class="icon-user-follow "></i>
                                    Mahasiswa</a>
                            </li>
                            <li>
                                <a href="<?php echo Yii::app()->createUrl('fileuploadfoto/admin'); ?>">
                                    <i class="icon-camera "></i>
                                    Foto Mahasiswa</a>
                            </li>
                            <li>
                                <a href="<?php echo Yii::app()->createUrl('jender/admin'); ?>">
                                    <i class="icon-chemistry "></i>
                                    Jender</a>
                            </li>
                            <li>
                                <a href="<?php echo Yii::app()->createUrl('prodi/admin'); ?>">
                                    <i class="icon-flag "></i>
                                    Prodi</a>
                            </li>
                            <li>
                                <a href="<?php echo Yii::app()->createUrl('jenjang/admin'); ?>">
                                    <i class="icon-plane "></i>
                                    Jenjang</a>
                            </li>
                            <li>
                                <a href="<?php echo Yii::app()->createUrl('agama/admin'); ?>">
                                    <i class="icon-energy "></i>
                                    Agama</a>
                            </li>
                            <li>
                                <a href="<?php echo Yii::app()->createUrl('goldarah/admin'); ?>">
                                    <i class="icon-fire "></i>
                                    Golongan Darah</a>
                            </li>

                            <li>
                                <a href="<?php echo Yii::app()->createUrl('klasifikasisurat/admin'); ?>">
                                    <i class="icon-envelope-letter "></i>
                                    Klasifikasi Surat </a>
                            </li>

                            <li>
                                <a href="<?php echo Yii::app()->createUrl('kategoriberita/admin'); ?>">
                                    <i class="icon-eyeglasses"></i>
                                    Kategori Berita/Info </a>
                            </li>
                            <li>
                                <a href="<?php echo Yii::app()->createUrl('berita/admin'); ?>">
                                    <i class="icon-globe"></i>
                                    Detail Berita</a>
                            </li>
                            <li>
                                <a href="<?php echo Yii::app()->createUrl('pengguna/manualbook'); ?>">
                                    <i class="icon-note"></i>
                                    Manual Book</a>
                            </li>

                        </ul>
                    </li>

                    <li>
                        <a href="javascript:;">
                            <i class="icon-settings"></i>
                            <span class="title">Konfigurasi</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">

                            <li>
                                <a href="<?php echo Yii::app()->createUrl('currentsemester/admin'); ?>">
                                    <i class="icon-grid "></i>
                                    Current Semester</a>
                            </li>
                            <li>
                                <a href="<?php echo Yii::app()->createUrl('matakuliahsurisu/admin'); ?>">
                                    <i class="icon-notebook"></i>
                                    MK Syarat Survei  </a>
                            </li>
                            <li>
                                <a href="<?php echo Yii::app()->createUrl('jenissurat/admin'); ?>">
                                    <i class="icon-envelope "></i>
                                    Jenis Surat</a>
                            </li>
                            <li>
                                <a href="<?php echo Yii::app()->createUrl('pemberiparaf/admin'); ?>">
                                    <i class="icon-pencil"></i>
                                    Pemberi Paraf </a>
                            </li>

                        </ul>
                    </li>

                <?php endif; ?>
                <?php if (!Yii::app()->user->isGuest && Yii::app()->user->IDGROUPS == '1'): ?>

                    <li>
                        <a href="javascript:;">
                            <i class="icon-key"></i>
                            <span class="title">Password</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="<?php echo Yii::app()->createUrl('pengguna/admin'); ?>">
                                    <i class="icon-user-follow "></i>
                                    Pengguna</a>
                            </li>
                            <li>
                                <a href="<?php echo Yii::app()->createUrl('groups/admin'); ?>">
                                    <i class="icon-users "></i>
                                    Group Pengguna</a>
                            </li>
                        </ul>
                    </li>
                <?php endif; ?>
                <?php if (!Yii::app()->user->isGuest && Yii::app()->user->IDGROUPS == '1'): ?>

                    <li>
                        <a href="javascript:;">
                            <i class=" icon-social-dropbox"></i>
                            <span class="title">Ekstrak Data</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="<?php echo Yii::app()->createUrl('groupsurtugmonitoring/admin'); ?>">
                                    <i class="icon-user-following "></i>
                                    Data Monitoring</a>
                            </li>

                        </ul>
                    </li>
                <?php endif; ?>

                <!--menu untuk acc/verifikasi surat by operator sub.umum dan BMN-->
                <?php if (!Yii::app()->user->isGuest && Yii::app()->user->IDGROUPS == '2'): ?>
                    <li class="heading ">
                        <a href="<?php echo Yii::app()->createUrl('site/index'); ?>">

                            <span class="title">Operator Umum & BMN </span>
                            <span class="selected"></span>
                        </a>
                    </li>


                    <li>
                        <a href="<?php echo Yii::app()->createUrl('pengguna/verifikasisurat'); ?>">
                            <i class="icon-user-follow"></i>
                            Verifikasi Data Surat </a>
                    </li>
                    <li>
                        <a href="<?php echo Yii::app()->createUrl('jenissurat/index'); ?>">
                            <i class="icon-envelope "></i>
                            Klasifikasi & Jenis Surat</a>
                    </li>
                    <li>
                        <a href="<?php echo Yii::app()->createUrl('pengguna/manualbook'); ?>">
                            <i class="icon-note"></i>
                            Manual Book</a>
                    </li>


                    <li>
                        <a href="<?php echo Yii::app()->createUrl('pengguna/ubahpassword'); ?>">
                            <i class="icon-users "></i>
                            Ubah Password </a>
                    </li>

                <?php endif; ?>

                <!--menu untuk admin akademik S1-permintaan surat tugas sebagai pembicara/narasumber-->
                <?php if (!Yii::app()->user->isGuest && Yii::app()->user->IDGROUPS == '3'): ?>
                    <li class="heading ">
                        <a href="<?php echo Yii::app()->createUrl('site/index'); ?>">

                            <span class="title">Operator Bapendik-S1</span>
                            <span class="selected"></span>
                        </a>
                    </li>


                    <li>
                        <a href="javascript:;">
                            <i class="icon-user-follow"></i>
                            <span class="title"> Dosen</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="<?php echo Yii::app()->createUrl('surtugpm/admin'); ?>">
                                    <i class="icon-envelope-open"></i>
                                    Srt.Tugas Pengabdian </a>
                            </li>
                            <li>
                                <a href="<?php echo Yii::app()->createUrl('surtugpn/admin'); ?>">
                                    <i class="icon-envelope-letter"></i>
                                    Srt.Tugas Penelitian </a>
                            </li>
                            <li>
                                <a href="<?php echo Yii::app()->createUrl('surtugns/admin'); ?>">
                                    <i class="icon-envelope"></i>
                                    Srt.Tugas Pembicara </a>
                            </li>


                        </ul>
                    </li>
                    <!--Menu Mahasiswa-->
                    <li>
                        <a href="javascript:;">
                            <i class="icon-graduation"></i>
                            <span class="title">Mahasiswa</span>
                            <span class="arrow "></span>
                        </a>

                        <ul class="sub-menu">
                            <li>
                                <a href="<?php echo Yii::app()->createUrl('surpermk/admin'); ?>">
                                    <i class="icon-envelope"></i>
                                    Srt. Masih Kuliah <span class="badge badge-danger"><span id="notifikasisurpermk"></span></span></a>
                            </li>

                            <li>
                                <a href="<?php echo Yii::app()->createUrl('surketnobeswa/admin'); ?>">
                                    <i class="icon-envelope"></i>
                                    Srt. NO Beasiswa <span class="badge badge-danger"><span id="notifikasisurketnobeswa"></span></span></a>
                            </li>
                            <li>
                                <a href="<?php echo Yii::app()->createUrl('surmag/admin'); ?>">
                                    <i class="icon-envelope"></i>
                                    Srt. Magang<span class="badge badge-danger"><span id="notifikasisurmag"></span></span></a>
                            </li>
                            <li>
                                <a href="<?php echo Yii::app()->createUrl('surijinpn/admin'); ?>">
                                    <i class="icon-envelope"></i>
                                    Srt. Ijin Penelitian <span class="badge badge-danger"><span id="notifikasisurijinpn"></span></span></a>
                            </li>
                            <!--<li>
                                    <a href="<?php //echo Yii::app() ->createUrl(''); ?>">
                                    <i class="icon-envelope"></i>
                                    Srt. Ujian Akhir </a>
                                </li>-->
                            <li>
                                <a href="<?php echo Yii::app()->createUrl('surisu/admin'); ?>">
                                    <i class="icon-envelope"></i>
                                    Srt. Ijin Survei <span class="badge badge-danger"><span id="notifikasisurisu"></span></span></a>
                            </li>
                            <li>
                                <a href="<?php echo Yii::app()->createUrl('surijincuti/admin'); ?>">
                                    <i class="icon-envelope"></i>
                                    Srt. Izin&Aktif Cuti <span class="badge badge-danger"><span id="notifikasisurijincuti"></span></span></a>
                            </li>
                            <li>
                                <a href="<?php echo Yii::app()->createUrl('suratketerangan/admin'); ?>">
                                    <i class="icon-envelope"> </i>
                                    Srt. Keterangan <span class="badge badge-danger"><span id="notifikasisuratketerangan"></span></span></a>
                            </li>


                        </ul>
                    </li>

                    <li>
                        <a href="javascript:;">
                            <i class="icon-wrench"></i>
                            <span class="title">Master</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">


                            <li>
                                <a href="<?php echo Yii::app()->createUrl('mahasiswa/index'); ?>">
                                    <i class="icon-badge "></i>
                                    Mahasiswa</a>
                            </li>
                            <li>
                                <a href="<?php echo Yii::app()->createUrl('msdos/admin'); ?>">
                                    <i class="icon-user-following "></i>
                                    Data Dosen</a>
                            </li>
                            <li>
                                <a href="<?php echo Yii::app()->createUrl('jenissurat/admin'); ?>">
                                    <i class="icon-envelope "></i>
                                    Klasifikasi & Jenis </a>
                            </li>
                            <li>
                                <a href="<?php echo Yii::app()->createUrl('pemberiparaf/admin'); ?>">
                                    <i class="icon-pencil"></i>
                                    Pemberi Paraf </a>
                            </li>
                            <li>
                                <a href="<?php echo Yii::app()->createUrl('pengguna/manualbook'); ?>">
                                    <i class="icon-note"></i>
                                    Manual Book</a>
                            </li>


                        </ul>
                    </li>


                    <!--<li>
                                <a href="javascript:;">
                                <i class="icon-question"></i>
                                <span class="title">Informasi</span>
                                <span class="arrow "></span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="<?php //echo Yii::app()->createUrl('berita/index');  ?>">
                                            <i class="icon-tag"></i>
                                            Berita/Informasi</a>
                                    </li>

                                </ul>
                        </li>-->
                    <li>
                        <a href="<?php echo Yii::app()->createUrl('pengguna/ubahpassword'); ?>">
                            <i class="icon-users "></i>
                            Ubah Password </a>

                    </li>
                <?php endif; ?>

                <!--menu untuk admin kemahasiswaan S1-permintaan surat tugas sebagai pembicara/narasumber-->
                <?php if (!Yii::app()->user->isGuest && Yii::app()->user->IDGROUPS == '7'): ?>
                    <li class="heading ">
                        <a href="<?php echo Yii::app()->createUrl('site/index'); ?>">

                            <span class="title">Operator Kemahasiswaan-S1</span>
                            <span class="selected"></span>
                        </a>
                    </li>

                    <!--Menu Mahasiswa-->
                    <li>
                        <a href="javascript:;">
                            <i class="icon-graduation"></i>
                            <span class="title">Mahasiswa</span>
                            <span class="arrow "></span>
                        </a>

                        <ul class="sub-menu">
                            <li>
                                <a href="<?php echo Yii::app()->createUrl('surpermk/admin'); ?>">
                                    <i class="icon-envelope"></i>
                                    Srt. Masih Kuliah <span class="badge badge-danger"><span id="notifikasisurpermk"></span></span></a>
                            </li>

                            <li>
                                <a href="<?php echo Yii::app()->createUrl('surketnobeswa/admin'); ?>">
                                    <i class="icon-envelope"></i>
                                    Srt. NO Beasiswa <span class="badge badge-danger"><span id="notifikasisurketnobeswa"></span></span></a>
                            </li>
                            <li>
                                <a href="<?php echo Yii::app()->createUrl('surmag/admin'); ?>">
                                    <i class="icon-envelope"></i>
                                    Srt. Magang<span class="badge badge-danger"><span id="notifikasisurmag"></span></span></a>
                            </li>
                            <li>
                                <a href="<?php echo Yii::app()->createUrl('surijinpn/admin'); ?>">
                                    <i class="icon-envelope"></i>
                                    Srt. Ijin Penelitian <span class="badge badge-danger"><span id="notifikasisurijinpn"></span></span></a>
                            </li>
                            <!--<li>
                                    <a href="<?php //echo Yii::app() ->createUrl(''); ?>">
                                    <i class="icon-envelope"></i>
                                    Srt. Ujian Akhir </a>
                                </li>-->
                            <li>
                                <a href="<?php echo Yii::app()->createUrl('surisu/admin'); ?>">
                                    <i class="icon-envelope"></i>
                                    Srt. Ijin Survei <span class="badge badge-danger"><span id="notifikasisurisu"></span></span></a>
                            </li>
                            <li>
                                <a href="<?php echo Yii::app()->createUrl('surijincuti/admin'); ?>">
                                    <i class="icon-envelope"></i>
                                    Srt. Izin&Aktif Cuti <span class="badge badge-danger"><span id="notifikasisurijincuti"></span></span></a>
                            </li>
                            <li>
                                <a href="<?php echo Yii::app()->createUrl('suratketerangan/admin'); ?>">
                                    <i class="icon-envelope"> </i>
                                    Srt. Keterangan <span class="badge badge-danger"><span id="notifikasisuratketerangan"></span></span></a>
                            </li>


                        </ul>
                    </li>

                    <li>
                        <a href="javascript:;">
                            <i class="icon-wrench"></i>
                            <span class="title">Master</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">


                            <li>
                                <a href="<?php echo Yii::app()->createUrl('mahasiswa/index'); ?>">
                                    <i class="icon-badge "></i>
                                    Mahasiswa</a>
                            </li>
                            <li>
                                <a href="<?php echo Yii::app()->createUrl('msdos/admin'); ?>">
                                    <i class="icon-user-following "></i>
                                    Data Dosen</a>
                            </li>
                            <li>
                                <a href="<?php echo Yii::app()->createUrl('jenissurat/admin'); ?>">
                                    <i class="icon-envelope "></i>
                                    Klasifikasi & Jenis </a>
                            </li>
                            <li>
                                <a href="<?php echo Yii::app()->createUrl('pengguna/manualbook'); ?>">
                                    <i class="icon-note"></i>
                                    Manual Book</a>
                            </li>


                        </ul>
                    </li>


                    <!-- <li>
                                 <a href="javascript:;">
                                 <i class="icon-question"></i>
                                 <span class="title">Informasi</span>
                                 <span class="arrow "></span>
                                 </a>
                                 <ul class="sub-menu">
                                     <li>
                                         <a href="<?php //echo Yii::app()->createUrl('berita/index');  ?>">
                                             <i class="icon-tag"></i>
                                             Berita/Informasi</a>
                                     </li>

                                 </ul>
                         </li>-->
                    <li>
                        <a href="<?php echo Yii::app()->createUrl('pengguna/ubahpassword'); ?>">
                            <i class="icon-users "></i>
                            Ubah Password </a>

                    </li>
                <?php endif; ?>


                <!--menu untuk admin bapendik S1-permintaan surat tugas sebagai pembicara/narasumber-->
                <?php if (!Yii::app()->user->isGuest && Yii::app()->user->IDGROUPS == '4'): ?>
                    <li class="heading ">
                        <a href="<?php echo Yii::app()->createUrl('site/index'); ?>">
                            <span class="title">Operator Bapendik-D3</span>
                            <span class="selected"></span>
                        </a>
                    </li>

                    <!--Menu Mahasiswa-->
                    <li>
                        <a href="javascript:;">
                            <i class="icon-graduation"></i>
                            <span class="title">Mahasiswa</span>
                            <span class="arrow "></span>
                        </a>

                        <ul class="sub-menu">
                            <li>
                                <a href="<?php echo Yii::app()->createUrl('surisu/admin'); ?>">
                                    <i class="icon-envelope"></i>
                                    Surat Izin Survei <span class="badge badge-danger"><span id="notifikasisurisu"></span></span></a>
                            </li>

                            <li>
                            <li>
                                <a href="<?php echo Yii::app()->createUrl('surperpk/admin'); ?>">
                                    <i class="icon-envelope"></i>
                                    Surat Praktik Kerja</a>
                            </li>
                            </li>
                        </ul>

                    <li>
                    <li>
                        <a href="<?php echo Yii::app()->createUrl('jenissurat/index'); ?>">
                            <i class="icon-notebook "></i>
                            Klasifikasi & Jenis Surat</a>
                    </li>
                    <li>
                        <a href="<?php echo Yii::app()->createUrl('pengguna/manualbook'); ?>">
                            <i class="icon-note"></i>
                            Manual Book</a>
                    </li>


                    <!--<li>
                                <a href="javascript:;">
                                <i class="icon-question"></i>
                                <span class="title">Informasi</span>
                                <span class="arrow "></span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="<?php //echo Yii::app()->createUrl('berita/index');  ?>">
                                            <i class="icon-tag"></i>
                                            Berita/Informasi</a>
                                    </li>

                                </ul>
                        </li>-->
                    <li>
                        <a href="javascript:;">
                            <i class="icon-social-dropbox"></i>
                            <span class="title">Ekstrak Data</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="<?php echo Yii::app()->createUrl('groupsurtugmonitoring/admin'); ?>">
                                    <i class="icon-user-following"></i>
                                    Data Monitoring</a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo Yii::app()->createUrl('pengguna/ubahpassword'); ?>">
                            <i class="icon-users "></i>
                            Ubah Password </a>
                    </li>
                <?php endif; ?>
                <!-- BEGIN FRONTEND THEME LINKS -->
                <?php if (!Yii::app()->user->isGuest && Yii::app()->user->IDGROUPS == 'D'): ?>
                    <li class="heading ">
                        <a href="<?php echo Yii::app()->createUrl('site/index'); ?>">

                            <span class="title">Dosen</span>
                            <span class="selected"></span>
                        </a>
                    </li>


                    <li>
                        <a href="javascript:;">
                            <i class="icon-user-follow"></i>
                            <span class="title"> Dosen</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="<?php echo Yii::app()->createUrl('surtugpm/permintaansurat'); ?>">
                                    <i class="icon-envelope-open"></i>
                                    Srt.Tugas Pengabdian </a>
                            </li>
                            <li>
                                <a href="<?php echo Yii::app()->createUrl('surtugpn/permintaansurat'); ?>">
                                    <i class="icon-envelope-letter"></i>
                                    Srt.Tugas Penelitian </a>
                            </li>
                            <li>
                                <a href="<?php echo Yii::app()->createUrl('surtugns/permintaansurat'); ?>">
                                    <i class="icon-envelope"></i>
                                    Srt.Tugas Pembicara </a>
                            </li>


                        </ul>
                    </li>
                <?php endif;?>
                <!--menu untuk umum-->
                <li>
                    <a href="javascript:;">
                        <i class="icon-share "></i>
                        <span class="title">PSI-FEB</span>
                        <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                        <li>

                            <a href="<?php echo Yii::app()->createUrl('pengguna/aboutpsi'); ?>">
                                <i class="icon-trophy "></i>
                                About Us</a>
                        </li>


                    </ul>
                </li>



                <!--membuat menu siapa yang login-->
                <li class="start active ">
                    <?php
                    if (!Yii::app()->user->isGuest) {
                        //echo '<a href="#">Welcome : '.Yii::app()->user->id.'</a>';
                    } else {
                        echo CHtml::link('<i class="icon-user"></i> Login', array('site/login'));
                    }
                    ?>
                </li>

                <?php if (!Yii::app()->user->isGuest) : ?>
                    <li class="classic-menu-dropdown active">
                        <?php echo CHtml::link('<i class="fa fa-power-off"> </i> Logout ', array('site/logout'), array('class' => '')); ?>
                    </li>
                <?php endif; ?>
                <!--END LOGIN-->

            </ul>
            <!-- END SIDEBAR MENU -->

        </div>
    </div>



    <!-- END SIDEBAR -->
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">

        <div class="page-content">

            <?php echo $content ?>




        </div>
    </div>
    <!-- END CONTAINER -->
    <!-- BEGIN FOOTER -->
    <div class="page-footer">
        <div class="page-footer-inner">
            2015 &copy; Planning and Information System by FEB-UNSOED.
        </div>
        <div class="page-footer-tools">
                <span class="go-top">
                    <i class="fa fa-angle-up"></i>
                </span>
        </div>
    </div>
    <!-- END FOOTER -->
    <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
    <!-- BEGIN CORE PLUGINS -->
    <!--[if lt IE 9]>
        <script src="<?php echo Yii::app()->getBaseUrl() ?>/metronic/assets/global/plugins/respond.min.js"></script>
        <script src="<?php echo Yii::app()->getBaseUrl() ?>/metronic/assets/global/plugins/excanvas.min.js"></script>
        <![endif]>
        <script src="<?php echo Yii::app()->getBaseUrl() ?>/metronic/assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
        <?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
        <script src="<?php //echo Yii::app()->getBaseUrl() ?>/metronic/assets/global/plugins/jquery-1.11.0.min.js" type="text/javascript"></script>
        <script src="<?php //echo Yii::app()->getBaseUrl() ?>/metronic/assets/global/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
        <!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
    <script src="<?php echo Yii::app()->getBaseUrl() ?>/metronic/assets/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
    <script src="<?php //echo Yii::app()->getBaseUrl() ?>/metronic/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php //echo Yii::app()->getBaseUrl() ?>/metronic/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
    <script src="<?php //echo Yii::app()->getBaseUrl() ?>/metronic/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="<?php //echo Yii::app()->getBaseUrl() ?>/metronic/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
    <script src="<?php //echo Yii::app()->getBaseUrl() ?>/metronic/assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
    <script src="<?php //echo Yii::app()->getBaseUrl() ?>/metronic/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
    <script src="<?php //echo Yii::app()->getBaseUrl() ?>/metronic/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <!--<script src="<?php //echo Yii::app()->getBaseUrl() ?>/metronic/assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
        <script src="<?php //echo Yii::app()->getBaseUrl() ?>/metronic/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
        <script src="<?php //echo Yii::app()->getBaseUrl() ?>/metronic/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
        <script src="<?php //echo Yii::app()->getBaseUrl() ?>/metronic/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
        <script src="<?php //echo Yii::app()->getBaseUrl() ?>/metronic/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
        <script src="<?php //echo Yii::app()->getBaseUrl() ?>/metronic/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
        <script src="<?php //echo Yii::app()->getBaseUrl() ?>/metronic/assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
        -->
    <script src="<?php //echo Yii::app()->getBaseUrl() ?>/metronic/assets/global/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
    <script src="<?php //echo Yii::app()->getBaseUrl() ?>/metronic/assets/global/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
    <script src="<?php //echo Yii::app()->getBaseUrl() ?>/metronic/assets/global/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
    <script src="<?php //echo Yii::app()->getBaseUrl() ?>/metronic/assets/global/plugins/jquery.pulsate.min.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->getBaseUrl() ?>/metronic/assets/global/plugins/bootstrap-daterangepicker/moment.min.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->getBaseUrl() ?>/metronic/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <!-- IMPORTANT! fullcalendar depends on jquery-ui-1.10.3.custom.min.js for drag & drop support -->
    <!--<script src="/metronic/assets/global/plugins/fullcalendar/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>-->
    <!--<script src="/metronic/assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js" type="text/javascript"></script>-->
    <script src="<?php //echo Yii::app()->getBaseUrl() ?>/metronic/assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
    <script src="<?php //echo Yii::app()->getBaseUrl() ?>/metronic/assets/global/plugins/gritter/js/jquery.gritter.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="<?php //echo Yii::app()->getBaseUrl() ?>/metronic/assets/global/scripts/metronic.js" type="text/javascript"></script>
    <script src="<?php //echo Yii::app()->getBaseUrl() ?>/metronic/assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
    <script src="<?php //echo Yii::app()->getBaseUrl() ?>/metronic/assets/admin/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
    <script src="<?php //echo Yii::app()->getBaseUrl() ?>/metronic/assets/admin/pages/scripts/index.js" type="text/javascript"></script>
    <script src="<?php //echo Yii::app()->getBaseUrl() ?>/metronic/assets/admin/pages/scripts/tasks.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <!-- BEGIN PLUGINS USED BY X-EDITABLE -->
    <script src="<?php //echo Yii::app()->getBaseUrl() ?>/metronic/assets/global/plugins/select2/select2.min.js"></script>
    <script src="<?php //echo Yii::app()->getBaseUrl() ?>/metronic/assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
    <script src="<?php //echo Yii::app()->getBaseUrl() ?>/metronic/assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
    <script src="<?php echo Yii::app()->getBaseUrl() ?>/metronic/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script src="<?php echo Yii::app()->getBaseUrl() ?>/metronic/assets/global/plugins/bootstrap-datepicker/js/locales/bootstrap-datepicker.zh-CN.js"></script>
    <script src="<?php echo Yii::app()->getBaseUrl() ?>/metronic/assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
    <script src="<?php echo Yii::app()->getBaseUrl() ?>/metronic/assets/global/plugins/moment.min.js"></script>
    <script src="<?php echo Yii::app()->getBaseUrl() ?>/metronic/assets/global/plugins/jquery.mockjax.js"></script>
    <script src="<?php //echo Yii::app()->getBaseUrl() ?>/metronic/assets/global/plugins/bootstrap-editable/bootstrap-editable/js/bootstrap-editable.js"></script>
    <script src="<?php //echo Yii::app()->getBaseUrl() ?>/metronic/assets/global/plugins/bootstrap-editable/inputs-ext/address/address.js"></script>
    <script src="<?php //echo Yii::app()->getBaseUrl() ?>/metronic/assets/global/plugins/bootstrap-editable/inputs-ext/wysihtml5/wysihtml5.js"></script>
    <!-- END X-EDITABLE PLUGIN -->
    <!--menambahkan fungsi-->

    <?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>

    <script src="<?php echo Yii::app()->getBaseUrl() ?>/metronic/assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->getBaseUrl() ?>/metronic/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->getBaseUrl() ?>/metronic/assets/plugins/select2/select2.min.js"></script>
    <script src="<?php echo Yii::app()->getBaseUrl() ?>/metronic/assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->getBaseUrl() ?>/metronic/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->getBaseUrl() ?>/metronic/assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->getBaseUrl() ?>/metronic/assets/plugins/jquery.cokie.min.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->getBaseUrl() ?>/metronic/assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->
    <script src="<?php echo Yii::app()->getBaseUrl() ?>/metronic/assets/scripts/app.js"></script>



    <script>
        jQuery(document).ready(function() {
            App.init();

        });
    </script>
    <!--END JAVASCRIPTS -->

    <!-- Global Site Tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-52641658-6"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments)};
        gtag('js', new Date());

        gtag('config', 'UA-52641658-6');
    </script>

</body>
<!-- END BODY -->
</html>