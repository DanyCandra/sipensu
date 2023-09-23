<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<!-- BEGIN PAGE HEADER-->
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title">
            Berita/Informasi View <small>berita/informasi detail</small>
        </h3>
        <ul class="page-breadcrumb breadcrumb">

            <li>
               <i class="fa fa-angle-left"></i>
                <a href="index">Back to Info</a>
                
            </li>

        </ul>
        <!-- END PAGE TITLE & BREADCRUMB-->
    </div>
</div>
<!-- END PAGE HEADER-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    
    <!--membuat style tombol CETAK html-->
    <style media="print">
        .noprint{
            display: none;
        }
    </style>
    
</head>
<style type="text/css">
body{
   
    margin:auto;
    width: 100%;
 
}

</style>
<?php

$id=Yii::app()->request->getParam('id',0);
$model= Berita::model()->findByPk($id);

?>
<div style=" margin:auto" align="left">
    
 <td>
     <div align="left" ><h2><?php echo $model->JUDUL; ?></h2></div><br>
                    <div align="left" ><?php echo $model->ISI; ?></div>
                    
               </td>    



</body>
</html>    