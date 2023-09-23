<!DOCTYPE html>
<html class="loading dark-layout" lang="en" data-layout="dark-layout" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>SIPENSU</title>
    <link rel="apple-touch-icon" href="<?php echo Yii::app()->getBaseUrl() ?>/vuexy/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo Yii::app()->getBaseUrl() ?>/vuexy/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->getBaseUrl() ?>/vuexy/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->getBaseUrl() ?>/vuexy/app-assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->getBaseUrl() ?>/vuexy/app-assets/vendors/css/extensions/toastr.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->getBaseUrl() ?>/vuexy/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->getBaseUrl() ?>/vuexy/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->getBaseUrl() ?>/vuexy/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->getBaseUrl() ?>/vuexy/app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->getBaseUrl() ?>/vuexy/app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->getBaseUrl() ?>/vuexy/app-assets/css/themes/bordered-layout.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->getBaseUrl() ?>/vuexy/app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->getBaseUrl() ?>/vuexy/app-assets/css/core/menu/menu-types/horizontal-menu.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->getBaseUrl() ?>/vuexy/app-assets/css/pages/dashboard-ecommerce.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->getBaseUrl() ?>/vuexy/app-assets/css/plugins/charts/chart-apex.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->getBaseUrl() ?>/vuexy/app-assets/css/plugins/extensions/ext-component-toastr.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->getBaseUrl() ?>/vuexy/assets/css/style.css">
	
    <!-- END: Custom CSS-->
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

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="horizontal-layout horizontal-menu  navbar-floating footer-static  " data-open="hover" data-menu="horizontal-menu" data-col="">

<!-- BEGIN: Header-->
<nav class="header-navbar navbar-expand-lg navbar navbar-fixed align-items-center navbar-shadow navbar-brand-center" data-nav="brand-center">
    <div class="navbar-header d-xl-block d-none">
        <ul class="nav navbar-nav">
            <li class="nav-item"><a class="navbar-brand" href="<?php echo Yii::app()->createUrl('site/index'); ?>"><span class="brand-logo">
                            <svg viewbox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="24">
                                <defs>
                                    <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%" y2="89.4879456%">
                                        <stop stop-color="#000000" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </lineargradient>
                                    <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%" x2="37.373316%" y2="100%">
                                        <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </lineargradient>
                                </defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                                        <g id="Group" transform="translate(400.000000, 178.000000)">
                                            <path class="text-primary" id="Path" d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z" style="fill:currentColor"></path>
                                            <path id="Path1" d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z" fill="url(#linearGradient-1)" opacity="0.2"></path>
                                            <polygon id="Path-2" fill="#000000" opacity="0.049999997" points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325"></polygon>
                                            <polygon id="Path-21" fill="#000000" opacity="0.099999994" points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338"></polygon>
                                            <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994" points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"></polygon>
                                        </g>
                                    </g>
                                </g>
                            </svg></span>
                    <h2 class="brand-text mb-0">SIPENSU</h2>
                </a></li>
        </ul>
    </div>
    <div class="navbar-container d-flex content">
        <div class="bookmark-wrapper d-flex align-items-center">
            <ul class="nav navbar-nav d-xl-none">
                <li class="nav-item"><a class="nav-link menu-toggle" href="javascript:void(0);"><i class="ficon" data-feather="menu"></i></a></li>
            </ul>
        </div>
        <ul class="nav navbar-nav align-items-center ml-auto">
            <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon" data-feather="sun"></i></a></li>
            <li class="nav-item dropdown dropdown-notification mr-25"><a class="nav-link" href="javascript:void(0);" data-toggle="dropdown"><i class="ficon" data-feather="bell"></i><span class="badge badge-pill badge-danger badge-up">5</span></a>
                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                    <li class="dropdown-menu-header">
                        <div class="dropdown-header d-flex">
                            <h4 class="notification-title mb-0 mr-auto">Notifications</h4>
                            <div class="badge badge-pill badge-light-primary">6 New</div>
                        </div>
                    </li>
                    <li class="scrollable-container media-list"><a class="d-flex" href="javascript:void(0)">
                            <div class="media d-flex align-items-start">
                                <div class="media-left">
                                    <div class="avatar"><img src="<?php echo Yii::app()->getBaseUrl() ?>/vuexy/app-assets/images/portrait/small/avatar-s-15.jpg" alt="avatar" width="32" height="32"></div>
                                </div>
                                <div class="media-body">
                                    <p class="media-heading"><span class="font-weight-bolder">Congratulation Sam 🎉</span>winner!</p><small class="notification-text"> Won the monthly best seller badge.</small>
                                </div>
                            </div>
                        </a><a class="d-flex" href="javascript:void(0)">
                            <div class="media d-flex align-items-start">
                                <div class="media-left">
                                    <div class="avatar"><img src="<?php echo Yii::app()->getBaseUrl() ?>/vuexy/app-assets/images/portrait/small/avatar-s-3.jpg" alt="avatar" width="32" height="32"></div>
                                </div>
                                <div class="media-body">
                                    <p class="media-heading"><span class="font-weight-bolder">New message</span>&nbsp;received</p><small class="notification-text"> You have 10 unread messages</small>
                                </div>
                            </div>
                        </a><a class="d-flex" href="javascript:void(0)">
                            <div class="media d-flex align-items-start">
                                <div class="media-left">
                                    <div class="avatar bg-light-danger">
                                        <div class="avatar-content">MD</div>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <p class="media-heading"><span class="font-weight-bolder">Revised Order 👋</span>&nbsp;checkout</p><small class="notification-text"> MD Inc. order updated</small>
                                </div>
                            </div>
                        </a>
                        <div class="media d-flex align-items-center">
                            <h6 class="font-weight-bolder mr-auto mb-0">System Notifications</h6>
                            <div class="custom-control custom-control-primary custom-switch">
                                <input class="custom-control-input" id="systemNotification" type="checkbox" checked="">
                                <label class="custom-control-label" for="systemNotification"></label>
                            </div>
                        </div><a class="d-flex" href="javascript:void(0)">
                            <div class="media d-flex align-items-start">
                                <div class="media-left">
                                    <div class="avatar bg-light-danger">
                                        <div class="avatar-content"><i class="avatar-icon" data-feather="x"></i></div>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <p class="media-heading"><span class="font-weight-bolder">Server down</span>&nbsp;registered</p><small class="notification-text"> USA Server is down due to hight CPU usage</small>
                                </div>
                            </div>
                        </a><a class="d-flex" href="javascript:void(0)">
                            <div class="media d-flex align-items-start">
                                <div class="media-left">
                                    <div class="avatar bg-light-success">
                                        <div class="avatar-content"><i class="avatar-icon" data-feather="check"></i></div>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <p class="media-heading"><span class="font-weight-bolder">Sales report</span>&nbsp;generated</p><small class="notification-text"> Last month sales report generated</small>
                                </div>
                            </div>
                        </a><a class="d-flex" href="javascript:void(0)">
                            <div class="media d-flex align-items-start">
                                <div class="media-left">
                                    <div class="avatar bg-light-warning">
                                        <div class="avatar-content"><i class="avatar-icon" data-feather="alert-triangle"></i></div>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <p class="media-heading"><span class="font-weight-bolder">High memory</span>&nbsp;usage</p><small class="notification-text"> BLR Server using high memory</small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="dropdown-menu-footer"><a class="btn btn-primary btn-block" href="javascript:void(0)">Read all notifications</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="user-nav d-sm-flex d-none">
                        <span class="user-name font-weight-bolder">
                            <?php
                            if (Yii::app()->user->isGuest) {
                                echo '';
                            } else {
                                echo Yii::app()->user->nama;
                            }
                            ?>	</span>
                        <span class="user-status">
                            <?php
                            if (Yii::app()->user->isGuest) {
                                echo '';
                            } else {
                                echo Yii::app()->user->NAMAGROUPS;
                            }
                            ?>
                        </span>
                    </div>
                    <span class="avatar">
                        <img class="round" src="<?php echo Yii::app()->getBaseUrl() ?>/vuexy/app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="40" width="40">
                        <span class="avatar-status-online"></span>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user">
                    <a class="dropdown-item" href="<?php echo Yii::app()->createUrl('pengguna/ubahpassword'); ?>"><i class="mr-50" data-feather="user"></i> Ubah Password</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo Yii::app()->createUrl('site/logout'); ?>"><i class="mr-50" data-feather="power"></i> Logout</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
<!-- END: Header-->


<!-- BEGIN: Main Menu-->
<div class="horizontal-menu-wrapper">
    <div class="header-navbar navbar-expand-sm navbar navbar-horizontal floating-nav navbar-dark navbar-shadow menu-border" role="navigation" data-menu="menu-wrapper" data-menu-type="floating-nav">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto">
                    <a class="navbar-brand" href="<?php echo Yii::app()->createUrl('site/index'); ?>">
                        <span class="brand-logo">
                                <svg viewbox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="24">
                                    <defs>
                                        <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%" y2="89.4879456%">
                                            <stop stop-color="#000000" offset="0%"></stop>
                                            <stop stop-color="#FFFFFF" offset="100%"></stop>
                                        </lineargradient>
                                        <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%" x2="37.373316%" y2="100%">
                                            <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                            <stop stop-color="#FFFFFF" offset="100%"></stop>
                                        </lineargradient>
                                    </defs>
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                                            <g id="Group" transform="translate(400.000000, 178.000000)">
                                                <path class="text-primary" id="Path" d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z" style="fill:currentColor"></path>
                                                <path id="Path1" d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z" fill="url(#linearGradient-1)" opacity="0.2"></path>
                                                <polygon id="Path-2" fill="#000000" opacity="0.049999997" points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325"></polygon>
                                                <polygon id="Path-21" fill="#000000" opacity="0.099999994" points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338"></polygon>
                                                <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994" points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"></polygon>
                                            </g>
                                        </g>
                                    </g>
                                </svg></span>
                        <h2 class="brand-text mb-0">SIPENSU</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
                        <i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <!-- Horizontal menu content-->
        <div class="navbar-container main-menu-content" data-menu="menu-container">
            <!-- include <?php echo Yii::app()->getBaseUrl() ?>/vuexy/includes/mixins-->
            <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="nav-item" data-menu="">
                    <a class="dropdown-toggle nav-link d-flex align-items-center" href="<?php echo Yii::app()->createUrl('site/index'); ?>" data-toggle="">
                        <i data-feather="home"></i><span data-i18n="Dashboards">Dashboards</span>
                    </a>
                </li>

                <!-- Menu Mahasiswa -->
                <?php if (!Yii::app()->user->isGuest && Yii::app()->user->IDGROUPS == '9'): ?>
                    <li class="dropdown nav-item" data-menu="dropdown">
                        <a class="dropdown-toggle nav-link d-flex align-items-center" href="#" data-toggle="dropdown">
                            <i data-feather="package"></i><span data-i18n="Apps">Mahasiswa</span>
                        </a>

                        <ul class="dropdown-menu">
                            <li data-menu="">
                                <a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('surpermk/permintaansurat'); ?>" data-toggle="dropdown" data-i18n="Email">
                                    <i data-feather="mail"></i><span data-i18n="Email">Surat Masih Kuliah</span>
                                </a>
                            </li>
                            <li data-menu="">
                                <a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('surketnobeswa/permintaansurat'); ?>" data-toggle="dropdown" data-i18n="Email">
                                    <i data-feather="mail"></i><span data-i18n="Email">Surat No Beasiswa</span>
                                </a>
                            </li>
                            <li data-menu="">
                                <a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('surmag/permintaansurat'); ?>" data-toggle="dropdown" data-i18n="Email">
                                    <i data-feather="mail"></i><span data-i18n="Email">Surat Magang</span>
                                </a>
                            </li>
                            <li data-menu="">
                                <a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('surijinpn/permintaansurat'); ?>" data-toggle="dropdown" data-i18n="Email">
                                    <i data-feather="mail"></i><span data-i18n="Email">Surat Ijin Penelitian</span>
                                </a>
                            </li>
                            <li data-menu="">
                                <a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('surisu/permintaansurat'); ?>" data-toggle="dropdown" data-i18n="Email">
                                    <i data-feather="mail"></i><span data-i18n="Email">Surat Izin Survei</span>
                                </a>
                            </li>
                            <li data-menu="">
                                <a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('surijincuti/permintaansurat'); ?>" data-toggle="dropdown" data-i18n="Email">
                                    <i data-feather="mail"></i><span data-i18n="Email">Surat Izin & Aktif Cuti</span>
                                </a>
                            </li>
                            <li data-menu="">
                                <a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('surperpk/permintaansurat'); ?>" data-toggle="dropdown" data-i18n="Email">
                                    <i data-feather="mail"></i><span data-i18n="Email">Surat Izin Praktik Kerja</span>
                                </a>
                            </li>
                            <li data-menu="">
                                <a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('suratketerangan/permintaansurat'); ?>" data-toggle="dropdown" data-i18n="Email">
                                    <i data-feather="mail"></i><span data-i18n="Email">Surat Keterangan</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown nav-item" data-menu="dropdown">
                        <a class="dropdown-toggle nav-link d-flex align-items-center" href="#" data-toggle="dropdown">
                            <i data-feather="file-text"></i><span data-i18n="Pages">Info</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('berita/index'); ?>" data-toggle="dropdown" data-i18n="FAQ">
                                    <i data-feather="help-circle"></i><span data-i18n="FAQ">Berita/Informasi</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('pengguna/aboutpsi'); ?>" data-toggle="dropdown" data-i18n="Knowledge Base">
                                    <i data-feather="info"></i><span data-i18n="Knowledge Base">PSI-FEB</span></a>
                            </li>
                        </ul>
                    </li>
                <?php endif; ?>

                <!--menu manage by Administrator-->
                <?php if (!Yii::app()->user->isGuest && Yii::app()->user->IDGROUPS == '1'): ?>
                    <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link d-flex align-items-center" href="#" data-toggle="dropdown">
                            <i data-feather="package"></i><span data-i18n="Apps">Manage Surat</span></a>
                        <ul class="dropdown-menu">
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('pengguna/menusuratdosen'); ?>" data-toggle="dropdown" data-i18n="Email">
                                    <i data-feather="mail"></i><span data-i18n="Email">Surat untuk Dosen</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('pengguna/menusuratmahasiswa'); ?>" data-toggle="dropdown" data-i18n="Chat">
                                    <i data-feather="message-square"></i><span data-i18n="Chat">Surat untuk Mahasiswa</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('pengguna/menuaccsurat'); ?>" data-toggle="dropdown" data-i18n="Todo">
                                    <i data-feather="check-square"></i><span data-i18n="Todo">Manage Acc Surat</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link d-flex align-items-center" href="#" data-toggle="dropdown">
                            <i data-feather="layers"></i><span data-i18n="User Interface">Master</span></a>
                        <ul class="dropdown-menu">
                            <li data-menu="">
                                <a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('fakultas/admin'); ?>" data-toggle="dropdown" data-i18n="Typography">
                                    <i data-feather="type"></i><span data-i18n="Typography">Fakultas</span></a>
                            </li>
                            <li data-menu="">
                                <a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('jurusan/admin'); ?>" data-toggle="dropdown" data-i18n="Colors">
                                    <i data-feather="droplet"></i><span data-i18n="Colors">Jurusan</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('msdos/admin'); ?>" data-toggle="dropdown" data-i18n="Feather">
                                    <i data-feather="eye"></i><span data-i18n="Feather">Data Dosen</span></a>
                            </li>
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu">
                                <a class="dropdown-item d-flex align-items-center dropdown-toggle" href="#" data-toggle="dropdown" data-i18n="Cards">
                                    <i data-feather="credit-card"></i><span data-i18n="Cards">Panggol / Jabatan</span></a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('panggol/admin'); ?>" data-toggle="dropdown" data-i18n="Basic">
                                            <i data-feather="circle"></i><span data-i18n="Basic">Pangkat & Golongan</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('jabatanstruktural/admin'); ?>" data-toggle="dropdown" data-i18n="Advance">
                                            <i data-feather="circle"></i><span data-i18n="Advance">Jabatan Struktural</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('jabatanakademik/admin'); ?>" data-toggle="dropdown" data-i18n="Statistics">
                                            <i data-feather="circle"></i><span data-i18n="Statistics">Jabatan Akademik</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu">
                                <a class="dropdown-item d-flex align-items-center dropdown-toggle" href="#" data-toggle="dropdown" data-i18n="Components">
                                    <i data-feather="briefcase"></i><span data-i18n="Components">Mahasiswa</span></a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('mahasiswa/admin'); ?>" data-toggle="dropdown" data-i18n="Alerts">
                                            <i data-feather="circle"></i><span data-i18n="Alerts">Data Mahasiswa</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('fileuploadfoto/admin'); ?>" data-toggle="dropdown" data-i18n="Avatar">
                                            <i data-feather="circle"></i><span data-i18n="Avatar">Foto Mahasiswa</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('jender/admin'); ?>" data-toggle="dropdown" data-i18n="Badges">
                                            <i data-feather="circle"></i><span data-i18n="Badges">Jender</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('prodi/admin'); ?>" data-toggle="dropdown" data-i18n="Breadcrumbs">
                                            <i data-feather="circle"></i><span data-i18n="Breadcrumbs">Prodi</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('jenjang/admin'); ?>" data-toggle="dropdown" data-i18n="Buttons">
                                            <i data-feather="circle"></i><span data-i18n="Buttons">Jenjang</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('agama/admin'); ?>" data-toggle="dropdown" data-i18n="Carousel">
                                            <i data-feather="circle"></i><span data-i18n="Carousel">Agama</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('goldarah/admin'); ?>" data-toggle="dropdown" data-i18n="Collapse">
                                            <i data-feather="circle"></i><span data-i18n="Collapse">Golongan Darah</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li data-menu="">
                                <a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('klasifikasisurat/admin'); ?>" data-toggle="dropdown" data-i18n="Typography">
                                    <i data-feather="type"></i><span data-i18n="Typography">Klasifikasi Surat</span></a>
                            </li>
                            <li data-menu="">
                                <a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('kategoriberita/admin'); ?>" data-toggle="dropdown" data-i18n="Colors">
                                    <i data-feather="droplet"></i><span data-i18n="Colors">Kategori Berita/Info</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('berita/admin'); ?>" data-toggle="dropdown" data-i18n="Feather">
                                    <i data-feather="eye"></i><span data-i18n="Feather">Detail Berita</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('pengguna/manualbook'); ?>" data-toggle="dropdown" data-i18n="Feather">
                                    <i data-feather="eye"></i><span data-i18n="Feather">Manual Book</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown nav-item" data-menu="dropdown">
                        <a class="dropdown-toggle nav-link d-flex align-items-center" href="#" data-toggle="dropdown"><i data-feather="layers"></i>
                            <span data-i18n="User Interface">Konfigurasi</span></a>
                        <ul class="dropdown-menu">
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('currentsemester/admin'); ?>" data-toggle="dropdown" data-i18n="Typography">
                                    <i data-feather="type"></i><span data-i18n="Typography">Current Semester</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('matakuliahsurisu/admin'); ?>" data-toggle="dropdown" data-i18n="Colors">
                                    <i data-feather="droplet"></i><span data-i18n="Colors">MK Syarat Survei</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('jenissurat/admin'); ?>" data-toggle="dropdown" data-i18n="Feather">
                                    <i data-feather="eye"></i><span data-i18n="Feather">Jenis Surat</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('pemberiparaf/admin'); ?>" data-toggle="dropdown" data-i18n="Feather">
                                    <i data-feather="eye"></i><span data-i18n="Feather">Pemberi Paraf</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link d-flex align-items-center" href="#" data-toggle="dropdown">
                            <i data-feather="edit"></i><span data-i18n="Forms &amp; Tables">Kelola Pengguna</span></a>
                        <ul class="dropdown-menu">
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('pengguna/admin'); ?>" data-toggle="dropdown" data-i18n="Form Layout">
                                    <i data-feather="box"></i><span data-i18n="Form Layout">Pengguna</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('groups/admin'); ?>" data-toggle="dropdown" data-i18n="Form Wizard">
                                    <i data-feather="package"></i><span data-i18n="Form Wizard">Group Pengguna</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link d-flex align-items-center" href="#" data-toggle="dropdown">
                            <i data-feather="box"></i><span data-i18n="Misc">Data</span></a>
                        <ul class="dropdown-menu">
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('groupsurtugmonitoring/admin'); ?>" data-toggle="dropdown" data-i18n="Documentation">
                                    <i data-feather="folder"></i><span data-i18n="Documentation">Data Monitoring</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('pengguna/aboutpsi'); ?>" data-toggle="dropdown" data-i18n="Raise Support">
                                    <i data-feather="life-buoy"></i><span data-i18n="Raise Support">About Us</span></a>
                            </li>
                        </ul>
                    </li>
                <?php endif; ?>

                <?php if (!Yii::app()->user->isGuest && Yii::app()->user->IDGROUPS == '2'): ?>
                    <li class="nav-item" data-menu="">
                        <a class="nav-link d-flex align-items-center" href="<?php echo Yii::app()->createUrl('pengguna/verifikasisurat'); ?>" data-toggle="">
                            <i data-feather="mail"></i><span data-i18n="Dashboards">Verifikasi Data Surat</span>
                        </a>
                    </li>

                    <li class="nav-item" data-menu="">
                        <a class="dropdown-toggle nav-link d-flex align-items-center" href="<?php echo Yii::app()->createUrl('jenissurat/index'); ?>" data-toggle="">
                            <i data-feather="message-square"></i><span data-i18n="Dashboards">Klasifikasi & Jenis Surat</span>
                        </a>
                    </li>

                    <li class="nav-item" data-menu="">
                        <a class="dropdown-toggle nav-link d-flex align-items-center" href="<?php echo Yii::app()->createUrl('pengguna/manualbook'); ?>" data-toggle="">
                            <i data-feather="folder"></i><span data-i18n="Dashboards">Manual Book</span>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if (!Yii::app()->user->isGuest && Yii::app()->user->IDGROUPS == '3'): ?>
                    <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link d-flex align-items-center" href="#" data-toggle="dropdown">
                            <i data-feather="package"></i><span data-i18n="Apps">Manage Surat Dosen</span></a>
                        <ul class="dropdown-menu">
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('surtugpm/admin'); ?>" data-toggle="dropdown" data-i18n="Email">
                                    <i data-feather="mail"></i><span data-i18n="Email">Surat Tugas Pengabdian</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('surtugpn/admin'); ?>" data-toggle="dropdown" data-i18n="Chat">
                                    <i data-feather="message-square"></i><span data-i18n="Chat">Surat Tugas Penelitian</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('surtugns/admin'); ?>" data-toggle="dropdown" data-i18n="Todo">
                                    <i data-feather="check-square"></i><span data-i18n="Todo">Surat Tugas Pembicara</span></a>
                            </li>
                        </ul>
                    </li>

                    <!--Menu Mahasiswa-->

                    <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link d-flex align-items-center" href="#" data-toggle="dropdown">
                            <i data-feather="package"></i><span data-i18n="Apps">Manage Surat Mahasiswa</span></a>
                        <ul class="dropdown-menu">
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('surpermk/admin'); ?>" data-toggle="dropdown" data-i18n="Email">
                                    <i data-feather="mail"></i><span data-i18n="Email">Surat Masih Kuliah</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('surketnobeswa/admin'); ?>" data-toggle="dropdown" data-i18n="Chat">
                                    <i data-feather="message-square"></i><span data-i18n="Chat">Surat No Beasiswa</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('surmag/admin'); ?>" data-toggle="dropdown" data-i18n="Todo">
                                    <i data-feather="check-square"></i><span data-i18n="Todo">Surat Magang</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('surijinpn/admin'); ?>" data-toggle="dropdown" data-i18n="Email">
                                    <i data-feather="mail"></i><span data-i18n="Email">Surat Ijin Penelitian</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('surisu/admin'); ?>" data-toggle="dropdown" data-i18n="Chat">
                                    <i data-feather="message-square"></i><span data-i18n="Chat">Surat Ijin Survei</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('surijincuti/admin'); ?>" data-toggle="dropdown" data-i18n="Todo">
                                    <i data-feather="check-square"></i><span data-i18n="Todo">Surat Izin&Aktif Cuti</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('suratketerangan/admin'); ?>" data-toggle="dropdown" data-i18n="Todo">
                                    <i data-feather="check-square"></i><span data-i18n="Todo">Surat Keterangan</span></a>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link d-flex align-items-center" href="#" data-toggle="dropdown">
                            <i data-feather="layers"></i><span data-i18n="User Interface">Master</span></a>
                        <ul class="dropdown-menu">
                            <li data-menu="">
                                <a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('fakultas/admin'); ?>" data-toggle="dropdown" data-i18n="Typography">
                                    <i data-feather="type"></i><span data-i18n="Typography">Fakultas</span></a>
                            </li>
                            <li data-menu="">
                                <a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('jurusan/admin'); ?>" data-toggle="dropdown" data-i18n="Colors">
                                    <i data-feather="droplet"></i><span data-i18n="Colors">Jurusan</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('msdos/admin'); ?>" data-toggle="dropdown" data-i18n="Feather">
                                    <i data-feather="eye"></i><span data-i18n="Feather">Data Dosen</span></a>
                            </li>
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu">
                                <a class="dropdown-item d-flex align-items-center dropdown-toggle" href="#" data-toggle="dropdown" data-i18n="Cards">
                                    <i data-feather="credit-card"></i><span data-i18n="Cards">Panggol / Jabatan</span></a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('panggol/admin'); ?>" data-toggle="dropdown" data-i18n="Basic">
                                            <i data-feather="circle"></i><span data-i18n="Basic">Pangkat & Golongan</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('jabatanstruktural/admin'); ?>" data-toggle="dropdown" data-i18n="Advance">
                                            <i data-feather="circle"></i><span data-i18n="Advance">Jabatan Struktural</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('jabatanakademik/admin'); ?>" data-toggle="dropdown" data-i18n="Statistics">
                                            <i data-feather="circle"></i><span data-i18n="Statistics">Jabatan Akademik</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu">
                                <a class="dropdown-item d-flex align-items-center dropdown-toggle" href="#" data-toggle="dropdown" data-i18n="Components">
                                    <i data-feather="briefcase"></i><span data-i18n="Components">Mahasiswa</span></a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('mahasiswa/admin'); ?>" data-toggle="dropdown" data-i18n="Alerts">
                                            <i data-feather="circle"></i><span data-i18n="Alerts">Data Mahasiswa</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('fileuploadfoto/admin'); ?>" data-toggle="dropdown" data-i18n="Avatar">
                                            <i data-feather="circle"></i><span data-i18n="Avatar">Foto Mahasiswa</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('jender/admin'); ?>" data-toggle="dropdown" data-i18n="Badges">
                                            <i data-feather="circle"></i><span data-i18n="Badges">Jender</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('prodi/admin'); ?>" data-toggle="dropdown" data-i18n="Breadcrumbs">
                                            <i data-feather="circle"></i><span data-i18n="Breadcrumbs">Prodi</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('jenjang/admin'); ?>" data-toggle="dropdown" data-i18n="Buttons">
                                            <i data-feather="circle"></i><span data-i18n="Buttons">Jenjang</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('agama/admin'); ?>" data-toggle="dropdown" data-i18n="Carousel">
                                            <i data-feather="circle"></i><span data-i18n="Carousel">Agama</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('goldarah/admin'); ?>" data-toggle="dropdown" data-i18n="Collapse">
                                            <i data-feather="circle"></i><span data-i18n="Collapse">Golongan Darah</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li data-menu="">
                                <a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('klasifikasisurat/admin'); ?>" data-toggle="dropdown" data-i18n="Typography">
                                    <i data-feather="type"></i><span data-i18n="Typography">Klasifikasi Surat</span></a>
                            </li>
                            <li data-menu="">
                                <a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('kategoriberita/admin'); ?>" data-toggle="dropdown" data-i18n="Colors">
                                    <i data-feather="droplet"></i><span data-i18n="Colors">Kategori Berita/Info</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('berita/admin'); ?>" data-toggle="dropdown" data-i18n="Feather">
                                    <i data-feather="eye"></i><span data-i18n="Feather">Detail Berita</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('pengguna/manualbook'); ?>" data-toggle="dropdown" data-i18n="Feather">
                                    <i data-feather="eye"></i><span data-i18n="Feather">Manual Book</span></a>
                            </li>
                        </ul>
                    </li>
                <?php endif; ?>
                <?php if (!Yii::app()->user->isGuest && Yii::app()->user->IDGROUPS == '7'): ?>
                    <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link d-flex align-items-center" href="#" data-toggle="dropdown">
                            <i data-feather="package"></i><span data-i18n="Apps">Manage Surat Mahasiswa</span></a>
                        <ul class="dropdown-menu">
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('surpermk/admin'); ?>" data-toggle="dropdown" data-i18n="Email">
                                    <i data-feather="mail"></i><span data-i18n="Email">Surat Masih Kuliah</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('surketnobeswa/admin'); ?>" data-toggle="dropdown" data-i18n="Chat">
                                    <i data-feather="message-square"></i><span data-i18n="Chat">Surat No Beasiswa</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('surmag/admin'); ?>" data-toggle="dropdown" data-i18n="Todo">
                                    <i data-feather="check-square"></i><span data-i18n="Todo">Surat Magang</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('surijinpn/admin'); ?>" data-toggle="dropdown" data-i18n="Email">
                                    <i data-feather="mail"></i><span data-i18n="Email">Surat Ijin Penelitian</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('surisu/admin'); ?>" data-toggle="dropdown" data-i18n="Chat">
                                    <i data-feather="message-square"></i><span data-i18n="Chat">Surat Ijin Survei</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('surijincuti/admin'); ?>" data-toggle="dropdown" data-i18n="Todo">
                                    <i data-feather="check-square"></i><span data-i18n="Todo">Surat Izin&Aktif Cuti</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('suratketerangan/admin'); ?>" data-toggle="dropdown" data-i18n="Todo">
                                    <i data-feather="check-square"></i><span data-i18n="Todo">Surat Keterangan</span></a>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link d-flex align-items-center" href="#" data-toggle="dropdown">
                            <i data-feather="layers"></i><span data-i18n="User Interface">Master</span></a>
                        <ul class="dropdown-menu">
                            <li data-menu="">
                                <a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('fakultas/admin'); ?>" data-toggle="dropdown" data-i18n="Typography">
                                    <i data-feather="type"></i><span data-i18n="Typography">Fakultas</span></a>
                            </li>
                            <li data-menu="">
                                <a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('jurusan/admin'); ?>" data-toggle="dropdown" data-i18n="Colors">
                                    <i data-feather="droplet"></i><span data-i18n="Colors">Jurusan</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('msdos/admin'); ?>" data-toggle="dropdown" data-i18n="Feather">
                                    <i data-feather="eye"></i><span data-i18n="Feather">Data Dosen</span></a>
                            </li>
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu">
                                <a class="dropdown-item d-flex align-items-center dropdown-toggle" href="#" data-toggle="dropdown" data-i18n="Cards">
                                    <i data-feather="credit-card"></i><span data-i18n="Cards">Panggol / Jabatan</span></a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('panggol/admin'); ?>" data-toggle="dropdown" data-i18n="Basic">
                                            <i data-feather="circle"></i><span data-i18n="Basic">Pangkat & Golongan</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('jabatanstruktural/admin'); ?>" data-toggle="dropdown" data-i18n="Advance">
                                            <i data-feather="circle"></i><span data-i18n="Advance">Jabatan Struktural</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('jabatanakademik/admin'); ?>" data-toggle="dropdown" data-i18n="Statistics">
                                            <i data-feather="circle"></i><span data-i18n="Statistics">Jabatan Akademik</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu">
                                <a class="dropdown-item d-flex align-items-center dropdown-toggle" href="#" data-toggle="dropdown" data-i18n="Components">
                                    <i data-feather="briefcase"></i><span data-i18n="Components">Mahasiswa</span></a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('mahasiswa/admin'); ?>" data-toggle="dropdown" data-i18n="Alerts">
                                            <i data-feather="circle"></i><span data-i18n="Alerts">Data Mahasiswa</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('fileuploadfoto/admin'); ?>" data-toggle="dropdown" data-i18n="Avatar">
                                            <i data-feather="circle"></i><span data-i18n="Avatar">Foto Mahasiswa</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('jender/admin'); ?>" data-toggle="dropdown" data-i18n="Badges">
                                            <i data-feather="circle"></i><span data-i18n="Badges">Jender</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('prodi/admin'); ?>" data-toggle="dropdown" data-i18n="Breadcrumbs">
                                            <i data-feather="circle"></i><span data-i18n="Breadcrumbs">Prodi</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('jenjang/admin'); ?>" data-toggle="dropdown" data-i18n="Buttons">
                                            <i data-feather="circle"></i><span data-i18n="Buttons">Jenjang</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('agama/admin'); ?>" data-toggle="dropdown" data-i18n="Carousel">
                                            <i data-feather="circle"></i><span data-i18n="Carousel">Agama</span></a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('goldarah/admin'); ?>" data-toggle="dropdown" data-i18n="Collapse">
                                            <i data-feather="circle"></i><span data-i18n="Collapse">Golongan Darah</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li data-menu="">
                                <a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('klasifikasisurat/admin'); ?>" data-toggle="dropdown" data-i18n="Typography">
                                    <i data-feather="type"></i><span data-i18n="Typography">Klasifikasi Surat</span></a>
                            </li>
                            <li data-menu="">
                                <a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('kategoriberita/admin'); ?>" data-toggle="dropdown" data-i18n="Colors">
                                    <i data-feather="droplet"></i><span data-i18n="Colors">Kategori Berita/Info</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('berita/admin'); ?>" data-toggle="dropdown" data-i18n="Feather">
                                    <i data-feather="eye"></i><span data-i18n="Feather">Detail Berita</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('pengguna/manualbook'); ?>" data-toggle="dropdown" data-i18n="Feather">
                                    <i data-feather="eye"></i><span data-i18n="Feather">Manual Book</span></a>
                            </li>
                        </ul>
                    </li>
                <?php endif; ?>
                <?php if (!Yii::app()->user->isGuest && Yii::app()->user->IDGROUPS == '4'): ?>
                    <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link d-flex align-items-center" href="#" data-toggle="dropdown">
                            <i data-feather="package"></i><span data-i18n="Apps">Manage Surat Mahasiswa</span></a>
                        <ul class="dropdown-menu">
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('surisu/admin'); ?>" data-toggle="dropdown" data-i18n="Chat">
                                    <i data-feather="message-square"></i><span data-i18n="Chat">Surat Ijin Survei</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('surperpk/admin'); ?>" data-toggle="dropdown" data-i18n="Todo">
                                    <i data-feather="check-square"></i><span data-i18n="Todo">Surat Praktik Kerja</span></a>
                            </li>
                        </ul>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('jenissurat/index'); ?>" data-toggle="dropdown" data-i18n="Feather">
                            <i data-feather="eye"></i><span data-i18n="Feather">Klasifikasi & Jenis Surat</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('pengguna/manualbook'); ?>" data-toggle="dropdown" data-i18n="Feather">
                            <i data-feather="eye"></i><span data-i18n="Feather">Manual Book</span></a>
                    </li>
                    <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('groupsurtugmonitoring/admin'); ?>" data-toggle="dropdown" data-i18n="Feather">
                            <i data-feather="eye"></i><span data-i18n="Feather">Data Monitoring</span></a>
                    </li>
                <?php endif; ?>
                <?php if (!Yii::app()->user->isGuest && Yii::app()->user->IDGROUPS == 'D'): ?>
                    <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link d-flex align-items-center" href="#" data-toggle="dropdown">
                            <i data-feather="package"></i><span data-i18n="Apps">Manage Surat Dosen</span></a>
                        <ul class="dropdown-menu">
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('surtugpm/permintaansurat'); ?>" data-toggle="dropdown" data-i18n="Email">
                                    <i data-feather="mail"></i><span data-i18n="Email">Surat Tugas Pengabdian</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('surtugpn/permintaansurat'); ?>" data-toggle="dropdown" data-i18n="Chat">
                                    <i data-feather="message-square"></i><span data-i18n="Chat">Surat Tugas Penelitian</span></a>
                            </li>
                            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo Yii::app()->createUrl('surtugns/permintaansurat'); ?>" data-toggle="dropdown" data-i18n="Todo">
                                    <i data-feather="check-square"></i><span data-i18n="Todo">Surat Tugas Pembicara</span></a>
                            </li>
                        </ul>
                    </li>
                <?php endif;?>
            </ul>
        </div>
    </div>
</div>
<!-- END: Main Menu-->

<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- Dashboard Ecommerce Starts -->
            <section id="dashboard-ecommerce">
                <?php echo $content ?>
            </section>
            <!-- Dashboard Ecommerce ends -->

        </div>
    </div>
</div>
<!-- END: Content-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light footer-shadow">
    <p class="clearfix mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2022<a class="ml-25" href="http://feb.unsoed.ac.id" target="_blank">FEB UNSOED</a><span class="d-none d-sm-inline-block">, All rights Reserved</span></span><span class="float-md-right d-none d-md-block"><i data-feather="heart"></i></span></p>
</footer>
<button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
<!-- END: Footer-->
<?php Yii::app()->clientScript->registerCoreScript('jquery2'); ?>
<!-- BEGIN: Vendor JS-->
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="<?php echo Yii::app()->getBaseUrl() ?>/vuexy/app-assets/vendors/js/ui/jquery.sticky.js"></script>
<script src="<?php echo Yii::app()->getBaseUrl() ?>/vuexy/app-assets/vendors/js/charts/apexcharts.min.js"></script>
<!--<script src="<?php //echo Yii::app()->getBaseUrl() ?>/vuexy/app-assets/vendors/js/extensions/toastr.min.js"></script>-->
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="<?php echo Yii::app()->getBaseUrl() ?>/vuexy/app-assets/js/core/app-menu.js"></script>
<script src="<?php echo Yii::app()->getBaseUrl() ?>/vuexy/app-assets/js/core/app.js"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="<?php //echo Yii::app()->getBaseUrl() ?> /vuexy/app-assets/js/scripts/components/components-modals.js"></script>
<script src="<?php //echo Yii::app()->getBaseUrl() ?>/vuexy/app-assets/js/scripts/pages/dashboard-ecommerce.js"></script>
<!-- END: Page JS-->

<script>
    $(window).on('load', function() {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    })
</script>


</body>
<!-- END: Body-->

</html>