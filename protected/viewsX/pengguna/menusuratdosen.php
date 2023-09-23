<!-- <meta http-equiv="refresh" content="290" >-->
					<div class="portlet box yellow">
						<div class="portlet-body" align="center">
                        <h4>Manage Surat Permintaan/Permohonan Dosen</h4>
                        <hr>
                        <div class="row" align="center">
                            <div class="col-xl-4 col-md-4 col-sm-6">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <div class="avatar bg-light-info p-50 mb-1">
                                            <div class="avatar-content">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users font-medium-5">
                                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                    <circle cx="12" cy="12" r="3"></circle>
                                                </svg>
                                            </div>
                                        </div>
                                        <h2 class="font-weight-bolder">Surat Pengabdian</h2>
                                        <p class="card-text"><a href="<?php
                                            if (!Yii::app()->user->isGuest && Yii::app()->user->IDGROUPS == 'G') {
                                                echo Yii::app()->createUrl('surtugpm/subkor');
                                            }
                                            elseif (!Yii::app()->user->isGuest && Yii::app()->user->IDGROUPS == '1') {
                                                echo Yii::app()->createUrl('surtugpm/admin');
                                            }
                                            elseif (!Yii::app()->user->isGuest && Yii::app()->user->IDGROUPS == 'F') {
                                                echo Yii::app()->createUrl('surtugpm/dekanat');
                                            }
                                            ?>" class="icon-btn">Manage</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-4 col-sm-6">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <div class="avatar bg-light-danger p-50 mb-1">
                                            <div class="avatar-content">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag font-medium-5"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                                            </div>
                                        </div>
                                        <h2 class="font-weight-bolder">Surat Penelitian</h2>
                                        <p class="card-text"><a href="<?php
                                            if (!Yii::app()->user->isGuest && Yii::app()->user->IDGROUPS == 'G') {
                                                echo Yii::app() ->createUrl('surtugpn/subkor');
                                            }
                                            elseif (!Yii::app()->user->isGuest && Yii::app()->user->IDGROUPS == '1') {
                                                echo Yii::app() ->createUrl('surtugpn/admin');
                                            }
                                            elseif (!Yii::app()->user->isGuest && Yii::app()->user->IDGROUPS == 'F') {
                                                echo Yii::app() ->createUrl('surtugpn/dekanat');
                                            }
                                            ?>" class="icon-btn">Manage</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-4 col-sm-6">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <div class="avatar bg-light-warning p-50 mb-1">
                                            <div class="avatar-content">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square font-medium-5"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                                            </div>
                                        </div>
                                        <h2 class="font-weight-bolder">Surat Lainya</h2>
                                        <p class="card-text"><a href="<?php
                                            if (!Yii::app()->user->isGuest && Yii::app()->user->IDGROUPS == 'G') {
                                                echo Yii::app() ->createUrl('surtugns/subkor');
                                            }
                                            elseif (!Yii::app()->user->isGuest && Yii::app()->user->IDGROUPS == '1') {
                                                echo Yii::app() ->createUrl('surtugns/admin');
                                            }
                                            elseif (!Yii::app()->user->isGuest && Yii::app()->user->IDGROUPS == 'F') {
                                                echo Yii::app() ->createUrl('surtugns/dekanat');
                                            }
                                            ?>" class="icon-btn">Manage</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
						</div>
					</div>
			</span>
		</div>
	</div>