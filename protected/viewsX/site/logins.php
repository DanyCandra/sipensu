<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Sistem Permintaan Surat</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta content="" name="description"/>
<meta content="Pungkas" name="author"/>
<meta name="MobileOptimized" content="320">
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="<?php echo Yii::app()->getBaseUrl();?>/metronic/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo Yii::app()->getBaseUrl();?>/metronic/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo Yii::app()->getBaseUrl();?>/metronic/assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->getBaseUrl();?>/metronic/assets/plugins/select2/select2_metro.css"/>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME STYLES -->
<!--link href="<?php echo Yii::app()->getBaseUrl();?>/metronic/assets/css/form.css" rel="stylesheet" type="text/css"/-->
<link href="<?php echo Yii::app()->getBaseUrl();?>/metronic/assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo Yii::app()->getBaseUrl();?>/metronic/assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo Yii::app()->getBaseUrl();?>/metronic/assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo Yii::app()->getBaseUrl();?>/metronic/assets/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo Yii::app()->getBaseUrl();?>/metronic/assets/css/themes/light.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="<?php echo Yii::app()->getBaseUrl();?>/metronic/assets/css/pages/login.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo Yii::app()->getBaseUrl();?>/metronic/assets/css/custom.css" rel="stylesheet" type="text/css"/>
<link rel="shortcut icon" href="<?php echo Yii::app()->getBaseUrl()?>/metronic/assets/img/favicon.ico"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="<?php echo Yii::app()->getBaseUrl();?>/favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="login">
<!-- BEGIN LOGO -->
<div class="logo">
	<img src="<?php echo Yii::app()->getBaseUrl();?>/metronic/assets/img/sipensu.png" alt=""/>
        
</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class="content">
	<!-- BEGIN LOGIN FORM -->
        <?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>
	
		<h3 class="form-title">Login</h3>
		<div class="alert alert-danger display-hide">
			<button class="close" data-close="alert"></button>
			<span>
				 Silakan diisi iduser dan password.
			</span>
		</div>
		<div class="form-group">
			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
			<label class="control-label visible-ie8 visible-ie9">Username</label>
			<div class="input-icon">
				<i class="fa fa-user"></i>
                <?php echo $form->textField($model,'username',array('class'=>'form-control placeholder-no-fix','placeholder'=>'Username','autocomplete'=>'off')); ?>
                <?php echo $form->error($model,'username',array('class'=>'alert alert-danger')); ?>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Password</label>
			<div class="input-icon">
				<i class="fa fa-lock"></i>
                 <?php echo $form->passwordField($model,'password',array('class'=>'form-control placeholder-no-fix','placeholder'=>'Password','autocomplete'=>'off')); ?>
                 <?php echo $form->error($model,'password',array('class'=>'alert alert-danger')); ?>
			</div>
		</div>
		<div class="form-actions">
                        <button type="submit" class="btn green">Sign in</button>
                        <?php //echo CHtml::submitButton('Login', array('class'=>'btn red pull-right'));?>
		</div>
                <!--div class="row">
                    <div class="btn">
                        <?php echo CHtml::link('Jika Anda belum terdaftar, silakan klik disini.',array('biodata/pendaftaran'),array('class'=>'btn btn-xs red')) ?>
                    </div>
                </div-->
		
	<h4> Login pengguna sebagai Mahasiswa:</h4>
		<p>username= <b>NIM</b></p>
		<p>password= <b>NIM</b></p>
        <div class="login-options">
			<h4>Medsos FEB</h4>
			<ul class="social-icons">
				<li>
					<a class="facebook" data-original-title="facebook" href="#">
					</a>
				</li>
				<li>
					<a class="twitter" data-original-title="Twitter" href="#">
					</a>
				</li>
				<li>
					<a class="googleplus" data-original-title="Goole Plus" href="#">
					</a>
				</li>
				<li>
					<a class="linkedin" data-original-title="Linkedin" href="#">
					</a>
				</li>
			</ul>
		</div>	
	<?php $this->endWidget(); ?>
	<!-- END LOGIN FORM -->
	<!-- BEGIN FORGOT PASSWORD FORM -->
	
	<!-- END FORGOT PASSWORD FORM -->
	<!-- BEGIN REGISTRATION FORM -->
	
	<!-- END REGISTRATION FORM -->
</div>
<!-- END LOGIN -->
<!-- BEGIN COPYRIGHT -->
<div class="copyright">
	 &copy; Sistem Permintaan Surat - FEB UNSOED 2015-2021
</div>
<!-- END COPYRIGHT -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
	<script src="assets/plugins/respond.min.js"></script>
	<script src="assets/plugins/excanvas.min.js"></script> 
	<![endif]-->
<script src="<?php echo Yii::app()->getBaseUrl();?>/metronic/assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->getBaseUrl();?>/metronic/assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->getBaseUrl();?>/metronic/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->getBaseUrl();?>/metronic/assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->getBaseUrl();?>/metronic/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->getBaseUrl();?>/metronic/assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->getBaseUrl();?>/metronic/assets/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->getBaseUrl();?>/metronic/assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?php echo Yii::app()->getBaseUrl();?>/metronic/assets/plugins/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->getBaseUrl();?>/metronic/assets/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo Yii::app()->getBaseUrl();?>/metronic/assets/plugins/select2/select2.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo Yii::app()->getBaseUrl();?>/metronic/assets/scripts/app.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->getBaseUrl();?>/metronic/assets/scripts/login-soft.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
		jQuery(document).ready(function() {     
		  App.init();
		  Login.init();
		});
	</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>