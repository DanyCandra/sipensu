<?php
$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>
<div class="portlet box yellow ">
	<div class="portlet-title">
		<div class="caption">
			<i class="fa fa-reorder"></i> Login to your account		</div>
		<div class="actions">
		</div>
	</div>
 <div class="portlet-body form">
<div class="form-body">
    <br>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('class'=>'form-horizontal','role'=>'form'),
)); ?>
    <h4>Silahkan Anda Login Terlebih Dahulu..</h4>    
    <hr>
    <form class="form-horizontal" role="form">

        <div class="form-group">
            <label for="inputEmail12" class="col-md-2 control-label">Username</label>
            <div class="col-md-4">
                <div class="input-icon">
                    <i class="fa fa-group"></i>
                    <?php echo $form->textField($model, 'username', array('size' => 10, 'maxlength' => 10, 'class' => 'form-control')); ?>
                    <?php echo $form->error($model, 'username'); ?>
                </div>
            </div>
        </div>
    
        
    <div class="form-group">
        <label for="inputPassword1" class="col-md-2 control-label">Password</label>
        <div class="col-md-4">
            <div class="input-icon right">
                <i class="fa fa-user"></i>
                <?php echo $form->passwordField($model, 'password', array('size' => 20, 'maxlength' => 20, 'class' => 'form-control')); ?>
                <?php echo $form->error($model, 'password'); ?>
            </div>
            <div class="help-block">
                with right aligned icon
            </div>
        </div>
    </div>
        <div class="form-group">
            <div class="col-md-offset-2 col-md-4">
                <div class="checkbox">
                    <label>
                       <input type="checkbox"> Remember me </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-offset-2 col-md-10">
                <button type="submit" class="btn green">Sign in</button>
                <?php //echo CHtml::submitButton('Login' ,array('class'=>'btn green')); ?>

            </div>
        </div>
    </form>
    <hr>

<?php $this->endWidget(); ?>

</div></div></div>