<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<div class="col-lg-12 col-12">
    <div class="card card-revenue-budget">
        <div class="row mx-0">
            <div class="col-md-8 col-12 revenue-report-wrapper">
                <div class="d-sm-flex justify-content-between align-items-center mb-3">
                    <h4 class="card-title mb-50 mb-sm-0">SIPENSU - SISTEM PERMINTAAN SURAT</h4>
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center mr-2">
                            <span class="bullet bullet-primary font-small-3 mr-50 cursor-pointer"></span>
                            <span>FEB</span>
                        </div>
                        <div class="d-flex align-items-center ml-75">
                            <span class="bullet bullet-warning font-small-3 mr-50 cursor-pointer"></span>
                            <span>Unsoed</span>
                        </div>
                    </div>
                </div>
                <a href="http://feb.unsoed.ac.id">Fakultas Ekonomi dan Bisnis UNSOED </a>
                <h1><b><i>Welcome to <?php echo CHtml::encode(Yii::app()->name); ?></b></i></h1>
                <br>
                <p>Aplikasi ini dibuat untuk memenuhi kebutuhan user, khususnya bagi para dosen dan mahasiswa Fakultas Ekonomi dan Bisnis UNSOED. Sistem ini melayani permohonan/permintaan surat secara mandiri maupun non mandiri. </p><br>
                <p></p>
            </div>
            <div class="col-md-4 col-12 budget-wrapper">
                <div class="d-flex justify-content-center">
                </div>
                <img src="<?php echo Yii::app()->getBaseUrl() ?>/app-assets/images/illustration/email.svg" class="card-img-top" alt="knowledge-base-image">
            </div>
        </div>
    </div>
</div>