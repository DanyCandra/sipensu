<div class="portlet box blue">
    <div class="portlet-body" align="center">
        <h4>Manage Permintaan/Permohonan Surat Mahasiswa</h4>
        <hr>
        <div class="row" align="center">
            <div class="col-xl-2 col-md-4 col-sm-6">
                <div class="card text-center">
                    <div class="card-body">
                        <div class="avatar bg-light-info p-50 mb-1">
                            <div class="avatar-content">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye font-medium-5"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                            </div>
                        </div>
                        <h2 class="font-weight-bolder">Surat Masih Kuliah</h2>
                        <p class="card-text"><a href="<?php
                            if (!Yii::app()->user->isGuest && Yii::app()->user->IDGROUPS == 'G') {
                                echo Yii::app() ->createUrl('surpermk/subkor');
                            }
                            elseif (!Yii::app()->user->isGuest && Yii::app()->user->IDGROUPS == '1') {
                                echo Yii::app() ->createUrl('surpermk/admin');
                            }
                            elseif (!Yii::app()->user->isGuest && Yii::app()->user->IDGROUPS == 'F') {
                                echo Yii::app() ->createUrl('surpermk/dekanat');
                            }
                            //echo Yii::app()->createUrl('surpermk/admin');

                            ?>" class="icon-btn">Manage</a></p>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-md-4 col-sm-6">
                <div class="card text-center">
                    <div class="card-body">
                        <div class="avatar bg-light-warning p-50 mb-1">
                            <div class="avatar-content">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square font-medium-5"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                            </div>
                        </div>
                        <h2 class="font-weight-bolder">Surat No Beasiswa</h2>
                        <p class="card-text"><a href="<?php
                            if (!Yii::app()->user->isGuest && Yii::app()->user->IDGROUPS == 'G') {
                                echo Yii::app() ->createUrl('surketnobeswa/subkor');
                            }
                            elseif (!Yii::app()->user->isGuest && Yii::app()->user->IDGROUPS == '1') {
                                echo Yii::app() ->createUrl('surketnobeswa/admin');
                            }
                            elseif (!Yii::app()->user->isGuest && Yii::app()->user->IDGROUPS == 'F') {
                                echo Yii::app() ->createUrl('surketnobeswa/dekanat');
                            }
                            //echo Yii::app()->createUrl('surketnobeswa/admin');
                            ?>" class="icon-btn">Manage</a></p>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-md-4 col-sm-6">
                <div class="card text-center">
                    <div class="card-body">
                        <div class="avatar bg-light-danger p-50 mb-1">
                            <div class="avatar-content">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag font-medium-5"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                            </div>
                        </div>
                        <h2 class="font-weight-bolder">Surat Magang Kerja</h2>
                        <p class="card-text"><a href="<?php
                            if (!Yii::app()->user->isGuest && Yii::app()->user->IDGROUPS == 'G') {
                                echo Yii::app() ->createUrl('surmag/subkor');
                            }
                            elseif (!Yii::app()->user->isGuest && Yii::app()->user->IDGROUPS == '1') {
                                echo Yii::app() ->createUrl('surmag/admin');
                            }
                            elseif (!Yii::app()->user->isGuest && Yii::app()->user->IDGROUPS == 'F') {
                                echo Yii::app() ->createUrl('surmag/dekanat');
                            }
                            //echo Yii::app()->createUrl('surmag/admin');
                            ?>" class="icon-btn">Manage</a></p>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-md-4 col-sm-6">
                <div class="card text-center">
                    <div class="card-body">
                        <div class="avatar bg-light-primary p-50 mb-1">
                            <div class="avatar-content">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart font-medium-5"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                            </div>
                        </div>
                        <h2 class="font-weight-bolder">Surat Izin Cuti</h2>
                        <p class="card-text"><a href="<?php
                            if (!Yii::app()->user->isGuest && Yii::app()->user->IDGROUPS == 'G') {
                                echo Yii::app() ->createUrl('surijincuti/subkor');
                            }
                            elseif (!Yii::app()->user->isGuest && Yii::app()->user->IDGROUPS == '1') {
                                echo Yii::app() ->createUrl('surijincuti/admin');
                            }
                            elseif (!Yii::app()->user->isGuest && Yii::app()->user->IDGROUPS == 'F') {
                                echo Yii::app() ->createUrl('surijincuti/dekanat');
                            } ?>" class="icon-btn">Manage</a></p>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-md-4 col-sm-6">
                <div class="card text-center">
                    <div class="card-body">
                        <div class="avatar bg-light-success p-50 mb-1">
                            <div class="avatar-content">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-award font-medium-5"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg>
                            </div>
                        </div>
                        <h2 class="font-weight-bolder">Surat Aktif Kembali</h2>
                        <p class="card-text"><a href="<?php
                            if (!Yii::app()->user->isGuest && Yii::app()->user->IDGROUPS == 'G') {
                                echo Yii::app() ->createUrl('suraktifcuti/subkor');
                            }
                            elseif (!Yii::app()->user->isGuest && Yii::app()->user->IDGROUPS == '1') {
                                echo Yii::app() ->createUrl('suraktifcuti/admin');
                            }
                            elseif (!Yii::app()->user->isGuest && Yii::app()->user->IDGROUPS == 'F') {
                                echo Yii::app() ->createUrl('suraktifcuti/dekanat');
                            }
                            //echo Yii::app()->createUrl('suraktifcuti/admin');
                            ?>" class="icon-btn">Manage</a></p>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-md-4 col-sm-6">
                <div class="card text-center">
                    <div class="card-body">
                        <div class="avatar bg-light-danger p-50 mb-1">
                            <div class="avatar-content">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-truck font-medium-5"><rect x="1" y="3" width="15" height="13"></rect><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon><circle cx="5.5" cy="18.5" r="2.5"></circle><circle cx="18.5" cy="18.5" r="2.5"></circle></svg>
                            </div>
                        </div>
                        <h2 class="font-weight-bolder">Surat Izin Penelitian</h2>
                        <p class="card-text"><a href="<?php
                            if (!Yii::app()->user->isGuest && Yii::app()->user->IDGROUPS == 'G') {
                                echo Yii::app() ->createUrl('surijinpn/subkor');
                            }
                            elseif (!Yii::app()->user->isGuest && Yii::app()->user->IDGROUPS == '1') {
                                echo Yii::app() ->createUrl('surijinpn/admin');
                            }
                            elseif (!Yii::app()->user->isGuest && Yii::app()->user->IDGROUPS == 'F') {
                                echo Yii::app() ->createUrl('surijinpn/dekanat');
                            }
                            ?>" class="icon-btn">Manage</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" align="center">
            <div class="col-xl-3 col-md-4 col-sm-6">
                <div class="card text-center">
                    <div class="card-body">
                        <div class="avatar bg-light-info p-50 mb-1">
                            <div class="avatar-content">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cpu font-medium-5"><rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect><rect x="9" y="9" width="6" height="6"></rect><line x1="9" y1="1" x2="9" y2="4"></line><line x1="15" y1="1" x2="15" y2="4"></line><line x1="9" y1="20" x2="9" y2="23"></line><line x1="15" y1="20" x2="15" y2="23"></line><line x1="20" y1="9" x2="23" y2="9"></line><line x1="20" y1="14" x2="23" y2="14"></line><line x1="1" y1="9" x2="4" y2="9"></line><line x1="1" y1="14" x2="4" y2="14"></line></svg>
                            </div>
                        </div>
                        <h2 class="font-weight-bolder">Surat Izin Survei</h2>
                        <p class="card-text"><a href="<?php
                            if (!Yii::app()->user->isGuest && Yii::app()->user->IDGROUPS == 'G') {
                                echo Yii::app() ->createUrl('surisu/subkor');
                            }
                            elseif (!Yii::app()->user->isGuest && Yii::app()->user->IDGROUPS == '1') {
                                echo Yii::app() ->createUrl('surisu/admin');
                            }
                            elseif (!Yii::app()->user->isGuest && Yii::app()->user->IDGROUPS == 'F') {
                                echo Yii::app() ->createUrl('surisu/dekanat');
                            }
                            //echo Yii::app()->createUrl('surisu/admin');
                            ?>" class="icon-btn">Manage</a></p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-4 col-sm-6">
                <div class="card text-center">
                    <div class="card-body">
                        <div class="avatar bg-light-warning p-50 mb-1">
                            <div class="avatar-content">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-package font-medium-5"><line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                            </div>
                        </div>
                        <h2 class="font-weight-bolder">Permohonan Praktik Kerja</h2>
                        <p class="card-text"><a href="<?php
                            if (!Yii::app()->user->isGuest && Yii::app()->user->IDGROUPS == 'G') {
                                echo Yii::app() ->createUrl('surperpk/subkor');
                            }
                            elseif (!Yii::app()->user->isGuest && Yii::app()->user->IDGROUPS == '1') {
                                echo Yii::app() ->createUrl('surperpk/admin');
                            }
                            elseif (!Yii::app()->user->isGuest && Yii::app()->user->IDGROUPS == 'F') {
                                echo Yii::app() ->createUrl('surperpk/dekanat');
                            }
                            //echo Yii::app()->createUrl('surperpk/admin');
                            ?>" class="icon-btn">Manage</a></p>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-md-4 col-sm-6">
                <div class="card text-center">
                    <div class="card-body">
                        <div class="avatar bg-light-danger p-50 mb-1">
                            <div class="avatar-content">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card font-medium-5"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg>
                            </div>
                        </div>
                        <h2 class="font-weight-bolder">Pelaksanaan Praktik Kerja</h2>
                        <p class="card-text"><a href="<?php
                            if (!Yii::app()->user->isGuest && Yii::app()->user->IDGROUPS == 'G') {
                                echo Yii::app() ->createUrl('subdetailsurpelpk/subkor');
                            }
                            elseif (!Yii::app()->user->isGuest && Yii::app()->user->IDGROUPS == '1') {
                                echo Yii::app() ->createUrl('subdetailsurpelpk/admin');
                            }
                            elseif (!Yii::app()->user->isGuest && Yii::app()->user->IDGROUPS == 'F') {
                                echo Yii::app() ->createUrl('subdetailsurpelpk/dekanat');
                            }
                            //echo Yii::app()->createUrl('subdetailsurpelpk/admin'); ?>" class="icon-btn">Manage</a></p>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-md-4 col-sm-6">
                <div class="card text-center">
                    <div class="card-body">
                        <div class="avatar bg-light-primary p-50 mb-1">
                            <div class="avatar-content">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-monitor font-medium-5"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg>
                            </div>
                        </div>
                        <h2 class="font-weight-bolder">Monitoring Praktik Kerja</h2>
                        <p class="card-text"><a href="<?php
                            if (!Yii::app()->user->isGuest && Yii::app()->user->IDGROUPS == 'G') {
                                echo Yii::app() ->createUrl('surtugmonitoring/subkor');
                            }
                            elseif (!Yii::app()->user->isGuest && Yii::app()->user->IDGROUPS == '1') {
                                echo Yii::app() ->createUrl('surtugmonitoring/admin');
                            }
                            elseif (!Yii::app()->user->isGuest && Yii::app()->user->IDGROUPS == 'F') {
                                echo Yii::app() ->createUrl('surtugmonitoring/dekanat');
                            }
                            //echo Yii::app()->createUrl('surtugmonitoring/admin');
                            ?>" class="icon-btn">Manage</a></p>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-md-4 col-sm-6">
                <div class="card text-center">
                    <div class="card-body">
                        <div class="avatar bg-light-success p-50 mb-1">
                            <div class="avatar-content">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail font-medium-5"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                            </div>
                        </div>
                        <h2 class="font-weight-bolder">Surat Keterangan</h2>
                        <p class="card-text"><a href="<?php
                            if (!Yii::app()->user->isGuest && Yii::app()->user->IDGROUPS == 'G') {
                                echo Yii::app() ->createUrl('suratketerangan/subkor');
                            }
                            elseif (!Yii::app()->user->isGuest && Yii::app()->user->IDGROUPS == '1') {
                                echo Yii::app() ->createUrl('suratketerangan/admin');
                            }
                            elseif (!Yii::app()->user->isGuest && Yii::app()->user->IDGROUPS == 'F') {
                                echo Yii::app() ->createUrl('suratketerangan/dekanat');
                            }
                            //echo Yii::app()->createUrl('suratketerangan/admin');
                            ?>" class="icon-btn">Manage</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </span>
</div>
</div>
